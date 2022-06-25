<x-guest-layout>
  <x-slot name="header">
    <x-banner-image backgroundImage="bg-[url('https://live.staticflickr.com/65535/52162186580_6f3ee285df_o.jpg')]" headingTitle='EVERY PHOTO TELLS A STORY' />
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
      <div class="grid grid-cols-1 gap-y-20 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:gap-x-8">
        <x-home-product-cards link="gallery-wedding" image="https://live.staticflickr.com/65535/52161698801_2e7dca9bfd_b.jpg" title="Wedding" />
        <x-home-product-cards link="gallery-couples" image="https://live.staticflickr.com/65535/52162186590_03fdcbc125_o.jpg" title="Couples" />
        <x-home-product-cards link="gallery-seniors" image="https://live.staticflickr.com/65535/52161936529_a85fb13629_b.jpg" title="Seniors" />
        <x-home-product-cards link="gallery-family" image="https://live.staticflickr.com/65535/52161936449_0d388a3662_o.jpg" title="Family" />
        <x-home-product-cards link="gallery-maternity" image="https://live.staticflickr.com/65535/52161936474_dbc6225ffe_b.jpg" title="Maternity" />
        <x-home-product-cards link="gallery-real-estate" image="https://live.staticflickr.com/65535/52161698791_41a86c9fa6_b.jpg" title="Real Estate" />
      </div>
    </div>
  </div>
  <x-reviews.review-create :reviews='$reviews' />

</x-guest-layout>