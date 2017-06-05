    <?php slot('sf_admin.current_header') ?>
        <th  class="sf_admin_text sf_admin_list_th_name" style="text-align: center">
            <?php echo __('Tên danh mục', array(), 'messages') ?>
        </th>
    <?php end_slot(); ?>
<!--    --><?php //include_slot('sf_admin.current_header') ?><!--    --><?php //slot('sf_admin.current_header') ?>
<!--        <th  class="sf_admin_text sf_admin_list_th_image_path" style="text-align: center">-->
<!--            --><?php //echo __('Đường dẫn ảnh', array(), 'messages') ?>
<!--        </th>-->
<!--    --><?php //end_slot(); ?>
    <?php include_slot('sf_admin.current_header') ?>    <?php slot('sf_admin.current_header') ?>
        <th  class="sf_admin_text sf_admin_list_th_link" style="text-align: center">
            <?php echo __('Mô tả', array(), 'messages') ?>
        </th>
    <?php end_slot(); ?>

    <?php include_slot('sf_admin.current_header') ?>    <?php slot('sf_admin.current_header') ?>
    <th  class="sf_admin_text sf_admin_list_th_link" style="text-align: center">
        <?php echo __('Level', array(), 'messages') ?>
    </th>
    <?php end_slot(); ?>

    <?php include_slot('sf_admin.current_header') ?>    <?php slot('sf_admin.current_header') ?>
        <th  class="sf_admin_boolean sf_admin_list_th_is_active" style="width: 65px" style="text-align: center">
            <?php echo __('Trạng thái', array(), 'messages') ?>
        </th>
    <?php end_slot(); ?>
    <?php include_slot('sf_admin.current_header') ?>