# E-commerce Website using 'Laravel - The PHP Framework' 

Website that showcases essential features of an e-commerce website that sells jackfruit based products.

## Getting Started

Follow these steps to get the project up and running on your local machine.

### Prerequisites

Make sure you have the following installed:

- [XAMPP](https://www.apachefriends.org/) or a similar local development environment.
- [PHP](https://www.php.net/)
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/krishnarajav/E-commerce-Website-using-Laravel.git

2. Open the project on your IDE (VS Code/PHPStorm) and open terminal.

3. Change into the project directory:
   ```bash
   cd e-commerce_web
   
4. Install dependencies:
   ```bash
   composer install

5. Create a copy of the .env.example file and rename it to .env. Update the configuration settings such as database credentials.

6. Generate an application key:
   ```bash
   php artisan key:generate
7. Run the migrations and seed the database:
   ```bash
   php artisan migrate --seed
8. Start the development server by entering this on your terminal:
   ```bash
   php artisan serve
9. Visit http://localhost:8000 in your web browser.

### Usage
1. Open your web browser and go to http://localhost:8000.
2. In your browser explore the store, add to cart, proceed to checkout and other pages.
3. If you encounter any issues or have questions, open an issue on GitHub.
