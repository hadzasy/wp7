<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belah ketupat</title>
<link rel="stylesheet" href="copystyle.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 40px;
      background: linear-gradient(to right, #e0f7fa, #ffffff);
      color: #003366;
      text-align: center;
    }

    h1 {
      font-size: 3em;
      color: #01579b;
      margin-bottom: 10px;
    }

    a {
      color: #6a1b9a;
      font-weight: bold;
      text-decoration: none;
    }

    .ketupat-box {
      margin: 40px auto;
      width: 250px;
      height: 250px;
      background-color: #333;
      transform: rotate(45deg);
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
      transition: transform 0.4s ease, box-shadow 0.4s ease;
    }

    .ketupat-box:hover {
      transform: rotate(45deg) scale(1.1);
      box-shadow: 0 0 40px rgba(0, 0, 0, 0.5);
    }

    .rumus {
      margin-top: 20px;
      font-size: 1.2em;
    }

    .output {
      margin-top: 10px;
      font-size: 1.4em;
      font-weight: bold;
      color: #00796b;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
    }

    .fade {
      opacity: 0;
      transition: opacity 2s ease-in;
    }

    .fade.show {
      opacity: 1;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>belah ketupat</h1>
    <a href="#">HASIL HITUNG</a><br><br>
    <div class="rumus">
      <strong>rumus</strong><br>
      Keliling = 4 × sisi
    </div>

    <?php
      $sisi = 21;
      $keliling = 4 * $sisi;
      echo "<div class='output fade' id='hasil'>Keliling = 4 × $sisi = $keliling</div>";
    ?>

    <div class="ketupat-box"></div>
  </div>

  <script>
    // Animasi fade-in untuk hasil hitung
    window.onload = function() {
      const hasil = document.getElementById('hasil');
      setTimeout(() => {
        hasil.classList.add('show');
      }, 500);
    };
  </script>
</head>
<body>
    <?php
    $d1=$_POST['d1'];
    $d2=$_POST['d2'];
    $sisi=$_POST['sisi'];

    $luas=0.5* $d1*$d2;
    $keliling= 4* $sisi;
    $pilih = $_POST['pilih'];
    ?>
<form action="belah_ketupatcopy.php" method="post">

<h1>belah ketupat</h1>
<a href="index.php">HASIL HITUNG</a>
<table>
    <?php if($pilih === "keliling"){ ?>
        <tr>
            <th>
                rumus
            </th>
        </tr>
        <tr>
            <td>
                Keliling = 4 x sisi =
            </td>
            <td>
                <?php echo $keliling;?>
            </td>
        </tr>
        <?php } else if ($pilih === "luas"){ ?>
            <tr>
                <td>
                    Luas =  0.5 x d1 x d2 = 
                </td>
                <td>
                    <?php echo $luas;?>
                </td>
            </tr>
            
            <?php } else{ ?>
                <tr>
                    <td>
                        Luas = 0.5 x d1 x d2 = 
                    </td>
                    <td>
                        <?php echo $luas;?>
                    </td>
                </tr>
                <tr>
                    <td>
                        Keliling = 4 x sisi =
                    </td>
                    <td>
                        <?php echo $keliling;?>
                    </td>
                </tr>
                
                <?php }?>
            </table>
            <form action="belah_ketupatcopy.php" method="post">

    <!-- <h4>Luas = 0.5 x d1 x d2 = <?php echo $luas;?></h4> -->
    <!-- <h4>Keliling = 4 x sisi = <?php echo $keliling;?></h4> -->
    <img src="ketupat.jpg" widht="300" height="300" alt="">
</body>
</html>