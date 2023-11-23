

<div class="row">
	<div class="col-md-12">
                           <?php  

		$today = date('Y-m-d');  
		
		  // $data = $this->db->query("select from acd_session where is_open = 1 AND strt_dt <= '{$today}'
        //AND end_dt >= '{$today}'");
		$data = $this->db->get_where('acd_session' , array('is_open' => 1, 'strt_dt <= ' => $today,'end_dt >= ' => $today))->result_array();
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Academic Session - ".$data[0]['name']; 
		   ?>
    
    	<!------CONTROL TABS START------>
		<ul class="nav nav-tabs bordered">
        
      <li class="active">
            	<a href="#list" data-toggle="tab"><i class="entypo-menu"></i> 
					<?php echo ('Student Application List');?>
                    	</a></li>
        
        	<li>
            	<a href="#add" data-toggle="tab"><i class="entypo-plus-circled"></i>
					<?php echo ('Add Student Application');?>
                    	</a></li>
			
		
		</ul>
    	<!------CONTROL TABS END------>
        
		<div class="tab-content">
            <!----TABLE LISTING STARTS-->
            <div class="tab-pane box active" id="list">
				
                <table class="table table-bordered table-hover table-striped datatable" id="table_export">
                	<thead>
                		<tr>
                    		<th><div>#</div></th>
                             <th width="80"><div><?php echo ('Photo');?></div></th>
                    		<th><div><?php echo ('Full Name');?></div></th>
                    		<th><div><?php echo ('Email');?></div></th>
                            <th><div><?php echo ('Cell No');?></div></th>
                    		<th><div><?php echo ('Pay Status');?></div></th>
                            <th><div><?php echo ('Apply Date');?></div></th>
                    		<th><div><?php echo ('Actions');?></div></th>
                           
						</tr>
					</thead>
                    <tbody>
                    	<?php $count = 1;foreach($osadStudent as $row):?>
                        <tr>
                            <td><?php echo $count++;?></td>
                             <td><img src="<?php echo $this->crud_model->get_image_url('osad_student',$row['id']);?>" class="img-circle" width="30" /></td>
							<td><?php echo $row['name_en'].' ('.$row['name_bn'].')';?></td>
                            <td><?php echo $row['email'];?></td>
                             <td><?php echo $row['phone'];?></td>
							<td><?php echo ($row['pay_status'] == '1' ? "Yes" : "No");?></td>
							<td><?php echo date('d/m/Y',strtotime($row['app_date']));//echo $this->crud_model->get_type_name_by_id('teacher',$row['teacher_id']);?></td>
							<td>
                            
                                                          <a href="<?php echo base_url();?>index.php?admin/osadStudRept/<?php echo $row['id'];?>" target="_blank">
                                            <i class="entypo-doc-text-inv"></i>
                                                <?php echo ('Report');?>
                                            </a>

                              <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_acd_session/<?php echo $row['id'];?>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo ('Edit');?>
                                            </a>
                                            &nbsp;  &nbsp;  &nbsp;
                                              <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/acd_session/delete/<?php echo $row['id'];?>');">
                                            <i class="entypo-trash"></i>
                                                <?php echo ('Delete');?>
                                            </a>
              <!--              <div class="btn-group">
                                <button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown">
                                    Action <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-default pull-right" role="menu">
                                    
                                    <!-- EDITING LINK -->
                         <!--           <li>
                                        <a href="#" onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/modal_edit_acd_session/<?php echo $row['id'];?>');">
                                            <i class="entypo-pencil"></i>
                                                <?php echo ('Edit');?>
                                            </a>
                                                    </li>
                                    <li class="divider"></li>-->
                                    
                                    <!-- DELETION LINK -->
                                   <!-- <li>
                                        <a href="#" onclick="confirm_modal('<?php echo base_url();?>index.php?admin/acd_session/delete/<?php echo $row['id'];?>');">
                                            <i class="entypo-trash"></i>
                                                <?php echo ('Delete');?>
                                            </a>
                                                    </li>
                                </ul>
                            </div>-->
        					</td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
			</div>
            <!----TABLE LISTING ENDS--->
            
          
			<!----CREATION FORM STARTS---->
			<div class="tab-pane box" id="add">


             <br />
                <div class="box-content">
                <?php if(count($data)>0){?>
                	<?php echo form_open(base_url() . 'index.php?admin/online_admission/create' , array('class' => 'form-horizontal form-groups-bordered validate','target'=>'_top'));?>
                    
                    	<input type="text" style="display:none" class="form-control" name="acd_session_id" value="<?php echo $data[0]['id'];?>" data-validate="required" data-message-required="<?php echo ('Value Required');?>" value="">
                        
                        <div class="padded">
      
	                       <div class="col-md-4">   
                           <div class="form-group">
						    <label for="field-1" class="col-sm-5"><?php echo ('Name');?></label>
                             <div class="col-sm-12">
							<input type="text" class="form-control" name="name_bn" data-validate="required" data-message-required="<?php echo ('Value Required');?>" value="" autofocus>
						    </div>
					       </div>
                          </div>
                          
                       <div class="col-md-4">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Name English');?></label>
                         <div class="col-sm-12">
							<input type="text" class="form-control" name="name_en" data-validate="required" data-message-required="<?php echo ('Value Required');?>" value="">
						</div>
					   </div>
				      </div>
                      
                        <div class="col-md-4">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Father Name');?></label>
                         <div class="col-sm-12">
							<input type="text" class="form-control" name="father_name" data-validate="required" data-message-required="<?php echo ('Value Required');?>" value="">
						</div>
					   </div>
				      </div>
                      
                          <div class="col-md-4">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Mother Name');?></label>
                         <div class="col-sm-12">
							<input type="text" class="form-control" name="mother_name" data-validate="required" data-message-required="<?php echo ('Value Required');?>" value="">
						</div>
					   </div>
				      </div>
                      
                      
                                   <div class="col-md-2">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"></label>
                         <div class="col-sm-5">
                         <?php echo ('FFS');?>
							<input type="checkbox" class="form-control" name="ff_son" data-validate="required" data-message-required="<?php echo ('Value Required');?>" value="">
						</div>
					   </div>
				      </div>
                      
                           <div class="col-md-2">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"></label>
                         <div class="col-sm-6">
                         <?php echo ('Upojati');?>
							<input type="checkbox" class="form-control" name="upojati" data-validate="required" data-message-required="<?php echo ('Value Required');?>" value="">
						</div>
					   </div>
				      </div>
                      
                                <div class="col-md-4">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Guardian name');?></label>
                         <div class="col-sm-12">
							<input type="text" class="form-control" name="gardian_name" data-validate="required" data-message-required="<?php echo ('Value Required');?>" value="">
						</div>
					   </div>
				      </div>
                      
              
                      <div class="col-md-4">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Nationality');?></label>
                        
						<div class="col-sm-12">
							<input type="text" class="form-control" name="nationality" data-validate="required" data-message-required="<?php echo ('Value Required');?>" value="">
					</div>
					   </div>
				      </div>
                      
 
                      <div class="col-md-4">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Birthday');?></label>
                        
						<div class="col-sm-12">
							<input type="text" class="form-control datepicker" name="birthday" value="" data-start-view="2">
					</div>
					   </div>
				      </div>
                      
					   <div class="col-md-4">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Religion');?></label>
                         <div class="col-sm-12">
							<select name="religion" class="form-control">
                              <option value=""><?php echo ('Select');?></option>
							  <option value="Christian"><?php echo ('Christian');?></option>
							  <option value="Protestant"><?php echo ('Protestant');?></option>
							  <option value="Jewish"><?php echo ('Jewish');?></option>
							  <option value="Mormons"><?php echo ('Mormons');?></option>
							  <option value="Buddhist"><?php echo ('Buddhist');?></option>
							  <option value="Islam"><?php echo ('Islam');?></option>
							  <option value="Others"><?php echo ('Others');?></option>
                              <option value="Heathen"><?php echo ('Heathen');?></option>
                          </select>
						</div>
					   </div>
				      </div>
       
				
					   <div class="col-md-4">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Gender');?></label>
                        
						 <div class="col-sm-12">
							<select name="sex" class="form-control">
                              <option value=""><?php echo ('Select');?></option>
                              <option value="male"><?php echo ('Male');?></option>
                              <option value="female"><?php echo ('Female');?></option>
                          </select>
					</div>
					   </div>
				      </div>
                      
                      
                      	<div class="col-md-4">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Phone');?></label>
                        
						 <div class="col-sm-12">
							<input type="text" class="form-control" name="phone" value="" >
						</div>
					   </div>
				      </div>
                    
					  	<div class="col-md-4">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Email');?></label>
						 <div class="col-sm-12">
							<input type="text" class="form-control" name="email" value="">
						</div>
					   </div>
				      </div>
                    
					
					  <div class="col-md-4">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Permanent Address');?></label>
                        
						 <div class="col-sm-12">
							
                            <textarea type="text" class="form-control" name="pr_address" value="" ></textarea>
						</div>
					   </div>
				      </div>
                      
                      	  <div class="col-md-4">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Current Address');?></label>
                        
						 <div class="col-sm-12">
							
                            <textarea type="text" class="form-control" name="cur_address" value="" ></textarea>
						</div>
					   </div>
				      </div>
                      
					  <div class="col-md-4">  
                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Technology');?></label>
                        
						
							<select name="technology" class="form-control">
                              <option value=""><?php echo ('Select');?></option>
                              <option value="Textile"><?php echo ('Textile');?></option>
                              <option value="Electrical"><?php echo ('Electrical');?></option>
                          </select>
					</div>
					   </div>
				      </div>
                      <br />

                        <div class="form-group">
						<label for="field-1" class="col-sm-5"><?php echo ('Academic details');?></label>        
<div class="table-responsive">
<input type="text" style="display:none" class="form-control" name="ttldtl" id="ttldtl">
			<table class="table table-bordered table-hover table-striped" id="tab_logic">
				<thead>
					<tr >
						<th class="text-center">
							#
						</th>
						<th class="text-center">
							Exam
						</th>
						<th class="text-center">
							Group/Trade
						</th>
						<th class="text-center">
							Board
						</th>
                        	<th class="text-center">
							Passing Year
						</th>
                        	</th>
                        	<th class="text-center">
							GM Marks
						</th>
                          	</th>
                        	<th class="text-center">
							Total Marks
						</th>
					</tr>
				</thead>
				<tbody>
					<tr id='addr0'>
						<td>
						1
						</td>
						<td>
                        
                        <select name="examtype0" class="form-control">
                              <option value=""><?php echo ('Select');?></option>
                              <option value="SSC-GENERAL"><?php echo ('SSC(General)');?></option>
                              <option value="SSC-VOCATIONAL"><?php echo ('SSC(Vocational)');?></option>
                               <option value="TRADE"><?php echo ('Trade(Two-Years)');?></option>
                               <option value="DAKHIL"><?php echo ('Dakhil(Vocational)');?></option>
                          </select>
						
						</td>
						<td>
						<input type="text" name='group0' placeholder='Group/Trade' class="form-control"/>
						</td>
						<td>
						<input type="text" name='board0' placeholder='Board' class="form-control"/>
						</td>
                        <td>
						<input type="text" name='passing_yr0' placeholder='Passing Year' class="form-control"/>
						</td>
                        
                        <td>
						<input type="text" name='special_mark0' placeholder='Special mark' class="form-control"/>
						</td>
                          <td>
						<input type="text" name='ttl_mark0' placeholder='Total Marks' class="form-control"/>
						</td>
					</tr>
                    <tr id='addr1'></tr>
				</tbody>
			</table>
		
	</div>
	<a id="add_row" class="btn btn-default pull-left">Add Row</a><a id='delete_row' class="pull-right btn btn-default">Delete Row</a>

		   </div>
				     
					
		<!--			<div class="form-group">
						<label for="field-2" class="col-sm-3 control-label"><?php echo ('Password');?></label>
                        
						<div class="col-sm-5">
							<input type="password" class="form-control" name="password" value="" >
						</div> 
					</div>-->
	
					<div class="col-md-4">  
                        <div class="form-group">
						<!--<label for="field-1" class="col-sm-5"><?php echo ('Photo');?></label>-->
                   
						<div class="col-sm-12">
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="width: 100px; height: 100px;" data-trigger="fileinput">
									<img src="http://placehold.it/200x200" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input type="file" name="userfile" accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
						</div>
					</div>
                    </div>
                        <div class="form-group">
                              <div class="col-sm-offset-3 col-sm-5">
                                  <button type="submit" class="btn btn-info"><?php echo ('Online Admission');?></button>
                              </div>
							</div>
                    </form> 
                    <?php } else {?>
                    
                           
      
                  <p style="color:#FF0000; font-size:24px">          
	              Admission Closed 
                   </p>
			  
							
                    <?php }?>               
                </div>                
			</div>
			<!----CREATION FORM ENDS-->
		</div>
	</div>
