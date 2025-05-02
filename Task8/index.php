<?php
require_once 'Student.php';
require_once 'Programmer.php';
?>

<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Об'єкти Human</title>
</head>
<body>
    <h2>Створення об'єкта (Student або Programmer)</h2>
    <form method="post">
        <label>Тип:
            <select name="type" required>
                <option value="Student">Студент</option>
                <option value="Programmer">Програміст</option>
            </select>
        </label><br><br>

        <label>Зріст: <input type="number" name="height" step="any" required></label><br>
        <label>Вага: <input type="number" name="weight" step="any" required></label><br>
        <label>Вік: <input type="number" name="age" required></label><br><br>

        <label>Університет (для студента): <input type="text" name="university"></label><br>
        <label>Курс (для студента): <input type="number" name="course"></label><br><br>

        <label>Мови (для програміста): <input type="text" name="languages"></label><br>
        <label>Досвід (років): <input type="number" name="experience"></label><br><br>

        <button type="submit">Створити</button>
    </form>

    <hr>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $type = $_POST['type'];
    $height = (float) $_POST['height'];
    $weight = (float) $_POST['weight'];
    $age = (int) $_POST['age'];

    if ($type === 'Student') {
        $university = $_POST['university'] ?? 'невідомий';
        $course = (int) ($_POST['course'] ?? 1);
        $student = new Student($height, $weight, $age, $university, $course);
        $student->nextCourse(); 


        echo "<h3>Студент</h3>";
        echo "Університет: {$student->getUniversity()}<br>";
        echo "Курс: {$student->getCourse()}<br>";
        echo "Зріст: {$student->getHeight()} см<br>";
        echo "Вага: {$student->getWeight()} кг<br>";
        echo "Вік: {$student->getAge()} років<br>";
    } elseif ($type === 'Programmer') {
        $languages = explode(',', $_POST['languages'] ?? '');
        $languages = array_map('trim', $languages);
        $experience = (int) ($_POST['experience'] ?? 0);

        $programmer = new Programmer($height, $weight, $age, $languages, $experience);

        echo "<h3>Програміст</h3>";
        echo "Мови: " . implode(', ', $programmer->getLanguages()) . "<br>";
        echo "Досвід: {$programmer->getExperience()} років<br>";
        echo "Зріст: {$programmer->getHeight()} см<br>";
        echo "Вага: {$programmer->getWeight()} кг<br>";
        echo "Вік: {$programmer->getAge()} років<br>";
    }
}
?>
</body>
</html>
