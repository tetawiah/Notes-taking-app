<?php

use \Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$currentUserId = 1;

    $note = $db->query("Select * from notes where id = :id", [
        'id' => $_POST['id']
    ])->findorAbort();

    authorize($note['user_id'] === $currentUserId);

    $db->query("delete from notes where id = :id", [
        'id' => $_POST['id'],
    ]);

    header('location: /notes');
    exit();

view("notes/show.view.php", [
    'heading' => 'Note',
    'note' => $note
]);
