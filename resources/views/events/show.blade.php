<x-layout>
    @include('partials._search')

    <a href="/" class="inline-block text-black ml-4 mb-4">
        <i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card>
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6" src="{{$event->logo ? asset('storage/' . $event->logo) : asset('/images/no-image.jpg')}}" alt=""/>
                <h3 class="text-4xl mb-3 font-bold">{{$event->title}}</h3>
                        <x-event-tags :tagsCsv="$event->tags"/>
                    <div class="text-lg my-4 mb-3"></div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4"> Event Description </h3>
                                <div class="text-lg space-y-6">

                                    {{$event->description}}

                                    <a class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80">
                                        <i class="fa-solid"></i>
                                        Start: {{$event->start_date}}
                                    </a>

                                    <a target="_blank" class="block bg-black text-white py-2 rounded-xl hover:opacity-80">
                                        <i class="fa-solid"></i>
                                        End: {{$event->end_date}}
                                    </a>
                                </div>
                        </div>
            </div>
        </x-card>
        
        <x-card class="mt-4 p-2 flex space-x-6">
            <a href="/events/{{$event->id}}/edit">
                <i class="fa-solid fa-pencil"></i> Edit
            </a>
            <form method="POST" action="/events/{{$event->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
        </x-card>
    </div>
</x-layout>