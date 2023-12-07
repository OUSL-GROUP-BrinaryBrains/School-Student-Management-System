<table class="table table-bordered table-hover table-striped datatable" id="table_export" style="color:#001911 ;font-family: system-ui;font-size:14px;">
    <thead>
        <tr>
            <th width="80">
                <div><?php echo ('Photo'); ?></div>
            </th>
            <th>
                <div><?php echo ('Name'); ?></div>
            </th>
            <th>
                <div><?php echo ('Email'); ?></div>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php
        $teachers    =    $this->db->get('teacher')->result_array();
        foreach ($teachers as $row) : ?>
            <tr>
                <td><img src="<?php echo $this->crud_model->get_image_url('teacher', $row['teacher_id']); ?>" class="img-circle" width="30" /></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!-----  DATA TABLE EXPORT CONFIGURATIONS ----->
<script type="text/javascript">
    jQuery(document).ready(function($) {
        var datatable = $("#table_export").dataTable();
        $(".dataTables_wrapper select").select2({
            minimumResultsForSearch: -1
        });
    });
</script>