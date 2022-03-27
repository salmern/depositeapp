<h1 align ="center"> How to install the project</h1>



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.6.0.


INSTALLATION
------------
$ git clone https://github.com/salmern/depositeapp.git

Install the project with composer

$ composer update // or install

Initiate the code with this command, and set it to Development

$ php init

CONFIGURATION
-------------

### Database
create a database named depositeapp in your phpmyadmin
Edit the file `config/db.php` and rename the database to depositeapp, for example

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=depositeapp',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it 

-Initiate the database migration, 

$ ./yii migrate

run the project in the browser with this link below 
http://localhost/depositeapp/web/index.php?r=deposit