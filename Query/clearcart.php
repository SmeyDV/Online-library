<?php
include '../DBconfig.php';

$deleteQuery = "DELETE FROM tblcart";
$deleteResult = $conn->query($deleteQuery);

if ($deleteResult) {
    // Successfully cleared the cart
} else {
    header("HTTP/1.1 500 Internal Server Error");
    echo "Error clearing cart: " . $conn->error;
}

if (isset($_GET['redirect']) && $_GET['redirect'] === 'home') {
    header('Location: ../Home.php');
    exit();
}

$conn->close();
?>

