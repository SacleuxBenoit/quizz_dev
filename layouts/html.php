<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/layouts_style.css">
    <title>Document</title>
</head>
<body>

    <h1 class="categorytitles" id="titleHtml"><a href="../index.php"></a></h1>

    <?php
        include('../database/connection_database.php');

        $question = $bdd->query('SELECT * FROM HTML ORDER BY RAND() LIMIT 1');

        while($get_question = $question->fetch()){
            ?>
                <div class="container">

                <form action="#" method="post">
                    <?php echo $get_question['question']?>

                    <p>
                        <input type="checkbox" id="firstAnswer" name="answer" value="<?php $get_question['first_answer'] ?>">
                        <label for="firstAnswer"><?php echo $get_question['first_answer'] ?></label>
                    </p>

                    <p>
                        <input type="checkbox" id="secondAnswer" name="answer" value="<?php $get_question['second_answer'] ?>">
                        <label for="secondAnswer"><?php echo $get_question['second_answer'] ?></label>
                    </p>
                            
                    <p>
                        <input type="checkbox" id="thirdAnswer" name="answer" value="<?php $get_question['third_answer'] ?>">
                        <label for="thirdAnswer"><?php echo $get_question['third_answer'] ?></label>
                    </p>

                    <input type="submit" value="Next">

                </form>
            <?php
        }
    ?>
</div>

<script src="../js/script.js"></script>
</body>
</html>