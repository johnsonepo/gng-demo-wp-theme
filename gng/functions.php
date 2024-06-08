<?php
require get_template_directory() . '/includes/class-nav.php';
require get_template_directory() . '/includes/class-nav-mobile.php';
function register_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu' ),
        )
    );
}
add_action( 'init', 'register_menus' );
function theme_enqueue_styles() {
    wp_enqueue_style('tailwindcss-style', get_template_directory_uri() . '/assets/css/style.css', array());
    wp_enqueue_script('js-script', get_template_directory_uri() . '/js/script.js', array('swiper-js'), false, true);

    wp_enqueue_style('swiper-css', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), false, true);

}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function chat_icon_block() {
    return '<svg id="chat-icon" class="fixed bottom-8 right-2 z-50 w-14 h-14 rounded-full bg-primary text-white p-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 0 1-.825-.242m9.345-8.334a2.126 2.126 0 0 0-.476-.095 48.64 48.64 0 0 0-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0 0 11.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155" />
    </svg>';
}
add_shortcode('chat_icon', 'chat_icon_block');

function header_image_block() {
    return '<div class="overflow-hidden m-8">
        <div style="position: absolute; background-image: linear-gradient(to bottom, rgba(3, 2, 2, 1) 5%, rgba(30, 32, 33, 0)), url(' . get_template_directory_uri() . '/images/header-image.webp); background-size: cover; background-position: center;" class="h-screen absolute top-0 left-0 ">
            <div class="z-20 flex flex-col justify-center items-center h-full px-5 md:px-20 lg:px-[23rem] text-center text-white space-y-4 md:justify-start md:mt-64" >
                <div class="flex items-center justify-center">
                    <img class=" h-5 md:h-10" src="' . get_template_directory_uri() . '/images/lock_open.svg" alt=""/>
                    <p class="pl-2 text-lg text-white md:text-2xl">Digital Marketing Agency Dubai</p>
                </div>
                <div class="flex items-center justify-center ">
                    <h1 class="text-4xl md:text-6xl lg:text-[5rem]">SMART GROWTH, NINJA SPEED</h1>
                </div>
                <div class="flex items-center justify-center">
                    <p class="md:text-2xl ">Experience growth with our tailored ABM, branding, design, development, and smart marketing tools created for your business success.</p>
                </div>
                <div class="flex items-center justify-center md:justify-start md:pt-8">
                    <a class="bg-primary py-3 px-8 rounded-full inline-block text-lg md:text-2xl" href="https://growthninjagroup.com/book-strategy-call/">Book Strategy Call
                        <svg class="w-6 inline-flex pl-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>';
}
add_shortcode('header_image', 'header_image_block');

function register_leading_digital_marketing_agency_block() {
    wp_register_script(
        'leading-digital-marketing-agency-block',
        get_template_directory_uri() . '/js/leading-digital-marketing-agency-block.js',
        array( 'wp-blocks', 'wp-element', 'wp-editor', 'wp-components', 'wp-block-editor' ),
        true
    );

    register_block_type('gng/leading-digital-marketing-agency-block', array(
        'editor_script' => 'leading-digital-marketing-agency-block',
    ));
}
add_action('init', 'register_leading_digital_marketing_agency_block');

function image_slider_block() {
    return '<div class="mt-14">
        <div class="px-4 md:px-20 lg:px-[23rem] text-center">
            <div id="imageSlider" class="swiper-container">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide relative">
                        <img class="h-14" src="' . get_template_directory_uri() . '/images/parcellab-logo.svg" alt="GNG logo white">
                    </div>
                    <div class="swiper-slide relative">
                        <img class="h-10 pl-8" src="' . get_template_directory_uri() . '/images/koinly-logo.svg" alt="GNG logo white">
                    </div>
                    <div class="swiper-slide relative">
                        <img class="h-14" src="' . get_template_directory_uri() . '/images/quiqup-logo.svg" alt="GNG logo white">
                    </div>
                    <div class="swiper-slide relative">
                        <img class="h-14" src="' . get_template_directory_uri() . '/images/Noor-Renovatoin.svg" alt="GNG logo white">
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-center px-10 pt-6">
                <p class="md:text-2xl text-xl font-light">Contributed to a total of <span class="font-bold">$534M</span> funding raise and IPO.</p>
            </div>
        </div>
    </div>';
}
add_shortcode('image_slider', 'image_slider_block');

