<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['fullname']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $gender = htmlspecialchars($_POST['gender']);
  $course = htmlspecialchars($_POST['course']);
  $address = htmlspecialchars($_POST['address']);
} else {
  echo "<h2>No data received!</h2>";
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Application Submitted</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <header>
    <h1>Application Submitted Successfully</h1>
  </header>

  <section class="form-section">
    <h2>Applicant Details</h2>
    <p><strong>Full Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <p><strong>Gender:</strong> <?php echo $gender; ?></p>
    <p><strong>Course:</strong> <?php echo $course; ?></p>
    <p><strong>Address:</strong> <?php echo nl2br($address); ?></p>
  </section>

  <footer>
    <p>© <?php echo date("Y"); ?> Rajesh HS</p>
  </footer>
</body>
</html>
