<x-guest-layout>
    <x-slot name="header">
        <x-banner-image backgroundImage="bg-[url('/images/Slice.jpg')]" headingTitle='Reviews' />
    </x-slot>

    @foreach($reviews as $review)
    <x-reviews.review-card-full :review='$review' />
    @endforeach




</x-guest-layout>