# PHP Technical Interview
## Subject
### Goal
Build a mini website using PHP8.3-FPM and Bootstrap to display data from the FakeStoreAPI, with the following pages:
1. **Homepage**: Slider, products from one category, and a list of categories.
2. **Product Listing Page**: List of products filtered by category.
3. **Product Detail Page**: Detailed view of a single product with options for sorting, filtering, and searching.

### Constraints
- Use PHP8.3-FPM.
- Use Bootstrap for CSS (minimal custom CSS).
- The FakeStoreAPI calls should be handled by PHP (not exposed to the client).
- Source code should be available on a public GitHub repository with feature-based commits.
- Mobile-first design.
- Total development time should not exceed ~20 hours.

## How i intend to do it
### Timing
I started to work a few minutes ago on Monday the 29th of july 2024 at 16h20.
I have a few days off, which i intend to delegate to this work. I start with an overview of how i planned to work.
I will spend a few hours today working on the project initialization.
Additionaly , i will work 2 full days tomorrow (tuesday) and the day after tomorow (wenesday) for a total of ~ 20h.
I intend to make an aditional documentation at the end of the project to give a feedback about how it went. I wiil not count this as "working time" as it is supposed to be dedicated to the feedback.

### Initial configuration
I have a Windows 10 personal computer on which i installed today Oracle VirtualBox.

I work on a virtual machine running ubuntu 22.04.

I used a script `scripts/initialization.sh` I made a few weeks ago to install PHP8.3-FPM and Apache2 on the VM. (you will find the scripts i made in `scripts/`)