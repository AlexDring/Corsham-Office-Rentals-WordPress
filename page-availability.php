<?php
/*
  Template Name: Availability Page Template 
*/

get_header(); ?>
<section class="bg-gray-100">
  <div class="container mx-auto py-12">
  <div class="mt-4 max-w-2xl lg:mx-auto text-center">
    <h1 class="text-4xl font-extrabold"><?php the_field('title') ?></h1>
    <?php if( get_field('subtitle') ): ?>
      <p class="text-gray-500 text-lg pt-2"><?php the_field('subtitle'); ?></p>
    <?php endif; ?>
  </div>

    <?php if( get_field('content') ): ?>
      <div class="max-w-screen-md mx-4 sm:mx-auto bg-white p-8 mt-8 prose rounded-lg">
        <?php the_field('content'); ?>
      </div>
    <?php endif; ?>
  
  </div>
</section>

  <?php 
    $images = get_field('gallery');
    if( $images ): ?>
    <section class="bg-gray-100">
        <div class="container mx-auto pt-6 px-4  pb-32">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                  <?php foreach( $images as $image ): ?>
                      <div class="rounded-lg bg-white">
                          <a href="<?php echo esc_url($image['url']); ?>" class="glightbox" data-title="<?php echo esc_html($image['title']); ?>">
                              <img src="<?php echo esc_url($image['sizes']['gallery_thumb']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="w-full rounded-t-lg" />
                          </a>
                          <p class="p-4 text-gray-500 text-md"><?php echo esc_html($image['title']); ?></p>
                      </div>
                  <?php endforeach; ?>
            </div>
        </div>
    </section>
  <?php endif; ?>

  <div class="bg-gray-50">
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


<?php
get_footer();