<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 flex flex-col ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div @click="expand = !expand" class="flex justify-center text-xl p-6 bg-white border-b border-gray-200">
                    <h3 class="text-2xl">({{$messages->total()}}) Messages</h3>
                </div>
            </div>
            <div>
            @foreach($messages as $message)
                <div class="grid grid-cols-2 sm:grid-cols-4 border-2 gap-1 text-sm p-3 {{$loop->odd ? 'bg-gray-200' : 'bg-white'}}">
                    <p class="text-center">{{$message->first_name}} {{$message->last_name}} </p>
                    <p class="text-center">{{$message->email}}</p>
                    <p class="text-center">{{$message->phone}}</p>
                    <p class="text-center">{{$message->location}}</p>
                    <p class="col-span-2 sm:col-span-4 text-center">{{$message->subject}}</p>
                    <p class="col-span-2 sm:col-span-4 md:col-span-4">{{$message->message}}<br>{{ Carbon\Carbon::parse($message->created_at)->format('F d, Y - h:i a') }}</p>
                </div>
            @endforeach
            <div>{{$messages->appends(['reviews' => $reviews->currentPage()])->links()}} </div>
            </div>

        </div>
<div class="py-8"><hr class="max-w-7xl mx-auto"/></div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 w-full">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div  class="flex justify-center text-xl p-6 bg-white border-b border-gray-200">
                    <h3 class="text-2xl">({{$reviews->total()}}) Reivews</h3>
                </div>
            </div>
            <div>
            @foreach($reviews as $review)
                <x-reviews.review-card-full :review='$review' />
            @endforeach
            <div>{{$reviews->appends(['messages' => $messages->currentPage()])->links()}}</div>
            </div>

        </div>


    </div>
</x-app-layout>
