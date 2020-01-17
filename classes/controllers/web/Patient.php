<?php

Class Patient{
    protected $table = "patient";
    protected $di;
    public function __construct($di){
        $this->di = $di;
    }


    public function getPreviousRecords($patient_id){
      $query = "SELECT * FROM prescription,cases WHERE cases.patient_id = $patient_id AND prescription.case_id = cases.id";
      $res = $di->get("Database")->rawQuery($query);
      return $res;
    }

    public function registerHalfPatient($data){
      try{
        $dataURL = $data["image"];
        $dataURL = str_replace('data:image/png;base64,', '', $dataURL);
        $dataURL = str_replace(' ', '+', $dataURL);
        $data["image"] = base64_decode($dataURL);
        unset($data["patient_register_through_doctor"]);
        $this->di->get("Database")->beginTransaction();

        $id = $this->di->get("Database")->insert("users", $data);
        $id = $this->di->get("Database")->insert($this->table, ["user_id"=>$id]);

        $this->di->get("Database")->commit();
        echo "success";
      }catch(Exception $e){
        $di->get("Database")->rollback();
        echo $e;
      }
    }
}
?>