<section class="elementor-section elementor-top-section elementor-element elementor-element-40d4a7ba elementor-section-boxed elementor-section-height-default elementor-section-height-default"
  data-id="40d4a7ba" data-element_type="section">
  <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-645529b2"
    data-id="645529b2" data-element_type="column">
      <div class="elementor-widget-wrap elementor-element-populated">
        <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $why_different): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($why_different->block_code == 'why_different' and $why_different->parent_id == ''): ?>
            <div class="elementor-element elementor-element-6fbdbe58 elementor-widget elementor-widget-heading"
            data-id="6fbdbe58" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  <?php echo e($why_different->title->$locale); ?>

                </h2>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php
          // Chuyển đối tượng thành mảng
          $blocksContentArray = json_decode(json_encode($blocksContent), true);
          // Lọc ra các phần tử thỏa mãn điều kiện
          $filteredContent = array_filter($blocksContentArray, function ($why_child) {
              return $why_child['block_code'] == 'why_different' && $why_child['parent_id'] != '';
          });
          // Đếm số lượng
          $countList = count($filteredContent);
          // Số cột muốn hiển thị
          $numberOfColumns = 2;
          // Chia mảng thành các phần nhỏ tương ứng với số cột
          $columns = array_chunk($filteredContent, ceil($countList / $numberOfColumns));
        ?>
        <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $columnIndex => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <section class="elementor-section elementor-inner-section elementor-element elementor-element-7a74b91f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
          data-id="7a74b91f" data-element_type="section">
            <div class="elementor-container elementor-column-gap-default">
              <?php $__currentLoopData = $column; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7096434d"
                  data-id="7096434d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                      <div class="elementor-element elementor-element-635c63f3 elementor-widget elementor-widget-image"
                      data-id="635c63f3" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                          <img loading="lazy" decoding="async" width="600" height="600" src="<?php echo e($item_list['image']); ?>" alt="" srcset="<?php echo e($item_list['image']); ?>"
                          sizes="(max-width: 600px) 100vw, 600px" />
                        </div>
                      </div>
                      <div class="elementor-element elementor-element-315f96d elementor-widget elementor-widget-heading"
                      data-id="315f96d" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                          <h2 class="elementor-heading-title elementor-size-default">
                            <?php echo e($item_list['title'][$locale]); ?>

                          </h2>
                        </div>
                      </div>
                      <div class="elementor-element elementor-element-5f3f0858 elementor-widget elementor-widget-text-editor"
                      data-id="5f3f0858" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                          <p>
                            <?php echo $item_list['content'][$locale]; ?>

                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
</section><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/element/why_diffirent.blade.php ENDPATH**/ ?>