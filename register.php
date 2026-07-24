<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IPT10 - Registration Form</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
        <img src="images/auf.png" alt="AUF Logo" class="logo">
        <h1>Registration Form</h1>

        <form action="summary.php" method="post">

            <label for="name">Name: <span class="required">*</span></label>
            <input type="text" id="name" name="name" required><br>

            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob"><br>

            <label>Sex:</label>
            <div class="radio-group">
                <label><input type="radio" name="sex" value="Male" checked> Male</label>
                <label><input type="radio" name="sex" value="Female"> Female</label>
            </div>

            <label for="email">Email: <span class="required">*</span></label>
            <input type="email" id="email" name="email" required><br>

            <label for="address">Address:</label>
            <textarea id="address" name="address" rows="3"></textarea><br>

            <label for="department">College Department:</label>
            <select id="department" name="department">
                <option value="CICS">CICS - College of Information and Computing Sciences</option>
                <option value="CEA">CEA - College of Engineering and Architecture</option>
                <option value="CBA">CBA - College of Business and Accountancy</option>
                <option value="CAS">CAS - College of Arts and Sciences</option>
                <option value="CON">CON - College of Nursing</option>
                 <option value="CCS">CCS - College of Computer Studies</option>
            </select><br>

            <label for="program">Program:</label>
            <input type="text" id="program" name="program"><br>

            <label for="mobile">Mobile Number:</label>
            <input type="text" id="mobile" name="mobile"><br>

            <div class="button-group">
                <button type="reset" class="btn-reset">Reset</button>
                <button type="submit" class="btn-submit">Submit</button>
            </div>

        </form>
    </div>

</body>
</html>
