<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = strtoupper($_POST['nama']);
    $alamat = strtoupper($_POST['alamat']);  
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $hobi = $_POST['hobi'];

    echo "<div style='font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; border: 1px solid #ddd;'>";
    echo "<h2>FORM DIRI:</h2>";
    echo "<p><strong>NPM:</strong> " . $npm . "</p>";
    echo "<p><strong>Nama:</strong> " . $nama . "</p>";
    echo "<p><strong>Alamat:</strong> " . $alamat . "</p>";
    echo "<p><strong>Tempat Lahir:</strong> " . $tempat_lahir . "</p>";
    echo "<p><strong>Tanggal Lahir:</strong> " . $tanggal_lahir . "</p>";
    echo "<p><strong>Jenis Kelamin:</strong> " . $jenis_kelamin . "</p>";
    echo "<p><strong>Hobi:</strong> " . $hobi . "</p>";
    echo "</div>";
}
?>
