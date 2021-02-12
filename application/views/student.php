<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-users"></i> Student Master List
        <small>Add, Edit, Delete</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                    <a class="btn btn-primary" href="<?php echo base_url(); ?>Student/addStudent"><i class="fa fa-plus"></i> Add New</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
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
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Student List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>userListing" method="POST" id="searchList">
                            <div class="input-group">
                              <input type="text" name="searchText" value="<?php  ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
		<table class="table datatable-responsive">
			<thead>
				<tr>
					<th>Student_ID</th>
					<th>Student_Name</th>
					<th>Fathers_Name</th>
					<th>Student_Mobile_No</th>
					<th>Date_of_Birth</th>
					<th>Sex</th>
					<th>State</th>
					<th class="text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($query as $row): ?>
				<tr>
					
					<td><?=$row['Student_ID']?></td>
					<td><?=$row['Student_Name']?></td>
					<td><?=$row['Fathers_Name']?></td>
					<td><?=$row['Student_Mobile_No']?></td>
					<td><?=$row['Date_of_Birth']?></td>
					<td><?=$row['Sex']?></td>
					<td><?=$row['State']?></td>
					<td class="text-center">
                        <a class="btn btn-sm btn-info" href="<?php echo base_url().'editOld/'.$row['Student_ID']; ?>" title="Edit"><i class="fa fa-pencil"></i></a>
                        <a class="btn btn-sm btn-danger deleteUser" href="#" data-userid="<?php echo $row['Student_ID']; ?>" title="Delete"><i class="fa fa-trash"></i></a>
					</td>

				</tr>
				<?php endforeach ?>
			</tbody>
            </table>
            </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    
                </div>
              </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "userListing/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>      