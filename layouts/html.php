<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>

    <?php
        include('../database/connection_database.php');

        $question = $bdd->query('SELECT * FROM HTML ORDER BY RAND() LIMIT 2');

        while($get_question = $question->fetch()){
            ?>
                <form action="html.php" method="post">
                    <div>
                        <?php echo $get_question['question']?>

                        <p>
                            <input type="radio" name="answer" id="firstAnswer">
                            <label for="firstAnswer"><?php echo $get_question['first_answer'] ?></label>
                        </p>

                        <p>
                            <input type="radio" name="answer" id="secondAnswer">
                            <label for="secondAnswer"><?php echo $get_question['second_answer'] ?></label>
                        </p>
                        
                        <p>
                            <input type="radio" name="answer" id="thirdAnswer">
                            <label for="thirdAnswer"><?php echo $get_question['third_answer'] ?></label>
                        </p>
                    </div>
                </form>
            <?php
        }
    ?>
</body>
</html>