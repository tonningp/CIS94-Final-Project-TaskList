<?php
class task {
    var $description;
    var $completed;
    var $date_created;
    var $date_completed;

    function set_description($new_description)
    {
        $this->description = $new_description;
    }
    function get_description()
    {
        return "$this->description";
    }
    function set_completed($new_completed)
    {
        $this->completed = $new_completed;
    }
    function get_completed()
    {
        return "$this->completed";
    }
    function set_date_created($new_date_created)
    {
        $this->date_created = $new_date_created;
    }
    function get_date_created()
    {
        return "$this->date_created";
    }
    function set_date_completed($new_date_completed)
    {
        $this->date_completed = $new_date_completed;
    }
    function get_date_completed()
    {
        return "$this->date_completed";
    }
}