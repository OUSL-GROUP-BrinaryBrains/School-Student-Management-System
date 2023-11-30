<?php
$student_info    =    $this->crud_model->get_student_info($param2);
foreach ($student_info as $row) : ?>
    <div class="profile-env">
        <header class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
            <div class="col-sm-3">
                <a href="#" class="profile-picture">
                    <img src="<?php echo $this->crud_model->get_image_url('student', $row['student_id']); ?>" class="img-responsive img-circle" />
                </a>
            </div>
            <div class="col-sm-9">
                <ul class="profile-info-sections">
                    <li style="padding:0px; margin:0px;">
                        <div class="profile-name">
                            <h2 style="font-weight: 600; color:#008055"><?php echo $row['name']; ?></h2>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <section class="profile-info-tabs">
            <div class="row" style="color:#001911 ;font-family: system-ui;font-size:14px;">
                <div class="">
                    <br>
                    <table class="table table-bordered table-hover table-striped">
                        <?php if ($row['class_id'] != '') : ?>
                            <tr>
                                <td style="font-weight: 600; color:#008055">Class</td>
                                <td><b><?php echo $this->crud_model->get_class_name($row['class_id']); ?></b></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($row['section_id'] != '' && $row['section_id'] != 0) : ?>
                            <tr>
                                <td style="font-weight: 600; color:#008055">Section</td>
                                <td><b><?php echo $this->db->get_where('section', array('section_id' => $row['section_id']))->row()->name; ?></b></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($row['index_no'] != '') : ?>
                            <tr>
                                <td style="font-weight: 600; color:#008055">Index No</td>
                                <td><b><?php echo $row['index_no']; ?></b></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($row['birthday'] != '') : ?>
                            <tr>
                                <td style="font-weight: 600; color:#008055">Birthday</td>
                                <td><b><?php echo $row['birthday']; ?></b></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($row['gender'] != '') : ?>
                            <tr>
                                <td style="font-weight: 600; color:#008055">Gender</td>
                                <td><b><?php echo $row['gender']; ?></b></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($row['phone'] != '') : ?>
                            <tr>
                                <td style="font-weight: 600; color:#008055">Phone</td>
                                <td><b><?php echo $row['phone']; ?></b></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($row['email'] != '') : ?>
                            <tr>
                                <td style="font-weight: 600; color:#008055">Email</td>
                                <td><b><?php echo $row['email']; ?></b></td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($row['address'] != '') : ?>
                            <tr>
                                <td style="font-weight: 600; color:#008055">Address</td>
                                <td><b><?php echo $row['address']; ?></b>
                                </td>
                            </tr>
                        <?php endif; ?>
                        <?php if ($row['parent_id'] != '') : ?>
                            <tr>
                                <td style="font-weight: 600; color:#008055">Parent</td>
                                <td><b><?php echo $this->db->get_where('parent', array('parent_id' => $row['parent_id']))->row()->name; ?></b></td>
                            </tr>
                            <tr>
                                <td style="font-weight: 600; color:#008055">Parent Phone</td>
                                <td><b><?php echo $this->db->get_where('parent', array('parent_id' => $row['parent_id']))->row()->phone; ?></b></td>
                            </tr>
                        <?php endif; ?>
                    </table>
                </div>
            </div>
        </section>
    </div>
<?php endforeach; ?>