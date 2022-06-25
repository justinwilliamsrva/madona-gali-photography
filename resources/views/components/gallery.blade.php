<x-guest-layout>
  <x-slot name="header">
  </x-slot>

  <div class="flex flex-cols justify-center mt-10 text-4xl">
    <h1>{{ $title }}</h1>
  </div>
  <div class="flex flex-cols justify-center max-w-7xl mx-auto">
    <div id="gallery" class="my-20 justified-gallery">
      @foreach($data as $d)
      <a href="{{$d['url_m']}}" class="hover:scale-105 ease-in">
        <img src="{{$d['url_m']}}">
      </a>
      @endforeach
    </div>
  </div>
</x-guest-layout>