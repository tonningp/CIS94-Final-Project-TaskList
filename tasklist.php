<?php

class Tasklist {
    private $taskarray = array();
    private $loadarray = array();
    function addTask($new_task)
    {
        array_push($this->taskarray, $new_task);
    }
    function getTask($indx)
    {
        return $this->taskarray[$indx];
    }
    function getTasks()
    {
        foreach ($this->taskarray as list($a,$b,$c,$d))
        {
            echo "$a, $b, $c, $d\n";
        }
    }
    function saveTask($indx)
    {
        $myfile = fopen("test.csv", "a") or die("Unable to open file!");
        #$txt = "description, completed, completed, date_completed\n";
        foreach ($this->taskarray[$indx] as $value)
        {
            $txt .= "$value, ";
        }
        $txt = rtrim($txt, ", ");
        $txt .= "\n";
        fwrite($myfile, $txt);
        fclose($myfile);
    }
    function saveTasks()
    {
        $myfile = fopen("test.csv", "a") or die("Unable to open file!");
        #$txt = "description, completed, completed, date_completed\n";
        #fwrite($myfile, $txt);
        foreach ($this->taskarray as list($a,$b,$c,$d))
        {
            $txt = "$a, $b, $c, $d\n";
            fwrite($myfile, $txt);
        }
        fclose($myfile);
    }
    function loadRecords()
    {
        $row = 1;
        if (($handle = fopen("test.csv", "r")) !== FALSE)
        {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
            {
                $num = count($data);
                array_push($this->loadarray, $data);
                #echo "processing $num fields in line $row: \n";
                $row++;
                for ($c=0; $c < $num; $c++)
                {
                    //echo  "$data[$c]";
                }
                //echo "\n";
            }
            fclose($handle);
        }
        return $this->loadarray;
    }
}