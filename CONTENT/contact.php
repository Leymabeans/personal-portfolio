<!--Processing for the contact form=================================-->
<?php
  //1 Connect to MySQL database
  $host = "localhost";
  $username = "root";
  $password = "root";
  $database = "z_personal";
  $db = mysqli_connect($host, $username, $password, $database) or die('Error connecting to MySQL server');

  //2 Check connection
  if ($db === false){
    die("Error: Could not connect to the database" . mysqli_connect_error());   
  }

  //3 Take inputed information
  if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $message = $_POST["message"]; 
  } 

  //4 Take all information from the personal database
  $query = "SELECT * FROM senderinfo";
  mysqli_query($db, $query) or die("Error querying database");


  //5 Insert information into phpmyadmin
  $sql = "INSERT INTO senderinfo VALUES ('null', $firstname, $lastname, $email, $message";
  if (!mysqli_query($db, $sql)) {
    echo 'Error: Could not execute $sql ' .mysqli_error($db);
  }

  //6 Close connection to MySQL database
  mysqli_close($db);

?>

<!--Meta Data======================================================= -->
<!DOCTYPE html>
<html>
  <head>
    <title>Nathan Ley | Professional Web Developer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../MISC/title.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
    <link href="../STYLE/contact.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <form action="<?PHP echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <h3>Contact Us Now</h3>
        <h2>Do you have a question? Email us now!</h2>
        <input type="text" name="firstname" placeholder="First Name">
        <br>
        <input type="text" name="lastname" placeholder="Last Name">
        <br>
        <input type="email" name="email" placeholder="Email">
        <br>
        <input type="text" name="message" placeholder="Message">
        <br>
        <input type="submit">
      </form>
    </div>
  </body>
</html>