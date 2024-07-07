<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .warna {
            background-color : yellow; 
        }
    </style>
</head>
<body>
    <table border='1' cellpadding='20' cellspacing='0'>
        <?php for ($i=1; $i < 7 ; $i++) : ?> 
            <?php if ($i % 2 == 0) : ?>
                <tr class="warna"> 
            <?php else : ?>
                <tr> 
            <?php endif; ?>
            
                <?php for ($j=0; $j < 5 ; $j++) : ?>
                    <td>
                        <?php  
                            echo "$i , $j" ;
                        ?>
                    </td>
                <?php endfor;?>
            </tr>
        <?php endfor;?>
    </table>
</body>
</html>