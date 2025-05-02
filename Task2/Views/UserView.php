<?php

/**
 * Class UserView
 *
 * Відповідає за виведення інформації користувачу.
 */
class UserView {
    /**
     * Відобразити передані дані у вигляді HTML.
     *
     * @param string $data
     * @return void
     */
    public function display($data) {
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
