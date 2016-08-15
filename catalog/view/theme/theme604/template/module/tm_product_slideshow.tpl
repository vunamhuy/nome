<div id="tm_product_slideshow" class="tm_product_slideshow">
    <?php foreach ($products as $product) { ?>
        <div class="slideshow-product">
            <div class="image" style="width: <?php echo $product['img-width']; ?>px">
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
                <?php if ($product['price']) { ?>
                    <div class="price">
                        <?php if (!$product['special']) { ?>
                            <?php echo $product['price']; ?>
                        <?php } else { ?>
                            <span class="price-new"><?php echo $product['special']; ?></span>
                            <span class="price-old"><?php echo $product['price']; ?></span>
                        <?php } ?>
                        <?php if ($product['tax']) { ?>
                            <span class="price-tax"><?php echo $text_tax; ?> <?php echo $product['tax']; ?></span>
                        <?php } ?>
                    </div>
                <?php } ?>
                <div class="cart-button">
                    <button class="product-btn-add" type="button"
                            onclick="cart.add('<?php echo $product['product_id']; ?>');">
                        <i class="material-design-shopping231"></i>
                        <span><?php echo $button_cart; ?></span>

                    </button>
                </div>
            </div>
        </div>
    <?php } ?>
</div>

<script>
    ;
    (function ($) {
        var o = $('#tm_product_slideshow');
        $(document).ready(function () {
            o.owlCarousel({
                items : 1,
                singleItem: true,
                slideSpeed: 800,
                autoPlay : true,
                stopOnHover : true,

                // Navigation
                pagination: false,
                navigation : true,
                navigationText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            });
            });
    })(jQuery);
</script>
