<!DOCTYPE html>s
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>segitiga</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a class='link' href="index.php">Home</a>
    <h1>segitiga</h1>
    <form action="segitigacopy.php" method="post" >
        <table>
            <tr>
                <td>alas</td>
                <td>:</td>
                <td><input type="number" name="alas"><br></td>
            </tr>

            <tr>
                <td>tinggi</td>
                <td>:</td>
                <td><input type="number" name="tinggi"><br></td>
            </tr>

            <tr>
                <td>sisi_1</td>
                <td>:</td>
                <td><input type="number" name="sisi_1"><br></td>
            </tr>

            <tr>
                <td>sisi_2</td>
                <td>:</td>
                <td><input type="number" name="sisi_2"><br></td>
            </tr>

            <tr>
                <td>sisi_3</td>
                <td>:</td>
                <td><input type="number" name="sisi_3"><br></td>
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

            <tr>
                <td></td>
                <td></td>
                <td> <input type="submit" value="Hitung"></td>
            </tr>
        </table>
    </form>
    <script src="index.js"></script>
</body>
</html>