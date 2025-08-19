<?php get_header(); ?>

<div id="page" class="site container mx-auto my-10 px-4">
    <main id="main" class="site-main flex flex-col lg:flex-row gap-4">

        <aside class="w-full lg:w-1/4 flex-shrink-0 bg-white p-6 rounded-lg shadow-md">
            <h4 class="text-xl font-bold mb-4">محصولات مشابه</h4>
            <div class="flex flex-col gap-4">
                <div class="flex items-center gap-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/camera.jpeg" alt="محصول مشابه" class="w-16 h-16 rounded">
                    <span>دوربین دیجیتال اکسون مدل A1000LX</span>
                </div>
                <div class="flex items-center gap-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/camera2.jpeg" alt="محصول مشابه" class="w-16 h-16 rounded">
                    <span>دوربین دیجیتال اکسون مدل A1000LX</span>
                </div>
                <div class="flex items-center gap-4">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/image3.jpg" alt="محصول مشابه" class="w-16 h-16 rounded">
                    <span>دوربین دیجیتال اکسون مدل A1000LX</span>
                </div>
            </div>
        </aside>
        <div class="product-content-wrapper flex-1 bg-white p-8 rounded-lg shadow-md flex flex-col lg:flex-row items-start gap-8 w-full lg:w-3/4">

            <div class="w-full lg:w-1/2 flex-shrink-0">
                <?php the_post_thumbnail('large', ['class' => 'w-full h-auto object-contain rounded-lg shadow-md']); ?>
            </div>

            <div class="w-full lg:w-1/2 flex flex-col items-start gap-4">
                <h1 class="text-3xl font-bold"><?php the_title(); ?></h1>

                <div class="text-gray-700 leading-relaxed text-sm mt-4">
                    <p><?php the_content(); ?></p>
                </div>

                <div class="flex items-center gap-4 mt-2">
                    <span class="text-gray-400 line-through text-lg"><?php echo get_post_meta(get_the_ID(), 'old_price', true); ?></span>
                    <span class="text-red-600 font-bold text-2xl"><?php echo get_post_meta(get_the_ID(), 'price', true); ?> تومان</span>
                    <button class="bg-red-700 text-white text-sm rounded-lg px-2 py-1">
                        <?php echo get_post_meta(get_the_ID(), 'discount_percentage', true); ?>%
                    </button>
                </div>

                <h4 class="text-xl font-bold mt-4">ویژگی‌ها</h4>
                <ul class="list-disc list-inside text-gray-700 space-y-2">
                    <li>نوع حسگر: CMOS</li>
                    <li>نوع حسگر: (APS-C/Crop Frame)</li>
                </ul>
                <button class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition mt-4">افزودن به سبد</button>
            </div>
        </div>

    </main>
</div>

<?php get_footer(); ?>