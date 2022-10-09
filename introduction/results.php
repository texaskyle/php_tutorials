<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php $marks = 50 ?>

 <?php if ($marks>=80): ?>
<strong>A</strong>
<?php elseif($marks>=70): ?>
    <strong>B</strong>
    <?php elseif ($marks>=60): ?>
        <strong>C</strong>
        <?php elseif($marks>=50): ?>
            <strong>D</strong>
            <?php elseif($marks): ?>
                <strong>E</strong>
                <?php else: ?>
                    <strong>F</strong>
                    <?php endif ?>



</body>
</html>
