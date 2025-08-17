
<?php get_header() ?>
  <div id="page" class="site">
    <main id="main" class="site-main">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
          the_title( '<h2>', '</h2>' );
          the_content();
        }
      } else {
        echo '<p>No content found.</p>';
      }
      ?>
          <div class="mr-30">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-2xl mt-20">همه محصولات</button>
        <button class="bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded-2xl hover:bg-gray-200 mt-20">دوربین</button>
        <button class="bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded-2xl hover:bg-gray-200 mt-20">کنسول بازی</button>
        <button class="bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded-2xl hover:bg-gray-200 mt-20">هدفون</button>
        <button class="bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded-2xl hover:bg-gray-200 mt-20">وسایل کیمینگ</button>
        <button class="bg-white text-gray-700 border border-gray-300 px-4 py-2 rounded-2xl hover:bg-gray-200 mt-20">هدست</button>
    </div>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 w-300 mr-25 mt-10">
        <div class="bg-white p-4 rounded-lg  shadow-md ">
            <img src="wp-content/themes/hodcode/assets/h1.jpeg" alt=" " class="w-full h-100 object-cover mb-4 rounded-md">
            <h2 class="text-lg font-semibold mb-2">  دوربین دیجیتال اکسون</h2>
            <p class="text-gray-600 text-sm mb-2">   دوربین</p>
            <div class="flex justify-between ml-7 ">
                <button class="bg-red-700 text-white rounded-ee-lg w-15 mr-15  ">4%</button>
                <p class="text-black text-s"><span class="line-through">28,440,000</span> <span class="mr-4">27,000,000</span></p>
            </div>
            <div class="flex items-center justify-center gap-10">
                <button class="bg-blue-500 text-white px-4 py-3 rounded-e-lg mt-10 "> افزودن به سبد خرید</button>
                <button class="bg-gray-700 text-white px-4 py-3 rounded-e-lg mt-10 ">    مشاهده جزییات </button>

            </div>
        </div>



        <div class="bg-white p-4 rounded-lg  shadow-md ">
            <img src="wp-content/themes/hodcode/assets/photo1754841226.jpeg" alt="" class="w-full h-100 object-cover mb-4 rounded-md">
            <h2 class="text-lg font-semibold mb-2">  دوربین دیجیتال کائن</h2>
            <p class="text-gray-600 text-sm mb-2">   دوربین</p>
            <div class="flex justify-between ml-7 ">
                <button class="bg-red-700 text-white rounded-ee-lg w-15 mr-15  ">4%</button>
                <p class="text-black text-s"><span class="line-through">28,440,000</span> <span class="mr-4">27,000,000</span></p>
            </div>
            <div class="flex items-center justify-center gap-10">
                <button class="bg-blue-500 text-white px-4 py-3 rounded-e-lg mt-10 "> افزودن به سبد خرید</button>
                <button class="bg-gray-700 text-white px-4 py-3 rounded-e-lg mt-10 ">    مشاهده جزییات </button>
            </div>
        </div>


        <div class="bg-white p-4 rounded-lg  shadow-md ">
            <img src="wp-content/themes/hodcode/assets/ن.jpeg" alt="" class="w-full h-100 object-cover mb-4 rounded-md">
            <h2 class="text-lg font-semibold mb-2">  هدفون بلوتوثی هایلو  </h2>
            <p class="text-gray-600 text-sm mb-2">   هدفون</p>
            <div class="flex justify-between ml-7 ">
                <button class="bg-red-700 text-white rounded-ee-lg w-15 mr-15  ">4%</button>
                <p class="text-black text-s"><span class="line-through">28,440,000</span> <span class="mr-4">27,000,000</span></p>
            </div>
            <div class="flex items-center justify-center gap-10">
                <button class="bg-blue-500 text-white px-4 py-3 rounded-e-lg mt-10 "> افزودن به سبد خرید</button>
                <button class="bg-gray-700 text-white px-4 py-3 rounded-e-lg mt-10 ">    مشاهده جزییات </button>
            </div>
        </div>


        <div class="bg-white p-4 rounded-lg  shadow-md ">
            <img src="wp-content/themes/hodcode/assets/j.jpeg" alt="" class="w-full h-100 object-cover mb-4 rounded-md">
            <h2 class="text-lg font-semibold mb-2">    هدست بلوتوثی سونی</h2>
            <p class="text-gray-600 text-sm mb-2">   هدست</p>
            <div class="flex justify-between ml-7 ">
                <button class="bg-red-700 text-white rounded-ee-lg w-15 mr-15  ">4%</button>
                <p class="text-black text-s"><span class="line-through">28,440,000</span> <span class="mr-4">27,000,000</span></p>
            </div>
            <div class="flex items-center justify-center gap-10">
                <button class="bg-blue-500 text-white px-4 py-3 rounded-e-lg mt-10 "> افزودن به سبد خرید</button>
                <button class="bg-gray-700 text-white px-4 py-3 rounded-e-lg mt-10 ">    مشاهده جزییات </button>
            </div>
        </div>


                <div class="bg-white p-4 rounded-lg  shadow-md ">
            <img src="wp-content/themes/hodcode/assets/ن2.jpeg" alt="" class="w-full h-100 object-cover mb-4 rounded-md">
            <h2 class="text-lg font-semibold mb-2">  هدست بلوتوثی گیمینگ سونی  </h2>
            <p class="text-gray-600 text-sm mb-2">   هدست</p>
            <div class="flex justify-between ml-7 ">
                <button class="bg-red-700 text-white rounded-ee-lg w-15 mr-15  ">4%</button>
                <p class="text-black text-s"><span class="line-through">28,440,000</span> <span class="mr-4">27,000,000</span></p>
            </div>
            <div class="flex items-center justify-center gap-10">
                <button class="bg-blue-500 text-white px-4 py-3 rounded-e-lg mt-10 "> افزودن به سبد خرید</button>
                <button class="bg-gray-700 text-white px-4 py-3 rounded-e-lg mt-10 ">    مشاهده جزییات </button>
            </div>
        </div>





                <div class="bg-white p-4 rounded-lg  shadow-md ">
            <img src="wp-content/themes/hodcode/assets/ن3.jpeg" alt="" class="w-full h-100 object-cover mb-4 rounded-md">
            <h2 class="text-lg font-semibold mb-2">  هدست بلوتوثی استریو سونی  </h2>
            <p class="text-gray-600 text-sm mb-2">   هدست</p>
            <div class="flex justify-between ml-7 ">
                <button class="bg-red-700 text-white rounded-ee-lg w-15 mr-15  ">4%</button>
                <p class="text-black text-s"><span class="line-through">28,440,000</span> <span class="mr-4">27,000,000</span></p>
            </div>
            <div class="flex items-center justify-center gap-10">
                <button class="bg-blue-500 text-white px-4 py-3 rounded-e-lg mt-10 "> افزودن به سبد خرید</button>
                <button class="bg-gray-700 text-white px-4 py-3 rounded-e-lg mt-10 ">    مشاهده جزییات </button>
            </div>
        </div>
    </div>
    <div class="flex items-center mr-150 mt-20 gap-2 ">
        <button class="bg-gray-400 text-black rounded-lg border-white w-14 h-12">قبلی</button>
        <button class="bg-blue-400 text-black rounded-lg border-white w-12 h-12">۱</button>
        <button class="bg-gray-400 text-black rounded-lg border-white w-12 h-12">۲</button>
        <button class="bg-gray-400 text-black rounded-lg border-white w-14 h-12">بعدی</button>
    </div>
    </main>
  </div>
  <?php get_footer() ?>

