@include('template.header', ['title' => 'insertion film'])
<section>
    <h2>{{ $film["title"]}}</h2>
    <p>{{ $film["releaseYear"]}}</p>
    <p>{{ $film["synopsie"]}}</p>
</section>
@include('template.footer')
