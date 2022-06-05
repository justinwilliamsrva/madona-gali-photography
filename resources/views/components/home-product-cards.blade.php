<a href="#" class="group h-[32rem] sm:h-96 {{ $image == 'hide' ? 'hidden xl:invisible xl:block' : 'visible'}}">
  <div class="w-full h-full bg-gray-200 rounded-lg overflow-hidden">
    <img src="{{ $image }}" alt="" class=" w-full h-full object-center object-cover group-hover:opacity-75">
  </div>
  <div class="mt-4 flex items-center justify-center text-base font-medium text-black">
    <h3>{{ $title }}</h3>
  </div>
</a>