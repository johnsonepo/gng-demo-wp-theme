<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/gng-favicon-new-150x150.png" type="image/x-icon">
    <?php wp_head(); ?>

</head>
<body <?php body_class('h-full font-josefinSans relative w-screen'); ?> >
<header id="gng_main_header_menu" class="bg-transparent text-white sticky top-0 z-50 h-[6rem] p-4">
    <div class="mx-[1px] sm:mx-[20px] md:mx-[1rem] lg:mx-[5rem] xl:mx-[18rem]">
        <div class="flex items-center justify-between">
            <a href="<?php echo home_url(); ?>">
                <img class="h-14" src="<?php echo get_template_directory_uri(); ?>/images/gng-logo.png" alt="GNG logo white">
            </a>
            <nav class="hidden lg:flex space-x-4 items-center text-sm sm:text-xl relative">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'header-menu',
                        'container'      => false,
                        'menu_class'     => 'flex space-x-4',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'          => 2,
                        'walker'         => new Nav_Walker(),
                    ) );
                ?>
                <div class="ml-2">
                    <button class="border-2 border-primary hover:border-white hover:text-white text-primary w-full px-6 py-2 rounded-full">
                        Book Strategy Call
                    </button>
                </div>
            </nav>
            
            <button id="mobile_menu_open" class="lg:hidden text-xl" aria-label="Open Menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
        <div id="__mobile_menu" class="lg:hidden hidden mobile-menu-container absolute top-0 right-0 bg-[#1E2021] z-20 h-screen">
            <div class="mobile-menu-inner-container p-4">
                <div class="flex justify-end">
                    <button id="mobile_menu_close" class="mobile-menu-close text-xl text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="text-center mb-5 mt-2">
                    <a href="<?php echo home_url(); ?>">
                        <img class="h-[5rem] mx-auto" src="<?php echo get_template_directory_uri(); ?>/images/gng-logo.png" alt="GNG logo white">
                    </a>
                </div>
                <nav class="mb-5 pl-[18%] mt-14 lg:hidden w-screen">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'header-menu',
                            'container'      => false,
                            'menu_class'     => 'space-y-4',
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'          => 2,
                            'walker'         => new Nav_Walker_Mobile(),
                        ) );
                    ?>
                </nav>

                <div class="mt-12 px-[18%]">
                    <div class="border-t border-b border-gray-600">
                        <ul class="space-y-4 py-3">
                            <li>
                                <a href="mailto:info@growthninjagroup.com" class="flex text-white hover:text-gray-400 items-center">
                                    <img class="w-12 pr-2" src="<?php echo get_template_directory_uri(); ?>/images/alternate_email.svg" alt="Email Icon">
                                    info@growthninjagroup.com
                                </a>
                            </li>
                            <li>
                                <a href="tel:+971506875574" class="flex text-white hover:text-gray-400 items-center">
                                    <img class="w-10 pr-2" src="<?php echo get_template_directory_uri(); ?>/images/call.svg" alt="Phone Icon">
                                    +971 50 687 5574
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-[28px] flex justify-center text-primary">
                        <ul class="flex space-x-3">
                            <li><a href="#"><i class="fab fa-linkedin e-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-facebook e-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram e-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-youtube e-icon"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter e-icon"></i></a></li>
                        </ul>
                    </div>
                    <div class="flex justify-center mt-[28px]">
                        <button class="bg-primary text-white w-full px-3 py-2 rounded-full">
                            Book strategy call
                            <span>
                                <svg class="w-4 inline-flex pl-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </button>
                    </div>
                    <!-- <div class="absolute bottom-8 right-2 w-14 h-14 rounded-full bg-primary text-white p-2">
                        <svg class="w-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
                        </svg>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</header>
