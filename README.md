# API REST Venta de Números de Teléfono

Laravel version: 6.14.0 <br>
PHP version: 7.2.24

----------

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone git@github.com:crackencode/salePhoneNumbersApi.git

Switch to the repo folder

    cd salePhoneNumbersApi

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:secret

Run the database migrations with seeders (**Set the database connection in .env before migrating**)

    php artisan migrate --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

----------

# Code overview

## Dependencies

- [jwt-auth](https://github.com/tymondesigns/jwt-auth) - For authentication using JSON Web Tokens

# Testing API

User and Password

    User:     user1@gmail.com
    Password: password

Run the laravel development server

    php artisan serve

The api can now be accessed at

    http://localhost:8000/api

Routes

    |----------+--------------------------------------------------------------+-----------------+
    | Method   | URI                                                          | Require Auth    |
    +----------+--------------------------------------------------------------+-----------------+
    | POST     | api/signup                                                   | no              |
    | POST     | api/login                                                    | no              |
    | POST     | api/auth/logout                                              | yes             |
    | GET      | api/phoneNumbers                                             | yes             |
    | GET      | api/phoneNumbers/all                                         | yes             |
    | GET      | api/phoneNumbers/country/{country}                           | yes             |
    | GET      | api/phoneNumbers/country/{country}/phoneNumber/{phoneNumber} | yes             |
    | GET      | api/phoneNumbers/phoneNumber/{phoneNumber}                   | yes             |
    | POST     | api/phoneNumbers                                             | yes             |
    | PUT      | api/phoneNumbers/{id}                                        | yes             |
    | DELETE   | api/phoneNumbers/{id}                                        | yes             |
    +--------+----------+-----------------------------------------------------+-----------------+

----------
 
# Authentication
 
This applications uses JSON Web Token (JWT) to handle authentication. The token is passed with each request using the `Authorization` header with `Bearer Token` scheme. The JWT authentication middleware handles the validation and authentication of the token. Please check the following sources to learn more about JWT.
 
- https://jwt.io/introduction/