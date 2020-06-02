# Simple Laravel RESTFul API

## Installation
- Clone Project into Your Localhost 
    ```sh
        git clone https://github.com/muhammed-farghali/restful-api.git
    ```
- Be inside Project Directory 
    ```sh
        cd restful_api
    ```
- Create .env File
    ```sh
        cp .env-example .env
    ```
- Generate an App Encryption Key
    ```sh
        php artisan key:generate
    ```
- In **.env** File add Your **DATABASE** Credentials
    ```sh
        APP_NAME=__YOUR__
        DB_HOST=__YOUR__
        DB_DATABASE=__YOUR__
        DB_USERNAME=__YOUR___
        DB_PASSWORD=__YOUR__
    ```
- Migrate the database with seeding
    ```sh
        php artisan migrate --seed
    ```

