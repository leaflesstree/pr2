<?php
    $name = "Кирсанов Владислав";
    $arr = array (
        'key1,'=> 1,
        'желтый'=> 2,
        'key2'=> 3,
        'красный'=> 4,
        'key3'=> 5,
        'черный'=> 6,
        'key4'=> 7,
        'фиолетовый'=> 8,
        'key5'=> 9,
        'розовый'=> 10
    );
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>leaflesstree</title>
</head>
<body>
    <div class="text">
        <p><?=$name?></p>
    </div>

    <?php foreach ( $arr as $b => $v) { ?>
        <div><?php echo "[$b] =>$v.\n"; ?></div>
    <?php }?>

</body>
</html>
