<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Edit Event</h2>
      </header>
  
      <form method="POST" action="/events/{{$event->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
          <label for="title" class="inline-block text-lg mb-2">Event Title</label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
            placeholder="Example: Urodziny" value="{{$event->title}}" />
  
          @error('title')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
            <label for="start_date" class="inline-block text-lg mb-2">
              Start Date
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="start_date"
            placeholder="2023-11-20 13:30:00" value="{{$event->start_date}}" />
    
            @error('start_date')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
          </div>
  
        <div class="mb-6">
          <label for="end_date" class="inline-block text-lg mb-2">
            End Date
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="end_date"
          placeholder="2023-11-20 14:30:00" value="{{$event->end_date}}" />
  
          @error('end_date')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="tags" class="inline-block text-lg mb-2">
            Tags (Comma Separated)
          </label>
          <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
            placeholder="Example: urodziny, imieniny, swieto, etc" value="{{$event->title}}" />
  
          @error('tags')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="logo" class="inline-block text-lg mb-2">
            Event Image
          </label>
          <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
          
          <img class="w-48 mr-6 mb-6" src="{{$event->logo ? asset('storage/' . $event->logo) : asset('/images/no-image.jpg')}}" alt="" />

          @error('logo')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <label for="description" class="inline-block text-lg mb-2">
            Event Description
          </label>
          <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10"
            placeholder="...">{{$event->description}}</textarea>
  
          @error('description')
          <p class="text-red-500 text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
  
        <div class="mb-6">
          <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
            Update Event
          </button>
  
          <a href="/" class="text-black ml-4"> Back </a>
        </div>
      </form>
    </x-card>
</x-layout>