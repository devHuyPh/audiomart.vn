<div class="footer">
  <div class="f-wrap wrap">
    <div class="srow">
      <?php
             if(is_active_sidebar('showroom-widgets1')){
             dynamic_sidebar('showroom-widgets1');
          }
         if(is_active_sidebar('showroom-widgets2')){
                dynamic_sidebar('showroom-widgets2');
            }
             if(is_active_sidebar('showroom-widgets3')){
             dynamic_sidebar('showroom-widgets3');



             }



             ?>
      <?php



             if(is_active_sidebar('showroom-widgets4')){



                dynamic_sidebar('showroom-widgets4');



             }



             ?>
    </div>
  </div>
</div>
<div class="flinks">
  <div class="f-links wrap">
    <div class="scol finfo alpha">
      <h5 class="fl-title">Thông tin</h5>
      <ul class="ful">
        <li><a href="<?php echo get_page_link(151); ?>">Giới thiệu</a></li>
        <li><a href="<?php echo get_page_link(153); ?>">Thông tin liên hệ</a></li>
        <li><a href="<?php echo get_page_link(155); ?>">Cam kết của chúng tôi</a></li>
      </ul>
    </div>
    <div class="scol fguide">
      <h5 class="fl-title">Hướng dẫn</h5>
      <ul class="ful">
        <li><a href="<?php echo get_page_link(159); ?>">Hướng dẫn mua hàng Online</a></li>
        <li><a href="<?php echo get_page_link(163); ?>">Hình thức thanh toán</a></li>
        <li><a href="<?php echo get_page_link(165); ?>">Hình thức mua hàng</a></li>
      </ul>
    </div>
    <div class="scol fterms">
      <h5 class="fl-title">Chính sách và quy định</h5>
      <ul class="ful">
        <li><a href="<?php echo get_page_link(167); ?>">Chính sách vận chuyển</a></li>
        <li><a href="<?php echo get_page_link(169); ?>">Chính sách bảo hành</a></li>
        <li><a href="<?php echo get_page_link(172); ?>">Chính sách đổi hàng</a></li>
      </ul>
    </div>
    <div class="scol ftags omega">
      <h5 class="fl-title">Tags</h5>
      <div class="f-tags">
        <?php



                    $args = array('number' => 13);







               ?>
        <?php $terms = get_terms( 'product_tag', $args); ?>
        <?php if($terms) : ?>
        <?php foreach($terms as $tag) : ?>
        <a href='<?php echo get_term_link( $tag->slug, 'product_tag' ) ?>' class='tag-link-<?php echo $tag->term_id; ?>' title='1 topic' style='font-size: 13px;'><?php echo $tag->name; ?></a>
        <?php endforeach; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="wrap back_tg">
    &nbsp;
  </div>
</div>
<div class="fcopyright">
  <div class="f-copyright wrap">
    <h3> Showrom Âm Thanh Cao Cấp Audio Hà nội</h3>
    <p><b>Trụ sở chính:</b> <i>50 Lê Ngọc Hân- Hai Bà Trưng-Hà Nội</i><br />
     
      <b>Điện thoại:</b>  Mr Thu :  0985 .54 77 88 <br>
	 Sale 1:  0917 622 088 <br>  Sale 2: 0983 517 788<br>
 <b>Fax:</b> 0437.327.653</p>
    <p> <strong>Mã số thuế doanh nghiệp</strong>: 010.670.5095</span><br>
      <span><strong>Ngày cấp:</strong> 03-12-2014</span><br>
      <span><strong>Nơi cấp: </strong>Phòng đăng kí kinh doanh, Sở Kế hoạch và đầu tư thành phố Hà Nội</span><br>
      <span><strong>Số TK: </strong>0451 000 309 985 - Ngân hàng Vietcombank chi nhánh Thành Công</span><strong><br />
      Chủ TK: </strong>Công ty TNHH THƯƠNG MẠI VÀ DỊCH VỤ AUDIO HÀ NỘI</p>
  </div>
</div>
<?php wp_footer(); ?>
<div style="float:right; width:100%"><script lang="javascript">(function() {var pname = ( (document.title !='')? document.title : document.querySelector('h1').innerHTML );var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async=1; ga.src = '//live.vnpgroup.net/js/web_client_box.php?hash=8905bf30965e70ef6ae1147b66ad217b&data=eyJzc29faWQiOjQ0ODY1ODYsImhhc2giOiIzYzJjNTk5Yzc1YjJlN2FiNzE0OGU1M2QyYmEwNTg2YiJ9&pname='+pname;var s = document.getElementsByTagName('script');s[0].parentNode.insertBefore(ga, s[0]);})();</script>	
</div>
</body></html>