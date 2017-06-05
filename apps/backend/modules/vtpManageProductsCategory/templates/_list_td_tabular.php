  
  <td class="sf_admin_text sf_admin_list_td_name" field="name">
      <?php echo link_to(VtHelper::truncate($vtp_products_category->getName(), 50, '...', true), 'vtp_products_category_edit',$vtp_products_category)  ?>
  </td>      
<!--  <td class="sf_admin_text sf_admin_list_td_image_path" field="image_path">-->
<!--      <image src="--><?php //echo VtHelper::getUrlImagePathThumb(sfConfig::get('app_category_images'), $vtp_products_category->getImagePath()) ?><!--" />-->
<!--  </td>      -->
  <td class="sf_admin_text sf_admin_list_td_link" field="link"><?php echo  VtHelper::truncate($vtp_products_category->description, 50, '...', true)  ?></td>
  <td class="sf_admin_text sf_admin_list_td_link" field="link"><?php echo  VtHelper::truncate($vtp_products_category->level, 50, '...', true)  ?></td>
  <td class="sf_admin_boolean sf_admin_list_td_is_active" field="is_active"><?php echo get_partial('vtpManageProductsCategory/list_field_boolean', array('value' =>  VtHelper::truncate($vtp_products_category->getIsActive(), 50, '...', true) )) ?></td>