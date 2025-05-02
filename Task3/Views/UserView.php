<?php

namespace Views;


class UserView {
    public function display(string $data): void {
        echo "
        <!DOCTYPE html>
        <html lang='uk'>
        <head>
            <meta charset='UTF-8'>
            <title>Профіль користувача</title>
        </head>
        <body>
            <h2>Вітання!</h2>
            <p>$data</p>
        </body>
        </html>
        ";
    }
}
