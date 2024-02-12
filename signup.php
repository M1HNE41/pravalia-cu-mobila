<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inregistrare</title>
    <div class="relative">
    <div id="logo">
    <a href="index.php">
      <img src="logo.png" alt="logo" width="400px" height="95px">
      </a>
  </div>
  </div>
    <style>
        /* Add the CSS styles here */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-bottom: 20px;
            color: #333333;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="tel"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: calc(100% - 22px);
        }

        button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #3498db;
            color: white;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            background-color: #2980b9;
        }

        p {
            margin-top: 20px;
            font-size: 14px;
            color: #555555;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Inregistrare</h2>
        <form action="signup.php" method="post">
            <div class="input-group">
                <label for="new_username">Nume de utilizator:</label>
                <input type="text" id="new_username" name="new_username" required>
            </div>
            <div class="input-group">
                <label for="new_password">Parola:</label>
                <input type="password" id="new_password" name="new_password" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="phone">Numar de telefon:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="input-group">
                <label for="first_name">Prenume:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="input-group">
                <label for="last_name">Nume:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <button type="submit" name="save" value="Submit">Inregistrare</button>
        </form>
        <p>Ai deja cont? <a href="login.html">Conecteaza-te</a></p>
    </div>
</body>
</html>
<style>
    <?php include 'signup-popup.css'; ?>
</style>
<?php
$dbconn = pg_connect("host=aws-0-eu-central-1.pooler.supabase.com port=5432 dbname=postgres user=postgres.piasuguypoushrpezbmu password=~2T-Ee7t#~PLPa6")
or die('Could not connect: ' . pg_last_error());

if(isset($_POST['save']))
{	
    $newUsername = $_POST['new_username'];
    $newPassword = $_POST['new_password'];
    $newEmail = $_POST['email'];
    $newPhoneNumber = $_POST['phone'];
    $newFirstName = $_POST['first_name'];
    $newLastName = $_POST['last_name'];

    $sql_query = "INSERT INTO users (username, password, email, phone, first_name, last_name)
    VALUES ('$newUsername', '$newPassword', '$newEmail', '$newPhoneNumber', '$newFirstName', '$newLastName')";

    $result = pg_query($dbconn, $sql_query);

    if ($result) 
    {
        include 'signup-popup.html';
    } 
    else
    {
        echo "Error: " . pg_last_error($dbconn);
    }

    pg_close($dbconn);
}
?>
