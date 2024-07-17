<?php


//how to avoid a situation where a user can insert an empty data into our db
//introduce certain layers of validation to prevent that from happening

$config = require('config.php');
  
$db = new Database($config['database']);



$heading = 'Create Note';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $db->query('INSERT INTO notes(body, user_id) VALUES(:body, :user_id)', [

    'body' => $_POST['body'],
    'user_id' => 1


  ]);
}

require 'views/note-create.view.php';