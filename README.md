# Laravel Backend Project

Laravel backend for catalyze post management

## System Requirements
To be able to run project you have to meet the following requirements:
- PHP >= 7.4
- PHP Extensions: BCMath, Ctype, Fileinfo, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML, cURL, Mcrypt, GD
- Node.js >= 8.x
- Composer >= 1.9.x

## Installation
1. Install Composer using detailed installation instructions [here](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)
```
$ wget https://getcomposer.org/composer.phar
$ chmod +x composer.phar
$ mv composer.phar /usr/local/bin/composer
```
2. Install Node.js using detailed installation instructions [here](https://nodejs.org/en/download/package-manager/)
```
$ yum install npm
```
3. Clone repository
```
$ git clone https://github.com/gieperdata/laravel-catalyze.git
```
4. Change into the working directory
```
$ cd laravel-catalyze
```
5. Copy `.env.example` to `.env` and modify according to your environment
```
$ cp .env.example .env
```
6. Install composer dependencies
```
$ composer install --prefer-dist
```
7. An application key can be generated with the command
```
$ php artisan key:generate
```
8. Execute following commands to install other dependencies
```
$ npm install
$ npm run dev
```
9. Run these commands to create the tables within the defined database and populate seed data
```
$ php artisan migrate --seed
```

## Troubleshooting

- If you get an error like a `PDOException` try editing your `.env` file and change `DB_HOST=127.0.0.1` to `DB_HOST=localhost` or `DB_HOST=mysql` (for *docker-compose* environment).

- If you get a password error try this command:
```
# Check config .env for password section add your mysql password server for development;
# ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'secret';
```

## Run

To start the PHP built-in server
```
$ php artisan serve
or
$ php -S localhost:8000 -t public/
```

Now you can browse the site at [http://localhost:8000](http://localhost:8000)

## License

This project is open-source software licensed under the [MIT license](LICENSE).
