<?php
require_once 'Circle.php';
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Перетин кіл</title>
</head>
<body>
    <h2>Введіть дані для двох кіл</h2>
    <form method="post">
        <fieldset>
            <legend>Коло 1</legend>
            X: <input type="number" step="any" name="x1" required><br>
            Y: <input type="number" step="any" name="y1" required><br>
            Радіус: <input type="number" step="any" name="r1" required><br>
        </fieldset><br>
        <fieldset>
            <legend>Коло 2</legend>
            X: <input type="number" step="any" name="x2" required><br>
            Y: <input type="number" step="any" name="y2" required><br>
            Радіус: <input type="number" step="any" name="r2" required><br>
        </fieldset><br>
        <button type="submit">Перевірити</button>
    </form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $x1 = (float) $_POST['x1'];
    $y1 = (float) $_POST['y1'];
    $r1 = (float) $_POST['r1'];
    $x2 = (float) $_POST['x2'];
    $y2 = (float) $_POST['y2'];
    $r2 = (float) $_POST['r2'];

    $circle1 = new Circle($x1, $y1, $r1);
    $circle2 = new Circle($x2, $y2, $r2);

    echo "<h3>Результат</h3>";
    echo "<p>Коло 1: $circle1</p>";
    echo "<p>Коло 2: $circle2</p>";

    if ($circle1->intersectsWith($circle2)) {
        echo "<p style='color:green; font-weight: bold;'>Ці кола перетинаються.</p>";
    } else {
        echo "<p style='color:red; font-weight: bold;'>Ці кола не перетинаються.</p>";
    }
}
?>
</body>
</html>

