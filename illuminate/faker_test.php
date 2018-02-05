<?php 
require 'vendor/autoload.php';


use Faker\Factory;
$faker = Factory::create();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body class="bg-info">
  <div class="container mt-5">
    <div class="card">
      <div class="card-header">
        <h1>All people</h1>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-responsive">
          <tr>
            <th>image</th>
            <th>first Name</th>
            <th>last Name</th>
            <th>Email</th>
            <th>mobile</th>
          </tr>
          <?php for($i = 0; $i < 100; $i++): ?>
            <tr>
              <td><img src="https://loremflickr.com/100/100"></td>
              <td><?= $faker->firstname ?></td>
              <td><?= $faker->lastname ?></td>
              <td><?= $faker->email ?></td>
              <td><?= $faker->phonenumber ?></td>
            </tr>
          <?php endfor; ?>
        </table>
      </div>
    </div>


  </div>
  
</body>
</html>
