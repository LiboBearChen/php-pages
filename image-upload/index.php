<html>
<head>
  <title>Upload Image</title>
  <style>
    body{
      background-color:yellow;
    }
    input{
      width:50%;
      height:5%;
      border:1px;
      border-radius:5px;
      padding:8px 15px 8px 15px;
      margin:10px 0px 15px 0px;
      box-shadow:1px 1px 2px 1px grey;
      font-weight:bold;
    }
</style>
</head>
<body>
  <center>
    <h1>upload</h1>
    <form action="" method="POST" enctype="multipart/form-data">
    <label>Age:</label><br>
    <input type="text" name="age" /><br>
    <label>Name:</label><br>
    <input type="text" name="name" /><br>
    <label>City:</label><br>
    <input type="text" name="city" /><br>
    <label>Choose an Profile Pic:</label><br>
    <input type="file" name="image" id="image"/><br>
    <input type="submit" name="upload" value="Upload Image/Data" /><br>
</form>
  </center>
</body>
</html>

<?php
$connection=mysqli_connect("mysql","u376224787_S7LG6","");
$db=mysqli_select_db($connection,'u376224787_2ZJdV');

if(isset($_POST['upload']))
{
  $file=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
  $age=$_POST['age'];
  $name=$_POST['name'];
  $city=$_POST['city'];
  $query="INSERT INTO `children`(`age`,`name`,`city`,`image`) VALUES (`$age`,`$name`,`$city`,`$file`)";
  $query_run=mysqli_query($connection,$query);
  if($query_run)
  {
    echo'<script type="text/javascript">alert("Uploaded!")</script>';
  }
  else{
    echo'<script type="text/javascript">alert("Not uploaded!")</script>';
  }
}
?>