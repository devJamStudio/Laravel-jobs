@props(['listing'])

<div class="border bg-teal-0  border-teal-400 shadow-sm shadow-teal-900 hover:shadow-none rounded p-6">
    <div class="flex">
        <img
            class=" w-48 mr-6 md:block"
            src="{{asset('images/acme.png')}}"
            alt=""
        />
        <div>
    </div>
    <div>
        <h3 class="text-2xl">
            <a href="/listings/{{$listing->id}}">{{$listing->title}}</a>
        </h3>
        <div class="text-xl font-bold mb-4"> {{$listing->company}}</div>
        <x-listing-tags :tagsCsv="$listing->tags" />
        <div class="text-lg mt-4">
            <i class="fa-solid fa-location-dot"></i> Boston,
            MA
        </div>
    </div>
</div>
</div>
