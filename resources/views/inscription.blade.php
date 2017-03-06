<!DOCTYPE html>
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

  <form action="post_inscription.blade.php" method="post">
  <label>Username: </label><input type="text" name="username"/></label><br/>
  <label>Mot de passe: <input type="password" name="passe"/></label><br/>
  <label>Confirmation du mot de passe: <input type="password" name="passe2"/></label><br/>
  <label>Alias: <input type="text" name="alias"/></label><br/>
  <label>Adresse e-mail: <input type="text" name="email"/></label><br/>
  <input type="submit" value="Confirm"/>
  </form>

</body>
</html>
