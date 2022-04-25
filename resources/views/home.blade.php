<x-guest-layout>
    <x-slot name="header">
        <x-banner-image backgroundImage="bg-[url('/images/home-banner.jpeg')]" headingTitle='EVERY PHOTO TELLS A STORY' />
    </x-slot>

    <div class="bg-white">
        <div class="text-center">
            <h1>LOCATED IN</h1>
            <h2>Richmond ,VA</h2>
            <h2>Available Worldwide</h2>
        </div>
        <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-6 lg:grid-cols-3 xl:gap-x-8">
            <x-home-product-cards link="#" image="/images/home-wedding.jpeg" title="Wedding" />
            <x-home-product-cards link="#" image="/images/home-couples.jpeg" title="Couples" />
            <x-home-product-cards link="#" image="/images/home-seniors.jpeg" title="Seniors" />
            <x-home-product-cards link="#" image="/images/home-family.jpeg" title="Family" />
            <x-home-product-cards link="#" image="/images/home-maternity.jpeg" title="Maternity" />
            <x-home-product-cards link="#" image="/images/home-real-estate.jpeg" title="Real Estate" />
            </div>
        </div>
    </div>
    <x-reviews.review-create :reviews='$reviews' />
</x-guest-layout>