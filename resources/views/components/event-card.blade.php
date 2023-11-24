@props(['event'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{$event->logo ? asset('storage/' . $event->logo) : asset('/images/no-image.jpg')}}" alt="" />
        <div>
            <h3 class="text-2xl">
                <a href="/events/{{$event->id}}">{{$event->title}}</a>
            </h3>
            <x-event-tags :tagsCsv="$event->tags"/>
            <h4>Start: {{$event->start_date}}</h4>
        </div>
    </div>
</x-card>