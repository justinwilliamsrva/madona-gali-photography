<x-guest-layout>
    <x-slot name="header">
        <x-banner-image url='/images/home-banner.jpeg' headingTitle='EVERY PHOTO TELLS A STORY' />
    </x-slot>

    <x-reviews.review-create :reviews='$reviews'/>
</x-guest-layout>
