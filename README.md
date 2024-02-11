# URL Shortener

URL Shortener is a web application built with Laravel and Vue.js that allows users to shorten long URLs into more manageable ones.

## Features

1. **Input Long URLs:**
   - Users can input long URLs that they want to shorten.

2. **Generate Short URLs:**
   - The application generates a unique short URL for each given long URL.

3. **Store Mapping:**
   - The mapping between the short URL and the original long URL is stored.

4. **Redirect to Original URL:**
   - Users are redirected to the original URL when they access the short URL.

5. **Display Shortened URLs:**
   - A list of previously shortened URLs is displayed, along with their corresponding statistics, such as click count.

6. **Show Basic Stats:**
   - Basic statistics about URL visits and the most visited URLs are provided.

## Prerequisites

Ensure you have the following prerequisites installed before setting up the project:

- PHP 
- Composer
- Node.js
- NPM
- Database (MySQL)

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/url-shortener.git
    ```

2. **Navigate to the project directory:**

    ```bash
    cd url-shortener
    ```

3. **Install PHP dependencies:**

    ```bash
    composer install
    ```

4. **Install JavaScript dependencies:**

    ```bash
    npm install
    ```

5. **Copy the `.env.example` file and rename it to `.env`. Update the database and other configuration settings as needed:**

    ```bash
    cp .env.example .env
    ```

6. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

7. **Run the database migrations:**

    ```bash
    php artisan migrate
    ```


## Technologies Used

- Laravel
- Vue.js
- MySQL

## License

This project is licensed under the [MIT License](LICENSE).

## Contact

Include your contact information or ways for others to reach out for help or collaboration.
