<div>

    <div class="epage-image-box">
        <img src="<?php echo get_post_meta($post->ID,'epage-image',true);?>" class="epage-img" usemap="#planetmap" style="width: 500px"/>
        <map class="maps" name="planetmap">
            <area shape="rect" coords="0,0,335,295" alt="Sun" href="<?php  echo get_post_meta($post->ID, 'page-left-top',true);?>" onclick="return false;" target="e-page">
            <area shape="rect" coords="335,0,670,295" alt="Mercury" href="<?php  echo get_post_meta($post->ID, 'page-right-top',true);?>" onclick="return false;" target="e-page">
            <area shape="rect" coords="0,295,335,590" alt="Venus" href="<?php  echo get_post_meta($post->ID, 'page-left-bottom',true);?>" onclick="return false;" target="e-page">
            <area shape="rect" coords="335,295,670,590" alt="Venus" href="<?php  echo get_post_meta($post->ID, 'page-right-bottom',true);?>" onclick="return false;" target="e-page">
        </map>
    </div>

    <div class="content" style="position: fixed;right: 10px;top:100px">
        <iframe name="e-page" id="epage" class="epagec" width="900px" height="800px" frameborder="1" scrolling="no"></iframe>
    </div>

<script src="<?php echo get_stylesheet_directory_uri()?>/assets/js/jQuery-3.2.1.js"></script>
<script>
    (function($){
            var maplist = $('.maps area');
            var iframebox = $('#epage');
            $.each(maplist,function(index,val){
                $(this).on({
                click:function(){
                    var that = $(this);
                        var url = that.attr('href');
                        $.ajax({
                            method:'post',
                            url:url,
                            success:function(data){
                                iframebox.text(data);
                               }
                        });
                    }
                });
            });
    })(jQuery)


</script>


        <button id="getSupport"></button>
        <div id="htmls"></div>
        <script>
            (function($){
                $(function(){
                    var btn = $("#getSupport");
                    var url = "http://120.24.225.112/advanced";
                    btn.on('click', function () {
                        $.ajax({
                            method:'post',
                            url: url,
                            success:function(data){
                                if(data){
                                    var s = $(data).find("#dat");
                                    if(s){
                                        $("#htmls").html(s);
                                    }
                                }

                            }
                        });
                    });
                });
            })(jQuery)
        </script>


    <div id="dat">I am text block. Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.</div>
</div>

