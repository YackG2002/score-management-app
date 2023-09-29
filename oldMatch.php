<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournoi Score</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h2 {
            text-align: center;
        }

        label, input {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Style pour le paragraphe */
        p {
            font-style: italic;
            font-family: "Lucida Handwriting", cursive;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Authentification</h2>
        <form method="post" action="#">
            <label for="username">UserName :</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password :</label>
            <input type="password" id="password" name="password" required>
            
            <input type="submit" value="Get connect">
        </form>
        <p>If you're admin go to README get your access..... <br>
        <?php
        error_reporting(0);
           // if(!isset($_POST['username'])){echo("");}
                if($_POST['username'] && $_POST['password'] ==="admin"){
                    header('Location: previousGame.php');
                }
                else{
                    echo("CONNEXION FAILED !!! Waiting connexion....");
                }
        ?>
        </p>
    </div>
</body>
</html>
