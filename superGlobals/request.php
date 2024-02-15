<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
   <label for="name">Name</label>
   <input type="text" name="firstname" />
   <input type="submit" value="Submit">
  </form>

  <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_REQUEST['firstname']);
    if (empty($name)) {
        echo "name is empty";
    } else {
        echo $name;
    }
}

?>

</body>
</html>