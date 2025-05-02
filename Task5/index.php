<?php
require_once 'Circle.php';
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Коло: Введення значень</title>
</head>
<body>
    <h2>Введіть дані для кола</h2>
    <form method="post">
        <label>X: <input type="number" step="any" name="x" required></label><br><br>
        <label>Y: <input type="number" step="any" name="y" required></label><br><br>
        <label>Радіус: <input type="number" step="any" name="radius" required></label><br><br>
        <button type="submit">Створити коло</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $x = (float) $_POST['x'];
        $y = (float) $_POST['y'];
        $radius = (float) $_POST['radius'];

        $circle = new Circle($x, $y, $radius);
        echo "<h3>Результат:</h3>";
        echo "<p>" . $circle . "</p>";
    }
    ?>
</body>
</html>
