<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <title>PHP-First-Task</title>
</head>

<body>

  <form action="welcome.php" method="post">
    First Name:
    <input type="text" name="firstname" pattern="[a-zA-Z]{1,}" required><br>
    Last Name:
    <input type="text" name="lastname" pattern="[a-zA-Z]{1,}" required><br>
    Full Name:
    <input id="flname" type="text" disabled><br>
    <input type="submit">
  </form>

</body>

</html>