<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Section extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('MenuItems');
    }

    public function addOne($id = ''){
        $menu['id'] = $id;
		$html = $this->load->view('common/addModal',$menu,true);
        $response['html'] = $html;
        echo json_encode($response);
    }
    public function add(){
		$post = $this->input->post();
        $success = $this->MenuItems->addItem($post);
        print_r($success);
    }

    public function addsubmenu(){
        $post = $this->input->post();
        $success = $this->MenuItems->addsubItem($post);
        print_r($success);
    }

}       