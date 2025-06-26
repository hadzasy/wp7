<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang layang</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a class='link'href="index.php">Home</a>
    <h1>Layang layang</h1>
    <form action="layanglayangcopy.php" method="post">
        <table>
            <tr>
                <td>Diagonal 1</td>
                <td>:</td>
                <td> <input type="number" name="d1"><br></td>
            </tr>

            <tr>
                <td>Diagonal 2</td>
                <td>:</td>
                <td><input type="number" name="d2"><br></td>
            </tr>

            <tr>
                <td>Sisi 1</td>
                <td>:</td>
                <td><input type="number" name="sisi_1"><br></td>
            </tr>

            <tr>
                <td> Sisi 2</td>
                <td>:</td>
                <td><input type="number" name="sisi_2"><br></td>
            </tr>

             <tr>
                <td>Pilih</td>
                <td>:</td>
                <td><input type="radio" name="pilih" value="luas">
                <label for="html">Luas</label> <br>
                <input type="radio" name="pilih" value="keliling">
                <label for="html">Keliling</label> <br>
                <input type="radio" name="pilih" value="semua">
                <label for="html">Semua</label> <br>
                </td>
                <td>

                </td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <script src="index.js"></script>
</body>
</html>