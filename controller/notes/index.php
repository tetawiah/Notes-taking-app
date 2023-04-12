<?php

use Core\Database;
use Core\App;

$db = App::resolve(Database::class);

$notes = $db->query("Select * from notes where user_id = 1")->get();

view("notes/index.view.php",[
    'heading' => 'Notes',
    'notes' => $notes
]);