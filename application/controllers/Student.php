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

        $this->db->select('*');    
		$this->db->from('tbl_student');
        $query = $this->db->get();
		$data['query']= $query->result_array();

        $this->global['pageTitle'] = 'SchoolName : Dashboard';
        
        $this->loadViews("student", $this->global, $data , NULL);

        
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
                $Student_Blood_Group = $this->input->post('Student_Blood_Group');
                $mobile = $this->input->post('mobile');
                $email = $this->input->post('email');
                $pmobile = $this->input->post('pmobile');
                $dob = $this->input->post('dob');
                $Sex = $this->input->post('Sex');
                $Community = $this->input->post('Community');
                $Caste = $this->input->post('Caste');
                $Nationality = $this->input->post('Nationality');
                $Door_No = $this->input->post('Door_No');
                $Street_Name = $this->input->post('Street_Name');
                $Area_Name = $this->input->post('Area_Name');
                $City = $this->input->post('City');
                $PinCode = $this->input->post('PinCode');
                $State = $this->input->post('State');
                
                
                $studentInfo = array('Student_Name'=>$Student_Name, 'Fathers_Name'=>$Fathers_Name,
                 'Mother_Name'=>$Mother_Name,'Student_Blood_Group'=>$Student_Blood_Group,'Student_Mobile_No'=>$mobile,
                 'Student_emailid'=>$email,'Parent_Contact_No'=>$pmobile,'Date_of_Birth'=>$dob,
                 'Sex'=>$Sex, 'Community'=>$Community, 'Caste'=>$Caste,'Nationality'=>$Nationality,'Door_No'=>$Door_No,'Street_Name'=>$Street_Name,'Area_Name'=>$Area_Name,
                 'City'=>$City,'PinCode'=>$PinCode,'State'=>$State);
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
    public function Student_Edit($id)
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

           

		    $query = $this->db->select('*')->from('tbl_student')->where('Student_ID', $id);
			$query = $this->db->get();

			$data['row'] = $query->row_array();
			//$data['query1'] = $query2->result_array();
            $this->loadViews("Student_Edit", $this->global, $data, NULL);
			
        }
		
	}
    public function Update_data($id)
	{
		
		$data= array(
                'Student_Name' => $this->input->post('Student_Name'),
                'Fathers_Name' => $this->input->post('Fathers_Name'),
                'Mother_Name' => $this->input->post('Mother_Name'),
                'Student_Blood_Group' => $this->input->post('Student_Blood_Group'),
                'Student_Mobile_No' => $this->input->post('mobile'),
                'Student_emailid' => $this->input->post('email'),
                'Parent_Contact_No'=> $this->input->post('pmobile'),
                'Date_of_Birth'=> $this->input->post('dob'),
                'Sex'=> $this->input->post('Sex'),
                'Community'=> $this->input->post('Community'),
                'Caste'=> $this->input->post('Caste'),
                'Nationality'=> $this->input->post('Nationality'),
                'Door_No'=> $this->input->post('Door_No'),
                'Street_Name'=> $this->input->post('Street_Name'),
                'Area_Name'=> $this->input->post('Area_Name'),
                'City'=> $this->input->post('City'),
                'PinCode'=> $this->input->post('PinCode'),
                'State'=> $this->input->post('State')				
					);
		$this->db->update('tbl_student', $data, array('Student_ID' => $id));
		$this->session->set_flashdata('message', 'Your data updated Successfully..');
		redirect("Student");
	}
    public function Student_Delete($id)
	{
		$id = $this->db->where('Student_ID',$id);
		$this->db->delete('tbl_student');
		$this->session->set_flashdata('message', 'Your data deleted Successfully..');
		redirect("Student");
	}

        
}
        
    /* End of file  Student.php */
        
                            