function testimonial_slider_block() {
    return '<div class="bg-[#1E2021] py-16 lg:py-36 text-4xl lg:text-6xl font-josefinSans font-thin overflow-hidden">
        <div id="testimonialSlider" class="swiper-container text-center lg:px-56 ">
            <div class="swiper-wrapper ">
                <div class="swiper-slide relative lg:px-44">
                    <p class="text-white ">Are you investing heavily but <span class="font-bold">not generating profits</span></p>
                </div>
                <div class="swiper-slide relative lg:px-44">
                    <p class="text-white ">Are you spending time on marketing <span class="font-bold">that doesn\'t pay off</span></p>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="pt-14">
            <div class="grid grid-cols-2 md:grid-cols-5 gap-4 px-15 md:px-20 lg:px-[23rem] mt-8">
                <div class="relative px-10 border-right-slant">
                    <img class="h-20" src="' . get_template_directory_uri() . '/images/account_balance_wallet.svg" alt="">
                    <p class="text-xl mt-2 text-white">Money</p>
                </div>
                <div class="relative px-10 border-right-slant">
                    <img class="h-20" src="' . get_template_directory_uri() . '/images/ads_click.svg" alt="">
                    <p class="text-xl mt-2 text-white">Ads</p>
                </div>
                <div class="relative px-10 border-right-slant">
                    <img class="h-20" src="' . get_template_directory_uri() . '/images/linked_services.svg" alt="">
                    <p class="text-xl mt-2 text-white">Marketing</p>
                </div>
                <div class="relative px-10 border-right-slant">
                    <img class="h-20" src="' . get_template_directory_uri() . '/images/settings_gear.svg" alt="">
                    <p class="text-xl mt-2 text-white">Tools</p>
                </div>
                <div class="relative px-10">
                    <img class="h-20" src="' . get_template_directory_uri() . '/images/avg_pace.svg" alt="">
                    <p class="text-xl mt-2 text-white">Growth</p>
                </div>
            </div>
        </div>
    </div>';
}
add_shortcode('testimonial_slider', 'testimonial_slider_block');

function you_are_not_alone_block() {
    return '<div class="py-36 lg:py-40 font-josefinSans font-thin px-15 md:px-20 lg:px-[23rem]">
    <p class="text-center text-4xl lg:text-[8rem]">You’re not alone</p>
    <p class="pt-2 md:pt-14 text-center text-lg lg:text-[3.5rem] leading-relaxed lg:leading-tight">
        in these frustrations, and we’re here to turn these challenges into successes.
    </p>
    <div class="flex justify-center pt-14 font-light">
        <button class="bg-primary text-white w-56 px-5 py-3 md:w-[23rem] md:py-4 rounded-full text-center md:text-3xl hover:bg-[#1E2021] hover:text-white">
            Book strategy call
            <span>
                <svg class="w-8 inline-flex pl-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                </svg>
            </span>
        </button>
    </div>
</div>';
}
add_shortcode('you_are_not_alone', 'you_are_not_alone_block');

function why_us_block() {
    return '<div class="bg-[#1E2021] py-6 lg:py-10 px-4 md:px-8 lg:px-[23rem]">
    <div class="flex flex-col md:flex-row justify-between  py-6 lg:py-10 p-4 space-y-8 md:space-y-0 md:space-x-8">
        <p class="text-center md:text-left text-primary text-2xl md:text-4xl flex-1 lg:leading-tight">We are a Growth Agency, not a typical marketing firm.</p>
        <p class="flex-1 text-white text-center md:text-left md:text-xl text-ns ">
            Learn why we are top 10 digital marketing agency in Dubai. At <span class="text-primary underline">Growth Ninja Group</span>, we’ve perfected the art of cutting through the noise to connect you with your audience. No more shouting into the void. With our strategic approach, your marketing efforts will hit the mark every time, turning potential into profit.
        </p>
    </div>
</div>';
}
add_shortcode('why_us', 'why_us_block');

