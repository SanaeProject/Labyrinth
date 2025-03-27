<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= create_random_string(4)?></title>
    <meta name="description" content="<?= create_random_string(10)?>">

    <?php
        function create_random_string($length = 10) {
            $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ";
            $charactersLength = strlen($characters);
            $randomString = "";

            for ($i = 0; $i < $length; $i++){
                $randomString .= $characters[rand(0, $charactersLength -1)];
            }
            return $randomString;
        }
    ?>
</head>
<body>
    <h1><?= create_random_string(5)?></h1>

    <nav>
        <ul>
        <?php for($i = 0;$i < 10;$i++):?>
            <li><a href="<?= create_random_string(10)?>.php"><?= create_random_string(10)?>.php</a></li>
        <?php endfor;?>
        </ul>
    </nav>


    <?php for($j = 0; $j < random_int(1,5); $j++):?>
        <div>
            <h2><?= create_random_string(random_int(1,30))?></h2>
            <p><?= create_random_string(random_int(1,50)) ?></p>
        </div>
    <?php endfor;?>

</body>
</html>