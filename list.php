<?php

include 'Page.php';
$page = new Page();
$page->title = 'List';
include 'header.php';

$myfile = fopen("test.csv", "w") or die("Unable to open file!");
$txt = "id,description,completed,date\n";
fwrite($myfile, $txt);
$txt = "1,Go to the dentist,yes,5/7/2017\n";
fwrite($myfile, $txt);
$txt = "2,Finish PHP project,no,\n";
fwrite($myfile, $txt);
$txt = "3,Go to the store,yes,5/2/2017\n";
fwrite($myfile, $txt);
fclose($myfile);
$myfile = fopen("test.csv", "r") or die("Unable to open file!");
echo fread($myfile,filesize("test.csv"));
fclose($myfile);
$row = 1;
$header = ["id","description","completed","date"];
if (($handle = fopen("test.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        for ($c=0; $c < $num; $c++) {
            // the $header array defined above is how we can identify what
            // the field index is describing
            echo $header[$c].": ".$data[$c]."\t";
        }
        echo "\n";
    }
    fclose($handle);
}

$file = file('info.csv');

foreach($file as $k)
  $csv[] = explode(',',$k);

print_r($csv);

echo '<table class="table">';  // this is styled as a bootstrap table
echo '    <thead>';
echo '      <tr>';
echo '        <th>Task</th>';
echo '        <th>Description</th>';
echo '        <th>Completed(Y/N)</th>';
echo '        <th>Date Completed</th>';
echo '      </tr>';
echo '    </thead>';
echo '    <tbody>';
echo '      <tr>';
echo '        <td>The Task</td>';
echo '        <td>The Task Description</td>';
echo '        <td>Y</td>';
echo '        <td>6/1/2018</td>';
echo '      </tr>';
echo '    </tbody>';
echo '</table>';


include 'footer.php';
