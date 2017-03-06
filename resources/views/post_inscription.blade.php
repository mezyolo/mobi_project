<html>
<head>
  <style>
  label {
display:block;
width:150px;
}
  </style>
</head>
<body>

<h1> Ty For the Sub <?php echo $_POST["alias"]; ?> </h1>
<?php
namespace App\Http\Controllers\UserController;
$info = array(
  'username' => $_POST["username"],
  'password' => $_POST["passe"],
  'alias' => $_POST["alias"],
  'email' => $_POST["email"]);
  {{ UserController::createUser($info); }}
 ?>

</body>
</html>
?>
