@include('template.header', ['title' => 'insertion film'])
<section>
    @forelse ($films as $item)
        <p>{{ $item["title"]}}</p>        
    @empty
        <p>pas de film</p>    
    @endforelse 
    
</section>
@include('template.footer')
