<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
</head>
<body>
<div>
  <nav class="bg-red-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex items-center justify-between h-16">
        <div class="flex items-center">
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="/" 
              
              <?php if( is_front_page()) : ?> class="bg-red-900 text-white px-3 py-2 rounded-md text-sm font-medium" 
              <?php else : ?> class="text-white hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
              <?php endif; ?>
              >Home</a>

              <a href="/offices" 
              <?php if( is_page( 123 )) : ?> class="bg-red-900 text-white px-3 py-2 rounded-md text-sm font-medium" 
              <?php else : ?> class="text-white hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
              <?php endif; ?>
              >Offices</a>

              <a href="/studios"
              <?php if( is_page( 149 )) : ?> class="bg-red-900 text-white px-3 py-2 rounded-md text-sm font-medium" 
              <?php else : ?> class="text-white hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
              <?php endif; ?>
              >Studios</a>

              <a href="/treatment-rooms" 
              <?php if( is_page( 154 )) : ?> class="bg-red-900 text-white px-3 py-2 rounded-md text-sm font-medium" 
              <?php else : ?> class="text-white hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
              <?php endif; ?>
              >Treatment Rooms</a>

              <a href="/contact" 
              <?php if( is_page( 121 )) : ?> class="bg-red-900 text-white px-3 py-2 rounded-md text-sm font-medium" 
              <?php else : ?> class="text-white hover:bg-red-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium"
              <?php endif; ?>
              >Contact & Location</a>
            </div>
          </div>
        </div>

        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button id="toggle" type="button" class="bg-red-900 inline-flex items-center justify-center p-2 rounded-md text-white hover:text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!--
              Heroicon name: outline/menu

              Menu open: "hidden", Menu closed: "block"
            -->
            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!--
              Heroicon name: outline/x

              Menu open: "block", Menu closed: "hidden"
            -->
            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/"
          <?php if( is_front_page()) : ?> class="bg-red-900 text-white block px-3 py-2 rounded-md text-base font-medium" 
          <?php else : ?> class="text-white hover:bg-red-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
          <?php endif; ?>
        >Home</a>

        <a href="/offices" 
        <?php if( is_page( 123 )) : ?> class="bg-red-900 text-white block px-3 py-2 rounded-md text-base font-medium" 
        <?php else : ?> class="text-white hover:bg-red-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
        <?php endif; ?>
        >Offices</a>

        <a href="/studios"
        <?php if( is_page( 149 )) : ?> class="bg-red-900 text-white block px-3 py-2 rounded-md text-base font-medium" 
        <?php else : ?> class="text-white hover:bg-red-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
        <?php endif; ?>
        >Studios</a>

        <a href="/treatment-rooms"
        <?php if( is_page( 154 )) : ?> class="bg-red-900 text-white block px-3 py-2 rounded-md text-base font-medium" 
        <?php else : ?> class="text-white hover:bg-red-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
        <?php endif; ?>
        >Treatment Rooms</a>

        <a href="/contact" 
        <?php if( is_page( 121 )) : ?> class="bg-red-900 text-white block px-3 py-2 rounded-md text-base font-medium" 
        <?php else : ?> class="text-white hover:bg-red-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium"
        <?php endif; ?>
        >Contact & Location</a>
      </div>
    </div>
  </nav>


