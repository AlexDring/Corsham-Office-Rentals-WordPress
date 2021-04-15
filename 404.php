<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>
<section class="bg-gray-50">
  <main class="flex flex-col justify-center">
    <div class="text-center m-12 p-12 bg-white rounded-lg">
      <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-4xl">
        404 - Page not found
      </h1>
      <div class="mt-5 sm:mt-8 sm:flex justify-center">
        <div class="rounded-md shadow">
          <a href="/"
            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-red-600 hover:bg-red-700 md:py-4 md:text-lg md:px-10">
            Home
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
</section>

<?php get_footer(); ?>