<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Basic Events & Events Listener | Laravel | with queues to perform or trigger listeners

For this example we have a scenario, let suppose we have to register/add a new user to our site. when the admin register/add the new user there are multipe events which needs to be handled, in this scenario we have the following two scenario:

- User Need to welcomed through welcome email.
- Admin will be notified that a new user is being registered into your site.


So we are basically creating an event which is resposible to trigger those two events using listeners.
These are the main files which we are working in for the events and listerens with queues.
1. App
   - Events
     - Registration
       - NewUserRegistrationEvent.php
   - Jobs
        - NewUserRegisteredAdminMailJob.php
        - NewUserRegisteredWelcomeMailJob.php
    - Listeners
        - Registration
            - NewUserEmailListener.php
            - NewUserSendSlackNotificationListener.php
    - Mail
        - NewUserRegisteredAdminMail.php
        - NewUserRegisteredWelcomeMail.php

## Some basic Git commands to run the project | after importing or cloning this project into your local directory:
```
npm install
composer install
npm run dev
# to run the server
php artisan serve
# open another terminal/cmd tab and run this command to run the queue
php artisan queue:work
```

## Code | Developer

Developed by [Shakeel Ahmed](https://www.facebook.com/shakib.shaghnani).

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
