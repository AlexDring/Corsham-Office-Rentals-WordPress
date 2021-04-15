<?php
/*
  Template Name: Home Page
*/

get_header(); ?>

<?php 
get_header(); ?>

<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="h-560 relative z-10 bg-white lg:max-w-2xl lg:w-full">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2"
        fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>
      
      <!-- <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28"> -->
      <main class="flex flex-col justify-center h-full mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="sm:text-center lg:text-left">
          <?php
            $hero = get_field('hero_banner');
          if( $hero ): ?>
          <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-4xl">
            <!-- <span class="xl:inline">Everything you need to make your business</span>
              <span class="text-red-600 xl:inline">grow super fast!</span> -->
            <?php echo $hero['hero_title']; ?>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            <?php echo $hero['hero_text']; ?>
          </p>
          <?php endif; ?>
          <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
              <a href="#availability"
                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 md:py-4 md:text-lg md:px-10">
                Available Offices
              </a>
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
              <a href="/contact"
                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-red-700 bg-red-100 hover:bg-red-200 md:py-4 md:text-lg md:px-10">
                Contact
              </a>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <?php if( get_field('hero_image') ): ?>
    <img src="<?php the_field('hero_image'); ?>" alt=""
      class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" />
    <?php endif; ?>
  </div>
</div>
<section class="bg-gray-50">
  <div class="container mx-auto max-w-screen-xl">
    <div class="flex pt-32 pb-14 sm:pb-16 px-8 flex-wrap">
      <div class="w-full order-1 pt-8 sm:w-1/2 sm:order-0 sm:pt-0 px-6">
        <?php if( get_field('content_image') ): ?>
          <img src="<?php the_field('content_image'); ?>" alt="" class="object-cover bg-gray-100 rounded-lg" />
        <?php endif; ?>
      </div>
      <div class="w-full px-8 sm:w-1/2 order-0 sm:order-1 sm:px-6">
        <?php
          $first_content = get_field('first_content_block');
        if( $first_content ): ?>
        <h2 class="text-3xl font-extrabold pb-3">
          <?php echo $first_content['content_title']; ?>
        </h2>
        <hr class="w-16 border-gray-300">
        <p class="mt-3 text-gray-500 text-lg">
          <?php echo $first_content['content_text']; ?>
        </p>
        <? endif ?>
      </div>
    </div>

    <div class="flex sm:pt-16 pb-32 px-8 flex-wrap">
      <div class="w-full sm:w-1/2 px-8 sm:px-6">
        <?php
          $second_content = get_field('second_content_block');
        if( $second_content ): ?>
        <h2 class="font-extrabold pb-3 text-3xl">
          <?php echo $second_content['content_title']; ?>
        </h2>
        <hr class="w-16 border-gray-300">
        <p class="mt-3 text-gray-500 text-lg">
          <?php echo $second_content['content_text']; ?>
        </p>
        <? endif ?>
      </div>
      <div class="w-full sm:w-1/2 px-6 pt-8 sm:pt-0">
        <?php if( get_field('second_content_image') ): ?>
        <img src="<?php the_field('second_content_image'); ?>" alt="" class="object-cover bg-gray-100 rounded-lg" />
        <?php endif; ?>
      </div>
    </div>
  </div>

</section>
<section id="availability" class="bg-gray-100">
  <div class="container mx-auto pt-16 max-w-screen-xl">
    <div class="text-center">
      <?php
        $availability = get_field('availability_header');
      if( $availability ): ?>
      <h2 class="text-4xl font-extrabold text-center pb-1">
        <?php echo $availability['availability_title'] ?>
      </h2>
      <p class="text-gray-500 text-lg px-4">
        <?php echo $availability['availability_text'] ?>
      </p>
      <?php endif ?>
    </div>


    <?php 

    $posts = new WP_Query(
      array(
      'posts_per_page'	=> -1,
      'post_type'			=> 'availability'
    ));

  if( $posts ): ?>

    <div class="flex pt-8 pb-16 justify-center flex-wrap mx-8s py-6">

      <?php while ( $posts->have_posts() ) : $posts->the_post(); ?>

      <div class="bg-white rounded-lg shadow-md w-4/5 sm:w-2/5 lg:w-3/10 mb-7 mx-4">
        <div>
          <img class="rounded-t-lg" src="<?php the_field('image'); ?>" alt="">
        </div>
        <div class="px-6 pt-6 pb-10">
          <p class="text-xs text-red-600 font-semibold uppercase">
            <?php the_field('room_type') ?>
          </p>
          <h3 class="text-lg font-bold my-1.5"><?php the_title(); ?></h3>
          <p class="text-sm text-gray-600">
            <?php the_field('text'); ?>
          </p>
        </div>
      </div>

      <?php endwhile; ?>

    </div>

    <?php wp_reset_postdata(); ?>

    <?php endif; ?>

  </div>
</section>

<div class="bg-white">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
      <span class="block">Get in touch!</span>
      <span class="block text-red-600">Enquire for availability.</span>
    </h2>
    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
      <div class="inline-flex rounded-md shadow">
        <a href="/contact" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700">
          Contact us
        </a>
      </div>
      <!-- <div class="ml-3 inline-flex rounded-md shadow">
        <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-red-600 bg-white hover:bg-indigo-50">
          Learn more
        </a>
      </div> -->
    </div>
  </div>
</div>

</div>


<?php 
get_footer(); ?>