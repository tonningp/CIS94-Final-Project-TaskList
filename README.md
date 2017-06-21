# CIS94-Final-Project-TaskList

The instructions for this project can be found here:

# Teacher Comments
Project is incomplete, for example add.php:
include 'Page.php';
$page = new Page();
$page->title = 'Add Task';
$current_script = 'add.php';
include 'header.php';
include 'form_tpl.php';
include 'footer.php';
// 1.
// Put the Task class in a file called Task.php
// Then include it here as is done for the header.php and form_tpl.php and footer.php 
// files above
function addTask($input) {
     // 2.
     // Put code here to add the task to the CSV file
    // you should use the Task class that you developed earlier here
    // the following function is only called right now
    // to "debug" the addTask function, it should not be in the final
    // version of this code
    var_dump($input);
    
}
// 3. 
// this check is what will start the process to add the task , it assures
// the process of not printing anything other than the form and a success message
// when the task is successfully added.
if(isset($_POST['submit'])) {
   addTask($_POST); 
}
# Grade
70/100