<div class="flickity-viewport" style="height: 372.891px;"><div class="flickity-slider" style="left: 0px; transform: translate3d(-167.15%, 0px, 0px);"><div class="product-small col has-hover post-21718 product type-product status-publish has-post-thumbnail product_cat-rhinestone-hotfix-transfer product_tag-cartoon-rhinestone-transfer-design product_tag-cheap-rhinestone-transfers product_tag-hotfix-rhinestone-transfer-motifs product_tag-iron-on-rhinestone-transfers first instock product-type-simple" style="position: absolute; left: 200%;">
            <div class="col-inner">

                <div class="badge-container absolute left top z-1">
                </div>
                <div class="product-small box ">
                    <div class="box-image">
                        <div class="image-fade_in_back">
                            <a href="https://www.aa-star.net/product/cartoon-rhinestone-transfer-design/">
                                <img width="245" height="245" src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-245x245.jpg" data-src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-245x245.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image lazy-load-active" alt="MT10990" title="MT10990" srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-280x280.jpg 280w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-400x400.jpg 400w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-768x768.jpg 768w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-800x800.jpg 800w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-600x600.jpg 600w" data-srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-280x280.jpg 280w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-400x400.jpg 400w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-768x768.jpg 768w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-800x800.jpg 800w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-3-600x600.jpg 600w" sizes="(max-width: 245px) 100vw, 245px"><img width="245" height="245" src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-1-1-245x245.jpg" data-src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-1-1-245x245.jpg" class="show-on-hover absolute fill hide-for-small back-image lazy-load-active" alt="" srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-1-1-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-1-1-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-1-1-600x600.jpg 600w" data-srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-1-1-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-1-1-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10990-1-1-600x600.jpg 600w" sizes="(max-width: 245px) 100vw, 245px">				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                            <div class="wishlist-icon">
                                <button class="wishlist-button button is-outline circle icon">
                                    <i class="icon-heart"></i>      </button>
                                <div class="wishlist-popup dark">

                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-21718">
                                        <div class="yith-wcwl-add-button show" style="display:block">


                                            <a href="/?add_to_wishlist=21718" rel="nofollow" data-product-id="21718" data-product-type="simple" class="add_to_wishlist">
                                                Add to Wishlist</a>
                                            <img src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                        </div>

                                        <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                            <span class="feedback">Product added!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                            <span class="feedback">The product is already in the wishlist!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                    </div>

                                    <div class="clear"></div>      </div>
                            </div>
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            <a class="quick-view quick-view-added" data-prod="21718" href="#quick-view">Quick View</a>			</div>
                    </div><!-- box-image -->

                    <div class="box-text box-text-products text-center grid-style-2">
                        <div class="title-wrapper">  <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                rhinestone hotfix transfer   </p> <p class="name product-title"><a href="https://www.aa-star.net/product/cartoon-rhinestone-transfer-design/">Cartoon rhinestone transfer design Chinese dragon for T-shirt</a></p></div><div class="price-wrapper">
                        </div>		</div><!-- box-text -->
                </div><!-- box -->
            </div><!-- .col-inner -->
        </div><div class="product-small col has-hover post-21694 product type-product status-publish has-post-thumbnail product_cat-rhinestone-hotfix-transfer product_tag-crystal-rhinestones product_tag-fashion-rhinestone-transfer product_tag-hotfix-rhinestone-transfer-motifs product_tag-western-rhinestone-transfer-motif instock product-type-simple" style="position: absolute; left: 225%;">
            <div class="col-inner">

                <div class="badge-container absolute left top z-1">
                </div>
                <div class="product-small box ">
                    <div class="box-image">
                        <div class="image-fade_in_back">
                            <a href="https://www.aa-star.net/product/western-rhinestone-transfer-motif/">
                                <img width="1" height="1" src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10989.jpg" data-src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10989.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image lazy-load-active" alt="MT10989" title="MT10989"><img width="245" height="245" src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10989-1-245x245.jpg" data-src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10989-1-245x245.jpg" class="show-on-hover absolute fill hide-for-small back-image lazy-load-active" alt="" srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10989-1-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10989-1-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10989-1-600x600.jpg 600w" data-srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10989-1-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10989-1-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10989-1-600x600.jpg 600w" sizes="(max-width: 245px) 100vw, 245px">				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                            <div class="wishlist-icon">
                                <button class="wishlist-button button is-outline circle icon">
                                    <i class="icon-heart"></i>      </button>
                                <div class="wishlist-popup dark">

                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-21694">
                                        <div class="yith-wcwl-add-button show" style="display:block">


                                            <a href="/?add_to_wishlist=21694" rel="nofollow" data-product-id="21694" data-product-type="simple" class="add_to_wishlist">
                                                Add to Wishlist</a>
                                            <img src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                        </div>

                                        <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                            <span class="feedback">Product added!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                            <span class="feedback">The product is already in the wishlist!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                    </div>

                                    <div class="clear"></div>      </div>
                            </div>
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            <a class="quick-view quick-view-added" data-prod="21694" href="#quick-view">Quick View</a>			</div>
                    </div><!-- box-image -->

                    <div class="box-text box-text-products text-center grid-style-2">
                        <div class="title-wrapper">  <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                rhinestone hotfix transfer   </p> <p class="name product-title"><a href="https://www.aa-star.net/product/western-rhinestone-transfer-motif/">Western rhinestone transfer motif NYC letters design</a></p></div><div class="price-wrapper">
                        </div>		</div><!-- box-text -->
                </div><!-- box -->
            </div><!-- .col-inner -->
        </div><div class="product-small col has-hover post-21655 product type-product status-publish has-post-thumbnail product_cat-rhinestone-hotfix-transfer product_tag-clothes-decoration-rhinestones product_tag-crystal-rhinestones product_tag-fashion-rhinestone-transfer product_tag-fashion-rhinestone-transfer-design product_tag-hotfix-rhinestone-transfer-motifs product_tag-rhinestone-transfer-wholesale-china instock product-type-simple" style="position: absolute; left: 250%;">
            <div class="col-inner">

                <div class="badge-container absolute left top z-1">
                </div>
                <div class="product-small box ">
                    <div class="box-image">
                        <div class="image-fade_in_back">
                            <a href="https://www.aa-star.net/product/clothes-decoration-rhinestones/">
                                <img width="1" height="1" src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10988.jpg" data-src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10988.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image lazy-load-active" alt="MT10988" title="MT10988"><img width="245" height="245" src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10988-1-245x245.jpg" data-src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10988-1-245x245.jpg" class="show-on-hover absolute fill hide-for-small back-image lazy-load-active" alt="" srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10988-1-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10988-1-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10988-1-600x600.jpg 600w" data-srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10988-1-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10988-1-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10988-1-600x600.jpg 600w" sizes="(max-width: 245px) 100vw, 245px">				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                            <div class="wishlist-icon">
                                <button class="wishlist-button button is-outline circle icon">
                                    <i class="icon-heart"></i>      </button>
                                <div class="wishlist-popup dark">

                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-21655">
                                        <div class="yith-wcwl-add-button show" style="display:block">


                                            <a href="/?add_to_wishlist=21655" rel="nofollow" data-product-id="21655" data-product-type="simple" class="add_to_wishlist">
                                                Add to Wishlist</a>
                                            <img src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                        </div>

                                        <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                            <span class="feedback">Product added!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                            <span class="feedback">The product is already in the wishlist!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                    </div>

                                    <div class="clear"></div>      </div>
                            </div>
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            <a class="quick-view quick-view-added" data-prod="21655" href="#quick-view">Quick View</a>			</div>
                    </div><!-- box-image -->

                    <div class="box-text box-text-products text-center grid-style-2">
                        <div class="title-wrapper">  <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                rhinestone hotfix transfer   </p> <p class="name product-title"><a href="https://www.aa-star.net/product/clothes-decoration-rhinestones/">A beautiful girl design clothes decoration rhinestones</a></p></div><div class="price-wrapper">
                        </div>		</div><!-- box-text -->
                </div><!-- box -->
            </div><!-- .col-inner -->
        </div><div class="product-small col has-hover post-20993 product type-product status-publish has-post-thumbnail product_cat-rhinestone-hotfix-transfer product_tag-china-guangzhou-wholesale-rhinestone-market product_tag-crystal-rhinestones product_tag-fashion-rhinestone-transfer-design product_tag-hotfix-rhinestone-transfer-motifs product_tag-iron-wine-rhinestone-transfers product_tag-rhinestone-transfer-wholesale-china last instock product-type-simple" style="position: absolute; left: 75%;">
            <div class="col-inner">

                <div class="badge-container absolute left top z-1">
                </div>
                <div class="product-small box ">
                    <div class="box-image">
                        <div class="image-fade_in_back">
                            <a href="https://www.aa-star.net/product/china-guangzhou-wholesale-rhinestone-market/">
                                <img width="245" height="245" src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-245x245.jpg" data-src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-245x245.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image lazy-load-active" alt="MT10987" title="MT10987" srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-280x280.jpg 280w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-400x400.jpg 400w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-768x768.jpg 768w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-800x800.jpg 800w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-600x600.jpg 600w" data-srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-280x280.jpg 280w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-400x400.jpg 400w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-768x768.jpg 768w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-800x800.jpg 800w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10987-5-600x600.jpg 600w" sizes="(max-width: 245px) 100vw, 245px"><img width="245" height="245" src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10-1-245x245.jpg" data-src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10-1-245x245.jpg" class="show-on-hover absolute fill hide-for-small back-image lazy-load-active" alt="" srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10-1-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10-1-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10-1-600x600.jpg 600w" data-srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10-1-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10-1-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10-1-600x600.jpg 600w" sizes="(max-width: 245px) 100vw, 245px">				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                            <div class="wishlist-icon">
                                <button class="wishlist-button button is-outline circle icon">
                                    <i class="icon-heart"></i>      </button>
                                <div class="wishlist-popup dark">

                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-20993">
                                        <div class="yith-wcwl-add-button show" style="display:block">


                                            <a href="/?add_to_wishlist=20993" rel="nofollow" data-product-id="20993" data-product-type="simple" class="add_to_wishlist">
                                                Add to Wishlist</a>
                                            <img src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                        </div>

                                        <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                            <span class="feedback">Product added!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                            <span class="feedback">The product is already in the wishlist!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                    </div>

                                    <div class="clear"></div>      </div>
                            </div>
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            <a class="quick-view quick-view-added" data-prod="20993" href="#quick-view">Quick View</a>			</div>
                    </div><!-- box-image -->

                    <div class="box-text box-text-products text-center grid-style-2">
                        <div class="title-wrapper">  <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                rhinestone hotfix transfer   </p> <p class="name product-title"><a href="https://www.aa-star.net/product/china-guangzhou-wholesale-rhinestone-market/">China guangzhou wholesale rhinestone market transfer for T-shirt</a></p></div><div class="price-wrapper">
                        </div>		</div><!-- box-text -->
                </div><!-- box -->
            </div><!-- .col-inner -->
        </div><div class="product-small col has-hover post-20956 product type-product status-publish has-post-thumbnail product_cat-rhinestone-hotfix-transfer product_tag-crystal-rhinestones product_tag-fashion-rhinestone-transfer-design product_tag-hotfix-rhinestone-transfer-motifs product_tag-iron-wine-rhinestone-transfers product_tag-rhinestone-transfer-wholesale-china first instock product-type-simple is-selected" style="position: absolute; left: 100%;">
            <div class="col-inner">

                <div class="badge-container absolute left top z-1">
                </div>
                <div class="product-small box ">
                    <div class="box-image">
                        <div class="image-fade_in_back">
                            <a href="https://www.aa-star.net/product/iron-rhinestones-diamond/">
                                <img width="1" height="1" src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10986.jpg" data-src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10986.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image lazy-load-active" alt="MT10986" title="MT10986"><img width="245" height="245" src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10986-1-1-245x245.jpg" data-src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10986-1-1-245x245.jpg" class="show-on-hover absolute fill hide-for-small back-image lazy-load-active" alt="" srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10986-1-1-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10986-1-1-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10986-1-1-600x600.jpg 600w" data-srcset="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10986-1-1-245x245.jpg 245w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10986-1-1-130x130.jpg 130w, https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10986-1-1-600x600.jpg 600w" sizes="(max-width: 245px) 100vw, 245px">				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                            <div class="wishlist-icon">
                                <button class="wishlist-button button is-outline circle icon">
                                    <i class="icon-heart"></i>      </button>
                                <div class="wishlist-popup dark">

                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-20956">
                                        <div class="yith-wcwl-add-button show" style="display:block">


                                            <a href="/?add_to_wishlist=20956" rel="nofollow" data-product-id="20956" data-product-type="simple" class="add_to_wishlist">
                                                Add to Wishlist</a>
                                            <img src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                        </div>

                                        <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                            <span class="feedback">Product added!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                            <span class="feedback">The product is already in the wishlist!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                    </div>

                                    <div class="clear"></div>      </div>
                            </div>
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            <a class="quick-view quick-view-added" data-prod="20956" href="#quick-view">Quick View</a>			</div>
                    </div><!-- box-image -->

                    <div class="box-text box-text-products text-center grid-style-2">
                        <div class="title-wrapper">  <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                rhinestone hotfix transfer   </p> <p class="name product-title"><a href="https://www.aa-star.net/product/iron-rhinestones-diamond/">Iron rhinestones diamond American flag design for clothing</a></p></div><div class="price-wrapper">
                        </div>		</div><!-- box-text -->
                </div><!-- box -->
            </div><!-- .col-inner -->
        </div><div class="product-small col has-hover post-20938 product type-product status-publish has-post-thumbnail product_cat-rhinestone-hotfix-transfer product_tag-crystal-rhinestones product_tag-fashion-rhinestone-transfer-design product_tag-hotfix-rhinestone-transfer-motifs product_tag-iron-wine-rhinestone-transfers product_tag-rhinestone-transfer-wholesale-china instock product-type-simple is-selected" style="position: absolute; left: 125%;">
            <div class="col-inner">

                <div class="badge-container absolute left top z-1">
                </div>
                <div class="product-small box ">
                    <div class="box-image">
                        <div class="image-fade_in_back">
                            <a href="https://www.aa-star.net/product/crystal-ab-dmc-hotfix-rhinestones/">
                                <img width="1" height="1" src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10985.jpg" data-src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10985.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image lazy-load-active" alt="MT10985" title="MT10985">				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                            <div class="wishlist-icon">
                                <button class="wishlist-button button is-outline circle icon">
                                    <i class="icon-heart"></i>      </button>
                                <div class="wishlist-popup dark">

                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-20938">
                                        <div class="yith-wcwl-add-button show" style="display:block">


                                            <a href="/?add_to_wishlist=20938" rel="nofollow" data-product-id="20938" data-product-type="simple" class="add_to_wishlist">
                                                Add to Wishlist</a>
                                            <img src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                        </div>

                                        <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                            <span class="feedback">Product added!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                            <span class="feedback">The product is already in the wishlist!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                    </div>

                                    <div class="clear"></div>      </div>
                            </div>
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            <a class="quick-view quick-view-added" data-prod="20938" href="#quick-view">Quick View</a>			</div>
                    </div><!-- box-image -->

                    <div class="box-text box-text-products text-center grid-style-2">
                        <div class="title-wrapper">  <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                rhinestone hotfix transfer   </p> <p class="name product-title"><a href="https://www.aa-star.net/product/crystal-ab-dmc-hotfix-rhinestones/">Crystal ab dmc hotfix rhinestones colorful love shape design</a></p></div><div class="price-wrapper">
                        </div>		</div><!-- box-text -->
                </div><!-- box -->
            </div><!-- .col-inner -->
        </div><div class="product-small col has-hover post-20930 product type-product status-publish has-post-thumbnail product_cat-rhinestone-hotfix-transfer product_tag-crystal-rhinestones product_tag-fashion-rhinestone-transfer-design product_tag-hotfix-rhinestone-transfer-motifs product_tag-iron-wine-rhinestone-transfers product_tag-rhinestone-transfer-wholesale-china instock product-type-simple is-selected" style="position: absolute; left: 150%;">
            <div class="col-inner">

                <div class="badge-container absolute left top z-1">
                </div>
                <div class="product-small box ">
                    <div class="box-image">
                        <div class="image-fade_in_back">
                            <a href="https://www.aa-star.net/product/emoji-rhinestone-transfers-motif/">
                                <img width="1" height="1" src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10984.jpg" data-src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10984.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image lazy-load-active" alt="MT10984" title="MT10984">				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                            <div class="wishlist-icon">
                                <button class="wishlist-button button is-outline circle icon">
                                    <i class="icon-heart"></i>      </button>
                                <div class="wishlist-popup dark">

                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-20930">
                                        <div class="yith-wcwl-add-button show" style="display:block">


                                            <a href="/?add_to_wishlist=20930" rel="nofollow" data-product-id="20930" data-product-type="simple" class="add_to_wishlist">
                                                Add to Wishlist</a>
                                            <img src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                        </div>

                                        <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                            <span class="feedback">Product added!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                            <span class="feedback">The product is already in the wishlist!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                    </div>

                                    <div class="clear"></div>      </div>
                            </div>
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            <a class="quick-view quick-view-added" data-prod="20930" href="#quick-view">Quick View</a>			</div>
                    </div><!-- box-image -->

                    <div class="box-text box-text-products text-center grid-style-2">
                        <div class="title-wrapper">  <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                rhinestone hotfix transfer   </p> <p class="name product-title"><a href="https://www.aa-star.net/product/emoji-rhinestone-transfers-motif/">Eidolon emoji rhinestone transfers motif design for clothing</a></p></div><div class="price-wrapper">
                        </div>		</div><!-- box-text -->
                </div><!-- box -->
            </div><!-- .col-inner -->
        </div><div class="product-small col has-hover post-20919 product type-product status-publish has-post-thumbnail product_cat-rhinestone-hotfix-transfer product_tag-crystal-rhinestones product_tag-fashion-rhinestone-transfer-design product_tag-iron-rhinestone-letters product_tag-rhinestone-transfer-wholesale-china last instock product-type-simple is-selected" style="position: absolute; left: 175%;">
            <div class="col-inner">

                <div class="badge-container absolute left top z-1">
                </div>
                <div class="product-small box ">
                    <div class="box-image">
                        <div class="image-fade_in_back">
                            <a href="https://www.aa-star.net/product/iron-rhinestone-letters/">
                                <img width="1" height="1" src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10983.jpg" data-src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/uploads/2017/07/MT10983.jpg" class="attachment-shop_catalog size-shop_catalog wp-post-image lazy-load-active" alt="MT10983" title="MT10983">				</a>
                        </div>
                        <div class="image-tools is-small top right show-on-hover">
                            <div class="wishlist-icon">
                                <button class="wishlist-button button is-outline circle icon">
                                    <i class="icon-heart"></i>      </button>
                                <div class="wishlist-popup dark">

                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-20919">
                                        <div class="yith-wcwl-add-button show" style="display:block">


                                            <a href="/?add_to_wishlist=20919" rel="nofollow" data-product-id="20919" data-product-type="simple" class="add_to_wishlist">
                                                Add to Wishlist</a>
                                            <img src="https://d1sfxavjgs9m48.cloudfront.net/wp-content/plugins/yith-woocommerce-wishlist/assets/images/wpspin_light.gif" class="ajax-loading" alt="loading" width="16" height="16" style="visibility:hidden">
                                        </div>

                                        <div class="yith-wcwl-wishlistaddedbrowse hide" style="display:none;">
                                            <span class="feedback">Product added!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div class="yith-wcwl-wishlistexistsbrowse hide" style="display:none">
                                            <span class="feedback">The product is already in the wishlist!</span>
                                            <a href="https://www.aa-star.net/wishlist/" rel="nofollow">
                                                Browse Wishlist	        </a>
                                        </div>

                                        <div style="clear:both"></div>
                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                    </div>

                                    <div class="clear"></div>      </div>
                            </div>
                        </div>
                        <div class="image-tools is-small hide-for-small bottom left show-on-hover">
                        </div>
                        <div class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                            <a class="quick-view quick-view-added" data-prod="20919" href="#quick-view">Quick View</a>			</div>
                    </div><!-- box-image -->

                    <div class="box-text box-text-products text-center grid-style-2">
                        <div class="title-wrapper">  <p class="category uppercase is-smaller no-text-overflow product-cat op-7">
                                rhinestone hotfix transfer   </p> <p class="name product-title"><a href="https://www.aa-star.net/product/iron-rhinestone-letters/">Back to school iron rhinestone letters design for T-shirt</a></p></div><div class="price-wrapper">
                        </div>		</div><!-- box-text -->
                </div><!-- box -->
            </div><!-- .col-inner -->
        </div></div></div>
<script>
    (function($){
//        var href_  =  window.location.href;
//        var match_ =  window.location.protocol+"//"+window.location.hostname+"/";
//        if(href_ == match_){
            var quickViewLists = $('a.quick-view.quick-view-added');
            quickViewLists.each(function(index.value){
                var this = $(this);
                var thisObj = this[index];
                var thisObj_$ = $(thisObj);
                var productId = thisObj_$.data('prod');
                var dataProd = [];
                dataProd.push(productId);
                var quote = $('<a href="#" class="add-request-quote-button button" data-product_id="+dataProd[index]+" data-wp_nonce>Add to quote</a>');
                quote.insertAfter(quickViewLists);
                console.log(quote);

            });
//        }
    })(jQuery)

</script>
var s = jQuery('.quick-view.quick-view-added');

s.insertAfter(jQuery("<a>aa</a>"));