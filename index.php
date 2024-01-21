<?php
    // use Maharah\Classes\Database;
require __DIR__.'/vendor/autoload.php';
    // require_once __DIR__ . '/autoloader.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 8 with MySQL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.11/dist/css/uikit.min.css" />
</head>

<body>

    <div class="uk-container uk-margin-top">

        <div class="uk-text-center uk-margin">
            <img src="logo.svg" alt="Logo" width="100px" /><br />
            <h1>Maharah Exercise OOP with MySQL</h1>
        </div>

        <hr />

        <div class="uk-margin">

            <form class="uk-form-stacked" action="process.php" method="post">
                <label class="uk-form-label" for="quantity">Enter Quantity:</label>
                <div class="uk-form-controls">
                    <input class="uk-input" type="number" name="quantity" id="quantity" value="1" required>
                </div>

                <div class="uk-form-controls uk-margin">

                    <?php
                    $database = new Database();
                    $records = $database->getRecords('SELECT * FROM products');

                    foreach ($records as $record) {
                        echo '<input class="uk-radio" type="radio" name="product" value="' . $record['name'] . '" required>
                        ' . $record['name'] . '<br />';
                    }
                    ?>
                </div>

                <button class="uk-button uk-button-primary uk-margin-top" type="submit">Submit</button>
            </form>

        </div>

    </div>

</body>

</html>