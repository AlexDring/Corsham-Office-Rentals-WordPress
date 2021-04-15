<?php
/*
  Template Name: Contact Page
*/

get_header(); ?>

<section class="bg-white pb-24 pt-12">
  <div class="container mx-auto">
    <div class="flex flex-wrap bg-white px-12 mx-auto">
      <div class="w-full md:w-1/2 bg-gray-100 p-12 rounded-l-lg">
        <h1 class="text-3xl mb-6 font-extrabold">Get in touch</h1>

        <?php if( get_field('phone') ): ?>
          <h2 class="font-semibold text-gray-900 text-xs">PHONE</h2>
          <a class="text-red-500 font-semibold text-xl" href="tel:<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a>
        <?php endif; ?>

        <?php if( get_field('email') ): ?>
        <h2 class="font-semibold text-gray-900 text-xs mt-4">EMAIL</h2>
          <a class="text-red-500 font-semibold text-xl" href="mailto:<?php the_field('email'); ?>?subject=Corsham%20Office%20Rental%20Enquiry"><?php the_field('email'); ?></a>
        <?php endif; ?>
        <h2 class="font-semibold text-gray-900 text-xs mt-4">ADDRESS</h2>

        <?php if( get_field('address') ): ?>
          <p class="mt-1 text-gray-700 text-md"><?php the_field('address'); ?></p>
        <?php endif; ?>
       
      </div>
      <div class="w-full md:w-1/2 p-12 rounded-r-lg bg-gray-50">
        <!-- <form action="">
          <div class="flex flex-col">
            <label for="name" class="hidden">Full Name</label>
            <input type="name" name="name" id="name" placeholder="Full Name" class="w-100 mt-3 py-3 px-3 rounded-md bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 text-gray-800 text-sm focus:border-red-700 focus:outline-none">
          </div>

          <div class="flex flex-col mt-2">
              <label for="email" class="hidden">Email</label>
              <input type="email" name="email" id="email" placeholder="Email" class="w-100 mt-3 py-3 text-sm px-3 rounded-md bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 text-gray-800  focus:border-red-700 focus:outline-none">
          </div>

          <div class="flex flex-col mt-2">
              <label for="tel" class="hidden">Number</label>
              <input type="tel" name="tel" id="tel" placeholder="Telephone Number" class="w-100 mt-3 py-3 text-sm px-3 rounded-md bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 text-gray-800  focus:border-red-700 focus:outline-none">
          </div>
          
          <div class="flex flex-col mt-2">
              <label for="message" class="hidden">Message</label>
              <textarea type="message" name="message" id="message" placeholder="Enter message" class="h-24 w-100 mt-3 py-3 text-sm px-3 rounded-md bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 text-gray-800  focus:border-red-700 focus:outline-none"></textarea>
          </div>

          <button type="submit" class="md:w-32 bg-red-600 hover:bg-red-700 text-white font-medium py-3 px-6 rounded-md mt-4 transition ease-in-out duration-300">
              Submit
          </button>
        </form> -->
        <?php echo do_shortcode( '[contact-form-7 id="226" title="Contact"]' ) ?>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();