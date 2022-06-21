<x-guest-layout>
    <x-slot name="header">
        <x-banner-image backgroundImage="bg-[url('https://live.staticflickr.com/65535/52161937989_1683059090_b.jpg')]" headingTitle='Reviews' />
    </x-slot>

    @foreach($reviews as $review)
    <x-reviews.review-card-full :review='$review' />
    @endforeach




</x-guest-layout>