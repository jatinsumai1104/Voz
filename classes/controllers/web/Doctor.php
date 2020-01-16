<?php

Class Doctor{
    protected $di;
    public function __construct($di){
        $this->di = $di;
    }

    public function getRecentRecords($doctor_id){
        $query = "SELECT * FROM prescription,cases,patient,users WHERE prescription.case_id = case.id AND prescription.doctor_id = $doctor_id AND patient.id = cases.patient_id AND patient.user_id = users.id";
        $res = $this->di->rawQuery($query);
        return $res;
    }
}
?>