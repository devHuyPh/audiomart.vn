<div class="scol p-sidebar alpha">
  <div class="widget wds-support">
    <h3 class="wds-title"> Hỗ trợ - Tư vấn mua hàng </h3>
    <div class="wdsc wdsc-support">
      <?php
             if(is_active_sidebar('tu-van-hi-end')){
                dynamic_sidebar('tu-van-hi-end');
             }
             ?>
      <?php
             if(is_active_sidebar('tu-van-hi-fi')){
                dynamic_sidebar('tu-van-hi-fi');
             }
             ?>
      <?php
             if(is_active_sidebar('tu-van-hi-karaoke')){
                dynamic_sidebar('tu-van-hi-karaoke');
             }
             ?>
     <?php
             if(is_active_sidebar('tu-van-ti-vi')){
                dynamic_sidebar('tu-van-ti-vi');
             }
             ?>
      <?php
             if(is_active_sidebar('cham-soc-khach-hang')){
                dynamic_sidebar('cham-soc-khach-hang');
             }
             ?>
      <?php
             if(is_active_sidebar('ho-tro-ban-hang')){
                dynamic_sidebar('ho-tro-ban-hang');
             }
             ?>
    </div>
  </div>
  <!--Sản phẩm nổi bật-->
  <div class="widget wds-featured">
    <h3 class="wds-title"> Sản phẩm nổi bật </h3>
    <div class="wdsc wdsc-featured">
      <?php

        if(is_home()){

            echo do_shortcode('[product_category_onsale2 category="am-thanh-karaoke" columns="1"]');

        }

        else

            if(is_product_category())

        {

            global $wp_query;

            $cat = $wp_query->get_queried_object();

            // var_dump($cat->slug);die;

            echo do_shortcode('[product_category_onsale2 category="'.$cat->slug.'" columns="1"]');

        }else

        {

            echo do_shortcode('[product_category_onsale2 category="am-thanh-karaoke" columns="1"]');

        }

 ?>
    </div>
  </div>
   <div class="widget wds-testimonial">
   <p style="padding-bottom:10px;"><a href="https://audiomart.vn/san-pham/am-thanh-hi-fi/loa-hi-fi"><img src="https://audiomart.vn/wp-content/uploads/2019/08/Loa-hifi.jpg" width="280" alt="Loa HIfi" /></a></p>
   <p style="padding-bottom:10px;"><a href="https://audiomart.vn/san-pham/am-thanh-hi-end"><img src="https://audiomart.vn/wp-content/uploads/2019/08/LoaHiend-1.jpg" width="280" alt="loa hiend" /></a></p>
      </div>
  </div>
