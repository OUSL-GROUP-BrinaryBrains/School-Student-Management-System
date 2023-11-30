<?php
$child_of_parent = $this->db->get_where('student', array(
    'student_id' => $student_id
))->result_array();
foreach ($child_of_parent as $row) :
?>
    <hr />
    <div class="label label-primary pull-right" style="font-size: 14px;">
        <i class="entypo-user"></i> <?php echo $row['name']; ?>
    </div>
    <div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
        <div class="col-md-12">
            <!------CONTROL TABS START------>
            <ul class="nav nav-tabs bordered">
                <li class="active">
                    <a href="#list" data-toggle="tab"><i class="entypo-menu"></i>
                        <?php echo ('Class Routine List'); ?>
                    </a>
                </li>
            </ul>
            <!------CONTROL TABS END------>
            <div class="tab-content">
                <!----TABLE LISTING STARTS-->
                <div class="tab-pane active" id="list">
                    <div class="panel-group joined" id="accordion-test-2">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion-test-2" href="#collapse<?php echo $row['class_id']; ?>">
                                        <i class="fa fa-folder"></i> Class of <?php echo $row['name']; ?>
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover table-striped table-bordered">
                                        <tbody>
                                            <?php
                                            for ($d = 1; $d <= 7; $d++) :
                                                if ($d == 1) $day = 'Monday';
                                                else if ($d == 2) $day = 'Tuesday';
                                                else if ($d == 3) $day = 'Wednesday';
                                                else if ($d == 4) $day = 'Thursday';
                                                else if ($d == 5) $day = 'Friday';
                                                else if ($d == 6) $day = 'Saturday';
                                                else if ($d == 7) $day = 'Sunday';
                                            ?>
                                                <tr class="gradeA">
                                                    <td style="font-weight:600; vertical-align:middle;" width="100"><?php echo strtoupper($day); ?></td>
                                                    <td style="font-weight:600; vertical-align:middle;">
                                                        <?php
                                                        $this->db->order_by("time_start", "asc");
                                                        $this->db->where('day', $day);
                                                        $this->db->where('class_id', $row['class_id']);
                                                        $routines    =    $this->db->get('class_routine')->result_array();
                                                        foreach ($routines as $row2) :
                                                        ?>
                                                            <button class="btn btn-primary">
                                                                <?php echo $this->crud_model->get_subject_name_by_id($row2['subject_id']); ?>
                                                                <?php echo '(' . $row2['time_start'] . '-' . $row2['time_end'] . ')'; ?>
                                                            </button>
                                                        <?php endforeach; ?>
                                                    </td style="font-weight:600; vertical-align:middle;">
                                                </tr>
                                            <?php endfor; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!----TABLE LISTING ENDS-->
            </div>
        </div>
    </div>
<?php endforeach; ?>