<x-layout>

    @include('partials._hero')
    @include('partials._search')

    <div class="lg:grid  grid gap-10 lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mt-10 mx-4" >
    @foreach ($listings as $listing)
       <x-listing-card :listing="$listing" />
    @endforeach

    </div>
    <div class="p-4 mt-6 bg-teal-300">{{$listings->links()}}</div>
</x-layout>
