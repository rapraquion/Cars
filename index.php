<?php
    require('./includes/Cars.class.php');
    require('./includes/mentorCar.php');
    require('./includes/studentCar.php');
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
        $mentor = new MentorsCar();
            $mentor->newMentorCar('white','civic','honda');
            echo $mentor->mentorCar();
        $student = new StudentCar();
            $student->newStudentCar('blue', 'avanza', 'toyota');
            echo $student->studentCar();
    ?>
</body>
</html>