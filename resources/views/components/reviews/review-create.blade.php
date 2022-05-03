<div class="bg-[#F8F4EE] pt-8 sm:pt-12 ">
<h1 class="text-black text-center text-2xl font-semibold uppercase md:text-3xl mb-6">Recent Reviews</h1>
    <div class="">
        <div class="">
            @foreach($reviews as $review)
            <x-reviews.review-card :review='$review' />
            @endforeach
        </div>
        <div class=" p-5 max-w-6xl mx-auto sm:flex-row md:flex flex-col justify-between">
            <div class="flex-1 pr-7 hidden md:block"><img class="w-96 ml-auto" src="/images/madonna-review.jpeg" alt="madonna"></div>
            <form class="flex-grow md:pl-7 md:mr-auto" method="POST" action="{{ route('reviews.store') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Full Name')" />

                    <input id="name" class="block border-2 border-black mt-1 rounded w-full focus:border-[#EAF3F6]" type="name" name="name" :value="old('name')" />
                </div>
                <!-- Rating -->
                <div class="mt-4">
                    <x-label for="stars" :value="__('Rating')" />

                    <select name="stars" class="rounded border-2 focus:border-[#EAF3F6]">
                        <option value='5' >5</option>
                        <option value='4' >4</option>
                        <option value='3' >3</option>
                        <option value='2' >2</option>
                        <option value='1' >1</option>
		            </select>
                </div>

                <!-- Message -->
                <div class="mt-4">
                    <x-label for="message" :value="__('Message')" />

                    <textarea id="message" class="block mt-1 w-full h-32 rounded border-2 focus:border-[#EAF3F6]" type="textarea" name="message" :value="old('message')"></textarea>
                </div>


                <x-button class="mt-3">
                    {{ __('Submit') }}
                </x-button>
                @if (session()->has('success'))
                    <p style="float:right" class="px-4 py-2 mt-3 text-xs rounded bg-[#EAF3F6]">{{session('success')}}</p>
                @endif
            </form>
        </div>
    </div>
</div>