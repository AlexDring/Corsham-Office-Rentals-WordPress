<section class="text-gray-600 body-font relative bg-white">
  <div class="px-5 pb-5 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="w-full h-450 bg-gray-300 rounded-lg overflow-hidden p-10 flex items-end justify-start relative">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d22859.402050573266!2d-2.2175363585001153!3d51.429999401892225!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf073a96c4aef982f!2sCorsham%20Office%20Rentals!5e0!3m2!1sen!2suk!4v1618304714328!5m2!1sen!2suk"  width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no"allowfullscreen="" loading="lazy"></iframe>
      <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
          <h2 class="font-semibold text-gray-900 text-xs">ADDRESS</h2>
          <p class="mt-1 text-gray-500 text-md"><?php the_field('address', 121); ?></p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="font-semibold text-gray-900 text-xs">EMAIL</h2>
          <a class="text-red-500 font-semibold" href="mailto:<?php the_field('email', 121); ?>?subject=Corsham%20Office%20Rental%20Enquiry">
            <?php the_field('email', 121); ?>
          </a>
          <h2 class="font-semibold text-gray-900 text-xs mt-4">PHONE</h2>
          <a class="text-red-500 font-semibold" href="tel:<?php the_field('phone', 121); ?>"><?php the_field('phone', 121); ?>‬</a>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="h-12 bg-red-600">
</footer>

<?php wp_footer(); ?>
</body>
</html>