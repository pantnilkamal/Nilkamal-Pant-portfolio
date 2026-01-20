<?php
// 1️⃣ Database connection
$conn = mysqli_connect("localhost", "root", "", "portfolio_db");

if (!$conn) {
    die("Database connection failed");
}

// 2️⃣ Check form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 3️⃣ Get form data
    $nnn  = $_POST['nnn'];
    $mail = $_POST['mail'];
    $mess = $_POST['mess'];

    // 4️⃣ Insert data into database
    $sql = "INSERT INTO contact_form (name, email, message)
            VALUES ('$nnn', '$mail', '$mess')";

    if (mysqli_query($conn, $sql)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

// 5️⃣ Close connection
mysqli_close($conn);
?>
