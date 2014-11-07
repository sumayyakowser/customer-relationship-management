<!DOCTYPE html>
<html>
    <?php $this->load->view('header'); ?>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <?php $this->load->view('top'); ?>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <?php $this->load->view('sidebar-userpanel'); ?>
                    <!-- search form -->
                    <?php $this->load->view('sidebar-search'); ?>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <?php $this->load->view('sidebar-menu'); ?>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php echo $top_title;?>
                        <small><?php echo $top_desc;?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo $top_title;?></li>
                    </ol>
                </section>

                <!-- Main content -->
                <section class="content">
                <form action="<?php echo base_url('jobs/index/add'); ?>" method="post">
                <div class="row">
                        <div class="col-md-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Add Job</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                
                                <table class="table table-striped">
                                        <tbody>
                                       
                                        <tr>
                                            
                                            <td align="right" width="100">Job Title</td>
                                            <td>
                                            
                                               <div class="col-xs-5">
                                            		<input type="text" class="form-control input-sm" placeholder="" name="job_title">
                                        		</div>
                                        	
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right">Type</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<select class="form-control" name="job_type" REQUIRED>
		                                                <option></option>
                                                        <option>Web design</option>
		                                                <option>Database design</option>
		                                                
                                            		</select>
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right">Hourly Rate</td>
                                            <td>
                                               <div class="col-xs-2">
                                            		 <input type="text" class="form-control input-sm" placeholder="" name="job_hour">
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right">Status</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<select class="form-control" name="job_status">
		                                                <option value="0">New</option>
		                                                <option value="1">Existing</option>
		                                                
                                            		</select>
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right">Quote Date</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<div class="input-group">
			                                            <div class="input-group-addon">
			                                                <i class="fa fa-calendar"></i>
			                                            </div>
		                                            		<input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="job_quote_date">
		                                        	</div>
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right">Start Date</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<div class="input-group">
			                                            <div class="input-group-addon">
			                                                <i class="fa fa-calendar"></i>
			                                            </div>
		                                            		<input type="date" class="form-control datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="job_date_start">
		                                        	</div>
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right">Start Time</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<div class="input-group">
	                                            		 <div class="input-group-addon">
				                                                    <i class="fa fa-clock-o"></i>
				                                         </div>
	                                                	<input type="text" class="form-control timepicker" name="job_start_time">
			                                               
                                            		</div>
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                         <tr>
                                            
                                            <td align="right">End Time</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<div class="input-group">
	                                            		 <div class="input-group-addon">
				                                                    <i class="fa fa-clock-o"></i>
				                                         </div>
	                                                	<input type="text" class="form-control timepicker" name="job_end_time">
			                                               
                                            		</div>
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right">Due Date</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<div class="input-group">
			                                            <div class="input-group-addon">
			                                                <i class="fa fa-calendar"></i>
			                                            </div>
		                                            		<input type="date" class="form-control input-sm datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="job_due_date">
		                                        	</div>
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right">Finished Date</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<div class="input-group">
			                                            <div class="input-group-addon">
			                                                <i class="fa fa-calendar"></i>
			                                            </div>
		                                            		<input type="date" class="form-control input-sm datepicker" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="job_complete_date">
		                                        	</div>
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                         <tr>
                                            
                                            <td align="right">Staff Member</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<select class="form-control" name="user_id">
		                                                <?php 
		                                                foreach ($staff as $key => $value) {?>
		                                                	<option value="<?php echo $value['user_id']; ?>"><?php echo $value['first_name'].' '.$value['last_name'];?></option>
		                                              <?php  } ?>
		                                                
                                            		</select>
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right">Tax</td>
                                            <td>
                                               <div class="col-xs-2">
                                            		<input type="text" class="form-control input-sm" placeholder="" name="job_tax">
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right">Currency</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<select class="form-control" name="job_currency">
		                                                <option value="0">RM</option>
		                                                <option value="1">USD</option>
		                                                <option value="2">AUD</option>
		                                                
                                            		</select>
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                         <tr>
                                            
                                            <td align="right"></td>
                                            <td>
                                            <div class="col-xs-5">
                                            	<button class="btn btn-warning btn-sm" type="reset">Reset</button>
                                               <input class="btn btn-primary btn-sm" name="save" type="submit" value="Save">

                                            </div>
                                            </td>
                                           
                                        </tr>
                                        
                                    </tbody></table>

                                    
                               
                                    
                                </div><!-- /.box-body -->
                               


                               
                            </div><!-- /.box -->


















 						<div class="col-bg-6">
                            		<div class="box">
                                		<div class="box-header">
                                    		<h3 class="box-title">Job Description</h3>
                                    	</div>
                                    	 <div class="box-body">
				                                <table class="table table-striped">
				                                        <tbody>
				                                       
				                                        <tr>
				                                            
				                                            
				                                            <td>
				                                            
				                                               <div class="col-xs-12">
				                                            		<textarea class="form-control" rows="3" placeholder="" name="job_description"></textarea>
				                                        		</div>
				                                        	
				                                            </td>
				                                           
				                                        </tr>
				                                        
				                                        
				                                    </tbody></table>
				                     	</div>
				                    </div>
				        </div>










				        <div class="col-bg-6">
                            		<div class="box">
                                		<div class="box-header">
                                    		<h3 class="box-title">Advanced</h3>
                                    	</div>
                                    	 <div class="box-body">
				                                <table class="table table-striped">
                                        <tbody>
                                       
                                        <tr>
                                            
                                            <td align="right" width="100">Assign Website</td>
                                            <td>
                                            
                                               <div class="col-xs-5">
                                            		<select class="form-control" name="website_id">
		                                                <?php 
		                                                foreach ($website as $value ) {
		                                                	?>
		                                                	<option value="<?php echo $value['website_id'];?>"><?php echo $value['website_url'];?></option>
		                                              <?php  } ?>
		                                                
                                            		</select>
                                        		</div>
                                        	
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right" width="100">Assign Customers</td>
                                            <td>
                                            
                                               <div class="col-xs-5">
                                            		<select class="form-control" name="customer_id">
		                                                <?php 
		                                                foreach ($customer as $value ) {
		                                                	?>
		                                                	<option value="<?php echo $value['customer_id'];?>"><?php echo $value['customer_name'];?></option>
		                                              <?php  } ?>
		                                                
                                            		</select>
                                        		</div>
                                        	
                                            </td>
                                           
                                        </tr>
                                      <!--  
									Database Quote not ready yet...waiting from ZACK
                                      <tr>
                                            
                                            <td align="right" width="100">Assign Customers</td>
                                            <td>
                                            
                                               <div class="col-xs-5">
                                            		<select class="form-control" name="job_type">
		                                                <?php 
		                                                foreach ($customer as $value ) {
		                                                	?>
		                                                	<option value="<?php echo $value['customer_id'];?>"><?php echo $value['customer_name'];?></option>
		                                              <?php  } ?>
		                                                
                                            		</select>
                                        		</div>
                                        	
                                            </td>
                                           
                                        </tr> -->


                                        <!-- need to add automatic renewal tick checkbox -->
                                        <tr>
                                            
                                            <td align="right">Renewal Date</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<div class="input-group">
			                                            <div class="input-group-addon">
			                                                <i class="fa fa-calendar"></i>
			                                            </div>
		                                            		<input type="date" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="" name="job_renewal_date">
		                                        	</div>
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right">Task type</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<select class="form-control" name="job_task_type">
		                                                <option value="0">Hourly rate & Amount</option>
		                                                <option value="1">Quantity & Amount</option>
		                                                <option value="2">Amount Only</option>
		                                                
                                            		</select>
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right">Discount Amount</td>
                                            <td>
                                               <div class="col-xs-2">
                                            		<input type="text" class="form-control input-sm" placeholder="" name="job_discount_amount">
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                         <tr>
                                            
                                            <td align="right">Discount Name</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<input type="text" class="form-control input-sm" placeholder="" name="job_discount_name">
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                        <tr>
                                            
                                            <td align="right">Discount type</td>
                                            <td>
                                               <div class="col-xs-5">
                                            		<select class="form-control" name="job_discount_type">
		                                                <option value="0">Before Tax</option>
		                                                <option value="1">After Tax</option>
		                                                
		                                                
                                            		</select>
                                        		</div>
                                            </td>
                                           
                                        </tr>
                                         <tr>
                                            
                                            <td align="right"></td>
                                            <td>
                                            <div class="col-xs-5">
                                            	<button class="btn btn-warning btn-sm" type="reset">Reset</button>
                                               <input class="btn btn-primary btn-sm" name="save" type="submit" value="Save">

                                            </div>
                                            </td>
                                           
                                        </tr>
                                        
                                    </tbody></table>
				                     	</div>
				                    </div>
				        </div>
























                            
                        </div><!-- /.col -->




                        <div class="col-md-6">
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Simple Full Width Table</h3>
                                    <div class="box-tools">
                                        <ul class="pagination pagination-sm no-margin pull-right">
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div><!-- /.box-header -->
                                <div class="box-body no-padding">
                                    <table class="table">
                                        <tbody><tr>
                                            <th style="width: 10px">#</th>
                                            <th>Task</th>
                                            <th>Progress</th>
                                            <th style="width: 40px">Label</th>
                                        </tr>
                                        <tr>
                                            <td>1.</td>
                                            <td>Update software</td>
                                            <td>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-red">55%</span></td>
                                        </tr>
                                        <tr>
                                            <td>2.</td>
                                            <td>Clean database</td>
                                            <td>
                                                <div class="progress xs">
                                                    <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-yellow">70%</span></td>
                                        </tr>
                                        <tr>
                                            <td>3.</td>
                                            <td>Cron job running</td>
                                            <td>
                                                <div class="progress xs progress-striped active">
                                                    <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-light-blue">30%</span></td>
                                        </tr>
                                        <tr>
                                            <td>4.</td>
                                            <td>Fix and squish bugs</td>
                                            <td>
                                                <div class="progress xs progress-striped active">
                                                    <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-green">90%</span></td>
                                        </tr>
                                    </tbody></table>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            
                        </div><!-- /.col -->
                    </div>

				
				<!--<script type="text/javascript" charset="utf-8">
				$(document).ready(function(){
					$(".calendar .day").click(function(){

						day_num = $(this).find(".day_num").html();

						day_data = prompt("予定を入力", $(this).find(".content").html());

						if( day_data != null ){
							$.ajax({
								url:window.location,
								type:"POST",
								data:{
									day:day_num,

									data:day_data
								},
								success:function(msg){
									location.reload();
								}
							});
						}
					})
				})
				</script>-->
                </form>
                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>
    </body>
</html>