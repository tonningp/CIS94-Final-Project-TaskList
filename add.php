<?php

include 'Page.php';
$page = new Page();
$page->title = 'Add Task';

include 'header.php';
include 'form_tpl.php';
include 'footer.php';
include 'task.php';

include 'tasklist.php';

if(isset($_GET['taskname'])) {
    $temp = new task();
    $temping = new Tasklist();
    $temp->set_description($_GET["taskname"]);
    $temp->set_completed($_GET["completed"]);
    $temp->set_date_created($_GET["datecreated"]);
    $temp->set_date_completed($_GET["datecompleted"]);
    $tmp = array($temp->get_description(),$temp->get_completed(),$temp->get_date_created(),$temp->get_date_completed());
    $temping->addTask($tmp);
    $temping->saveTasks();
}