</div>



<!-----  DATA TABLE EXPORT CONFIGURATIONS ---->                      
<script type="text/javascript">

	jQuery(document).ready(function($)
	{
		

		var datatable = $("#table_export").dataTable({
			"sPaginationType": "bootstrap",
			"sDom": "<'row'<'col-xs-3 col-left'l><'col-xs-9 col-right'<'export-data'T>f>r>t<'row'<'col-xs-3 col-left'i><'col-xs-9 col-right'p>>",
			"oTableTools": {
				"aButtons": [
					
					{
						"sExtends": "xls",
						"mColumns": [1,2]
					},
					{
						"sExtends": "pdf",
						"mColumns": [1,2]
					},
					{
						"sExtends": "print",
						"fnSetText"	   : "Press 'esc' to return",
						"fnClick": function (nButton, oConfig) {
							datatable.fnSetColumnVis(0, false);
							datatable.fnSetColumnVis(3, false);
							
							this.fnPrint( true, oConfig );
							
							window.print();
							
							$(window).keyup(function(e) {
								  if (e.which == 27) {
									  datatable.fnSetColumnVis(0, true);
									  datatable.fnSetColumnVis(3, true);
								  }
							});
						},
						
					},
				]
			},
			
		});
		
		$(".dataTables_wrapper select").select2({
			minimumResultsForSearch: -1
		});
	});
	
	
	 $(document).ready(function(){
      var i=1;
     $("#add_row").click(function(){
      $('#addr'+i).html("<td>"+ (i+1) +"</td><td><select name='examtype"+i+"' class='form-control'><option value=''>select</option><option value='SSC-GENERAL'>SSC(General)</option><option value='SSC-VOCATIONAL'>SSC(Vocational)</option><option value='TRADE'>Trade(Two-Years)</option><option value='DAKHIL'>Dakhil(Vocational)</option></select></td><td><input  name='group"+i+"' type='text' placeholder='Group'  class='form-control input-md'></td><td><input  name='board"+i+"' type='text' placeholder='Board'  class='form-control input-md'></td><td><input  name='passing_yr"+i+"' type='text' placeholder='Passing Year'  class='form-control input-md'></td><td><input  name='special_mark"+i+"' type='text' placeholder='special mark'  class='form-control input-md'></td><td><input  name='ttl_mark"+i+"' type='text' placeholder='Total Marks'  class='form-control input-md'></td>");

      $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
      i++; 
	  $("#ttldtl").val(i);
  });
     $("#delete_row").click(function(){
    	 if(i>1){
		 $("#addr"+(i-1)).html('');
		 i--;
		  $("#ttldtl").val(i);
		 }
	 });
 $("#ttldtl").val(i);
});
		
</script>