function grow_with_us_block() {
    return '<div class="py-6 lg:py-10 px-4 md:px-8 lg:px-[23rem]">
    <div>
        <div class="flex flex-col lg:flex-row justify-between py-6 lg:py-10 p-4 space-y-8 md:space-y-0 lg:space-x-8 ">
            <div class="flex-1 text-center md:text-left">
                <p class="text-primary text-lg md:text-2xl font-bold">Best Digital Marketing Agency in Dubai</p>
                <p class="font-bold text-4xl md:text-6xl pt-2">Grow With Us</p>
            </div>
            <div class="flex-1">
                <p class="text-ns md:text-xl p-2">
                    Grow your business with a leading digital marketing agency in Dubai with complete services: targeted marketing, branding, website design, and unique tools, all designed to help you succeed.
                </p>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row justify-between  py-6 lg:py-10 p-4 space-y-8 md:space-y-0 lg:space-x-8 ">
            <div class="flex-1 border border-gray-300 rounded-lg p-4">
                <p class="text-ns md:text-xl">
                    Our precision-driven Account-Based Marketing (ABM) strategies and holistic branding directly address your audience’s needs, turning your investment into measurable growth.
                </p>
                <div class="my-4 w-1/4 border-2 border-t border-primary"></div>
                <p class="text-4xl md:text-4xl pt-2">Maximize Your Marketing Impact</p>
            </div>
            <div class="flex-1 border border-gray-300 rounded-lg p-4">
                <p class="text-ns md:text-xl">
                    We tailor marketing campaigns and offer innovative design and development services. Personalized approaches resonate more deeply, turning potential leads into loyal customers and boosting your bottom line.
                </p>
                <div class="my-4 w-1/4 border-2 border-t border-primary"></div>
                <p class="text-4xl md:text-4xl pt-2">Drive Profitability With Personalization</p>
            </div>
            <div class="flex-1 border border-gray-300 rounded-lg p-4">
                <p class="text-ns md:text-xl">
                    We integrate innovative tools to streamline your efforts. Smarter marketing uses data-driven insights and cutting-edge technology, ensuring every minute and every dollar advances your business goals.
                </p>
                <div class="my-4 w-1/4 border-2 border-t border-primary"></div>
                <p class="text-4xl md:text-4xl pt-2">Increase Results with  Tangible Marketing</p>
            </div>
        </div>
    </div>
</div>';
}
add_shortcode('grow_with_us', 'grow_with_us_block');

