## composer 

composer is a php dependency manager. All php packages can be found in https://packagist.org/ site. 

### install a package

~~~bash
composer require <packagename>
~~~

### autoloading with composer

for file autoloading  and class autoloading 

~~~js
"autoload": {
  "files": ["db.php"],
  "classmap": ["models"]
}
~~~

to generate autoload we have to dump autoload file by `composer dump-autoload` command      


### creating a table using illuminate package     

~~~php
use Illuminate\Database\Capsule\Manager as Capsule;
Capsule::schema()->create('teachers', function ($table) {
    $table->increments('id');
    $table->string('name');
    $table->string('email');
    $table->timestamps();
});
~~~

### drop a table using illuminate package    
~~~php
Capsule::schema()->drop('teachers');
or
Capsule::schema()->dropIfExists('teachers');
~~~

### About model     

by convension model name is singular form of table name. available properties in model  

* `$table`
* `$gurared`     

or     

* `$fillable`     
* `$hidden`

Model must be child of eloquent model class. Our Teacher model     


### How to write a model.       

~~~php
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model {
  protected $guarded = [];
}
~~~


### How to insert data into database using Model   


~~~php
Modelname::insert([]);
~~~

eg:       

~~~php

Teacher::insert([
  'name' => $faker->name,
  'email' => $faker->email,
  'created_at' => Carbon::now()->format('Y-m-d H:i:s')
]);
~~~

### How to read all data from database using model    



~~~php
Modelname::all();
~~~

eg:       

~~~php

Teacher::all();
~~~

## How to use faker for fake data   

##### first install faker using composer    

~~~bash
composer require fzaninotto/faker
~~~  



##### require autoload file 

~~~php

require 'vendor/autoload.php';
~~~

##### get instance by invoking create method

~~~php
use Faker\Factory;
$faker = Factory::create();
~~~

### using some properties and method  

~~~php
$faker->firstname
$faker->lastname
$faker->name
$faker->phonenumber
$faker->paragraph
$faker->sentence
$faker->paragraph(2)
$faker->sentence(2)
~~~

## How to use carbon for convenient date time 
~~~bash

composer require nesbot/carbon

~~~  



##### require autoload file 

~~~php

require 'vendor/autoload.php';
~~~

##### using carbon

~~~php
use Carbon\Carbon;
~~~

### using some properties and method  

~~~php
Carbon::now()->format();
Carbon::parse()->diffForHuman();
~~~
























