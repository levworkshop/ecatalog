<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
</head>

<body>
    <?php
    /*
    variables:
    - store name
    - last update
    - product name
    - product price
    */

    $first_num = 17;
    $second_num = 5;
    $first_name = 'aaa';
    $lastName = "bbb";
    $bool1 = true;
    $empty1 = null;
    $arr1 = [1, 2, 3];

    define('CONSTANT1', 'aaaa');
    echo CONSTANT1;

    echo $first_num + $second_num;
    echo "<p>Hello, $first_name</p>";

    echo $first_name . $lastName;
    echo "$first_name $lastName";

    var_dump($arr1);
    echo "<br>";
    print_r($arr1);

    1 + 2;
    1 * 2;
    1 / 2;
    1 - 2;
    12 % 10;

    $first_num || $second_num;
    $bool1 === true;

    ?>



    <!-- Hello, your number is -->

    <div>
        <?php
        echo 2 + 5;
        echo " hello again";
        echo "<br>";
        echo "goodbye";
        echo "<br>";
        echo "Hello", ' World', 45, 6.3;
        echo "<p>Yo there</p>";
        ?>
        <br>
    </div>

    <?= 2 + 5; ?>

</body>

</html>