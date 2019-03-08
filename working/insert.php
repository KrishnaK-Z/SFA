<?
$connection = mysqli_connect('localhost', 'root', '', 'carder');
    if($_POST['name']){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password= $_POST['password'];
      $gender = $_POST['gender'];

      $q = "INSERT INTO user (name, email, password, gender) VALUES ('$name', '$email', '$password', '$gender')";

      $query = mysqli_query($connection, $q);

      if($query){
          echo json_encode("Data Inserted Successfully");
          }
      else {
          echo json_encode('problem');
          }
      }

?>