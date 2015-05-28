<?php
/**
 * Created by PhpStorm.
 * User: zahead
 * Date: 27/05/15
 * Time: 15:20
 */

class modules extends CI_Controller{

    function __construct() {
        parent::__construct();
        $this->load-> model('modulesmodels');
        $this->load-> model('users');
        $this->load-> model('contenu');
    }

    public function index($result=null,$infosmodule=null){
        if(!$this->session->userdata('is_logged_in')){
            redirect('login');
        }else{
            $data = array(
                "modules" => $this->modulesmodels->getAllModules(),
                "enseignants" => $this->users->getAllEnseignants(),
                "result" => $result,
                "module" => $infosmodule['module'],
                "teacher" => $infosmodule['teacher'],
                "admin" => $this->session->userdata['admin'],
                "active" => "Les modules"
            );
            $this->load->model('users');
            $this->load->view('header',$data);
            $this->load->view('back/template/header');
            $this->load->view('back/modules/showmodules',$data);
            $this->load->view('footer');
        }
    }

    public function displayModule(){
        if(!$this->session->userdata('is_logged_in')){
            redirect('login');
        }else{
            $data=array(
                "module"=>$this->input->post('module'),
                "teacher"=>$this->input->post('teacher')
            );
            if($data['module']!="" && $data['teacher']!=""){
                $result = $this->contenu->getModuleTeacher($data);

            }
            elseif($data['module']!="") {
                $result = $this->contenu->getModuleByModule($data);
            }else{
                $result = $this->contenu->getModuleByTeacher($data);

            }
            $data=array(
                "module" => $this->input->post('module'),
                "teacher" =>  $this->users->getUserDataByUsername($this->input->post('teacher'))
            );
            $this->index($result,$data);
        }
    }
}