@include('template.header', ['title' => 'insertion film'])
<section>
    <div class="flex flex-col">
        @forelse ($films as $item)
        <a href="/films/{{ $item["id"] }}">{{ $item["title"]}}</a>        
        @empty
        <p>pas de film</p>    
        @endforelse 
    </div>
    
</section>
@include('template.footer')
