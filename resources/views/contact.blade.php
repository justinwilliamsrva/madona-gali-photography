<x-guest-layout>
    <x-slot name="header">
        <x-banner-image backgroundImage="bg-[url('https://live.staticflickr.com/65535/52162188140_e6c9f5ff44_b.jpg')]" headingTitle='Contact Me' />
    </x-slot>

    <div class="bg-[#EAF3F6]">
        <div class=" p-8 md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <h3 class="font-header text-3xl leading-6 text-gray-900">I look forward to getting to know you!</h3>
                <p class="mt-1 text-sm text-gray-500">Click <a class="text-decoration-line: underline" href="{{ route('details.index') }}">here</a> for Details and Pricing.</p>
                @if (session()->has('success'))
                <p class="text-lg mt-5 rounded">{{session('success')}}</p>
                @endif
                @if (session()->has('error'))
                <p class="text-lg mt-5 text-red-300 underline rounded">{{session('error')}}</p>
                @endif
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-3">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                            <input required type="text" name="first_name" id="first-name" autocomplete="first-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                            <input required type="text" name="last_name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <label for="city" class="block text-sm font-medium text-gray-700">Email</label>
                            <input required type="text" name="email" id="city" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                            <label for="region" class="block text-sm font-medium text-gray-700">Phone</label>
                            <input required type="text" name="phone" id="region" autocomplete="phone" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                            <label for="postal-code" class="block text-sm font-medium text-gray-700">Location</label>
                            <input required type="text" name="location" id="postal-code" autocomplete="postal-code" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6 border-t-2 pt-10">
                            <label for="subject" class="block text-sm font-medium text-gray-700">Subject</label>
                            <input required type="text" name="subject" id="subject" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>

                        <div class="col-span-6">
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea required type="text" rows="6" name="message" id="message" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                        </div>
                        <div class="col-span-6 sm:col-span-3">
                            <label for="security" class="block text-sm font-medium text-gray-700">Security Question:<br class="sm:hidden"/> Roses are red, violets are ____?</label>
                            <input required type="text" name="security" id="security" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                    <div class="py-3 text-left">
                        <button type="submit" class=" bg-gray-800 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white  hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150">Send</button>
                    </div>

                </form>
            </div>
        </div>


</x-guest-layout>