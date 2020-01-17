<?php

Class Doctor{
    protected $di;
    protected $table = "doctor";
    public function __construct($di){
        $this->di = $di;
    }

    public function getRecentRecords($doctor_id){
        $query = "SELECT * FROM prescription,cases,patient,users WHERE prescription.case_id = cases.id AND prescription.doctor_id = $doctor_id AND patient.id = cases.patient_id AND patient.user_id = users.id";
        $res = $this->di->get("Database")->rawQuery($query);
        return $res;
    }

    public function getPatientsList($doctor_id, $data=[]){

        $str = "";
        if($data["voice_text"]){
            $cond = " and ";
            $data = explode(" ", $data["voice_text"]);
            foreach($data as $name){
                $str .= " or name Like '%".$name."%' ";
            }
            $str = $cond . "(" . substr($str, 3) . ")";
        }
        
        $query = "SELECT p.id as patient_id, u.*, CONCAT(a.block_no, ', ',a.street, ', ', a.town,'-', a.pincode,', ', a.state, ', ', a.country) as full_address ,pr.created_at as case_date from patient as p INNER JOIN users as u ON p.user_id = u.id INNER JOIN cases as c ON p.id = c.patient_id inner join (SELECT pr.case_id, pr.created_at FROM prescription as pr WHERE doctor_id = {$doctor_id} GROUP BY pr.case_id) as pr INNER JOIN address as a ON u.address_id = a.id where c.id = pr.case_id".$str;
        // echo $query;
        return $this->di->get("Database")->rawQuery($query);
    }
}
?>