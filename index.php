<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Bangun Datar</title>
<link rel="stylesheet" href="index.php">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #e1f5fe, #ffffff);
      padding: 40px;
      color: #263238;
    }

    h1 {
      text-align: center;
      font-size: 3em;
      margin-bottom: 30px;
      color: #01579b;
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }

    .card {
      background: #ffffff;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      width: 200px;
      height: 100px;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      text-decoration: none;
      color: #333;
      font-weight: bold;
      font-size: 1.1em;
    }

    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 12px 30px rgba(0,0,0,0.2);
      background-color: #e3f2fd;
    }
  </style>
</head>
<body>
    <h1>Bangun Datar</h1>
 <form action="index.php" method="post">
    
<ul>
    <li><a href="belah_ketupat.php">belah ketupat</a></li>
    <li><a href="jajargenjang.php">jajargenjang</a></li>
    <li><a href="layanglayang.php">layanglayang</a></li>
    <li><a href="lingkaran.php">lingkaran</a></li>
    <li><a href="persegipanjang.php">persegi panjang</a></li>
    <li><a href="persegi.php">persegi</a></li>
    <li><a href="segitiga.php">segitiga</a></li>
    <li><a href="trapesium.php">trapesium</a></li>
</ul>
    </form>
<script src="index.js"></script>
</body>
</html>