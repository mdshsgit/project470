<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

# Requirements

**PHP**: 8.2+

**Laravel**: 11.0.0+

**Nodejs**: 23.0.0+

**Composer**: Latest

# Installation on System

### Environment Creation

At First, We need to have PHP 8.2+ with some extension enable from the ```php.ini``` . PHP can be download from the website for Windows. And By using Command, PHP can be installed on the Ubuntu.

- [PHP for Windows](https://windows.php.net/download/) (**VS16 x64 Non Thread Safe Recommanded**)

- [Ubuntu PHP Installation Guide](https://dev.to/sureshramani/how-to-install-php-82-on-ubuntu-2204-4ih6)

**(Make sure sqlite extension are enable as we need it)**


### Installing NodeJS and Composer

This Project needs NodeJS and Composer for installing Packages.

 - [Composer Installing Documentation](https://getcomposer.org/download/)
 - [Nodejs Installing Documentation](https://nodejs.org/en/download/package-manager)


### Project Development

To develop this Project, First we need to download this project using ```<> code``` Button on Github.

OR

You can Follow the steps on your git.

1. First Open Terminal/CMD, On your OS/ platform
2. Create a new folder where you will develop the project.
3. Install Git if you dont have it already
4. Use git clone to clone the project

```
git clone https://github.com/mdshsgit/project470.git
```

5. Open the project folder on Terminl/CMD. You can also use ``` cd /path/to/the/project-dir``` to navigate the terminal on you project

-----
6. Use composer install or composer update to update the dependencies.

```
composer update
```
7. Use npm install or nom update to update the dependencies.
```
npm update
```

8. Create your .env file and update database details. Migrate the database if already doesnt have.

```
php artisan migrate
```

9. Build your project for the initial view. (Optional For Development Mode)
```
npm run build
```
10. Deploy the View using php

```
php artisan serve
```

--- For Development Purpose ---

11. Open another terminal on the project file and give development command of the nodejs

```
npm run dev
```

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
"# project470" 
