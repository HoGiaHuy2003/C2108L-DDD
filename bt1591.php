<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $N = rand(1, 100);
        echo "$N";
        $sum = 0;
        echo "<br/>Tong cac so tu 1 den $N la: ";
        for ($i = 1; $i < $N; $i++)
        {
            $sum += $i;
        }
        echo "$sum";
    ?>
</body>
</html>