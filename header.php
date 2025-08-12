<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body <?php body_class("bg-gray-100"); ?>>
    <header class="bg-white">
      <div class="max-w-screen-lg mx-auto">
        <?php if (function_exists("the_custom_logo")){
          the_custom_logo();
        }?>
      </div>
      <nav class="flex text-center space-x-3 mr-5 ">
            <img src="wp-content/themes/hodcode/assets/photo1754841226 (1).jpeg" alt="" class="w-15 h-15  mt-3 ">
            <a href="" class="text-black mr-10 mt-5 ">خانه</a>
            <a href="" class="text-black mr-10 mt-5">محصولات</a>
            <a href="" class="text-black mr-250 mt-5">ارتباط با ما</a>
            <i class="fa-solid fa-cart-shopping mt-6.5"></i>
        </nav>
    </header>
