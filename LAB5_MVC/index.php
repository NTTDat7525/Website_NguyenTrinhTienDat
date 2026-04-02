<?php
require 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo "<h2>Thông tin ngẫu nhiên</h2>";
echo "Tên: " . $faker->name . "<br>";
echo "Địa chỉ: " . $faker->address . "<br>";
echo "Email: " . $faker->email;
?>

<?php
require 'vendor/autoload.php';

use App\Models\Student;

$sv = new Student();
echo $sv->getInfo();
?>

<?php
require 'vendor/autoload.php';

use App\Controllers\HomeController;

$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    $controller = new HomeController();
    $controller->index();
} else {
    echo "404 - Page Not Found";
}
?>
