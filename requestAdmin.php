<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--favicon-->
        <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
        <link rel="manifest" href="./favicon/site.webmanifest">
        <link rel="mask-icon" href="./favicon/safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">

        <!--Styles-->

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        section {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 400px;
            margin: 50px auto;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

    </style>
    <title>Request Admin</title>
</head>
<body>
<section>
        <h1>
            Problem?
        </h1>
        <br>
        <br>

        <?php
        if(isset($_SESSION['status'])){
            echo"<h4>".$_SESSION['status']."</h4>";
            unset($_SESSION['status']);
        }

        ?>

        <div class="admission">
            <form action="request.php" method="POST">
                <div>
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>

                <div>
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email">
                </div>

                <div class="form-group">
                    <input type="radio" name="request" value="Forgot Password"/>Forgot Password
                    <input type="radio" name="request" value="No Account"/>No Account
                </div>


                <div>
                    <button type="submit" class="btn btn-primary" name="save_radio">Send</button> 
                    <br>
                    <br>
                    <button  class="btn btn-primary text-white" ><a href="login.php">Back to login</a></button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>