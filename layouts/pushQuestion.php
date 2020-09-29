<?php
include('../database/connection_database.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="../database/pushQuestion_database.php" method="post">
        <div>
            <p>
                <label for="question">Question</label>
                <input type="text" id="question" name="question">
            </p>

            <p>
                <label for="firstAnswer">Answer1</label>
                <input type="text" id="firstAnswer" name="firstAnswer">
            </p>

            <p>
                <label for="secondAnswer">Answer2</label>
                <input type="text" id="secondAnswer" name="secondAnswer">
            </p>

            <p>
                <label for="thirdAnswer">Answer3</label>
                <input type="text" id="thirdAnswer" name="thirdAnswer">
            </p>

            <p>
                <label for="realAnswer">real answer</label>
                <input type="text" id="realAnswer" name="realAnswer">
            </p>

            <input type="Submit" value="Submit">
        </form>
    </div>
</body>
</html>