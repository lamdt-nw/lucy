<script type="text/javascript" id="divi-custom-script-js-extra">
    var et_pb_custom = {"ajaxurl": "https:\/\/katybeautylashes.com\/wp-admin\/admin-ajax.php",
                  "images_uri": "https:\/\/katybeautylashes.com\/wp-content\/themes\/Divi\/images",
                  "builder_images_uri": "https:\/\/katybeautylashes.com\/wp-content\/themes\/Divi\/includes\/builder\/images",
                  "et_frontend_nonce": "60f2bf4766",
                  "subscription_failed": "Please, check the fields below to make sure you entered the correct information.",
                  "et_ab_log_nonce": "37d1792b4a",
                  "fill_message": "Please, fill in the following fields:",
                  "contact_error_message": "Please, fix the following errors:",
                  "invalid": "Invalid email",
                  "captcha": "Captcha",
                  "prev": "Prev",
                  "previous": "Previous",
                  "next": "Next",
                  "wrong_captcha": "You entered the wrong number in captcha.",
                  "wrong_checkbox": "Checkbox",
                  "ignore_waypoints": "no",
                  "is_divi_theme_used": "1",
                  "widget_search_selector": ".widget_search",
                  "ab_tests": [],
                  "is_ab_testing_active": "",
                  "page_id": "73",
                  "unique_test_id": "",
                  "ab_bounce_rate": "5",
                  "is_cache_plugin_active": "no",
                  "is_shortcode_tracking": "",
                  "tinymce_uri": "https:\/\/katybeautylashes.com\/wp-content\/themes\/Divi\/includes\/builder\/frontend-builder\/assets\/vendors",
                  "accent_color": "#543e40",
                  "waypoints_options": []};
/* ]]> */
</script>
<script src=<?php echo e(asset("themes/frontend/lucy/new_js/scripts.min.js?ver=4.23.1")); ?>></script>
<link rel='stylesheet' href=<?php echo e(asset('themes/frontend/lucy/new_js/style-static.min.css?ver=4.23.1')); ?> media='all' />
<link rel='stylesheet' href=<?php echo e(asset('themes/frontend/lucy/new_js/et-core-unified-tb-226179-tb-224344-deferred-73.min.css?ver=1701704625')); ?> media='all' />
<?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($question->block_code == 'question' and $question->parent_id == ''): ?>
  <style>
    div.et_pb_section.et_pb_section_5 {
        background-image: linear-gradient(180deg,rgba(0,0,0,0.58) 0%,rgba(0,0,0,0.41) 100%),url(<?php echo e($question->image_background); ?>)!important;
    }
  </style>
    <div class="et_pb_section et_pb_section_5 et_pb_with_background et_section_regular">
      <div class="et_pb_row et_pb_row_6">
        <div class="et_pb_column et_pb_column_4_4 et_pb_column_15  et_pb_css_mix_blend_mode_passthrough et-last-child">
          <div class="et_pb_with_border et_pb_module et_pb_text et_pb_text_6 et_hover_enabled et_pb_text_align_left et_pb_bg_layout_light">
            <div class="et_pb_text_inner">
              <h2 style="text-align: center;">
                <?php echo e($question->title->$locale); ?>

              </h2>
              <h4 style="text-align: center;">
                <?php echo e($question->brief->$locale); ?>

              </h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<div class="et_pb_section et_pb_section_6 et_section_regular">
  <div class="et_pb_row et_pb_row_7">

    <?php
      // Chuyển đối tượng thành mảng
      $blocksContentArray = json_decode(json_encode($blocksContent), true);
      // Lọc ra các phần tử thỏa mãn điều kiện
      $filteredContent = array_filter($blocksContentArray, function ($question_child) {
          return $question_child['block_code'] == 'question' && $question_child['parent_id'] != '';
      });
      // Đếm số lượng câu hỏi
      $countQuestions = count($filteredContent);
     // dd($countQuestions);
      // Số cột bạn muốn hiển thị
      $numberOfColumns = 3;
      // Chia mảng thành các phần nhỏ tương ứng với số cột
      $columns = array_chunk($filteredContent, ceil($countQuestions / $numberOfColumns));
      // dd($columns);
    ?>
        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $columnIndex => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="et_pb_column et_pb_column_1_3 et_pb_column_16  et_pb_css_mix_blend_mode_passthrough">
            <?php $__currentLoopData = $column; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <div class="et_pb_module et_pb_toggle et_pb_toggle_0 et_pb_toggle_item  et_pb_toggle_close">
                  <h5 class="et_pb_toggle_title">
                    <?php echo e($question_list['title'][$locale]); ?>

                  </h5>
                  <div class="et_pb_toggle_content clearfix">
                    <div class="vc_tta-panel-body">
                      <div class="wpb_text_column wpb_content_element ">
                        <div class="wpb_wrapper">
                          <?php echo $question_list['content'][$locale]; ?>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/element/question.blade.php ENDPATH**/ ?>