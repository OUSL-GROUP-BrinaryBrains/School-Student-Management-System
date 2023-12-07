<div class="sidebar-menu" style="color:#001911 ;font-family: system-ui;font-size:14px;">
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
            <a href="<?php echo base_url(); ?>index.php?parents/dashboard" style='font-weight:550;font-size:14px'>
                <i class="fa fa-desktop"></i>
                <span><?php echo ('Dashboard'); ?></span>
            </a>
        </li>
        <!-- NOTICEBOARD -->
        <li class="<?php if ($page_name == 'noticeboard') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?parents/noticeboard" style='font-weight:550;font-size:14px'>
                <i class="fa fa-bullhorn"></i>
                <span><?php echo ('Announcements'); ?></span>
            </a>
        </li>
        <!-- TEACHER -->
        <li class="<?php if ($page_name == 'teacher') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?parents/teacher_list" style='font-weight:550;font-size:14px'>
                <i class="fa fa-group"></i>
                <span><?php echo ('Teachers'); ?></span>
            </a>
        </li>
        <!-- CLASS ROUTINE -->
        <li class="<?php if ($page_name == 'class_routine') echo 'opened active'; ?> ">
            <a href="#" style='font-weight:550;font-size:14px'>
                <i class="fa fa-calendar"></i>
                <span><?php echo ('Class Routine'); ?></span>
            </a>
            <ul>
                <?php
                $children_of_parent = $this->db->get_where('student', array(
                    'parent_id' => $this->session->userdata('parent_id')
                ))->result_array();
                foreach ($children_of_parent as $row) :
                ?>
                    <li class="<?php if ($page_name == 'class_routine') echo 'active'; ?> " style='font-weight:550;font-size:14px'>
                        <a href="<?php echo base_url(); ?>index.php?parents/class_routine/<?php echo $row['student_id']; ?>">
                            <span><i class="fa fa-chevron-circle-right"></i> <?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <!-- EXAMS -->
        <li class="<?php
                    if ($page_name == 'marks') echo 'opened active'; ?> " style='font-weight:550;font-size:14px'>
            <a href="#" style='font-weight:550;font-size:14px'>
                <i class="fa fa-puzzle-piece"></i>
                <span><?php echo ('Exam Marks'); ?></span>
            </a>
            <ul>
                <?php
                foreach ($children_of_parent as $row) :
                ?>
                    <li class="<?php if ($page_name == 'marks') echo 'active'; ?> ">
                        <a href="<?php echo base_url(); ?>index.php?parents/marks/<?php echo $row['student_id']; ?>" style='font-weight:550;font-size:14px'>
                            <span><i class="fa fa-chevron-circle-right"></i> <?php echo $row['name']; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </li>
        <!-- ACCOUNT -->
        <li class="<?php if ($page_name == 'manage_profile') echo 'active'; ?> ">
            <a href="<?php echo base_url(); ?>index.php?parents/manage_profile" style='font-weight:550;font-size:14px'>
                <i class="fa fa-user"></i>
                <span><?php echo ('Account Profile'); ?></span>
            </a>
        </li>
    </ul>
</div>