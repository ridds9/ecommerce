E-Commerce Project
Welcome to the E-Commerce Project! This project is a simple web application for managing an online store, allowing users to browse products, add them to their cart, and place orders. Admins can manage products and view orders.

Project Structure
The project is organized as follows:

graphql
Copy code
ecommerce
├── aboutus.php          # Page with information about the store
├── add_product.php      # Admin page to add new products
├── admin_dashboard.php  # Admin dashboard to manage the store
├── admin_login.php      # Admin login page
├── cart-add.php         # Script to add items to the cart
├── cart-remove.php      # Script to remove items from the cart
├── cart.php             # User's cart page
├── contact.php          # Contact page for user inquiries
├── css
│   ├── bootstrap.css    # Bootstrap CSS framework
│   ├── bootstrap.min.css# Minified Bootstrap CSS framework
│   ├── index.css        # Custom CSS for index page
│   └── style.css        # General custom CSS
├── delete_product.php   # Admin page to delete products
├── fonts
│   ├── glyphicons-halflings-regular.eot # Icon font files
│   ├── glyphicons-halflings-regular.svg
│   ├── glyphicons-halflings-regular.ttf
│   ├── glyphicons-halflings-regular.woff
│   └── glyphicons-halflings-regular.woff2
├── img
│   ├── Various product images and media files
│   └── Banner and logo images
├── includes
│   ├── check-if-added.php  # Check if an item is added to the cart
│   ├── common.php          # Common functions and variables
│   ├── footer.php          # Footer for all pages
│   └── header.php          # Header for all pages
├── index.php             # Home page
├── js
│   ├── bootstrap.js       # Bootstrap JavaScript
│   ├── bootstrap.min.js   # Minified Bootstrap JavaScript
│   └── jquery.js          # jQuery library
├── login.php             # User login page
├── login_submit.php      # Script to handle user login
├── logout_script.php     # Script to handle user logout
├── order.php             # Page to place an order
├── orderhistory.php      # Page to view user's order history
├── order_script.php      # Script to process orders
├── products.php          # Page to view all products
├── README.md             # This file
├── settings.php          # Admin settings page
├── settings_script.php   # Script to handle settings updates
├── signup.php            # User signup page
├── signup_script.php     # Script to handle user signup
├── sql
│   └── store.sql         # SQL file to set up the database
├── success.php           # Success page after successful operations
├── Thumbs.db             # Windows thumbnail cache (not required)
├── view_orders.php       # Admin page to view all orders
└── view_products.php     # Admin page to view all products

Installation
Clone the repository:

bash
Copy code
git clone <repository_url>
Set up the database:

Import sql/store.sql into your MySQL database.
Configure your environment:

Update database connection details in includes/common.php (if applicable).
Run the application:

Place the project in your web server's root directory (e.g., htdocs for XAMPP).
Access the application via your web browser at http://localhost/ecommerce.
Usage
User Functionality:

Browse products on the home page (index.php).
Add items to the cart and manage them (cart.php).
Place orders and view order history (order.php, orderhistory.php).
Admin Functionality:

Log in to the admin dashboard (admin_login.php).
Manage products (add_product.php, delete_product.php, view_products.php).
View orders (view_orders.php).
Contributing
If you wish to contribute to this project, please fork the repository and submit a pull request. Ensure that your changes are well-documented and tested.


