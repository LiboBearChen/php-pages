<center>
    <h1>Children Info From The Database</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <table width="50%" border="1" cellpadding="5" cellspacing="5">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>City</th>
                </tr>
            </thead>
            <?php
        $connection=mysqli_connect("localhost","u376224787_S7LG6","3k[64RCn~P");
$db=mysqli_select_db($connection,'u376224787_2ZJdV');
$query="SELECT * FROM children";
$query_run=mysqli_query($connection,$query);
while($row=mysqli_fetch_array($query_run))
{
  ?>
            <tr>
                <td><?php echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="Image" style="width: 100px; height: 100px;" >'; ?>
                </td>
                <td><?php echo $row['name']; ?> </td>
                <td><?php echo $row['age']; ?> </td>
                <td><?php echo $row['city']; ?> </td>
            </tr>
            <?php
}
?>
        </table>
    </form>
</center>