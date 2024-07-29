<?php
    class ApiController {
        private $apiUrl = 'https://fakestoreapi.com';
        // * @throws [BadRequest] [If the request fails]
        /**
         * [API get request]
         *
         * @param [String] $endPoint [The endpoint to make the request to]
         * @return [json] [The response from the API]
         */
         
        public function get($endpoint) {
            $ch = curl_init($this->apiUrl . $endpoint);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);
            curl_close($ch);
            // TODO : manage exception
            // if ($response === ) {
            //     throw new BadRequest("Request failed");
            // }
            
            return json_decode($response, true);
        }
    }