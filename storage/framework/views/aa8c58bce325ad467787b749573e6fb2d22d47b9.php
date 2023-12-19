<style>
  .pxl-pagination-wrap .page-numbers.next, .pxl-pagination-wrap .page-numbers.prev {
      color: red;
  }
  .pxl-pagination-wrap .page-numbers.current, .pxl-pagination-wrap .page-numbers:hover {
      background-color: red;
      color: #fff;
  }
</style>
<?php if($paginator->hasPages()): ?>
<div class="pxl-grid-pagination" data-loadmore="{&quot;tax&quot;:[&quot;category&quot;],&quot;post_type&quot;:&quot;post&quot;,&quot;layout&quot;:&quot;post-2&quot;,&quot;startPage&quot;:1,&quot;maxPages&quot;:2,&quot;total&quot;:12,&quot;perpage&quot;:&quot;6&quot;,&quot;nextLink&quot;:&quot;https:\/\/demo.bravisthemes.com\/immigway\/blog-list\/page\/2\/&quot;,&quot;source&quot;:&quot;&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;desc&quot;,&quot;limit&quot;:&quot;6&quot;,&quot;post_ids&quot;:[],&quot;col_xl&quot;:6,&quot;col_lg&quot;:6,&quot;col_md&quot;:6,&quot;col_sm&quot;:12,&quot;col_xs&quot;:12,&quot;pagination_type&quot;:&quot;pagination&quot;,&quot;show_comment_count&quot;:&quot;true&quot;,&quot;show_date&quot;:&quot;true&quot;,&quot;show_button&quot;:&quot;true&quot;,&quot;button_text&quot;:&quot;&quot;,&quot;show_excerpt&quot;:&quot;true&quot;,&quot;num_words&quot;:25,&quot;line_words&quot;:2,&quot;img_size&quot;:&quot;&quot;,&quot;grid_masonry&quot;:&quot;&quot;,&quot;pxl_animate&quot;:&quot;&quot;}" data-query="{&quot;post_type&quot;:&quot;post&quot;,&quot;posts_per_page&quot;:6,&quot;order&quot;:&quot;desc&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;tax_query&quot;:{&quot;relation&quot;:&quot;OR&quot;},&quot;post__not_in&quot;:[245]}">
  <nav class="pxl-pagination-wrap ajax">
    <div class="pxl-pagination-links">
      <?php if($paginator->onFirstPage()): ?>
        
      <?php else: ?>
        <a class="prev page-numbers" href="<?php echo e($paginator->previousPageUrl()); ?>">
          <i class="fas fa-chevron-left"></i>
        </a>
      <?php endif; ?>

      <?php $__currentLoopData = $elements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(is_string($element)): ?>
          <span aria-current="page" class="page-numbers current"><?php echo e($element); ?></span>
        <?php endif; ?>

        
        <?php if(is_array($element)): ?>
          <?php $__currentLoopData = $element; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($page == $paginator->currentPage()): ?>
              <span aria-current="page" class="page-numbers current"><?php echo e($page); ?></span>
            <?php else: ?>
              <a class="page-numbers" href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
            <?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <?php if($paginator->hasMorePages()): ?>
      <a class="next page-numbers" href="<?php echo e($paginator->nextPageUrl()); ?>">
        <i class="fas fa-chevron-right"></i>
      </a>
    <?php else: ?>
      
    <?php endif; ?>

      
    </div>
  </nav>
</div>
<?php endif; ?>

<?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/pagination/default.blade.php ENDPATH**/ ?>