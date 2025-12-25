# Livewire Lab

A simple Laravel project to demonstrate and experiment with Livewire features.

## Features

*   A simple counter.
*   Create and list posts.

## Installation

1.  Clone the repository:
    ```bash
    git clone https://github.com/itsgitz/livewire-lab.git
    cd livewire-lab/no-auth
    ```

2.  Install dependencies:
    ```bash
    composer install
    npm install
    ```

3.  Set up your environment:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

4.  Configure your database in the `.env` file. For a quick setup, you can use SQLite. First, create the database file:
    ```bash
    touch database/database.sqlite
    ```
    Then, update your `.env` file to use an absolute path to the file:
    ```dotenv
    DB_CONNECTION=sqlite
    DB_DATABASE=/path/to/your/project/database/database.sqlite
    ```

5.  Run database migrations:
    ```bash
    php artisan migrate
    ```

## Running the Application

1.  Start the development server:
    ```bash
    php artisan serve
    ```

2.  Run the Vite development server:
    ```bash
    npm run dev
    ```

Now, open your browser and navigate to `http://127.0.0.1:8000`.

## Running Tests

To run the test suite:
```bash
php artisan test
```
