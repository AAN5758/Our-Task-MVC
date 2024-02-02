<?php

class Home extends Controller{
    public function index(){
        $dataSolo['title'] = 'Data Tugas';
        $dataSolo['tugas'] = $this->model('Tugas_solo_model')->getAllTugas();
        // var_dump($data);
        $this->view("templates/header");
        $this->view("home/index",$dataSolo);
        $this->view("templates/footer");
    }
    public function calender(){
        $this->view("Home/calender");
    }
    public function notification(){
        $this->view("Home/notification");
    }
}