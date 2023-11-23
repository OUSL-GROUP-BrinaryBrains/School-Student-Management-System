<hr />
    <table cellpadding="0" cellspacing="0" border="0" class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th><?php echo ('Select date');?></th>
                <th><?php echo ('Select month');?></th>
                <th><?php echo ('Select year');?></th>
                <th><?php echo ('Select class');?></th>
                <th><?php echo ('Select date');?></th>
           </tr>
       </thead>
        <tbody>
            <form method="post" action="<?php echo base_url();?>index.php?teacher/attendance_selector" class="form">
                <tr class="gradeA">
                    <td>
                        <select name="date" class="form-control">
                            <?php for($i=1;$i<=31;$i++):?>
                                <option value="<?php echo $i;?>" 
                                    <?php if(isset($date) && $date==$i)echo 'selected="selected"';?>>
                                        <?php echo $i;?>
                                            </option>
                            <?php endfor;?>
                        </select>
                    </td>
                    <td>
                        <select name="month" class="form-control">
                            <?php 
                            for($i=1;$i<=12;$i++):
                                if($i==1)$m='January';
                                else if($i==2)$m='February';
                                else if($i==3)$m='March';
                                else if($i==4)$m='April';
                                else if($i==5)$m='May';
                                else if($i==6)$m='June';
                                else if($i==7)$m='July';
                                else if($i==8)$m='August';
                                else if($i==9)$m='September';
                                else if($i==10)$m='October';
                                else if($i==11)$m='November';
                                else if($i==12)$m='December';
                            ?>
                                <option value="<?php echo $i;?>"
                                    <?php if($month==$i)echo 'selected="selected"';?>>
                                        <?php echo $m;?>
                                            </option>
                            <?php 
                            endfor;
                            ?>
                        </select>
                    </td>
                    <td>
                        <select name="year" class="form-control">
                            <?php for($i=2030;$i>=2010;$i--):?>
                                <option value="<?php echo $i;?>"
                                    <?php if(isset($year) && $year==$i)echo 'selected="selected"';?>>
                                        <?php echo $i;?>
                                            </option>
                            <?php endfor;?>
                        </select>
                    </td>
                    <td>
                        <select name="class_id" class="form-control">
                            <option value="">Select a class</option>
                            <?php 
                            $classes    =   $this->db->get('class')->result_array();
                            foreach($classes as $row):?>
                            <option value="<?php echo $row['class_id'];?>"
                                <?php if(isset($class_id) && $class_id==$row['class_id'])echo 'selected="selected"';?>>
                                    <?php echo $row['name'];?>
                                        </option>
                            <?php endforeach;?>
                        </select>

                    </td>
                    <td align="center"><input type="submit" value="<?php echo ('Manage Attendance');?>" class="btn btn-info"/></td>
                </tr>
            </form>
        </tbody>
    </table>
<hr />



<?php if($date!='' && $month!='' && $year!='' && $class_id!=''):?>

<center>
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
        
            <div class="tile-stats tile-white-gray">
                <div class="icon"><i class="entypo-suitcase"></i></div>
                <?php
                    $full_date  =   $year.'-'.$month.'-'.$date;
                    $timestamp  = strtotime($full_date);
                    $day        = strtolower(date('l', $timestamp));
                 ?>
                <h2><?php echo ucwords($day);?></h2>
                
                <h3>Attendance of class <?php echo ($class_id);?></h3>
                <p><?php echo $date.'-'.$month.'-'.$year;?></p>
            </div>
            <a href="#" id="update_attendance_button" onclick="return update_attendance()" 
                class="btn btn-info">
                    Update Attendance
            </a>
        </div>

    </div>
</center>
<hr />

<div class="row" id="attendance_list">
    <div class="col-sm-offset-3 col-md-6">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <td><?php echo ('Roll');?></td>
                    <td><?php echo ('Name');?></td>
                    <td><?php echo ('Status');?></td>
                </tr>
            </thead>
            <tbody>

                <?php 
                    $students   =   $this->db->get_where('student' , array('class_id'=>$class_id))->result_array();
                        foreach($students as $row):?>
                        <tr class="gradeA">
                            <td><?php echo $row['roll'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <?php 
                                //inserting blank data for students attendance if unavailable
                                $verify_data    =   array(  'student_id' => $row['student_id'],
                                                            'date' => $full_date);
                                $query = $this->db->get_where('attendance' , $verify_data);
                                if($query->num_rows() < 1)
                                $this->db->insert('attendance' , $verify_data);
                                
                                //showing the attendance status editing option
                                $attendance = $this->db->get_where('attendance' , $verify_data)->row();
                                $status     = $attendance->status;
                            ?>
                        <?php if ($status == 1):?>
                            <td align="center">
                              <span class="badge badge-success"><?php echo ('Present');?></span>  
                            </td>
                        <?php endif;?>
                        <?php if ($status == 2):?>
                            <td align="center">
                              <span class="badge badge-danger"><?php echo ('Absent');?></span>  
                            </td>
                        <?php endif;?>
                        <?php if ($status == 0):?>
                            <td></td>
                        <?php endif;?>
                        </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>
</div>




<div class="row" id="update_attendance">

<!-- STUDENT's attendance submission form here -->
<form method="post" 
    action="<?php echo base_url();?>index.php?teacher/manage_attendance/<?php echo $date.'/'.$month.'/'.$year.'/'.$class_id;?>">
        <div class="col-sm-offset-3 col-md-6">
            <table  class="table table-bordered table-hover table-striped">
                <thead>
                    <tr class="gradeA">
                        <th><?php echo ('Roll');?></th>
                        <th><?php echo ('Name');?></th>
                        <th><?php echo ('Status');?></th>
                    </tr>
                </thead>
                <tbody>
                        
                    <?php 
                    //STUDENTS ATTENDANCE
                    $students   =   $this->db->get_where('student' , array('class_id'=>$class_id))->result_array();
                        
                    foreach($students as $row)
                    {
                        ?>
                        <tr class="gradeA">
                            <td><?php echo $row['roll'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td align="center">
                                <?php 
                                //inserting blank data for students attendance if unavailable
                                $verify_data    =   array(  'student_id' => $row['student_id'],
                                                            'date' => $full_date);
                                $query = $this->db->get_where('attendance' , $verify_data);
                                if($query->num_rows() < 1)
                                $this->db->insert('attendance' , $verify_data);
                                
                                //showing the attendance status editing option
                                $attendance = $this->db->get_where('attendance' , $verify_data)->row();
                                $status     = $attendance->status;
                                ?>
                                
                                
                                    <select name="status_<?php echo $row['student_id'];?>" class="form-control" style="width:100px; float:left;">
                                        <option value="0" <?php if($status == 0)echo 'selected="selected"';?>></option>
                                        <option value="1" <?php if($status == 1)echo 'selected="selected"';?>>Present</option>
                                        <option value="2" <?php if($status == 2)echo 'selected="selected"';?>>Absent</option>
                                    </select>
                                
                            </td>
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>
            <input type="hidden" name="date" value="<?php echo $full_date;?>" />
            <center>
                <input type="submit" class="btn btn-info" value="save changes">
            </center>
        </div>
    
    
</form>
</div>
<?php endif;?>

<script type="text/javascript">

    $("#update_attendance").hide();

    function update_attendance() {

        $("#attendance_list").hide();
        $("#update_attendance_button").hide();
        $("#update_attendance").show();

    }
</script>