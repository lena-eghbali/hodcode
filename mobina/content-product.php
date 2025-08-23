<?php
defined('ABSPATH') || exit;
global $product;
?>

<div id="page" class="site container mx-auto my-10 px-4">
  <main id="main" class="site-main flex flex-col lg:flex-row gap-4">

    
    <aside class="w-full lg:w-1/4 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
      <h4 class="text-xl font-bold mb-4">محصولات مشابه</h4>
      <div class="flex flex-col gap-4">
        <?php woocommerce_output_related_products(); ?>
      </div>
    </aside>

    
    <div class="product-content-wrapper flex-1 bg-white p-8 rounded-lg shadow-md flex flex-col lg:flex-row items-start gap-8 w-full lg:w-3/4">

      
      <div class="w-full lg:w-1/2 flex-shrink-0">
        <?php woocommerce_show_product_images(); ?>
      </div>

      
      <div class="w-full lg:w-1/2 flex flex-col items-start gap-4">
        
        
        <h1 class="text-3xl font-bold">
          <?php woocommerce_template_single_title(); ?>
        </h1>

        
        <div class="text-gray-700 leading-relaxed text-sm mt-4">
          <?php woocommerce_template_single_excerpt(); ?>
        </div>

        
        <div class="flex items-center gap-4 mt-2">
          <?php if ( $product->is_type('simple') || $product->is_type('variable') ) : 
              $regular_price = $product->get_regular_price(); 
              $sale_price    = $product->get_sale_price();   
              if ( $sale_price ) : 
                $discount = round( ( ( $regular_price - $sale_price ) / $regular_price ) * 100 );
          ?>
              <span class="text-gray-400 line-through text-lg">
                <?php echo wc_price( $regular_price ); ?>
              </span>
              <span class="text-red-600 font-bold text-2xl">
                <?php echo wc_price( $sale_price ); ?>
              </span>
              <button class="bg-red-700 text-white text-sm rounded-lg px-2 py-1">
                <?php echo $discount; ?>%
              </button>
          <?php else: ?>
              <span class="text-green-600 font-bold text-2xl">
                <?php echo wc_price( $regular_price ); ?>
              </span>
          <?php endif; endif; ?>
        </div>

        
        <h4 class="text-xl font-bold mt-4">ویژگی‌ها</h4>
        <div class="text-sm text-gray-600">
          <?php woocommerce_template_single_meta(); ?>
        </div>

        
        <div class="mt-4">
          <?php woocommerce_template_single_add_to_cart(); ?>
        </div>
      </div>
    </div>
  </main>
</div>
