<?php
$menu = array (
    'Dashboard' => array ('page' => 'index', 'name' => 'Pulpit'),
    'Users' => array ('page' => 'users', 'name' => 'Użytkownicy'),
    'actions' => array (0 => array ('action' => 'add', 'title' => 'Dodaj użytkownika'),1 => array ('action' => 'edit', 'title' => 'Edytuj użytkownika'))
);

foreach($menu as $element){
    if (isset($element['actions']) && is_array($element['actions'])) {
        var_dump($element['actions']);
    }
}
