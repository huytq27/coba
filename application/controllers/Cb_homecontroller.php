<?php

class Cb_homecontroller extends CI_Controller{
    public function __construct() {
        parent::__construct();
        //$this->load->helper('url');
    }
    public function index(){
//        $this->load->model('homemodel');
//        $data['sanpham'] = $this->homemodel->getData();
//        $this->load->view("homeview", $data);
         
        $this->load->view('client/index.php');
         
    }
    public function shop(){
       $this->load->view('client/shop.php');
    }
    public function about(){
        $this->load->view('client/about.php');
    }
    public function services(){
        $this->load->view('client/services.php');
    }
     public function contact(){
        $this->load->view('client/contact.php');
    }
    
}

?>

