<x-guest-layout>
  <x-slot name="header">
    <x-banner-image backgroundImage="bg-[url('{{$images['banner']}}')]" headingTitle='EVERY PHOTO TELLS A STORY' />
  </x-slot>

  <div class="bg-[#EAF3F6]">
    <div class="text-center py-8 sm:py-12">
      <h1 class="text-2xl font-normal">LOCATED IN</h1>
      <h2 class="text-2xl font-normal">Richmond ,VA</h2>
      <h2 class="text-5xl italic font-header mt-3">Available Worldwide</h2>
    </div>
    <hr />
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="text-black text-center text-4xl mb-6 font-header tracking-widest">Gallery</h1>
      <div class="grid grid-cols-1 gap-y-20 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:gap-x-8">
        <x-home-product-cards link="gallery-wedding" image="{{$images['wedding']}}" title="Wedding" />
        <x-home-product-cards link="gallery-couples" image="{{$images['couples']}}" title="Couples" />
        <x-home-product-cards link="gallery-seniors" image="{{$images['seniors']}}" title="Seniors" />
        <x-home-product-cards link="gallery-family" image="{{$images['family']}}" title="Family" />
        <x-home-product-cards link="gallery-maternity" image="{{$images['maternity']}}" title="Maternity" />
        <x-home-product-cards link="gallery-real-estate" image="{{$images['real-estate']}}" title="Real Estate" />
      </div>
    </div>
  </div>
  <x-reviews.review-create :reviews='$reviews' />

</x-guest-layout>