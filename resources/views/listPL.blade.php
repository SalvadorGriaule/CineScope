@include('template.header', ['title' => 'insertion film'])
<section>
    @foreach ($platform as $item)
        <p>{{ $item["name"]}}</p>        
    @endforeach
</section>
@include('template.footer')
