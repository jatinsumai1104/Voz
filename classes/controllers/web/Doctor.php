<?php

Class Doctor{
    protected $di;
    public function __construct($di){
        $this->di = $di;
    }

    public function getRecentRecords($doctor_id){
        $query = "";
        $res = $this->di->rawQuery($query);
        return $res;
    }
}
?>