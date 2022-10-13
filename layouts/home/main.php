<?php
    $i_article = cs_get_option('i_article'); //文章列表
    $i_article = $i_article ? $i_article : 'list-left'; //文章列表
?>
<!-- [ Main Content ] start -->
<section class="pcoded-main-container" id="content">
<?php if(is_home() && wp_is_mobile()): ?>
<style type="text/css">.pcoded-header.headerpos-fixed~.pcoded-main-container{padding-top:0px!important;}.swiper-container{border-radius: 0!important}#i_social,#i_social_hr{display: none;}.Author_Card{background:#fff;}.widget-author-avatar{top:-60px!important;}.swiper-container{height: 15rem!important}</style>
<div class="AuthorCardMobile">
    <?php 
        $authorCard = new AuthorCard();
        $widget_cs_widget_author = reset(get_option('widget_cs_widget_author'));
        $instance['title'] = $widget_cs_widget_author['title'];
        $instance['advertising'] = $widget_cs_widget_author['advertising'];
        $authorCard->widget([],$instance);
    ?>
</div>
<!-- <div class="category">
    <div class="list-ajax-nav author-list-ajax-nav list-ajax-index card mb-0 mt-2">
        <ul class="p-0 mt-0 mb-0">
            <li><a class="btn btn-sm" href="">推荐</a></li>
        </ul>
    </div>
</div>  --> 
<?php endif;?>
    <div class="pcoded-content">
        <div class="row">
            <div class="col-md-8">
                <!-- [ notice ] start -->
                <?php get_template_part( 'layouts/home/notice' );?>
                <!-- [ notice ] end -->
                <!-- [ breadcrumb ] start -->
                <?php cmp_breadcrumbs();?>
                <!-- [ breadcrumb ] end -->
                <!-- [ list ] start -->
                <?php get_template_part( 'layouts/home/category' );?>
                <?php if($i_article == "list-top"):?>
                    <?php get_template_part( 'layouts/home/wx_list' );?>
                <?php endif;?>
                <?php if($i_article == "list-left"):?>
                    <?php get_template_part( 'layouts/home/list' );?>
                <?php endif;?>
                <?php if($i_article == "card-top"):?>
                    <?php get_template_part( 'layouts/home/box_grid' );?>
                <?php endif;?>
                <!-- [ list ] end -->
            </div>
            <div class="col-md-4">
                <!-- [ sidebar ] start -->
               <?php get_sidebar(); ?>
               <!-- [ sidebar ] end -->
            </div>
        </div>
    </div>
    <!-- [ copyright ] start -->
    <?php get_template_part( 'layouts/footer/copyright' );?>
    <!-- [ copyright ] end -->  
</section>
<!-- [ Main Content ] end -->