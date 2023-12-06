<x-layout>

<a href="/listings/{{$listing['id']}}"><h2>{{$listing['title']}}</h2></a>
<p>{{$listing['description']}}</p>
<x-listing-tags :tagsCsv="$listing->tags" />

</x-layout>
