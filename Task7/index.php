<?php
require_once 'FileManager.php';

echo "<h2>Тестування FileManager</h2>";

$file = 'file1.txt';

// 1. Очистити файл
FileManager::clearFile($file);
echo "<p>✅ Файл очищено</p>";

// 2. Запис у файл
FileManager::writeFile($file, "Перша строка");
FileManager::writeFile($file, "Друга строка");
echo "<p>✅ Дані записано</p>";

// 3. Читання з файлу
$content = FileManager::readFile($file);
echo "<h3>📄 Вміст '$file':</h3><pre>$content</pre>";
