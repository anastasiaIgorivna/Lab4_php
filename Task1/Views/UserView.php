<?php
class UserView {
    public function display($data) {
        echo "
        <!DOCTYPE html>
        <html lang='uk'>
        <head>
            <meta charset='UTF-8'>
            <title>Профіль користувача</title>
            <style>
                body { font-family: Arial; background-color: #f5f5f5; padding: 20px; }
                .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
            </style>
        </head>
        <body>
            <div class='card'>
                <h2>Вітання!</h2>
                <p>$data</p>
            </div>
        </body>
        </html>
        ";
    }
}
