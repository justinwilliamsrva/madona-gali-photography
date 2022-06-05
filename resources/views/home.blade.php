<x-guest-layout>
  <x-slot name="header">
    <x-banner-image backgroundImage="bg-[url('/images/home-banner.jpeg')]" headingTitle='EVERY PHOTO TELLS A STORY' />
  </x-slot>

  <div class="bg-[#EAF3F6]">
    <div class="text-center py-8 sm:py-12">
      <h1 class="text-2xl">LOCATED IN</h1>
      <h2 class="text-2xl">Richmond ,VA</h2>
      <h2 class="text-xl italic">Available Worldwide</h2>
    </div>
    <hr />
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h1 class="text-black text-center text-2xl font-semibold uppercase md:text-3xl mb-6">Services</h1>
      <div class="grid grid-cols-1 gap-y-20 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
        <x-home-product-cards link="wedding" image="/images/home-wedding.jpeg" title="Wedding" />
        <x-home-product-cards link="couples" image="/images/home-couples.jpeg" title="Couples" />
        <x-home-product-cards link="seniors" image="/images/home-seniors.jpeg" title="Seniors" />
        <x-home-product-cards link="family" image="/images/home-family.jpeg" title="Family" />
        <x-home-product-cards link="" image="hide" title="" />
        <x-home-product-cards link="maternity" image="/images/home-maternity.jpeg" title="Maternity" />
        <x-home-product-cards link="real-estate" image="/images/home-real-estate.jpeg" title="Real Estate" />
      </div>
    </div>
  </div>
  <x-reviews.review-create :reviews='$reviews' />

</x-guest-layout>