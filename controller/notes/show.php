<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$currentUserId = 1;

$note = $db->query("Select * from notes where id = :id", [
    'id' => $_GET['id']
])->findorAbort();

authorize($note['user_id'] === $currentUserId);


view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);
