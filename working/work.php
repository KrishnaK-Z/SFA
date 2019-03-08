 <?php
        $db=mysqli_connect('localhost','root','','carder');
$a="<script> document.getElementById('a').value;</script>";
$sql="select name from user where `name`='$a' ";
$result=mysqli_query($db,$sql);
?>
<html>
    <head>
    <title>retrieve data from db</title>
    </head>
    <body>
        <form name=ag>
    <table>
        <input type="hidden" name="a" id="a" value="a">
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>gender</th>
        <?php
         if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
        <td><?php echo $row["name"]; ?></td>
        <td><?php  echo $row["email"]; ?></td>
        <td><?php  echo $row["password"]; ?></td>
        <td><?php  echo $row["gender"]; echo $a;?></td>
        </tr>
        <?php
                                              }
        }
        
        ?>
    </table> 
        </form>
    </body>
</html>