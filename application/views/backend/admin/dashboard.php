<div class="row">
    <div class="col-md-12">
        <div class="row" style="color:#001911 ;font-size:14px;">
            <!-- Dashboard Tiles -->
            <div class="col-md-4">
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-graduation-cap"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('student'); ?>" data-postfix="" data-duration="1500" data-delay="0">0</div>
                    <h3><?php echo ('Total Students'); ?></h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('teacher'); ?>" data-postfix="" data-duration="800" data-delay="0">0</div>
                    <h3><?php echo ('Total Teachers'); ?></h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-calendar"></i></div>
                    <?php
                    $check = array('date' => date('Y-m-d'), 'status' => '1');
                    $query = $this->db->get_where('attendance', $check);
                    $present_today        =    $query->num_rows(); ?>
                    <div class="num" data-start="0" data-end="<?php echo $present_today; ?>" data-postfix="" data-duration="500" data-delay="0">0</div>
                    <h3><?php echo ('Today Attendance'); ?></h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-user"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('parent'); ?>" data-postfix="" data-duration="500" data-delay="0">0</div>
                    <h3><?php echo ('Total Parents'); ?></h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-flow-tree"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('class'); ?>" data-postfix="" data-duration="500" data-delay="0">0</div>
                    <h3><?php echo ('Available Classes'); ?></h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-alert"></i></div>
                    <div class="num" data-start="0" data-end="<?php echo $this->db->count_all('noticeboard'); ?>" data-postfix="" data-duration="500" data-delay="0">0</div>
                    <h3><?php echo ('Notices'); ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>