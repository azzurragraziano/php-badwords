<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad words</title>
</head>
<body>

    <?php
        $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.';
        $badWord = $_GET['badWord'];
        $paragraphLength = strlen($paragraph);
    ?>

    <p>
        <?php echo $paragraph; ?>
    </p>

    <div>
        Il testo è composto da <?php echo $paragraphLength; ?> caratteri
    </div>


    <p>
        Il testo censurato è <?php echo str_replace($badWord, '***', $paragraph); ?>
    </p>

    

</body>
</html>