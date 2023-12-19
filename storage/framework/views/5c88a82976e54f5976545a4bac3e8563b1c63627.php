<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
  jQuery(document).ready(function(){
    jQuery('.elementor-inner-section-carousel').owlCarousel({
      items: 3, // Số lượng cột hiển thị
      loop: true, // Lặp lại slide
      margin: 10, // Khoảng cách giữa các slide
      nav: false, // Hiển thị nút điều hướng
      dots: false,
      responsive:{
        0:{
          items: 1
        },
        600:{
          items: 1
        },
        1000:{
          items: 3 // Hiển thị 3 item trên màn hình lớn hơn
        }
      }
    });
  });
</script>
<style>
  .owl-prev, .owl-next {
    font-size: 24px;
    color: #000; /* Màu mũi tên */
  }
  .elementor-168 .elementor-element.elementor-element-23b731d6 {
    width: 100%;
  }
</style>
<style>
  /*! elementor - v3.15.0 - 02-08-2023 */ .elementor-testimonial-wrapper{overflow:hidden;text-align:center}.elementor-testimonial-wrapper
  .elementor-testimonial-content{font-size:1.3em;margin-bottom:20px}.elementor-testimonial-wrapper
  .elementor-testimonial-name{line-height:1.5;display:block}.elementor-testimonial-wrapper
  .elementor-testimonial-job{font-size:.85em;display:block}.elementor-testimonial-wrapper
  .elementor-testimonial-meta{width:100%;line-height:1}.elementor-testimonial-wrapper
  .elementor-testimonial-meta-inner{display:inline-block}.elementor-testimonial-wrapper
  .elementor-testimonial-meta .elementor-testimonial-details,.elementor-testimonial-wrapper
  .elementor-testimonial-meta .elementor-testimonial-image{display:table-cell;vertical-align:middle}.elementor-testimonial-wrapper
  .elementor-testimonial-meta .elementor-testimonial-image img{width:60px;height:60px;border-radius:50%;-o-object-fit:cover;object-fit:cover;max-width:none}.elementor-testimonial-wrapper
  .elementor-testimonial-meta.elementor-testimonial-image-position-aside
  .elementor-testimonial-image{padding-right:15px}.elementor-testimonial-wrapper
  .elementor-testimonial-meta.elementor-testimonial-image-position-aside
  .elementor-testimonial-details{text-align:left}.elementor-testimonial-wrapper
  .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-details,.elementor-testimonial-wrapper
  .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-image{display:block}.elementor-testimonial-wrapper
  .elementor-testimonial-meta.elementor-testimonial-image-position-top .elementor-testimonial-image{margin-bottom:20px}
</style>
<style>
  .elementor-testimonial-meta-inner {
    display: flex;
    align-items: center;
  }

  .elementor-testimonial-avatar {
    margin-right: 10px;
  }

  .avatar-img {
    width: 50px !important;
    height: 50px !important;
    border-radius: 50%;
    object-fit: cover;
  }

  .elementor-testimonial-content {
    display: flex;
    align-items: center;
    margin-right: auto; /* Đẩy nội dung về bên trái */
  }

  .elementor-testimonial-name {
    font-weight: bold;
    font-size: 18px;
    margin-right: 10px; /* Khoảng cách giữa tên và ảnh avatar */
  }

  .elementor-testimonial-rating {
    display: flex;
    align-items: center;
    margin-right: 0px; /* Khoảng cách giữa đánh giá và thời gian */
  }

  .elementor-testimonial-rating-star {
    display: flex;
    align-items: center;
    margin-left: 10px; /* Khoảng cách giữa đánh giá và thời gian */
  }

  .rating {
    color: #f7d10d; /* Màu sao vàng */
    font-size: 16px;
  }

  .elementor-testimonial-time {
    font-size: 14px;
    color: #777;
  }

  .elementor-testimonial-google {
    margin-left: 0px; /* Khoảng cách giữa thời gian và hình ảnh Google logo */
  }

  .elementor-testimonial-google img {
    max-width: 60px;
    height: auto;
  }
  .elementor-testimonial-bottom-row {
    display: flex;
    align-items: center;
    margin-top: 5px;
  }
</style>
<section class="elementor-section elementor-top-section elementor-element elementor-element-1866ece2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
data-id="1866ece2" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
  <div class="elementor-background-overlay">
  </div>
  <div class="elementor-container elementor-column-gap-default">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-98dfd0 animated-slow elementor-invisible"
    data-id="98dfd0" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeIn&quot;,&quot;animation_delay&quot;:500}">
      <div class="elementor-widget-wrap elementor-element-populated">
        <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($comment->block_code == 'comment' and $comment->parent_id == ''): ?>
            <div class="elementor-element elementor-element-39ecda7c elementor-widget elementor-widget-heading"
            data-id="39ecda7c" data-element_type="widget" data-widget_type="heading.default">
              <div class="elementor-widget-container">
                <h2 class="elementor-heading-title elementor-size-default">
                  <?php echo e($comment->title->$locale); ?>

                </h2>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <section class="elementor-section elementor-inner-section elementor-element elementor-element-47cc1cb9 elementor-section-boxed elementor-section-height-default elementor-section-height-default "
        data-id="47cc1cb9" data-element_type="section">
          <div class="elementor-container elementor-column-gap-default owl-carousel elementor-inner-section-carousel">
            <?php $__currentLoopData = $blocksContent; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment_child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($comment_child->block_code == 'comment' and $comment_child->parent_id != ''): ?>
              <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-23b731d6 item"
              data-id="23b731d6" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                  <div class="elementor-element elementor-element-7b45ecd3 elementor-widget elementor-widget-testimonial"
                  data-id="7b45ecd3" data-element_type="widget" data-widget_type="testimonial.default">
                    <div class="elementor-widget-container">
                      <div class="elementor-testimonial-wrapper">
                        <div class="elementor-testimonial-rating">
                          <div class="rating-text">
                            EXCELLENT RATING
                          </div>
                        </div>
                        <div class="elementor-testimonial-bottom-row">
                            <div class="elementor-testimonial-google">
                              <img src="https://cdn.trustindex.io/assets/platform/Google/logo.svg" alt="Google Logo">
                            </div>
                            <div class="elementor-testimonial-rating-star">
                              <div class="rating">
                                ★★★★★
                              </div>
                            </div>
                          </div>
                        <div class="elementor-testimonial-content">
                          <?php echo e($comment_child->brief->$locale); ?>

                        </div>
                          <div class="elementor-testimonial-meta">
                            <div class="elementor-testimonial-meta-inner">
                              <div class="elementor-testimonial-details">
                                <div class="elementor-testimonial-content">
                                  <div class="elementor-testimonial-avatar">
                                  <img src="<?php echo e($comment_child->image); ?>" alt="Avatar" class="avatar-img">
                                </div>
                                  <div class="elementor-testimonial-name">
                                    <?php echo e($comment_child->title->$locale); ?><br/>
                                    <p class="elementor-testimonial-time"><?php echo e(date('Y-m-d', strtotime($comment_child->created_at))); ?></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </section>
      </div>
    </div>
  </div>
</section><?php /**PATH D:\xampp7\htdocs\lucy\resources\views/frontend/element/comment.blade.php ENDPATH**/ ?>