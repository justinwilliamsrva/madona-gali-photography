<div class="bg-[#F8F4EE] pt-8 sm:pt-12 ">
<h1 class="text-black text-center text-4xl mb-6 font-header tracking-widest">Recent Reviews</h1>
    <div class="">
        <div class="">
            @foreach($reviews as $review)
                <x-reviews.review-card :review='$review' />
            @endforeach
        </div>
        <div class="p-4 lg:p-8 max-w-6xl lg:max-w-7xl mx-auto sm:flex-row md:flex flex-col justify-between">
            <div class="flex-1 pr-7 hidden md:block"><img class="w-96" src="https://live.staticflickr.com/65535/52161700698_d2087a7b69_b.jpg" alt="madonna"></div>
            <form class="flex-grow md:pl-7" method="POST" action="{{ route('reviews.store') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Full Name')" />

                    <input id="name" class="block border-2 p-2 border-gray-300 mt-1 rounded-md w-full focus:border-[#EAF3F6]" type="name" name="name" required/>
                </div>
                <!-- Rating -->
                <div class="mt-4">
                    <x-label for="stars" :value="__('Rating')" />

                    <select name="stars" class="rounded-md border-2 border-gray-300 focus:border-[#EAF3F6]" required>
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

                    <textarea id="message" class="block mt-1 w-full h-32 rounded-md border-2 border-gray-300 focus:border-[#EAF3F6]" type="textarea" name="message" value="old('message')" required></textarea>
                </div>

                <div class="mt-4">
                    <label for="security">Security Question:<br class="md:hidden"> Pandas are white and _____?'</label>
                    <input id="security" class="block border-2 p-2 rounded-md border-gray-300 mt-1 w-full"
                                type="security"
                                name="security"
                                required/>
                </div>


                <x-button class="mt-3">
                    {{ __('Submit') }}
                </x-button>
            </form>
        </div>
    </div>
</div>