@include('template.header', ['title' => 'insertion film'])
<section class="ml-2">
    <h2>{{ $film["title"]}}</h2>
    <p>{{ $film["releaseYear"]}}</p>
    <p>{{ $film["synopsie"]}}</p>
    <fieldset class="border border-black p-2 w-1/4">
        <legend>Disponible sur</legend>
        @foreach ($film["platforms"] as $item)
            <p>{{$item["name"]}}</p>
        @endforeach
    </fieldset>
</section>
@include('template.footer')
