## TK Services LTD. test (v0.0.1)

## Prerequisites
* Must be using Linux or any linux-based distros
* [Composer](https://getcomposer.org/)
* [PHP v7.4.3](php.net)
* [MySQL](https://www.mysql.com/)

## Setup
* Change permissions and ownership of repo
    `sudo chown -R {<USERNAME>}:${<USERNAME>} <ROOT_FOLDER_NAME>`
    `sudo chmod -R 755 <ROOT_FOLDER_NAME>`
* Update .env.backup file database credentials
    ```
    DB_CONNECTION=mysql
    DB_HOST=<DATABASE_HOSTNAME>
    DB_PORT=<DATABASE_PORT>
    DB_DATABASE=<DATABASE_NAME>
    DB_USERNAME=<DATABASE_USER>
    DB_PASSWORD=<DATABASE_PASSWORD>
    ```
* Adjust permission and execute `setup.sh`
    `cd <ROOT_FOLDER_NAME>`
    `sudo chmod a+x ./bin/setup.sh`
    `./bin/setup.sh`

## Running the development server
* run `php artisan serve`