<x-layout>
    @include('partials._search')

    <div class=" max-w-lg mx-auto gap-4 space-y-4 md:space-y-2 mx-4 p-10">
        @unless (count($events) == 0)
        @foreach ($events as $event)
            <x-event-card :event="$event" />
        @endforeach
        @else
        <p>
        No events found
        </p>
        @endunless
    </div>
</x-layout>