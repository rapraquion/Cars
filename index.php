<?php
    require('./includes/superCar.class.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cars</title>
</head>
<body>
    <?php
        $mentor = new MentorsCar('white','civic','honda');
            echo $mentor->Car();
        $student = new StudentCar('blue','wigo','toyota');
            echo $student->Car();
    ?>
</body>
</html>