php and laravel version</br>
PHP 7.0.15</br>
Laravel Framework 5.4.17</br>

Installation
$git clone https://github.com/sunil16/Assignment.gi projectname
$cd projectname
$composer install
    set your smtp datils in your .env file.(copy .env.example to .env)
      MAIL_DRIVER=smtp
      MAIL_HOST=smtp.gmail.com
      MAIL_PORT=465
      MAIL_USERNAME=example@gmail.com
      MAIL_PASSWORD=exampl123
      MAIL_ENCRYPTION=ssl
    $php artisan serve
    to start the app on http://127.0.0.1:8000/admin
    Click to send button for sedn mail fo all ragister emails.
