<?php

namespace Views;

/**
 * Class UserView
 * 
 * Виводить дані у вигляді HTML.
 */
class UserView {
    public function display(string $data): void {
        echo "
        <!DOCTYPE html>
        <html lang='uk'>
        <head>
            <meta charset='UTF-8'>
            <title>Користувач</title>
            <style>
                body { font-family: Arial; background: #f0f0f0; padding: 30px; }
                .content { background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 5px #ccc; }
            </style>
        </head>
        <body>
            <div class='content'>
                <h2>Дані користувача</h2>
                <p>$data</p>
            </div>
        </body>
        </html>
        ";
    }
}
