<?php
include('connection_database.php');

$push_database = $bdd->prepare('INSERT INTO HTML(question, first_answer, second_answer, third_answer, real_answer)
                                VALUES(:question, :first_answer, :second_answer, :third_answer, :real_answer)');

$push_database->bindParam(':question', $_POST['question']);
$push_database->bindParam(':first_answer', $_POST['firstAnswer']);
$push_database->bindParam(':second_answer', $_POST['secondAnswer']);
$push_database->bindParam(':third_answer', $_POST['thirdAnswer']);
$push_database->bindParam(':real_answer', $_POST['realAnswer']);
$push_database->execute();
?>