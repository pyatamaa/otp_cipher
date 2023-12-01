<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>One-Time Pad Cipher</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>One-Time Pad Cipher - Modulo 26 dan XOR</h2>

<form action="" method="post">
    <div>
        <label>Pilih Perhitungan:</label>
        <select name="algorithm" required>
            <option value="modulo26">Modulo 26</option>
            <option value="xor">XOR</option>
        </select>
    </div>
    <div>
        <label>Pesan/Teks:</label>
        <input type="text" name="message" required>
    </div>
    <div>
        <label>Kunci (Sepanjang Teks):</label>
        <input type="text" name="key" required>
    </div>
    <button type="submit" name="encrypt">Encrypt</button>
    <button type="submit" name="decrypt">Decrypt</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $algorithm = $_POST["algorithm"];
    $message = $_POST["message"];
    $key = $_POST["key"];

    if ($algorithm === "modulo26") {
        require_once("functions_mod26.php");

        if (isset($_POST["encrypt"])) {
            $encryptedText = encryptModulo26($message, $key);
            echo "<p>$encryptedText</p>";
        }

        if (isset($_POST["decrypt"])) {
            $decryptedText = decryptModulo26($message, $key);
            echo "<p>$decryptedText</p>";
        }
    } elseif ($algorithm === "xor") {
        require_once("functions_xor.php");

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $message = $_POST["message"];
            $key = $_POST["key"];

        if (isset($_POST["encrypt"])) {
            $encryptedText = encryptXOR($message, $key);
            echo "<p>$encryptedText</p>";
        }
    }

        if (isset($_POST["decrypt"])) {
            $decryptedText = decryptXOR($message, $key);
            echo "<p>$decryptedText</p>";
        }
    }
}
?>

</body>
</html>
