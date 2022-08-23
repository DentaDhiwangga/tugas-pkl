<?php
// Pengulangan pda array
// for // foreach
$angka = [3,2,15,20,11,77,89,8];

?>
<!DOCTYPE html>
<html>
<head>  
    <title>Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            margin: 3px;
            line-height: 50px;
            float: left;
        }
        .clear { clear: both }
    </style>    
        
</head>
<body> 
<?php for( $i = 0; $i < count($angka); $i++ ) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>    
<?php } ?>

<div class="clear"></div>

<?php foreach( $angka as $a ) { ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php } ?>    

<div class="clear"></div>

<?php foreach( $angka as $a ): ?>
    <div class="kotak"><?php echo $a; ?></div>
<?php endforeach; ?>    






</body>
</html>