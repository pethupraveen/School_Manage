<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH . '/libraries/BaseController.php';
        
class Student extends BaseController {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->isLoggedIn();   
    }

    public function index()
    {
        $this->global['pageTitle'] = 'SchoolName : Dashboard';
        
        $this->loadViews("student", $this->global, NULL , NULL);
    }

    function addStudent()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->model('user_model');
            $this->load->model('Student_model');
            $data['roles'] = $this->user_model->getUserRoles();
            
            $this->global['pageTitle'] = 'School Name : Add New Student';

            $this->loadViews("addStudent", $this->global, $data, NULL);
        }
    }

    function addNewStudent()
    {
        if($this->isAdmin() == TRUE)
        {
            $this->loadThis();
        }
        else
        {
            $this->load->library('form_validation');
            $this->form_validation->set_rules('Student_Name','Student_Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Fathers_Name','Fathers_Name','trim|required|max_length[128]');
            $this->form_validation->set_rules('Mother_Name','Mother_Name','trim|required|max_length[128]');

            if($this->form_validation->run() == FALSE)
            {
                $this->addStudent();
            }
            else
            {
                $Student_Name = $this->input->post('Student_Name');
                $Fathers_Name = $this->input->post('Fathers_Name');
                $Mother_Name = $this->input->post('Mother_Name');
               
                $studentInfo = array('Student_Name'=>$Student_Name, 'Fathers_Name'=>$Fathers_Name,
                 'Mother_Name'=>$Mother_Name);
                $this->load->model('Student_model');
                $result = $this->Student_model->addNewStudent($studentInfo);
                
                if($result > 0)
                {
                    $this->session->set_flashdata('success', 'New Student created successfully');
                }
                else
                {
                    $this->session->set_flashdata('error', 'Student creation failed');
                }
                
                redirect('Student/addStudent');
            }

        }
    }
        
}
        
    /* End of file  Student.php */
        
                            