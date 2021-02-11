<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Student_model extends CI_Model {
                        

    function addNewStudent($studentInfo)
    {
        
        $this->db->insert('tbl_Student', $studentInfo);
        
        $insert_id = $this->db->insert_id();
        
        
        
        return $insert_id;
    }
                        
                            
                        
}
                        
/* End of file Student_model.php */
    
                        