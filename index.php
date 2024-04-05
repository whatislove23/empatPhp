<?php
if (!isset($_COOKIE["theme"])) {
  setcookie("theme", "Light", time() + (86400 * 30), "/");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>


<body class="<?php echo $_COOKIE["theme"] == "Light" ? "bg-white" : "bg-gray-900" ?>">

  <?php include "./components/header.php"; ?>
  <?php include "./components/getDataForm.php"; ?>
  <?php include "./components/isPalindromeForm.php"; ?>
  <?php include "./components/lettersCounter.php"; ?>
  <?php include "./components/counterForm.php"; ?>
  <?php include "./components/emailForm.php"; ?>
  <?php
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  ?>
</body>

</html>