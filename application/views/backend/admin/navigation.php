<div class="sidebar-menu" style="font-family: system-ui;font-size:14px;">
    <header class="logo-env">
        <!-- logo -->
        <div class="logo" style="">
            <a href="<?php echo base_url(); ?>">
                <img src="uploads/logo.png" style="max-height:60px;" />
            </a>
        </div>
        <!-- logo collapse icon -->
        <div class="sidebar-collapse" style="">
            <a href="#" class="sidebar-collapse-icon with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
        <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
        <div class="sidebar-mobile-menu visible-xs">
            <a href="#" class="with-animation">
                <i class="entypo-menu"></i>
            </a>
        </div>
    </header>
    <div style=""></div>
    <ul id="main-menu" class="">
        <!-- add class "multiple-expanded" to allow multiple submenus to open -->
        <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
        <!-- DASHBOARD -->
        <li class="<?php if ($page_name == 'dashboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/dashboard" style='font-weight:550;font-size:14px'>
                <i class="fa fa-desktop"></i>
                <span><?php echo ('Dashboard'); ?></span>
            </a>
        </li>
        <!-- NOTICEBOARD -->
        <li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/noticeboard" style='font-weight:550;font-size:14px'>
                <i class="fa fa-bullhorn"></i>
                <span><?php echo ('Announcements'); ?></span>
            </a>
        </li>
        <!-- CLASS -->
        <li class="<?php
                    if (
                        $page_name == 'class' ||
                        $page_name == 'section'
                    )
                        echo 'opened active';
                    ?> ">
            <a href="#" style='font-weight:550;font-size:14px'>
                <i class="fa fa-sitemap"></i>
                <span><?php echo ('Classes'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'class') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/classes" style='font-weight:550;font-size:14px'>
                        <span><i class="fa fa-chevron-circle-right"></i> <?php echo ('Manage Classes'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'section') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/section" style='font-weight:550;font-size:14px'>
                        <span><i class="fa fa-chevron-circle-right"></i> <?php echo ('Manage Sections'); ?></span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- SUBJECT -->
        <li class="<?php if ($page_name == 'subject') echo 'opened active'; ?> ">
            <a href="#" style='font-weight:550;font-size:14px'>
                <i class="fa fa-book"></i>
                <span><?php echo ('Subjects'); ?></span>
            </a>
            <ul>
                <?php
                $classes = $this->db->get('class')->result_array();
                foreach ($classes as $row) :
                ?>
                    <li class="<?php if ($page_name == 'subject' && $class_id == $row['class_id']) echo 'active'; ?>">
                        <a style='font-weight:550;font-size:14px' href="<?php echo base_url(); ?>index.php?admin/subject/<?php echo $row['class_id']; ?>">
                            <span> <i class="fa fa-chevron-circle-right"></i><?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <!-- CLASS ROUTINE -->
        <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/class_routine" style='font-weight:550;font-size:14px'>
                <i class="fa fa-calendar"></i>
                <span><?php echo ('Class Routine'); ?></span>
            </a>
        </li>
        <!-- PARENTS -->
        <li class="<?php if ($page_name == 'parent') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/parent" style='font-weight:550;font-size:14px'>
                <i class="fa fa-group"></i>
                <span><?php echo ('Parents'); ?></span>
            </a>
        </li>
        <!-- STUDENT -->
        <li class="<?php if (
                        $page_name == 'student_add' ||
                        $page_name == 'student_information' ||
                        $page_name == 'student_marksheet'
                    )
                        echo 'opened active has-sub'; ?> ">
            <a href="#" style='font-weight:550;font-size:14px'>
                <i class="fa fa-group"></i>
                <span><?php echo ('Students'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'student_add') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/student_add" style='font-weight:550;font-size:14px'>
                        <span><i class="fa fa-chevron-circle-right"></i> <?php echo ('Add Student'); ?></span>
                    </a>
                </li>
                <!-- STUDENT INFORMATION -->
                <li class="<?php if ($page_name == 'student_information') echo 'opened active'; ?> ">
                    <a href="#" style='font-weight:550;font-size:14px'>
                        <span><i class="fa fa-chevron-circle-right"></i> <?php echo ('Student Information'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row) :
                        ?>
                            <li class="<?php if ($page_name == 'student_information' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/student_information/<?php echo $row['class_id']; ?>">
                                    <span> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
                <!-- STUDENT MARKSHEET -->
                <li class="<?php if ($page_name == 'student_marksheet') echo 'opened active'; ?> ">
                    <a href="#" style='font-weight:550;font-size:14px'>
                        <span><i class="fa fa-chevron-circle-right"></i> <?php echo ('Student Marksheet'); ?></span>
                    </a>
                    <ul>
                        <?php
                        $classes = $this->db->get('class')->result_array();
                        foreach ($classes as $row) :
                        ?>
                            <li class="<?php if ($page_name == 'student_marksheet' && $class_id == $row['class_id']) echo 'active'; ?>">
                                <a href="<?php echo base_url(); ?>index.php?admin/student_marksheet/<?php echo $row['class_id']; ?>">
                                    <span> <?php echo $row['name']; ?></span>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- TEACHER -->
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/teacher" style='font-weight:550;font-size:14px'>
                <i class="fa fa-users"></i>
                <span><?php echo ('Teachers'); ?></span>
            </a>
        </li>
        <!-- DAILY ATTENDANCE -->
        <li class="<?php if ($page_name == 'manage_attendance') echo 'active'; ?> ">
            <a style='font-weight:550;font-size:14px' href="<?php echo base_url(); ?>index.php?admin/manage_attendance/<?php echo date("d/m/Y"); ?>">
                <i class="fa fa-check-square-o"></i>
                <span><?php echo ('Daily Attendance'); ?></span>
            </a>
        </li>
        <!-- EXAMS -->
        <li class="<?php
                    if (
                        $page_name == 'exam' ||
                        $page_name == 'grade' ||
                        $page_name == 'marks'
                    )
                        echo 'opened active';
                    ?> ">
            <a href="#" style='font-weight:550;font-size:14px'>
                <i class="fa fa-puzzle-piece"></i>
                <span><?php echo ('Examinations'); ?></span>
            </a>
            <ul>
                <li class="<?php if ($page_name == 'exam') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/exam" style='font-weight:550;font-size:14px'>
                        <span><i class="fa fa-chevron-circle-right"></i> <?php echo ('Exams List'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'grade') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/grade" style='font-weight:550;font-size:14px'>
                        <span><i class="fa fa-chevron-circle-right"></i> <?php echo ('Manage Grading'); ?></span>
                    </a>
                </li>
                <li class="<?php if ($page_name == 'marks') echo 'active'; ?> ">
                    <a href="<?php echo base_url(); ?>index.php?admin/marks" style='font-weight:550;font-size:14px'>
                        <span><i class="fa fa-chevron-circle-right"></i> <?php echo ('Manage Marks'); ?></span>
                    </a>
                </li>
            </ul>
        </li>
        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/manage_profile" style='font-weight:550;font-size:14px'>
                <i class="fa fa-user"></i>
                <span><?php echo ('Account Profile'); ?></span>
            </a>
        </li>
        <!-- SETTINGS -->
        <li class="<?php if ($page_name == 'system_settings') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?admin/system_settings" style='font-weight:550;font-size:14px'>
                <i class="fa fa-cogs"></i>
                <span> <?php echo ('System Settings'); ?></span>
            </a>
        </li>
    </ul>
</div>