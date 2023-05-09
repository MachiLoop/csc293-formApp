<?php

require_once('config/db.php');

//write query for all pizzas
$query = "SELECT  name, email, phone, gender, language, zip, about FROM userdata";

//make query and get result
$result = mysqli_query($conn, $query);

// //close connection
mysqli_close($conn);

// var_dump(($result));


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel='stylesheet' href='records.css'/>
    <script src="records.js" defer></script>

    <title>Document</title>
  </head>
  <body>
    <div class="container">  
        <div class="card">
          <div class="card-header">
            <h2>Records</h2>
            <div class='search-wrapper'>
              <label for='search'>Search</label>
              <input type='search' name='search' id='search' placeholder='name,gender,lang,email,phone,zip'/>
            </div>
          </div>
          <div class="card-body">
            <table class="table">
              <tr>
                <th>user ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>language</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Zip</th>
                <th>about</th>
              </tr>
              <tr>
                <?php
                  $i = 1;
                  while($row = mysqli_fetch_assoc($result)){
                ?>
                <td class='id-column'><?php echo $i ?></td>
                <td class='name-column'><?php echo htmlspecialchars($row['name']); ?></td>
                <td class='gender-column'><?php echo htmlspecialchars($row['gender']); ?></td>
                <td class='language-column'><?php echo htmlspecialchars($row['language']); ?></td>
                <td class='email-column'><?php echo htmlspecialchars($row['email']); ?></td>
                <td class='phone-column'><?php echo htmlspecialchars($row['phone']); ?></td>
                <td class='zip-column'><?php echo htmlspecialchars($row['zip']); ?></td>
                <td class='about-column'><?php echo htmlspecialchars($row['about']); ?></td>
                </tr>
                <?php
                  $i++;
                  }
                ?>    
            </table>
          </div>
        </div>   
    </div>
  </body>
</html>
