<?php
include 'db.php';

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $check = $conn->prepare("SELECT * FROM users WHERE username=?");
    $check->bind_param("s", $username);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {
        $message = "<div class='message error'>Tên người dùng đã tồn tại, vui lòng chọn tên khác!</div>";
    } else {
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            $message = "<div class='message success'>Đăng ký thành công! <a href='index.html'>Đăng nhập ngay</a></div>";
        } else {
            $message = "<div class='message error'>Có lỗi xảy ra, vui lòng thử lại!</div>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng Ký</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Đăng Ký</h2>
        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="Tên người dùng" required><br>
            <input type="password" name="password" placeholder="Mật khẩu" required><br>
            <button type="submit">Đăng ký</button>
        </form>
        <p>Đã có tài khoản? <a href="index.html">Đăng nhập</a></p>
        <?php echo $message; ?>
    </div>
</body>
</html>