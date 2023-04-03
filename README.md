<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo" />
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

## About Supermarket App

Supermarket is a web application build with the Laravel framework.

This App was developed for the FrontEnd class.
  - Group B01
  - Subgroup 19

### Team members:
  - Andrés Orozco Muñoz
  - Boris Martinez Montalvo
  - Eduar Fabian Murillo Rodriguez
  - John Alexander Ramírez Contreras

## Initial Requirements
Before install the app you might need to check first the following requirements installed.
  - XAMPP 8 (Windows + Apache + MariaDB + PHP + Perl): [Download source](https://www.apachefriends.org/download.html).
  - Composer (PHP libraries): [Download source](https://getcomposer.org/download/) press on `Composer-Setup.exe`.
  - Git (Changes version control system): [Download source](https://git-scm.com/downloads).

## Install App
For installation purposes follow the instructions bellow (note you have to this only the `first time` you run the app):

  - Download the `GIT` app source code in any location of your computer (I recommend the XAMPP's `htdocs` folder):
    - Open the `Comand Propmpt` app and navigate to your desired location for the project, for example mine is `C:\xampp\htdocs`:
      - ```console 
        cd C:\xampp\htdocs
        ```
    - Now download the source code from `GitHub` inside that forlder by using any of commands:
      - ```console 
        Via SSH:
        git clone git@github.com:fabiangothman/laravel-supermarket.git
        Via HTTPS:
        git clone https://github.com/fabiangothman/laravel-supermarket.git
        ```
    - So, after you download the source code you will see that a new `laravel-supermarket` folder was created with the code source, enter to that folder by the command:
      - ```console 
        cd laravel-supermarket
        ```
    - Then the new path for your project will be for example `C:\xampp\htdocs\laravel-supermarket\laravel-supermarket`.
 
  - Ok now by using the `File Explorer` go to your `XAMPP` path installation `apache/conf/extra` like following:
    - `C:\xampp\apache\conf\extra` (by default).
    - Open the file `httpd-vhosts.conf`.
    - At the end of the file paste the following code modifying the location of your custom folder:
      - ```xml 
        <VirtualHost supermarket.test:80>
          DocumentRoot "C:\xampp\htdocs\laravel-supermarket\public"
          ServerName supermarket.test
          ServerAlias supermarket.test
          <Directory "C:\xampp\htdocs\laravel-supermarket\public">
            Options Indexes FollowSymLinks Includes ExecCGI
            AllowOverride All
            Order allow,deny
            Allow from all
          </Directory>
        </VirtualHost>
        ```
      - That code creates a local virtual domain for running the app.
      - Save and close the file.

  - Open the app `notepad` as Admin (right click -> run as Administrator).
    - File -> Open
    - Go to the path `C:\Windows\System32\drivers\etc`.
    - In the drowdown menu Change from `Text documents (*.txt)` to `All files (*.*)`.
    - Select `hosts`.
    - At the end of the file add a new entry `127.0.0.1	supermarket.test` like following:
      - ```config 
        #	127.0.0.1   localhost
        #	::1         localhost
        
        127.0.0.1     supermarket.test
        ```
      - This will force the browsers to open the domain `supermarket.test` as a local domain.
      - Save and close the file.
  - Open or restart `XAMPP` app in order to load it with the latest changes.
    - Start/Restart the Apache & MySQL (MariaDB) services.
  - Now we need to create the project's `database`, for it you need to go to the url `http://localhost/phpmyadmin/`.
    - This will open all databases existent in your `XAMPP`.
    - Go to Databases -> Create database:
      - Database name: `supermarket`.
      - Select `utf8mb4_general_ci`.
      - Click on `Create`.
    - By default, `XAMPP` configures the `user` with `root` and `password` empty, we will use this information inside the `.env` file.
  - Now go to your custom root project (for example `C:\xampp\htdocs\laravel-supermarket`) and create a copy of the file `.env.sample` and name it as `.env`.
    - This will create the `.env` file that contains all the configurations for your project.
    - Now in the `.env` file in the root project, should contain the proper information for the database, as we mention above the default configuration is `root` for `user`, `password` is empty, the database name is `supermarket` and the default port is `3306`, if you have followed this tutorial you don't need to change anything, but if you modified any different information, you need to update your `.env` file with your proper custom information.
  - Generate Laravel app key:
    - ```command 
      php artisan key:generate
      ```
  - Install composer libraries:
    - ```command 
      composer install
      ```
  - As last step, you need to run the migration & seed commands for the project, this will create the database structure and populate with some test data (included the default user):
    - ```command
      php artisan migrate
      php artisan db:seed
      php artisan optimize:clear
      php artisan copy:image
      php artisan storage:link
      ```

## Start the App
Once you have done all the #installation steps you're ready to run the app.
  - Check always that XAMPP is initialized and its MySQL (MariaDB) and Apache services are started.
  - Go to your browser and open `http://supermarket.test`
  - For login, the default admin username is:
    - email: `admin@admin.com`
    - password: `12345678`

## License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
