<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}
* {
  box-sizing: border-box;
}
.vl {
  border-left: 2px solid rgba(0, 0, 0, 0.292);
  
  height: 550px;
}
/* Add padding to containers */
.container {
  width: 720px;
  position: absolute;
  right: 420px;
  top: 75px;
  padding: 10px;
  
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
  background-image: url("googleappli.jpg");
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

    
    <div class="bg-img ">
        <div class="container">
         
        <?php
$host='localhost';
$user='root';
$pass='';
$db='applistatus';
//create connection
$conn=new mysqli($host,$user,$pass,$db);
$sa=$_POST['s1'];
$sb=$_POST['s2'];
$sc=$_POST['s3'];
$sd=$_POST['s4'];
$se=$_POST['s5'];
$sf=$_POST['s6'];
$sg=$_POST['s7'];
$sh=$_POST['s8'];
$si=$_POST['s9'];
$sj=$_POST['s10'];
$sk=$_POST['s11'];

$sql="insert into appliform(applicationno,name,mailid,jobposition,salaryrequirement,mobilenumber,joiningdate,qualification,previousrole,description,applicationstatus) values('$sa','$sb','$sc','$sd','$se','$sf','$sg','$sh','$si','$sj','$sk')";
$res=$conn->query($sql);

if($res==TRUE)
{   
    echo 'Student application successful!';
    echo '<a href="statusphp.php" style:"text-decoration:none;color: black;">View application status</a>';
}
else
{
    echo 'Error in uploading application...';
}

$conn->close();
?>

            
        </div>
    </div>

</body>
</html>
