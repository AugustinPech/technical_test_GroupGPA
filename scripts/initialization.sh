#!/bin/bash
project_name=$1

echo "========= installation ==========="
sudo apt update

sudo apt install apache2 git libapache2-mod-fcgid -y

sudo apt install software-properties-common -y
sudo add-apt-repository ppa:ondrej/php
sudo apt update

sudo apt install php8.3-fpm libapache2-mod-fcgid php8.3-curl php8.3 -y

sudo a2enmod actions fcgid alias proxy_fcgi setenvif
sudo a2enconf php8.3-fpm
sudo systemctl restart apache2

sudo apt install composer -y

sudo systemctl start php8.3-fpm
sudo systemctl enable php8.3-fpm

echo "========= managing user , groups and rights ==========="
sudo usermod -a -G www-data "$USER"
sudo chown -R "$USER":www-data /var/www
sudo chmod -R 775 /var/www
sudo find /var/www/ -type d -exec chmod -R 755 {} \;
sudo find /var/www/ -type f -exec chmod -R 644 {} \;

echo "========= creating project ==========="
cd /var/www/ || exit
mkdir -p "$project_name"
cd "$project_name" || exit

echo "========= creating apache2 virtual host ==========="
sudo touch /etc/apache2/sites-available/"$project_name".conf
sudo tee /etc/apache2/sites-available/"$project_name".conf << EOF
<VirtualHost *:80>
    ServerName $project_name.local
    DocumentRoot /var/www/$project_name/public

    <Directory /var/www/$project_name/public>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>

    <FilesMatch \.php$>
        SetHandler "proxy:unix:/var/run/php/php8.3-fpm.sock|fcgi://localhost/"
    </FilesMatch>

    ErrorLog /var/log/apache2/${project_name}_error.log
    CustomLog /var/log/apache2/${project_name}_access.log combined
</VirtualHost>
EOF

for site in /etc/apache2/sites-enabled/*.conf; do
    sudo a2dissite $(basename "$site")
done

sudo a2ensite "$project_name".conf
sudo systemctl reload apache2 && echo "Apache2 reloaded"

echo "========= adding project to /etc/hosts ==========="
sudo sed -i "/^127\.0\.0\.1\s\+\*\.local$/c\127.0.0.1  ${project_name}.local" /etc/hosts

echo "nice! you now have to clone the repository to /var/www/${project_name} and run:"
echo "composer install"

