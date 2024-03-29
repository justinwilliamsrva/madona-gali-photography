<!-- This example requires Tailwind CSS v2.0+ -->
<footer style="background-color: rgba(0, 0, 0, 0.2)">
  <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
    <nav class="-mx-5 -my-2 flex flex-wrap justify-center" aria-label="Footer">
      <div class="px-5 py-2">
        <a href="/" class="text-base text-gray-700 hover:text-gray-900"> Home </a>
      </div>

      <div class="px-5 py-2">
        <a href="/#galleries" class="text-base text-gray-700 hover:text-gray-900"> Galleries </a>
      </div>

      <div class="px-5 py-2">
        <a href="/about" class="text-base text-gray-700 hover:text-gray-900"> About </a>
      </div>

      <div class="px-5 py-2">
        <a href="/portrait" class="text-base text-gray-700 hover:text-gray-900"> Portrait </a>
      </div>

      <div class="px-5 py-2">
        <a href="/wedding" class="text-base text-gray-700 hover:text-gray-900"> Wedding </a>
      </div>

      <div class="px-5 py-2">
        <a href="/details" class="text-base text-gray-700 hover:text-gray-900"> Details </a>
      </div>
      <div class="px-5 py-2">
        <a href="/reviews" class="text-base text-gray-700 hover:text-gray-900"> Reviews </a>
      </div>
      <div class="px-5 py-2">
        <a href="/contact" class="text-base text-gray-700 hover:text-gray-900"> Contact </a>
      </div>
    </nav>
    <div class="mt-8 flex justify-center space-x-6">
      <a href="https://www.instagram.com/madonagali/?hl=en" class="text-gray-700 hover:text-gray-900">
        <span class="sr-only">Instagram</span>
        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
          <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
        </svg>
      </a>

      <a href="mailto:madonagaliphotography@gmail.com" class="text-gray-700 hover:text-gray-900" >
        <span class="sr-only">Email</span>
        <svg class="h-7 w-7" fill="currentColor" viewBox="0 1 20 20" aria-hidden="true">
          <path d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z" />
        </svg>
      </a>
    </div>
    <p class="mt-8 text-center text-base text-gray-700">&copy; {{ date('Y') }} Copyright<br class="sm:hidden"/> Modana Gali Photography</p>
    <p class="text-center text-4xl text-gray-700">-</p>
    <p class="text-center text-base text-gray-700">Designed By <a href="https://www.justinwdev.com" class="underline hover:text-gray-900" target="_blank">Justin Williams</a></p>
  </div>
</footer>
