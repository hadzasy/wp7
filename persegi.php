<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>persegi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
<a class='link' href="index.php">Home</a>
    <h1>persegi</h1>
    <form action="persegicopy.php" method="post">
        <table>
            <tr>
                <td>Masukkan Sisi</td>
                <td>:</td>
                <td><input type="number" name="sisi" id=""></td>
                     <tr>
                <td> Masukkan diagonal 1</td>
                <td>:</td>
                <td> <input type="number" name="d1"> <br></td>
            </tr>

            <tr>
                <td>Masukkan diagonal 2</td>
                <td>:</td>
                <td><input type="number" name="d2"> <br></td>
            </tr>

            <tr>
                <td>Masukkan sisi</td>
                <td>:</td>
                <td><input type="number" name="sisi"> <br></td>
            </tr>
            </tr>


            <tr>
                <td>pilih</td>
                <td>:</td>
                <td><input type="radio" name="pilih" value="luas">
                <label for="html">Luas</label> <br>
                <input type="radio" name="pilih" value="keliling">
                <label for="html">keliling</label> <br>
                <input type="radio" name="pilih" value="semua">
                <label for="html">semua</label> <br>
                </td>
                <td>

                </td>
            </tr>
        </table>      
        <td><input type="submit" value="Hitung Luas Dan Keliling"></td>
    </form>
    <script src="index.js"></script>
</body>
</html>