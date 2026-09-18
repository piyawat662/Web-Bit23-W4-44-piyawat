git add<?php 
 session_start();

 if(!isset($_SESSION["username"])){
    header("location: login.php");
    exit;
 }
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f4f6f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .dashboard-card {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 350px;
            text-align: center;
        }
        h2 {
            margin-top: 0;
            color: #333;
            font-size: 20px;
        }
        .username {
            color: #007bff;
            font-weight: bold;
        }
        .btn-logout {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #dc3545;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            transition: background 0.2s;
        }
        .btn-logout:hover {
            background-color: #bd2130;
        }
    </style>
</head>
<body>

    <div class="dashboard-card">
        <h2>สวัสดี คุณ <?= $_SESSION["username"] ?> <h2>
        <a href="logout.php" class="btn-logout">Logout</a>
    </div>

</body>
</html>