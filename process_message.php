<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $sql = "INSERT INTO messages (email, message) VALUES ('$email', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Pesan berhasil terkirim!');
                window.location.href='index.php';
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $conn->error . "');
                window.location.href='index.php';
              </script>";
    }
    
    $conn->close();
}
?> 