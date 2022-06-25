<div class="h-80">
  <a href="{{ route($link)}} " class="group">
    <div class="w-full h-full bg-gray-200 rounded-lg overflow-hidden">
      <img src="{{ $image }}" alt="" class="{{($title == 'Family' || $title == 'Maternity') ? 'object-top' : 'object-center'}} w-full h-full object-cover group-hover:opacity-75">
    </div>
  </a>
  <div class="mt-4 flex items-center justify-center text-base font-medium text-black">
    <h3>{{ $title }}</h3>
  </div>
</div>