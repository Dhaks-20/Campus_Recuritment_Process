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

table{
            width: 90%;
            margin: auto;
            font-family: Arial, Helvetica, sans-serif;
        }
        table, tr, th, td{
            border: 1px solid #040404;
            border-collapse: collapse;
            padding: 12px;
        }
        th, td{
            text-align: left;
            vertical-align: top;
        }
        tr:nth-child(even){
            background-color: #040404;
			color: white;
        }
		tr:nth-child(odd){
            background-color: #C6C3C3;
			color: black;
        }

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("lgpic.jpg");
  min-height: 100%;
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}



</style>
</head>
<body>

    
    <div class="bg-img "><br>
     <h1 style="background-color: #f1f1f1;color:black;align-items:center;text-align:center; border-color: black;  "> APPLICATION STATUS</h1>   <br><br>
         
        <?php
$host='localhost';
$user='root';
$pass='';
$db='lgapplistatus';
//create connection
$conn=new mysqli($host,$user,$pass,$db);
$sql="select * from lgappliform";

$res=$conn->query($sql);

if($res->num_rows>0)
{  
    echo "<table border='2'>";
    while($row=$res->fetch_assoc())
    {
        echo "<tr>";
      echo '<td>'.$row['APPLICATIONNO'].'</td>';
      echo '<td>'.$row['NAME'].'</td>';
      echo '<td>'.$row['MAILID'].'</td>';
      echo '<td>'.$row['JOBPOSITION'].'</td>';
      echo '<td>'.$row['SALARYREQUIREMENT'].'</td>';
      echo '<td>'.$row['MOBILENUMBER'].'</td>';
      echo '<td>'.$row['JOININGDATE'].'</td>';
      echo '<td>'.$row['QUALIFICATION'].'</td>';
      echo '<td>'.$row['PREVIOUSROLE'].'</td>';
      echo '<td>'.$row['DESCRIPTION'].'</td>';
      echo '<td>'.$row['APPLICATIONSTATUS'].'</td>';
    echo "</tr>";
    }
    echo "</table>";
}
else
{
    echo 'No Application done by you yet...';
}

$conn->close();
?>

    </div>

</body>
</html>
