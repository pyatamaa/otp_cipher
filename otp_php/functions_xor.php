<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>One-Time Pad Cipher</title>
</head>
<body>

<?php

function encryptXOR($message, $key)
{
    $message = strtoupper($message);
    $key = strtoupper($key);

    if (strlen($message) !== strlen($key)) {
        die("Panjang kunci harus sama dengan teks.");
    }

    $encryptedText = '';

    for ($i = 0; $i < strlen($message); $i++) {
        if (ctype_alpha($message[$i])) {
            $messageChar = ord($message[$i]) - ord('A');
            $keyChar = ord($key[$i]) - ord('A');
            
            // Menggunakan operasi XOR
            $encryptedChar = $messageChar ^ $keyChar;
            $encryptedText .= chr($encryptedChar + ord('A'));
        } else {
            $encryptedText .= $message[$i];
        }
    }

    return $encryptedText;
}

function decryptXOR($encryptedText, $key)
{
    $encryptedText = strtoupper($encryptedText);
    $key = strtoupper($key);

    if (strlen($encryptedText) !== strlen($key)) {
        die("Panjang kunci harus sama dengan teks.");
    }

    $decryptedText = '';

    for ($i = 0; $i < strlen($encryptedText); $i++) {
        if (ctype_alpha($encryptedText[$i])) {
            $encryptedChar = ord($encryptedText[$i]) - ord('A');
            $keyChar = ord($key[$i]) - ord('A');
            
            // Menggunakan operasi XOR untuk dekripsi
            $decryptedChar = $encryptedChar ^ $keyChar;
            $decryptedText .= chr($decryptedChar + ord('A'));
        } else {
            $decryptedText .= $encryptedText[$i];
        }
    }

    return $decryptedText;
}

?>

</body>
</html>
