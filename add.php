<?php

include 'Page.php';
$page = new Page();
$page->title = 'Add Task';

include 'header.php';
include 'form_tpl.php';
include 'footer.php';
include 'Task.php';



// Teacher comment This function does not add a task.
function addTask($input) {

    $file = file('info.csv');

    foreach($file as $k)
      $csv[] = explode(',',$k);

    print_r($csv);

}


if(isset($_POST['submit'])) {
   addTask($_POST);
}
