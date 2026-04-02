<?php
include 'db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($password, $row['password'])) {
        echo "Đăng nhập thành công!";
        header("Refresh:2; url=welcome.php");
    } else {
        echo "Đăng nhập thất bại!";
    }
} else {
    echo "Đăng nhập thất bại!";
}
?>