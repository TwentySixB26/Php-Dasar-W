
<!-- ================== PENGULANGAN PADA ARRAY ================ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .kotak {
            background-color : salmon;
            height: 50px;
            width: 50px; 
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            float: left;
            margin : 1px ;
        }
        .clear {
            clear : both ;
        }
    </style>
</head>
<body>
    <?php $numbers = [2,45,90,49,23,26] ;?>

    <!-- cara1  -->
    <?php for ($i=0; $i < count($numbers) ; $i++) { ?>
        <div class="kotak"> 
            <?php echo "$numbers[$i]" ; ?> 
        </div>
    <?php }?>
    
    <div class="clear"></div>
    <?php echo "</br>" ; ?>


    <!-- cara 2 mengunakan forEach  -->
    <?php foreach($numbers as $number) { ?>
        <div class=" kotak"> 
            <?php echo "$number" ; ?> 
        </div>
    <?php } ?>

    <div class="clear"></div>
    <?php echo "</br>" ; ?>


    <!-- cara 3  -->
    <?php foreach($numbers as $number) : ?>
        <div class=" kotak"> 
            <?= "$number" ; ?> 
        </div>
    <?php endforeach ; ?>
</body>
</html>