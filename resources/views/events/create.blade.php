<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Create an Event</h2>
    </header>
  
    <form method="POST" action="/events" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Event Title</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" placeholder="Example: Urodziny" value="{{old('title')}}" />
        @error('title')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div> 

      <div class="mb-6">
        <label for="start_date" class="inline-block text-lg mb-2">Start Date</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="start_date" placeholder="2023-11-20 13:30:00" value="{{old('start_date')}}" />
        @error('start_date')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="end_date" class="inline-block text-lg mb-2">End Date</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="end_date" placeholder="2023-11-20 14:30:00" value="{{old('end_date')}}" />
        @error('end_date')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
  
      <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">Tags (Comma Separated)</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" placeholder="Example: urodziny, imieniny, swieto, etc" value="{{old('tags')}}" />   
        @error('tags')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
  
      <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2"> Event Image </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
        @error('logo')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
  
      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2"> Event Description </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10" placeholder="...">{{old('description')}}</textarea>
        @error('description')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>
  
      <div class="mb-6">
        <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"> Create Event </button>
        <a href="/" class="text-black ml-4"> Back </a>
      </div>
    </form>
  </x-card>
</x-layout>