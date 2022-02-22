<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./bt1950.css"
    <title></title>
</head>
<body>
    <?php
        $fullname = "Ho Gia Huy";
        $age = "18";
        $address = "Ha Noi";
        $email = "huy.hg.1935@aptechlearning.edu.vn";
        $phone = "0584184550";
        echo 
        '<table border="1" cellpadding="5">
            <tr>
                <th>Ten</th>
                <th>Tuoi</th>
                <th>Dia Chi</th>
                <th>Email</th>
                <th>SDT</th>
            </tr>
            <tr>
                <td>'.$fullname.'</td>
                <td>'.$age.'</td>
                <td>'.$address.'</td>
                <td>'.$email.'</td>
                <td>'.$phone.'</td>
            </tr>
        </table>'
    ?>
</body>
</html>