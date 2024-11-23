<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  position: absolute;
  left: 20px;
  margin: 20px;
  max-width: 500px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04aaaafa;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
    background-color:  #ddd;
  color: #04aaaafa;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("tatapic.jpg");

  min-height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.next {
  background-color: #04aaaafa;
  color: white;
}

a {
  text-decoration: none;
  display: inline-block;
  padding: 15px 30px;
}

a:hover {
  background-color: #ddd;
  color: black;
}


</style>
</head>
<body>

    
    <div class="bg-img">
       
    <?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'tataapplistatus';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection

// Check if the necessary keys are set in $_POST
if(isset($_POST['s1'], $_POST['s11'])) {
    // Get POST data and assign to variables
    $sa = $_POST['s1'];
    $sk = $_POST['s11'];

    // SQL query to update the row in the appliform table
    $sql = "UPDATE tataappliform SET APPLICATIONSTATUS='$sk' WHERE APPLICATIONNO='$sa'";

    // Execute the query
    $res = $conn->query($sql);

    // Check if the query was successful
    if ($res === TRUE) {
        echo '<span style="color:#FFF;text-align:center;"><br> <br> Successfully updated!</span>';
    } else {
        // Print an error message if the query fails
        echo 'Error: ' . $conn->error;
    }
} 

// Close the connection
$conn->close();
?>

</div>

</body>
</html>

