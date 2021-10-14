<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function lanjutan</title>
</head>
<body>
    <?php
    $harga_baju = 24;
    $duit_bawa = 50;

    $hasil = kira($harga_baju, $baki_duit);

    $bilangan_baju = $hasil['bilangan_baju'];
    $baki_duit = $hasil['baki_duit'];
    ?>
    Harga baju = RM<?php echo number_format($harga_baju, 2);?><br>
    Duit yang dibawa = RM<?php echo number_format($duit_bawa, 2);?><br>
    Bilangan baju = <?php echo $bilangan_baju;?><br>
    Baki duit = RM<?php echo number_format($baki_duit, 2);?><br>

</body>
</html>

<?php
function kira($harga_baju, $duit_bawa){
    $bilangan_baju = 2;
    $baki_duit = $duit_bawa * $bilangan_baju;
    
    $hasil = [
        'bilangan_baju' => $bilangan_baju,
        'baki_duit' => $baki_duit,
    ];

    return $hasil;
}