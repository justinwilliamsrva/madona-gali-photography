<div class="bg-[#F8F4EE] pt-8 sm:pt-12 ">
<h1 class="text-black text-center text-2xl font-semibold uppercase md:text-3xl mb-6">Recent Reviews</h1>
    <div class="flex flex-col lg:flex-row">
        <div class="flex-1 m-5">
            @foreach($reviews as $review)
            <x-reviews.review-card :review='$review' />
            @endforeach
        </div>
        <div class="flex-grow flex flex-col m-5 sm:flex-row sm:mr-5 ">
            <div class="flex-1 hidden md:block"><img class="h-full w-96 mx-auto" src="/images/madonna-review.jpeg" alt="madonna"></div>
            <form class="flex-grow my-auto p-5 border-2 md:ml-5" method="POST" action="{{ route('reviews.store') }}">
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
                    <p style="float:right" class="px-2 py-2 mt-3 rounded bg-blue-400">{{session('success')}}</p>
                @endif
            </form>
        </div>
    </div>
</div>