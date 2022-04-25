<div>
    <h2 class="text-center">Reviews</h2>
    <div class="flex flex-col-reverse lg:flex-row">
        <div class="flex-1 border-2">
            <h3 class="text-center">Recent Reviews</h3>
            @foreach($reviews as $review)
            <x-reviews.review-card :review='$review' />
            @endforeach
        </div>
        <div class="flex-grow border-2 flex flex-col sm:flex-row">
            <div class="flex-1 hidden md:block"><img class="h-auto w-96 mx-5" src="/images/madonna-review.jpeg" alt="madonna"></div>
            <form class="flex-grow my-auto mx-5" method="POST" action="{{ route('reviews.store') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-label for="name" :value="__('Full Name')" />

                    <x-input id="name" class="block mt-1 w-full " type="name" name="name" :value="old('name')" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="message" :value="__('Message')" />

                    <textarea id="message" class="block mt-1 w-full h-32" type="textarea" name="message" :value="old('message')"></textarea>
                </div>
            <!-- <input type="hidden" name="stars" value=5> -->

                <x-button class="mt-3">
                    {{ __('Submiter') }}
                </x-button>
            </form>
            @if (session()->has('success'))
                <p>{{session('success')}}</p>
            @endif
        </div>
    </div>
</div>