<?php
// index.php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $birthdate = $_POST['birthdate'];
    $today = new DateTime();
    $birth = new DateTime($birthdate);
    $age = $today->diff($birth)->y;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; padding: 40px; }
        .container { max-width: 400px; margin: auto; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); }
        h2 { text-align: center; }
        label, input, button { display: block; width: 100%; margin: 10px 0; }
        button { padding: 10px; background: #007BFF; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background: #0056b3; }
        .result { text-align: center; font-size: 18px; margin-top: 20px; color: green; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Age Calculator</h2>
        <form method="POST" action="">
            <label for="birthdate">Enter your Birthdate:</label>
            <input type="date" id="birthdate" name="birthdate" required>
            <button type="submit">Calculate Age</button>
        </form>
        <?php if (isset($age)): ?>
            <div class="result">
                You are <strong><?php echo $age; ?></strong> years old.
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
