<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 flex flex-col space-y-2">
        <div x-data="{expand: false}"class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div @click="expand = !expand" class="flex justify-between text-xl p-6 bg-white border-b border-gray-200">
                <div id="chevron">
                    <svg xmlns="http://www.w3.org/2000/svg" x-show="!expand" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x-show="expand" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                    <p>({{count($messages)}}) Messages</p>
                    <p></p>
                </div>
            </div>
            <div x-show="expand">
            @foreach($messages as $message)
                <div class="grid grid-cols-2 sm:grid-cols-4 border-2 gap-1 text-sm p-3 {{$loop->odd ? 'bg-gray-200' : 'bg-white'}}">
                    <p class="text-center">{{$message->first_name}} {{$message->last_name}} </p>
                    <p class="text-center">{{$message->email}}</p>
                    <p class="text-center">{{$message->phone}}</p>
                    <p class="text-center">{{$message->location}}</p>
                    <p class="col-span-2 sm:col-span-4 text-center">{{$message->subject}}</p>
                    <p class="col-span-2 sm:col-span-4 md:col-span-4">{{$message->message}}<br>{{$message->created_at}}</p>
                </div>
            @endforeach
            </div>

        </div>

        <div x-data="{expand: false}"class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div @click="expand = !expand" class="flex justify-between text-xl p-6 bg-white border-b border-gray-200">
                <div id="chevron">
                    <svg xmlns="http://www.w3.org/2000/svg" x-show="!expand" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" x-show="expand" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                    </svg>
                </div>
                    <p>({{count($reviews)}}) Reivews</p>
                    <p></p>
                </div>
            </div>
            <div x-show="expand">
            @foreach($reviews as $review)
                <x-reviews.review-card-full :review='$review' />
            @endforeach
            </div>

        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-center text-xl p-6 bg-white border-b border-gray-200">
                    Details
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
