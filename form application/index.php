<?php

require_once('config/db.php');

//write query for all pizzas
$query = "select  * from languages";

//make query and get result
$result = mysqli_query($conn, $query);

//fetch the resulting rows as an array
$languages = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);

// var_dump(($languages));


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src="index.js" defer></script>
    <title>Question 1</title>
  </head>
  <body>
    <div class="wrapper">
      <!-- <h1>Simple contact form</h1> -->
      <form action="insert.php" method="post" id="myForm">
        <img src='passport.jpg' class='passport'>
        <div class="field">
          <label for="name">Name:</label>
          <div>
            <input type="text" name="name" id="name" class="input" />
            <p class="warning">Name cannot be empty</p>
          </div>
        </div>
        <div class="field">
          <label for="email">Email:</label>
          <div>
            <input type="email" name="email" id="email" class="input" />
            <p class="warning">email cannot be empty</p>
          </div>
        </div>
        <div class="field">
          <label for="password">Password:</label>
          <div>
            <input
              type="password"
              name="password"
              id="password"
              class="input"
            />
            <p class="warning">password cannot be empty</p>
          </div>
        </div>
        <div class="field">
          <label for="phone">Phone Number:</label>
          <div>
            <input type="number" name="phone" id="phone" class="input" />
            <p class="warning">phone cannot be empty</p>
          </div>
        </div>
        <div class="field">
          <label for="Gender">Gender:</label>
          <div class="radio">
            <ul>
              <li>
                Male:
                <input
                  type="radio"
                  name="gender"
                  value="male"
                  class="radio-option"
                />
              </li>
              <li>
                Female:
                <input
                  type="radio"
                  name="gender"
                  value="female"
                  class="radio-option"
                />
              </li>
              <li>
                Other:
                <input
                  type="radio"
                  name="gender"
                  value="Other"
                  class="radio-option"
                />
              </li>
            </ul>

            <!-- <p class="radio-warn">gender cannot be empty</p> -->
          </div>
        </div>
        
        <div class="field">
          <label for="">language:</label>
          <div>
            <select name="language" id="">
              <option value="">select language</option>
              <?php
                foreach($languages as $language)
                {
              ?>
              <option value="<?php echo htmlspecialchars($language['language']); ?>"><?php echo htmlspecialchars($language['language']); ?></option>
              <?php    
                }
              ?>
            </select>
            <!-- <p class="warning">zip cannot be empty</p> -->
          </div>
        </div>

        <div class="field">
          <label for="zip">Zip Code:</label>
          <div>
            <input type="number" name="zip" id="zip" class="input" />
            <p class="warning">zip cannot be empty</p>
          </div>
        </div>
        <div class="field">
          <label for="About">About:</label>
          <div>
            <textarea
              name="about"
              id="About"
              cols="30"
              rows="3"
              class="input"
              placeholder="Write about yourself..."
            ></textarea>
            <p class="warning">About cannot be empty</p>
          </div>
        </div>

        <button type="submit" name='submit'>submit</button>
      </form>
    </div>
  </body>
</html>
