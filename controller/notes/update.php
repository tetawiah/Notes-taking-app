<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$errors =[];

$currentUser = 1;

$note = $db->query("Select * from notes where id = :id", [
    'id' => $_POST['id'],
])->findorAbort();


authorize($currentUser === $note['user_id']);

if (!Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = "A body of no more than 1000 characters is required";
}

if(count($errors)) {
    return View("views/edit.view.php",[
        'heading' => 'Edit note',
        'note'=> $note,
        'errors' => $errors,
    ]);
}

$db->query("update notes set body = :body where id = :id ",[
    'id' => $_POST['id'],
    'body' => $_POST['body'],
]);

header('location: /notes');
die();