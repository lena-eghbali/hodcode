<?php get_header(); ?>

<div id="page" class="site">
    <main id="main" class="site-main">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
        ?>
                <div class="product-details-container my-10 px-4 lg:px-20">
                
                    
                    <div class="w-full flex justify-center mb-8">
                        <?php the_post_thumbnail('medium_large', ['class' => 'h-auto object-cover rounded-lg shadow-md max-w-2xl']); ?>
                    </div>
                    
                    <div class="flex items-center  gap-100 mb-4 ">
                        <h3 class="text-2xl font-bold mr-16"><?php the_title(); ?></h3>
                        <div class="flex items-center gap-4">
                        <button class="bg-red-700 text-white rounded-ee-lg w-15 mr-15">
                        <?php echo get_post_meta(get_the_ID(), 'discount_percentage', true); ?>%4
                        </button>
                            <span class="text-red-600 font-bold text-2xl"><?php echo get_post_meta(get_the_ID(), 'price', true); ?></span>
                            <span class="text-gray-400 line-through"><?php echo get_post_meta(get_the_ID(), 'old_price', true); ?></span>
                        </div>
                    </div>
                    
                    <div class="text-gray-700 leading-relaxed mb-8">
                        <?php the_content(); ?>
                    </div>
                    
                    <button class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition mr-16 ">افزودن به سبد</button>
                    
                </div>
        <?php
            }
        } else {
            echo '<p>محصولی یافت نشد.</p>';
        }
        ?>
    </main>
</div>

<?php get_footer(); ?>