function our_solutions_block() {
    return '<div class="bg-[#1E2021] py-6 lg:py-10 px-4 md:px-2 lg:px-[23rem]">
    <div class="flex flex-col md:flex-row justify-between py-6 lg:py-10 p-4 space-y-8 md:space-y-0 md:space-x-12 lg:space-y-0 lg:space-x-8 items-center">
        <div class="flex-1 text-center md:text-left text-white order-2 md:order-1">
            <p class="text-primary text-lg md:text-2xl">Our Solutions</p>
            <p class="text-4xl md:text-6xl pt-2">ABM Campaigns</p>
            <p class="text-ns md:text-lg pt-2">
                Transform Your B2B Marketing Strategy - Discover how our precision-driven Account-Based Marketing (ABM) campaigns can turn your ideal accounts into your biggest successes. Let&#39;s personalize your approach to meet your business goals.
            </p>
            <div class="flex pt-14 justify-center md:justify-start">
                <button class="border border-primary text-primary w-full lg:w-4/5 py-3 md:py-4 rounded-full text-center md:text-xl hover:bg-primary hover:text-white">
                    Grow Your Business with ABM
                    <span>
                        <svg class="w-8 inline-flex pl-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <div class="flex-1 flex justify-center order-1 md:order-2 ">
            <img class="w-[16rem] md:w-[17rem] lg:w-[18rem]" src="' .get_template_directory_uri() . '/images/white-ninja-full.svg" alt="">
        </div>
    </div>
    <div class="flex flex-col md:flex-row justify-between  py-6 lg:py-10 p-4 space-y-8 md:space-y-0 md:space-x-8 items-center">
        <div class="flex-1 text-center md:text-left text-white order-2">
            <p class="text-primary text-lg md:text-2xl">Our Solutions</p>
            <p class="text-4xl md:text-6xl pt-2">Brand, Design & Development</p>
            <p class="text-ns md:text-lg pt-2">
            Elevate Your Online Presence - From crafting memorable brand identities to developing responsive websites and modern apps, our design and development services are tailored to leave a lasting impression on your audience and drive growth.
            </p>
            <div class="flex pt-14  justify-center md:justify-start">
                <button class="border border-primary text-primary w-full lg:w-4/5 py-3 md:py-4 rounded-full text-center md:text-xl hover:bg-primary hover:text-white">
                    Turn Idea into Digital Reality
                    <span>
                        <svg class="w-8 inline-flex pl-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <div class="flex-1 flex justify-center md:justify-start">
            <img class="w-[16rem] md:w-[17rem] lg:w-[18rem]" src="' .get_template_directory_uri() . '/images/white-ninja-full.svg" alt="">
        </div>
    </div>
    <div class="flex flex-col md:flex-row justify-between  py-6 lg:py-10 p-4 space-y-8 md:space-y-0 md:space-x-8 items-center">
        <div class="flex-1 text-center md:text-left text-white order-2 md:order-1">
            <p class="text-primary text-lg md:text-2xl">Our Solutions</p>
            <p class="text-4xl md:text-6xl pt-2">Marketing Tools</p>
            <p class="text-ns md:text-lg pt-2">
            Stay Ahead with Our Marketing Tools - Explore QRplify.com and our range of digital marketing tools designed to streamline your efforts. We&#39;re here to make your marketing smarter, not harder, ensuring your business stays ahead of the curve.
            </p>
            <div class="flex pt-14  justify-center md:justify-start">
                <button class="border border-primary text-primary w-full lg:w-4/5 py-3 md:py-4 rounded-full text-center md:text-xl hover:bg-primary hover:text-white">
                    Boost Marketing with Our Tools
                    <span>
                        <svg class="w-8 inline-flex pl-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                            <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <div class="flex-1 flex justify-center order-1 md:order-2">
            <img class="w-[16rem] md:w-[17rem] lg:w-[18rem]" src=" ' .get_template_directory_uri() . '/images/white-ninja-full.svg" alt="">
        </div>
    </div>
</div>';
}
add_shortcode('our_solutions', 'our_solutions_block');

function call_back_block() {
    return '<div class="py-36 lg:py-40 font-josefinSans font-thin px-4 md:px-20 lg:px-[23rem] bg-cover bg-center lg:bg-top-minus-25" style="background-image: url('.get_template_directory_uri().'/images/unlock-potential-background.webp);">
    <p class="pt-2 md:pt-14 text-center text-4xl lg:text-[3.5rem] lg:leading-tight">
        Ready to unlock your business&#39;s true growth potential?
    </p>
    <p class="pt-2 md:pt-14 text-center text-ns lg:text-xl leading-relaxed lg:leading-tight">
        Book a free strategy call now. Let&#39;s tackle your challenges, seize opportunities, and drive your growth – straight to results.
    </p>
    <div class="flex justify-center pt-14 font-light">
        <button class="bg-primary text-white w-56 px-3 py-2 md:w-[23rem] md:py-3 rounded-full text-center md:text-3xl hover:bg-[#1E2021] hover:text-white">
            Book strategy call
            <span>
                <svg class="w-8 inline-flex pl-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                    <path fill-rule="evenodd" d="M8.25 3.75H19.5a.75.75 0 0 1 .75.75v11.25a.75.75 0 0 1-1.5 0V6.31L5.03 20.03a.75.75 0 0 1-1.06-1.06L17.69 5.25H8.25a.75.75 0 0 1 0-1.5Z" clip-rule="evenodd" />
                </svg>
            </span>
        </button>
    </div>
</div>';
}
add_shortcode('call_back', 'call_back_block');
