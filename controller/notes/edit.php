<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUser =1;

$note = $db->query("Select * from notes where id = :id",[
'id' => $_GET['id'],
])->findorAbort();

authorize($currentUser === $note['user_id']);

view("notes/edit.view.php",[
    'heading' => 'Edit note',
    'errors' => [],
    'note' => $note,
]);