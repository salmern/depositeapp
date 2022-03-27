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
Apply migrations with console command php yii migrate. This will create tables needed for the application to work

run the project in the browser with this link below 
http://localhost/depositeapp/web/index.php?r=deposit

Screenshots
![deposit](https://user-images.githubusercontent.com/50671163/160287240-a62138c6-8e56-43ff-8dc9-03cd43537729.PNG)
![createDeposit](https://user-images.githubusercontent.com/50671163/160287234-40b36804-9df0-4edd-b8e1-3d61b217e00a.PNG)
![delete](https://user-images.githubusercontent.com/50671163/160287239-49e47d9a-4ce2-4e40-8b38-2dc5663b7f07.PNG)
![edit](https://user-images.githubusercontent.com/50671163/160287242-3496feff-4be2-484d-accd-87b0bb182afc.PNG)
![resultsearch](https://user-images.githubusercontent.com/50671163/160287244-819dfc19-d206-4e3d-ab35-caf19de734e5.PNG)
![update](https://user-images.githubusercontent.com/50671163/160287246-d347aef8-baec-4b5f-b93a-481e32c9c88d.PNG)

