<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Student_model extends CI_Model {
                        

    function addNewStudent($studentInfo)
    {
        
        $this->db->insert('tbl_Student', $studentInfo);
        
        $insert_id = $this->db->insert_id();
        
        
        
        return $insert_id;
    }
    function studentListing()
    {
        $this->db->select('*');
        $this->db->from('tbl_student');
       
        $query = $this->db->get();
        
        $result = $query->result();        
        return $result;
    }
                        
                            
                        
}
                        
/* End of file Student_model.php */
    
                        