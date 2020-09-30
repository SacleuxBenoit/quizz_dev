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
    <h1>Hello World</h1>

    <?php
        include('../database/connection_database.php');

        $question = $bdd->query('SELECT * FROM HTML ORDER BY RAND() LIMIT 1');

        while($get_question = $question->fetch()){
            ?>
                
                    <div class="container">
                        <?php echo $get_question['question']?>

                        <p>
                            <input type="checkbox" id="firstAnswer" name="answer">
                            <label for="firstAnswer"><?php echo $get_question['first_answer'] ?></label>
                        </p>

                        <p>
                            <input type="checkbox" id="secondAnswer" name="answer">
                            <label for="secondAnswer"><?php echo $get_question['second_answer'] ?></label>
                        </p>
                        
                        <p>
                            <input type="checkbox" id="thirdAnswer" name="answer">
                            <label for="thirdAnswer"><?php echo $get_question['third_answer'] ?></label>
                        </p>

                            <input type="Submit" value="Submit">

                    </div>
            <?php
        }
            ?>

</body>
</html>