<?php
// Validate required fields; redirect back to form if missing
if (empty($_POST['name']) || empty($_POST['email'])) {
    header("Location: register.php");
    exit;
}

// Sanitize inputs to prevent XSS
$name       = htmlspecialchars($_POST['name']);
$dob        = htmlspecialchars($_POST['dob'] ?? 'Not provided');
$sex        = htmlspecialchars($_POST['sex'] ?? 'Not specified');
$email      = htmlspecialchars($_POST['email']);
$address    = htmlspecialchars($_POST['address'] ?? 'Not provided');
$department = htmlspecialchars($_POST['department'] ?? 'Not specified');
$program    = htmlspecialchars($_POST['program'] ?? 'Not provided');
$mobile     = htmlspecialchars($_POST['mobile'] ?? 'Not provided');

// Additional validation: check email format
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: register.php");
    exit;
}

// Set background color based on sex
$nameColor = ($sex === 'Male') ? 'lightblue' : 'lightpink';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IPT10 - Registration Summary</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <img src="images/auf.png" alt="AUF Logo" class="logo">
        <h1>Registration Summary</h1>

        <table border="1">
            <tr style="background-color: <?php echo $nameColor; ?>;">
                <td><strong>Name</strong></td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td><strong>Date of Birth</strong></td>
                <td><?php echo $dob; ?></td>
            </tr>
            <tr>
                <td><strong>Sex</strong></td>
                <td><?php echo $sex; ?></td>
            </tr>
            <tr>
                <td><strong>Email</strong></td>
                <td><?php echo $email; ?></td>
            </tr>
            <tr>
                <td><strong>Address</strong></td>
                <td><?php echo $address; ?></td>
            </tr>
            <tr>
                <td><strong>College Department</strong></td>
                <td><?php echo $department; ?></td>
            </tr>
            <tr>
                <td><strong>Program</strong></td>
                <td><?php echo $program; ?></td>
            </tr>
            <tr>
                <td><strong>Mobile Number</strong></td>
                <td><?php echo $mobile; ?></td>
            </tr>
        </table>

        <a href="register.php" class="back-link">&larr; Back to Form</a>
    </div>

</body>
</html>
