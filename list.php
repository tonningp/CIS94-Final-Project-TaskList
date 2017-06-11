<?php

include 'Page.php';
$page = new Page();
$page->title = 'List';
include 'header.php';
include 'tasklist.php';

// Add code here that will load the CSV file with the tasks in it
// and will print the tasks in a table
// The following is an example of how the table will be printed 
// between the header and the footer
$temping = new Tasklist();
$filedata = $temping->loadRecords();
//print_r($filedata[0]);
//print_r($filedata[1]);

echo '<table class="table">';  // this is styled as a bootstrap table
echo '    <thead>';
echo '      <tr>';
echo '        <th>Task</th>';
echo '        <th>Completed(Y/N)</th>';
echo '        <th>Date Created</th>';
echo '        <th>Date Completed</th>';
echo '      </tr>';
echo '    </thead>';
echo '    <tbody>';
for ($row = 0; $row < sizeof($filedata); $row++) {
    echo '      <tr>';
    for ($col = 0; $col < 4; $col++) {
        echo "<td>".$filedata[$row][$col]."</td>";
    }
    echo '      </tr>';
}
//echo '      <tr>';
//echo '        <td>The Task</td>';
//echo '        <td>The Task Description</td>';
//echo '        <td>Y</td>';
//echo '        <td>6/1/2018</td>';
//echo '      </tr>';
//echo '    </tbody>';
//echo '</table>';


include 'footer.php';

