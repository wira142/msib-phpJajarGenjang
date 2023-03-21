<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rumus Jajar Genjang</title>
  <link rel="stylesheet" href="app.css">
</head>

<body>
  <div>
    <h1>Perhitungan Bangun <br> Datar Jajar Genjang</h1><br>

    <?php
    if (isset($_POST['hit_keliling'])) {
      if ($_POST['sisiA'] == null || $_POST['sisiB']) {
        echo "<h3 class='error'>Anda harus mengisi input yang diperlukan!</h3>";
      } else {
        $sisiA = $_POST['sisiA'];
        $sisiB = $_POST['sisiB'];
        $hasil = $sisiA + $sisiB + $sisiA + $sisiB;
        echo "<h3>Keliling Jajar Genjang : " . $hasil . "</h3>";
      }
    }
    if (isset($_POST['hit_luas'])) {
      if ($_POST['alas'] == null || $_POST['tinggi']) {
        echo "<h3 class='error'>Anda harus mengisi input yang diperlukan!</h3>";
      } else {
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $hasil = $tinggi * $alas;
        echo "<h3>Luas Jajar Genjang : " . $hasil . "</h3>";
      }
    }
    ?>
  </div>

  <br>
  <div class="container-box">
    <div class="keliling">
      <h2 class="heading">Hitung Keliling</h2>
      <table>
        <form method="post">
          <tr>
            <td><label for=" sisiA">Sisi A</label></td>
            <td><input min="0" type="number" id="sisiA" name="sisiA"></td>
          </tr>
          <tr>
            <td><label for="sisiB">Sisi B</label></td>
            <td><input min="0" type="number" id="sisiB" name="sisiB"></td>
          </tr>
          <tr>
            <td colspan="2"><button type="submit" name="hit_keliling">Hitung</button></td>
          </tr>
        </form>
      </table>
    </div>
    <div class="luas">
      <h2 class="heading">Hitung Luas</h2>
      <table>
        <form method="post">
          <tr>
            <td><label for="alas">Alas</label></td>
            <td><input min="0" type="number" name="alas" id="alas"></td>
          </tr>
          <tr>
            <td><label for="tinggi">Tinggi</label></td>
            <td><input min="0" type="number" name="tinggi" id="tinggi"></td>
          </tr>
          <tr>
            <td colspan="2"><button type="submit" name="hit_luas">Hitung</button></td>
          </tr>
        </form>
      </table>
    </div>
  </div>
</body>

</html>