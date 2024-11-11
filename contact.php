<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "POST request received successfully!";
} else {
    echo "Only POST requests are allowed.";
}
?>
