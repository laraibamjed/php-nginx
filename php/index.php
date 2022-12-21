<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Table</title>
</head>
<style>
    * {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    :root {
        --primary-color: #85586F;
    }

    body {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
        background: #F9EDE3;
    }

    form {
        border: 2px solid var(--primary-color);
        padding: 30px 31px;
        display: flex;
        flex-direction: column;
        min-width: 250px;
        margin-top: 51px;
    }

    h1 {
        color: var(--primary-color);
        text-align: center;
        font-size: 34px;
    }

    label {
        color: var(--primary-color);
        font-weight: bold;
        margin-bottom: 5px;
    }

    input {
        padding: 5px;
        border: 1px solid var(--primary-color);
        outline: none;
    }

    input[type=submit] {
        color: white;
        background: var(--primary-color);
        margin-top: 10px;
    }

    .table {
        margin-top: 20px;
        text-align: center;
    }

    a {
        display: block;
        margin-top: 20px;
        text-align: center;
    }
</style>

<body>

    <?php
    if (isset($_POST['calculate'])) {
        $n = $_POST['value'];
        echo "<h1>Table of $n </h1>";
        echo "<div class='table'>";
        $res = 0;
        for ($i = 1; $i <= 10; $i++) {
            $res = $n * $i;
            echo "$n * $i = $res <br>";
        }
        echo "<div>";
        echo "<a href=''>Do More</a>";
        exit;
    }
    ?>


    <h1>Print Table of Any Number using PHP</h1>
    <form method="post">
        <label for="num">Enter Number</label>
        <input type="number" name="value" />
        <input type="submit" name="calculate" value="Print Table" />
    </form>
</body>

</html>