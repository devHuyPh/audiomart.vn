<?php
/**
 * Template Name: Sản phẩm
 *
 * @package WordPress
 * @subpackage Fanviet Pro
 */
 ?>
 <?php get_header(); ?>
<div class="pf-wrap wrap">
        <?php get_sidebar(); ?>
        <div class="scol p-content omega">
            <div class="widget wds-spkm chitietsp">
                
                <div class="wdsc wdsc-spkm">
                    <div class="breadcrumb clearfix">
                        <div class="text-breakcrum">
                            <span><a href="/">Trang chủ &nbsp;</a>»&nbsp;<span><a href="#">Âm thanh Hi - End</a></span></span>
                        </div>
                        <div class="icon-breakcrum"></div>
                    </div>
                    
                    <div class="image-sp">
                        <div class="bigimage">
                            <img src="<?php bloginfo('template_directory'); ?>/images/sp.png" />
                        </div>
                        <div class="thumbnails">
                            <ul>
                                <?php
                                    for($i=0;$i<=2;$i++){?>
                                    <li>
                                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/thumb-sp.png" /></a>
                                    </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                    <div class="chitiet-sp">
                        <div class="row-sp">
                            <h2>Lao Dynaudio 1500W</h2>&nbsp;-&nbsp;
                            <span>Mã SP: LD15000</span>
                        </div>
                        <div class="row-sp social">
                            <img src="<?php bloginfo('template_directory'); ?>/images/social.png" />
                        </div>
                        <div class="row-sp">
                            <p>
                                <strong>Tóm tắt: </strong>
                                <span>The 804 daimond boasts a truly commanding accotis performane, thanks to it three-way design incorporating tow Rohacell</span>
                            </p>
                            <p>
                                <strong>Thương hiệu: </strong>
                                <span>Dynaudio</span>
                            </p>
                            <p>
                                <strong>Loại sản phẩm: </strong>
                                <span>Lao Hi-End</span>
                            </p>
                            <p>
                                <strong>Bảo hành: </strong>
                                <span>36 tháng</span>
                            </p>
                            <p>
                                <strong>Tình trạng: </strong>
                                <span>Còn hàng</span>
                            </p>
                            <p>
                                <strong style="color: #f45e5e;">Khuyến mại: </strong>
                                <span>Tặng kèm bộ dây loa 15m</span>
                            </p>
                        </div>
                        <div class="row-sp" style="float: left;width:100%;height: 70px;">
                            <div class="row-sp-left">
                                <div class="price-sp">
                                    <span class="clearfix first-pr">Giá thị trường: <del><span class="amount">1.250.000vnđ</span></del></span>
                                    <span class="second-pr">Giá khuyến mại: <ins><span class="amount priceaut">1.000.000vnđ</span></ins></span>
                                </div>
                                <div class="add-to-cart">
                                    <a href="#">Đặt mua</a>
                                </div>
                            </div>
                            <div class="row-sp-right tag">
                                <div class="f-tags">
                                    <a href='#' class='tag-link-32' title='1 topic'>Bravia</a>
                                    <a href='#' class='tag-link-36' title='1 topic'>Denon</a>
                                    <a href='#' class='tag-link-41' title='1 topic'>DNET</a>
                                    <a href='#' class='tag-link-42' title='1 topic'>Dune</a>
                                    <a href='#' class='tag-link-34' title='1 topic'>JBL</a>
                                    <a href='#' class='tag-link-44' title='1 topic'>JVC</a>
                                    <a href='#' class='tag-link-26' title='1 topic'>Karaoke</a>
                                    <a href='#' class='tag-link-45' title='1 topic'>LG</a>                                                
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
            
            <div class="widget">
                <h3 class="wds-title wds-nav">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li class="active"><a href="#chitiet" role="tab" data-toggle="tab">chi tiết sản phẩm</a></li>
                      <li><a href="#phukien" role="tab" data-toggle="tab">phụ kiện đi kèm</a></li>
                      <li><a href="#video" role="tab" data-toggle="tab">video sản phẩm</a></li>
                    </ul>
                    
                </h3>
                <div class="wdsc wdsc-spkm">
                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div class="tab-pane active" id="chitiet">
                            <p>+ &nbsp;The 804 daimond boasts a truly commanding accotis performane, thanks to it three-way design incorporating tow Rohacell</p>
                            <p>+ &nbsp;Wowen Kevlar</p>
                            <p>+ &nbsp;Crossover Tuning</p>
                            <p>+ &nbsp;Nautilus Tepering Tube</p>
                            <p>+ &nbsp;Daimond Tweeters</p>
                      </div>
                      <div class="tab-pane" id="phukien">...</div>
                      <div class="tab-pane" id="video">...</div>
                    </div>
                </div>
            </div>
            <!--Sản phẩm cùng loại-->
            <div class="widget wds-spkm wds-spcl">
                <h3 class="wds-title">
                    <span>Sản phẩm cùng loại</span>
                </h3>
                <div class="wdsc wdsc-spkm">
                    <div class="srow sprod">
                        <?php for($i=1;$i<=12;$i++){?>
                        <div class="scol spm alpha">
                                    <img width="205" height="140" src="<?php bloginfo('template_directory'); ?>/images/5440_b232-210x140.jpg" class=" spmimg wp-post-image" alt="Yamaha TSX-B232" />
                                    <div class="mask">
                                        <a href="#" class="dm">Đặt mua</a>
                                        <a href="<?php the_permalink(); ?>" class="info">Chi tiết</a>
                                    </div>
                                
                                <div class="ttsp">
                                    <h2>
                                        <a href="#" class="sfptitle spmtitle">Yamaha TSX-B232</a>
                                    </h2>
                                    
    	                            <span class="price"><del><span class="amount">12.950.000vnđ</span></del> <ins><span class="amount priceaut" style="font-size: 15px;">1.000.000vnđ</span></ins></span>
                                </div> 
                        </div>
                        <?php } ?>
                        
                    </div>
                    
                </div>
            </div>
            
        </div>
    </div>
<?php get_footer(); ?>