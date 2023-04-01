# Multi-Vendor E-Commerce Site

This is a multi-vendor e-commerce site built using Laravel and Vue.js. The site allows vendors to sign up and create their own stores, where they can list their products and manage their orders. Customers can browse products from multiple vendors, add them to their cart, and checkout using various payment methods.

## Features

-   Vendor registration and login
-   Store creation and management
-   Product listing and management
-   Order management
-   Customer registration and login
-   Shopping cart functionality
-   Checkout process with multiple payment methods
-   Admin dashboard for managing vendors, products, and orders

## Installation

1. Clone the repository to your local machine
2. Install dependencies using `composer install` and `npm install`
3. Create a new MySQL database and update the `.env` file with your database credentials
4. Run migrations using `php artisan migrate`
5. Seed the database with sample data using `php artisan db:seed`
6. Compile assets using `npm run dev`
7. Start the development server using `php artisan serve`

## Usage

-   Visit the site in your browser at `http://localhost:8000`
-   Customers can sign up, browse products, add them to their cart, and checkout
-   Vendors can sign up, create their store, add products, and manage their orders
-   Admins can log in and access the admin dashboard to manage vendors, products, and orders

## Contributing

Contributions are welcome! Please follow the Laravel coding standards and submit pull requests to the `develop` branch.

## License

This project is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
