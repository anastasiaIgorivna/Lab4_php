<?php

/**
 * Class FileManager
 * Робота з файлами: читання, запис, очищення
 */
class FileManager {
    public static string $dir = 'text';

    /**
     * Читання з файлу
     *
     * @param string $filename
     * @return string
     */
    public static function readFile(string $filename): string {
        $path = self::$dir . '/' . $filename;

        if (file_exists($path)) {
            return file_get_contents($path);
        } else {
            return "⚠️ Файл не знайдено: $filename";
        }
    }

    /**
     * Запис у файл (дописування)
     *
     * @param string $filename
     * @param string $text
     * @return void
     */
    public static function writeFile(string $filename, string $text): void {
        $path = self::$dir . '/' . $filename;
        file_put_contents($path, $text . PHP_EOL, FILE_APPEND);
    }

    /**
     * Очистити вміст файлу
     *
     * @param string $filename
     * @return void
     */
    public static function clearFile(string $filename): void {
        $path = self::$dir . '/' . $filename;
        file_put_contents($path, '');
    }
}
