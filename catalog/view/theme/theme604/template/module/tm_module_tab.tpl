<script>
    $(document).ready(function ($) {
        $('#module-tabs a:first').tab('show');
        $('.module_tab').tabCollapse();
    });
</script>
<div role="tabpanel" class="module_tab">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist" id="module-tabs">
        <?php if ($featured_products) { ?>
            <li>
                <a href="#tab-featured-<?php echo $module; ?>" role="tab"
                   data-toggle="tab"><?php echo $heading_featured; ?></a>
            </li>
        <?php } ?>
        <?php if ($latest_products) { ?>
            <li>
                <a href="#tab-latest-<?php echo $module; ?>" role="tab"
                   data-toggle="tab"><?php echo $heading_latest; ?></a>
            </li>
        <?php } ?>
        <?php if ($special_products) { ?>
            <li>
                <a href="#tab-specials-<?php echo $module; ?>" role="tab"
                   data-toggle="tab"><?php echo $heading_specials; ?></a>
            </li>
        <?php } ?>
        <?php if ($bestseller_products) { ?>
            <li>
                <a href="#tab-bestsellers-<?php echo $module; ?>" role="tab"
                   data-toggle="tab"><?php echo $heading_bestsellers; ?></a>
            </li>
        <?php } ?>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <?php if ($featured_products) { ?>
            <div role="tabpanel" class="tab-pane" id="tab-featured-<?php echo $module; ?>">
                <div class="box clearfix">
                    <?php $f = 0;
                    foreach ($featured_products as $product) {
                        $f++ ?>
                        <div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="product-thumb transition">
                                <a class="quickview" data-toggle="tooltip" data-placement="bottom" title="<?php echo $text_quick; ?>" data-rel="details" href="#quickview_featured_<?php echo $f ?>">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <div class="quick_info">
                                    <div id="quickview_featured_<?php echo $f ?>" class="quickview-style">
                                        <div>
                                            <div class="left col-sm-4">
                                                <div class="quickview_image image">
                                                    <a href="<?php echo $product['href']; ?>"><img
                                                            alt="<?php echo $product['name']; ?>"
                                                            title="<?php echo $product['name']; ?>"
                                                            class="img-responsive"
                                                            src="<?php echo $product['thumb']; ?>"/></a>
                                                </div>
                                            </div>
                                            <div class="right col-sm-8">
                                                <h2><?php echo $product['name']; ?></h2>

                                                <div class="inf">
                                                    <?php if ($product['author']) { ?>
                                                        <p class="quickview_manufacture manufacture manufacture"><?php echo $text_manufacturer; ?>
                                                            <a href="<?php echo $product['manufacturers']; ?>"><?php echo $product['author']; ?></a>
                                                        </p>
                                                    <?php } ?>
                                                    <?php if ($product['model']) { ?>
                                                        <p class="product_model model"><?php echo $text_model; ?> <?php echo $product['model']; ?></p>
                                                    <?php } ?>

                                                    <?php if ($product['price']) { ?>
                                                        <div class="price">
                                                            <?php if (!$product['special']) { ?>
                                                                <?php echo $product['price']; ?>
                                                            <?php } else { ?>
                                                                <span
                                                                    class="price-new"><?php echo $product['special']; ?></span>
                                                                <span
                                                                    class="price-old"><?php echo $product['price']; ?></span>
                                                            <?php } ?>
                                                            <?php if ($product['tax']) { ?>
                                                                <span
                                                                    class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="cart-button">
                                                    <button class="btn btn-add" data-toggle="tooltip" data-placement="bottom" 
                                                            title="<?php echo $button_cart; ?>" type="button"
                                                            onclick="cart.add('<?php echo $product['product_id']; ?>');">
                                                        <i class="fa fa-shopping-cart"></i></button>
                                                    <button class="btn btn-icon" type="button" data-toggle="tooltip" data-placement="bottom" 
                                                            title="<?php echo $button_wishlist; ?>"
                                                            onclick="wishlist.add('<?php echo $product['product_id']; ?>');">
                                                        <i class="fa fa-heart"></i></button>
                                                    <button class="btn btn-icon" type="button" data-toggle="tooltip" data-placement="bottom" 
                                                            title="<?php echo $button_compare; ?>"
                                                            onclick="compare.add('<?php echo $product['product_id']; ?>');">
                                                        <i class="fa fa-exchange"></i></button>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="rating">
                                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                        <?php if ($product['rating'] < $i) { ?>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <?php } else { ?>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>

                                            </div>
                                            <div class="col-sm-12">
                                                <div class="quickview_description description">
                                                    <?php echo $product['description1']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($product['special']) { ?>
                                    <div class="sale"><?php echo $text_sale; ?></div>
                                <?php } ?>

                                <div class="image">
                                    <a class="lazy"
                                       style="padding-bottom: <?php echo($product['img-height'] / $product['img-width'] * 100); ?>%"
                                       href="<?php echo $product['href']; ?>">
                                        <img alt="<?php echo $product['name']; ?>"
                                             title="<?php echo $product['name']; ?>"
                                             class="img-responsive"
                                             data-src="<?php echo $product['thumb']; ?>"
                                             src="#"/>
                                    </a>
                                </div>
                                <div class="caption">
                                    <div class="name">
                                        <a href="<?php echo $product['href']; ?>"><?php echo $product['name']; ?></a>
                                    </div>
                                    <div class="description"><?php echo $product['description']; ?></div>
                                    <?php if ($product['rating']) { ?>
                                        <div class="rating">
                                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                <?php if ($product['rating'] < $i) { ?>
                                                    <span class="fa fa-stack"><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                <?php } else { ?>
                                                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                                            class="fa fa-star-o fa-stack-2x"></i></span>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <?php if ($product['price']) { ?>
                                        <div class="price">
                                            <?php if (!$product['special']) { ?>
                                                <?php echo $product['price']; ?>
                                            <?php } else { ?>
                                                <span class="price-new"><?php echo $product['special']; ?></span> <span
                                                    class="price-old"><?php echo $product['price']; ?></span>
                                            <?php } ?>
                                            <?php if ($product['tax']) { ?>
                                                <span
                                                    class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <div class="cart-button">
                                         <button class="product-btn-add" type="button"
                                                onclick="cart.add('<?php echo $product['product_id']; ?>');">
                                            <span><?php echo $button_cart; ?></span>
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>
                                        <div class="secondary-btns">
                                            <button class="product-btn" type="button" data-toggle="tooltip" data-placement="bottom"                                          title="<?php echo $button_wishlist; ?>"
                                                    onclick="wishlist.add('<?php echo $product['product_id']; ?>');"><i
                                                    class="fa fa-heart"></i></button>
                                            <button class="product-btn" type="button" data-toggle="tooltip" data-placement="bottom" title="<?php echo $button_compare; ?>"
                                                    onclick="compare.add('<?php echo $product['product_id']; ?>');"><i
                                                    class="fa fa-file-text-o"></i></button>   
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <?php if ($latest_products) { ?>
            <div role="tabpanel" class="tab-pane" id="tab-latest-<?php echo $module; ?>">
                <div class="box clearfix">
                    <?php $l = 0;
                    foreach ($latest_products as $product) {
                        $l++ ?>
                        <div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="product-thumb transition">
                                <a class="quickview" data-toggle="tooltip" data-placement="bottom" title="<?php echo $text_quick; ?>" data-rel="details" href="#quickview_latest_<?php echo $l?>">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <div class="quick_info">
                                    <div id="quickview_latest_<?php echo $l?>" class="quickview-style">
                                        <div>
                                            <div class="left col-sm-4">
                                                <div class="quickview_image image"><a href="<?php echo $product['href']; ?>"><img alt="<?php echo $product['name']; ?>" title="<?php echo $product['name']; ?>" class="img-responsive" src="<?php echo $product['thumb']; ?>" /></a></div>
                                            </div>
                                            <div class="right col-sm-8">
                                                <h2><?php echo $product['name']; ?></h2>
                                                <div class="inf">
                                                    <?php if ($product['author']) {?>
                                                        <p class="quickview_manufacture manufacture manufacture"><?php echo $text_manufacturer; ?> <a href="<?php echo $product['manufacturers'];?>"><?php echo $product['author']; ?></a></p>
                                                    <?php }?>
                                                    <?php if ($product['model']) {?>
                                                        <p class="product_model model"><?php echo $text_model; ?> <?php echo $product['model']; ?></p>
                                                    <?php }?>

                                                    <?php if ($product['price']) { ?>
                                                        <div class="price">
                                                            <?php if (!$product['special']) { ?>
                                                                <?php echo $product['price']; ?>
                                                            <?php } else { ?>
                                                                <span class="price-new"><?php echo $product['special']; ?></span> <span class="price-old"><?php echo $product['price']; ?></span>
                                                            <?php } ?>
                                                            <?php if ($product['tax']) { ?>
                                                                <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="cart-button">
                                                    <button class="btn btn-add" data-toggle="tooltip" data-placement="bottom" 
                                                            title="<?php echo $button_cart; ?>" type="button"
                                                            onclick="cart.add('<?php echo $product['product_id']; ?>');">
                                                        <i class="fa fa-shopping-cart"></i></button>
                                                    <button class="btn btn-icon" type="button" data-toggle="tooltip" data-placement="bottom" 
                                                            title="<?php echo $button_wishlist; ?>"
                                                            onclick="wishlist.add('<?php echo $product['product_id']; ?>');">
                                                        <i class="fa fa-heart"></i></button>
                                                    <button class="btn btn-icon" type="button" data-toggle="tooltip" data-placement="bottom" 
                                                            title="<?php echo $button_compare; ?>"
                                                            onclick="compare.add('<?php echo $product['product_id']; ?>');">
                                                        <i class="fa fa-exchange"></i></button>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="rating">
                                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                        <?php if ($product['rating'] < $i) { ?>
                                                            <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <?php } else { ?>
                                                            <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>

                                            </div>
                                            <div class="col-sm-12">
                                                <div class="quickview_description description">
                                                    <?php echo $product['description1'];?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    <div class="new_pr"><?php echo $text_new; ?></div>
                                <div class="image">
                                    <a class="lazy"
                                       style="padding-bottom: <?php echo($product['img-height'] / $product['img-width'] * 100); ?>%"
                                       href="<?php echo $product['href']; ?>">
                                        <img alt="<?php echo $product['name']; ?>"
                                             title="<?php echo $product['name']; ?>"
                                             class="img-responsive"
                                             data-src="<?php echo $product['thumb']; ?>"
                                             src="#"/>
                                    </a>
                                </div>
                                <div class="caption">
                                    <div class="name">
                                        <a href="<?php echo $product['href']; ?>">
                                            <?php echo $product['name']; ?>
                                        </a>
                                    </div>
                                    <div class="description">
										<?php echo $product['description']; ?>
									</div>
                                    <?php if ($product['rating']) { ?>
                                        <div class="rating">
                                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                <?php if ($product['rating'] < $i) { ?>
                                                    <span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-2x"></i>
							</span>
                                                <?php } else { ?>
                                                    <span class="fa fa-stack">
								<i class="fa fa-star fa-stack-2x"></i>
								<i class="fa fa-star-o fa-stack-2x"></i>
							</span>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <?php if ($product['price']) { ?>
                                        <div class="price">
                                            <?php if (!$product['special']) { ?>
                                                <?php echo $product['price']; ?>
                                            <?php } else { ?>
                                                <span class="price-new">
								<?php echo $product['special']; ?>
							</span>
                                                <span class="price-old">
								<?php echo $product['price']; ?>
							</span>
                                            <?php } ?>
                                            <?php if ($product['tax']) { ?>
                                                <span class="price-tax">
								<?php echo $text_tax; ?> <?php echo $product['tax']; ?>
							</span>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <div class="cart-button">
                                        <button class="product-btn-add" type="button"
                                                onclick="cart.add('<?php echo $product['product_id']; ?>');">
                                            <span><?php echo $button_cart; ?></span>
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>
                                        <div class="secondary-btns">
                                            <button class="product-btn" type="button" data-toggle="tooltip" data-placement="bottom"                                          title="<?php echo $button_wishlist; ?>"
                                                    onclick="wishlist.add('<?php echo $product['product_id']; ?>');"><i
                                                    class="fa fa-heart"></i></button>
                                            <button class="product-btn" type="button" data-toggle="tooltip" data-placement="bottom" title="<?php echo $button_compare; ?>"
                                                    onclick="compare.add('<?php echo $product['product_id']; ?>');"><i
                                                    class="fa fa-file-text-o"></i></button>   
                                    </div>
                                    </div>
                                </div>

                                <div class="clear"></div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <?php if ($special_products) { ?>
            <div role="tabpanel" class="tab-pane" id="tab-specials-<?php echo $module; ?>">
                <div class="box clearfix">
                    <?php $t = 0;
                    foreach ($special_products as $product) {
                        $t++ ?>
                        <div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="product-thumb transition">
                                <a class="quickview" data-toggle="tooltip" data-placement="bottom" title="<?php echo $text_quick; ?>" data-rel="details" href="#quickview_special_<?php echo $t ?>">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <div class="quick_info">
                                    <div id="quickview_special_<?php echo $t ?>" class="quickview-style">
                                        <div>
                                            <div class="left col-sm-4">
                                                <div class="quickview_image image">
                                                    <a href="<?php echo $product['href']; ?>"><img
                                                            alt="<?php echo $product['name']; ?>"
                                                            title="<?php echo $product['name']; ?>"
                                                            class="img-responsive"
                                                            src="<?php echo $product['thumb']; ?>"/></a>
                                                </div>
                                            </div>
                                            <div class="right col-sm-8">
                                                <h2><?php echo $product['name']; ?></h2>

                                                <div class="inf">
                                                    <?php if ($product['author']) { ?>
                                                        <p class="quickview_manufacture manufacture manufacture"><?php echo $text_manufacturer; ?>
                                                            <a href="<?php echo $product['manufacturers']; ?>"><?php echo $product['author']; ?></a>
                                                        </p>
                                                    <?php } ?>
                                                    <?php if ($product['model']) { ?>
                                                        <p class="product_model model"><?php echo $text_model; ?> <?php echo $product['model']; ?></p>
                                                    <?php } ?>

                                                    <?php if ($product['price']) { ?>
                                                        <div class="price">
                                                            <?php if (!$product['special']) { ?>
                                                                <?php echo $product['price']; ?>
                                                            <?php } else { ?>
                                                                <span
                                                                    class="price-new"><?php echo $product['special']; ?></span>
                                                                <span
                                                                    class="price-old"><?php echo $product['price']; ?></span>
                                                            <?php } ?>
                                                            <?php if ($product['tax']) { ?>
                                                                <span
                                                                    class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="cart-button">
                                                    <button class="btn btn-add" data-toggle="tooltip" data-placement="bottom" 
                                                            title="<?php echo $button_cart; ?>" type="button"
                                                            onclick="cart.add('<?php echo $product['product_id']; ?>');">
                                                        <i class="fa fa-shopping-cart"></i></button>
                                                    <button class="btn btn-icon" type="button" data-toggle="tooltip" data-placement="bottom" 
                                                            title="<?php echo $button_wishlist; ?>"
                                                            onclick="wishlist.add('<?php echo $product['product_id']; ?>');">
                                                        <i class="fa fa-heart"></i></button>
                                                    <button class="btn btn-icon" type="button" data-toggle="tooltip" data-placement="bottom" 
                                                            title="<?php echo $button_compare; ?>"
                                                            onclick="compare.add('<?php echo $product['product_id']; ?>');">
                                                        <i class="fa fa-exchange"></i></button>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="rating">
                                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                        <?php if ($product['rating'] < $i) { ?>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <?php } else { ?>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>

                                            </div>
                                            <div class="col-sm-12">
                                                <div class="quickview_description description">
                                                    <?php echo $product['description1']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($product['special']) { ?>
                                    <div class="sale"><?php echo $text_sale; ?></div>
                                <?php } ?>
                                <div class="image">
                                    <a class="lazy"
                                       style="padding-bottom: <?php echo($product['img-height'] / $product['img-width'] * 100); ?>%"
                                       href="<?php echo $product['href']; ?>">
                                        <img alt="<?php echo $product['name']; ?>"
                                             title="<?php echo $product['name']; ?>"
                                             class="img-responsive"
                                             data-src="<?php echo $product['thumb']; ?>"
                                             src="#"/>
                                    </a>
                                </div>
                                <div class="caption">
                                    <div class="name">
                                        <a href="<?php echo $product['href']; ?>">
                                            <?php echo $product['name']; ?>
                                        </a>
                                    </div>
                                    <!--<div class="description">
							<?php echo $product['description']; ?>
						</div>-->
                                    <?php if ($product['rating']) { ?>
                                        <div class="rating">
                                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                <?php if ($product['rating'] < $i) { ?>
                                                    <span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-2x"></i>
							</span>
                                                <?php } else { ?>
                                                    <span class="fa fa-stack">
								<i class="fa fa-star fa-stack-2x"></i>
								<i class="fa fa-star-o fa-stack-2x"></i>
							</span>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <?php if ($product['price']) { ?>
                                        <div class="price">
                                            <?php if (!$product['special']) { ?>
                                                <?php echo $product['price']; ?>
                                            <?php } else { ?>
                                                <span class="price-new">
								<?php echo $product['special']; ?>
							</span>
                                                <span class="price-old">
								<?php echo $product['price']; ?>
							</span>
                                            <?php } ?>
                                            <?php if ($product['tax']) { ?>
                                                <span class="price-tax">
								<?php echo $text_tax; ?> <?php echo $product['tax']; ?>
							</span>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <div class="cart-button">
                                        <button class="product-btn-add" type="button"
                                                onclick="cart.add('<?php echo $product['product_id']; ?>');">
                                            <span><?php echo $button_cart; ?></span>
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>
                                        <div class="secondary-btns">
                                            <button class="product-btn" type="button" data-toggle="tooltip" data-placement="bottom"                                          title="<?php echo $button_wishlist; ?>"
                                                    onclick="wishlist.add('<?php echo $product['product_id']; ?>');"><i
                                                    class="fa fa-heart"></i></button>
                                            <button class="product-btn" type="button" data-toggle="tooltip" data-placement="bottom" title="<?php echo $button_compare; ?>"
                                                    onclick="compare.add('<?php echo $product['product_id']; ?>');"><i
                                                    class="fa fa-file-text-o"></i></button>   
                                    </div>       
                                        </div>
                                    <div class="clear"></div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
        <?php if ($bestseller_products) { ?>
            <div role="tabpanel" class="tab-pane" id="tab-bestsellers-<?php echo $module; ?>">
                <div class="box clearfix">
                    <?php $b = 0; foreach ($bestseller_products as $product) { $b++; ?>
                        <div class="product-layout col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="product-thumb transition">
                                <a class="quickview" data-toggle="tooltip" data-placement="bottom" title="<?php echo $text_quick; ?>" data-rel="details" href="#quickview_bestsellers_<?php echo $b ?>">
                                    <i class="fa fa-search-plus"></i>
                                </a>
                                <div class="quick_info">
                                    <div id="quickview_bestsellers_<?php echo $b ?>" class="quickview-style">
                                        <div>
                                            <div class="left col-sm-4">
                                                <div class="quickview_image image">
                                                    <a href="<?php echo $product['href']; ?>"><img
                                                            alt="<?php echo $product['name']; ?>"
                                                            title="<?php echo $product['name']; ?>"
                                                            class="img-responsive"
                                                            src="<?php echo $product['thumb']; ?>"/></a>
                                                </div>
                                            </div>
                                            <div class="right col-sm-8">
                                                <h2><?php echo $product['name']; ?></h2>

                                                <div class="inf">
                                                    <?php if ($product['author']) { ?>
                                                        <p class="quickview_manufacture manufacture manufacture"><?php echo $text_manufacturer; ?>
                                                            <a href="<?php echo $product['manufacturers']; ?>"><?php echo $product['author']; ?></a>
                                                        </p>
                                                    <?php } ?>
                                                    <?php if ($product['model']) { ?>
                                                        <p class="product_model model"><?php echo $text_model; ?> <?php echo $product['model']; ?></p>
                                                    <?php } ?>

                                                    <?php if ($product['price']) { ?>
                                                        <div class="price">
                                                            <?php if (!$product['special']) { ?>
                                                                <?php echo $product['price']; ?>
                                                            <?php } else { ?>
                                                                <span
                                                                    class="price-new"><?php echo $product['special']; ?></span>
                                                                <span
                                                                    class="price-old"><?php echo $product['price']; ?></span>
                                                            <?php } ?>
                                                            <?php if ($product['tax']) { ?>
                                                                <span
                                                                    class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                                                            <?php } ?>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                                <div class="cart-button">
                                                     <button class="btn btn-add" data-toggle="tooltip" data-placement="bottom" 
                                                            title="<?php echo $button_cart; ?>" type="button"
                                                            onclick="cart.add('<?php echo $product['product_id']; ?>');">
                                                        <i class="fa fa-shopping-cart"></i></button>
                                                    <button class="btn btn-icon" type="button" data-toggle="tooltip" data-placement="bottom" 
                                                            title="<?php echo $button_wishlist; ?>"
                                                            onclick="wishlist.add('<?php echo $product['product_id']; ?>');">
                                                        <i class="fa fa-heart"></i></button>
                                                    <button class="btn btn-icon" type="button" data-toggle="tooltip" data-placement="bottom" 
                                                            title="<?php echo $button_compare; ?>"
                                                            onclick="compare.add('<?php echo $product['product_id']; ?>');">
                                                        <i class="fa fa-exchange"></i></button>
                                                </div>
                                                <div class="clear"></div>
                                                <div class="rating">
                                                    <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                        <?php if ($product['rating'] < $i) { ?>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <?php } else { ?>
                                                            <span class="fa fa-stack"><i
                                                                    class="fa fa-star fa-stack-2x"></i><i
                                                                    class="fa fa-star-o fa-stack-2x"></i></span>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </div>

                                            </div>
                                            <div class="col-sm-12">
                                                <div class="quickview_description description">
                                                    <?php echo $product['description1']; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($product['special']) { ?>
                                    <div class="sale"><?php echo $text_sale; ?></div>
                                <?php } ?>
                                <div class="image">
                                    <a class="lazy"
                                       style="padding-bottom: <?php echo($product['img-height'] / $product['img-width'] * 100); ?>%"
                                       href="<?php echo $product['href']; ?>">
                                        <img alt="<?php echo $product['name']; ?>"
                                             title="<?php echo $product['name']; ?>"
                                             class="img-responsive"
                                             data-src="<?php echo $product['thumb']; ?>"
                                             src="#"/>
                                    </a>
                                </div>
                                <div class="caption">
                                    <div class="name">
                                        <a href="<?php echo $product['href']; ?>">
                                            <?php echo $product['name']; ?>
                                        </a>
                                    </div>
                                    <!--<div class="description">
							<?php echo $product['description']; ?>
						</div>-->
                                    <?php if ($product['rating']) { ?>
                                        <div class="rating">
                                            <?php for ($i = 1; $i <= 5; $i++) { ?>
                                                <?php if ($product['rating'] < $i) { ?>
                                                    <span class="fa fa-stack">
								<i class="fa fa-star-o fa-stack-2x"></i>
							</span>
                                                <?php } else { ?>
                                                    <span class="fa fa-stack">
								<i class="fa fa-star fa-stack-2x"></i>
								<i class="fa fa-star-o fa-stack-2x"></i>
							</span>
                                                <?php } ?>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <?php if ($product['price']) { ?>
                                        <div class="price">
                                            <?php if (!$product['special']) { ?>
                                                <?php echo $product['price']; ?>
                                            <?php } else { ?>
                                                <span class="price-new">
								<?php echo $product['special']; ?>
							</span>
                                                <span class="price-old">
								<?php echo $product['price']; ?>
							</span>
                                            <?php } ?>
                                            <?php if ($product['tax']) { ?>
                                                <span class="price-tax">
								<?php echo $text_tax; ?> <?php echo $product['tax']; ?>
							</span>
                                            <?php } ?>
                                        </div>
                                    <?php } ?>
                                    <div class="cart-button">
                                         <button class="product-btn-add" type="button"
                                                onclick="cart.add('<?php echo $product['product_id']; ?>');">
                                            <span><?php echo $button_cart; ?></span>
                                            <i class="fa fa-shopping-cart"></i>
                                        </button>
                                        <div class="secondary-btns">
                                            <button class="product-btn" type="button" data-toggle="tooltip" data-placement="bottom"                                          title="<?php echo $button_wishlist; ?>"
                                                    onclick="wishlist.add('<?php echo $product['product_id']; ?>');"><i
                                                    class="fa fa-heart"></i></button>
                                            <button class="product-btn" type="button" data-toggle="tooltip" data-placement="bottom" title="<?php echo $button_compare; ?>"
                                                    onclick="compare.add('<?php echo $product['product_id']; ?>');"><i
                                                    class="fa fa-file-text-o"></i></button>   
                                    </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>

                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

