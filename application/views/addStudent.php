<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i>  Student Regisiter
        <small>Add / Edit Student</small>
      </h1>
      
    </section>
    
<section class="content">
    <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab">Student Bio-Data</a></li>
              <li><a href="#tab_2" data-toggle="tab">School Register</a></li>
              <li><a href="#tab_3" data-toggle="tab">Photo Details</a></li>
              <li><a href="#tab_4" data-toggle="tab">TC Print</a></li>
              
              
              <div class="pull-right col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
              
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
              <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Student Details</h3>
                    </div><!-- /.box-header -->
                
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addUser" action="<?php echo base_url() ?>Student/addNewStudent" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="sname">Student_Name</label>
                                        <input type="text" placeholder="Student_Name" required="required" class="form-control" value="<?php echo set_value('Student_Name'); ?>" id="sname" name="Student_Name" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="fname">Fathers_Name</label>
                                        <input type="text" placeholder="Fathers_Name" required="required" class="form-control" value="<?php echo set_value('Fathers_Name'); ?>" id="fname" name="Fathers_Name" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-3">                                
                                    <div class="form-group">
                                        <label for="mname">Mother_Name</label>
                                        <input type="text" placeholder="Mother_Name"  required="required" class="form-control" value="<?php echo set_value('Mother_Name'); ?>" id="mname" name="Mother_Name" maxlength="128">
                                    </div>
                                    
                                </div>
                                <div class="col-md-3">   
                                    <div class="form-group">
                                        <label for="group">Student_Blood_Group</label>
                                        <select class="form-control" id="group" name="Student_Blood_Group" required="required">
                                            <option value="0">Blood_Group</option>
                                            <option value="o+">O+</option>
                                            <option value="o-">O-</option>
                                            <option value="b-">B-</option>
                                            <option value="b+">B+</option>
                                            <option value="a-">A-</option>
                                            <option value="a+">A+</option>
                                            <option value="ab-">Ab-</option>
                                            <option value="ab+">Ab+</option>

                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="mobile">Student_Mobile_No</label>
                                        <input type="text"class="form-control digits" id="mobile" value="<?php echo set_value('mobile'); ?>" name="mobile" maxlength="10" data-fv-numeric="true" data-fv-numeric-message="Please enter valid phone numbers" data-fv-phone-country11="IN" required="required" data-fv-notempty-message="This field cannot be left blank." placeholder="Mobile No. " data-fv-field="data[User][mobile]">
                                        
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="email">Student_emailid</label>
                                        <input type="text" placeholder="Student_emailid" required="required" class="form-control email" id="email" value="<?php echo set_value('email'); ?>" name="email" maxlength="128">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="pmobile">Parent_Contact_No</label>
                                        <input type="text" class="form-control digits" required="required" id="pmobile" value="<?php echo set_value('pmobile'); ?>" name="pmobile" maxlength="10" data-fv-numeric="true" data-fv-numeric-message="Please enter valid phone numbers" data-fv-phone-country11="IN" required="required" data-fv-notempty-message="This field cannot be left blank." placeholder="Parent Mobile No. " data-fv-field="data[User][mobile]">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <div class="form-group">
                                    <label>Date_of_Birth</label>
                                    <div class="input-group">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="text" class="form-control" required="required" id="dob" name="dob" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                                
                        </div>
                            
                            <div class="row">
                             
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="Sex">Sex</label>
                                        <select class="form-control" placeholder="Sex" id="Sex" name="Sex" required="required">
                                        <option value="" disabled selected hidden>Please Choose...</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                  </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="community">Community</label>
                                        <select class="form-control" placeholder="Community" required="required" id="Community" name="Community">
                                        <option value="" disabled selected hidden>Please Choose...</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Christian">Christian</option>
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="community">Caste</label>
                                        <select class="form-control" placeholder="Caste" required="required" id="Caste" name="Caste">
                                        <option value="" disabled selected hidden>Please Choose...</option>
                                            <option value="Caste1">Caste1</option>
                                            <option value="Caste2">Caste2</option>
                                            <option value="Caste3">Caste3</option>
                                            <option value="Others">Others</option>  
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                <div class="form-group">
                                        <label for="community">Nationality</label>
                                        <select class="form-control" placeholder="Nationality" required="required" id="Nationality" name="Nationality">
                                        <option value="" disabled selected hidden>Please Choose...</option>
                                            <option value="India">India</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                
                                </div>
                                
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="Door_No">Door_No</label>
                                        <input type="text" class="form-control" required="required" placeholder="Door_No" value="<?php echo set_value('Door_No'); ?>" id="Door_No" name="Door_No" maxlength="128">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Street_Name">Street_Name</label>
                                        <input type="text" class="form-control" required="required" placeholder="Street_Name" value="<?php echo set_value('Street_Name'); ?>" id="Street_Name" name="Street_Name" maxlength="128">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="Area_Name">Area_Name</label>
                                        <input type="text" class="form-control" required="required" placeholder="Area_Name" value="<?php echo set_value('Area_Name'); ?>" id="Area_Name" name="Area_Name" maxlength="128">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="community">City</label>
                                        <select class="form-control" id="City" required="required" name="City">
                                        <option value="" disabled selected hidden>Please Choose...</option>
                                            <option value="Madurai">Madurai</option>
                                            <option value="Chennai">Chennai</option>
                                            <option value="Coimbatore">Coimbatore</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="PinCode">PinCode</label>
                                        <input type="text" class="form-control digits" required="required" id="PinCode" value="<?php echo set_value('PinCode'); ?>" name="PinCode" maxlength="6" data-fv-numeric="true" data-fv-numeric-message="Please enter valid phone numbers" data-fv-phone-country11="IN" required="required" data-fv-notempty-message="This field cannot be left blank." placeholder="PinCode 6 digits.." data-fv-field="data[User][mobile]">
                                       
                                    </div>
                                </div>
                                <style>select:invalid { color: gray; }</style>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="community">State</label>
                                        <select class="form-control" id="State" required="required" name="State" placeholder="State">
                                            <option value="" disabled selected hidden>Please Choose...</option>
                                            <option value="Tamil_Nadu">Tamil_Nadu</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Andhra_Pradesh">Andhra_Pradesh</option>
                                            <option value="Telangana">Telangana</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Lakshadweep_islands">Lakshadweep_islands</option>
                                            <option value="Andaman">Andaman</option>   
                                        </select>
                                    </div>
                                </div>     
                            </div>
                            
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
            
                    </form>
                </div>
            </div>
           
              <!-- /.tab-pane -->
    <div class="tab-pane" id="tab_2">
    


    </div>
              <!-- /.tab-pane -->
            <div class="tab-pane" id="tab_3">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Upload Student Profile Image</h3>
                    </div><!-- /.box-header -->
                    <form role="form" id="addUser" action="<?php echo base_url() ?>Student/std_upload" name="ajax_form" id="ajax_form" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3 text-center">
                                    <img src="<?php echo base_url() ?>assets/images/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                                    <h6>Upload a different photo...</h6>
                                    <input type="file" class="text-center center-block file-upload">
                                </div>
                            </div>
                        </div>

                    <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                    </div>
                    </form>

                </div>

                
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                     
                
                
            </div>
        </div>    
</section>
    
</div>
<script>
$(document).ready(function() {

    
var readURL = function(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.avatar').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(".file-upload").on('change', function(){
    readURL(this);
});
});
</script>
<script src="<?php echo base_url(); ?>assets/js/addUser.js" type="text/javascript"></script>