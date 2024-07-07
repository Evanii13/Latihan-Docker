<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio Devani Zelvia</title>
    <style>
        body {
            background-color: #ffc0cb; /* Warna pink untuk latar belakang */
            color: #333; /* Warna teks */
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
            padding: 20px;
        }
        .card {
            background: #ffffff; /* Warna putih untuk kotak */
            color: #333; /* Warna teks di dalam kotak */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        .profile-pic {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            margin-bottom: 20px;
        }
        h1 {
            font-size: 32px;
            margin-bottom: 10px;
        }
        p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .social-icons {
            margin-top: 20px;
        }
        .social-icons a {
            margin: 0 10px;
            text-decoration: none;
            color: #333;
        }
        .social-icons a:hover {
            color: #3498db; /* Warna hover biru */
        }
        .footer {
            margin-top: 40px;
            font-size: 14px;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <?php
            echo "<h1>Devani Zelvia</h1>";
            echo "<p>Saya belajar Docker dalam mata kuliah Sistem Terdistribusi</p>";
            ?>
        </div>
        <div class="footer">
            <?php
            echo "<p>&copy; " . date("Y") . " Devani Zelvia.</p>";
            ?>
        </div>
    </div>
</body>
</html>
