<?php
$title = "Docker Image Demo";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #e3f2fd; 
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 50px 80px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-top: 5px solid #0db7ed; 
        }
        h1 {
            color: #0db7ed; margin: 0 0 10px 0; font-size: 2.8rem;
        }

        p {
            color: #555555; font-size: 1.1rem; margin: 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $title; ?></h1>
        <p>Xin chào! 🐳</p>
    </div>
</body>
</html>