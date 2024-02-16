


<?php

  // define the input fields
  $nameErr = $emailErr = $websiteErr = $commentErr = $genderErr = "";
  $name = $email = $website = $comment = $gender = "";

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      if (empty($_POST['name'])) {
          $nameErr = "Name is Empty!";
      } else {
          $name = TestInput($_POST['name']);
      }

      if (empty($_POST['email'])) {
          $emailErr = "Email is not valid";
      } else {
          $email = TestInput($_POST['email']);
      }

      if (empty($_POST['website'])) {
          $websiteErr = "webisite is not valid";
      } else {
          $website = TestInput($_POST['website']);
      }

      if (empty($_POST['comment'])) {
          $commentErr = "comment is not valid";
      } else {
          $website = TestInput($_POST['comment']);
      }

      if (empty($_POST['gender'])) {
          $genderErr = "gender is not valid";
      } else {
        $website = TestInput($_POST['website']);
      }
    }

    function TestInput($user_data)
    {
        $user_data = trim($user_data);
        $user_data = stripslashes($user_data);
        $user_data = htmlspecialchars($user_data);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validation</title>
  <style>
    .message {
      color: red;
      font-size: small;

    }
  </style>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >
  Name: <input type="text" name="name">
  <span class="message"><?php echo $nameErr ?>*</span>
  E-mail: <input type="text" name="email">
  Website: <input type="text" name="website">
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  Gender:
          <input type="radio" name="gender" value="male" <?php if(isset($gender) && $gender =='male') echo "checked" ?>>
          <input type="radio" name="gender" value="female">
          <input type="radio" name="gender" value="other">

          <input type="submit" value="Submit">
</form>


</body>
</html>