<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<div class="product-page-wrapper relative w-full px-4 lg:px-20 my-10">

    <!-- <div class="related-products-box absolute top-0 right-4 lg:right-20 w-64 p-4 bg-white rounded-lg shadow-md z-10 mt-17 mr-35 ">
        <h3 class="text-lg font-bold mb-2">محصولات مشابه</h3>
        <div class="space-y-3">
            <div class="flex items-center gap-2">
                <a href="#"><img src="screenshot.png" class="w-12 h-12 object-cover rounded" alt="محصول ۱"></a>
                <a href="#"><h4 class="text-sm font-semibold">دوربین دیجیتال اکسون</h4></a>
            </div>
            <div class="flex items-center gap-2">
                <a href="#"><img src="screenshot.png" class="w-12 h-12 object-cover rounded" alt="محصول ۲"></a>
                <a href="#"><h4 class="text-sm font-semibold">دوربین دیجیتال اکسون</h4></a>
            </div>
        </div>
    </div> -->
    <?php woocommerce_output_related_products(); ?>

    <div class="main-product-content flex flex-col items-center">
        <div class="product-image-container w-full max-w-4xl mb-8 mt-16">
            <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-auto object-cover rounded-lg shadow-md']); ?>
        </div>

        <div class="product-info-container w-full max-w-2xl text-center p-6 ">
            <h1 class="text-3xl font-bold mb-4 ml-60  "><?php the_title(); ?></h1>
            <div class="price-and-discount flex items-center justify-center gap-4 mb-6 mr-140 mt-[-50px]">
                <button class="bg-red-700 text-white rounded-ee-lg px-3 py-1 text-sm">
                    <?php echo get_post_meta(get_the_ID(), 'discount_percentage', true); ?>%
                </button>
                <span class="text-red-600 font-bold text-2xl"><?php echo get_post_meta(get_the_ID(), 'price', true); ?></span>
                <span class="text-gray-400 line-through"><?php echo get_post_meta(get_the_ID(), 'old_price', true); ?></span>
            </div>
            
            <div class="product-description text-gray-600 leading-relaxed text-center mb-8">
                <?php the_content(); ?>
            </div>
            
            <div class="flex justify-end">
                <button class="bg-blue-500 text-white px-8 py-3 rounded-lg hover:bg-blue-600 transition ml-100">افزودن به سبد خرید</button>
            </div>
        </div>

        <div class="short-description-features text-gray-700 leading-relaxed text-right mb-8 ml-80">
                <?php the_excerpt(); ?>
        </div>
    </div>
</div>

<?php get_footer( 'shop' ); ?>