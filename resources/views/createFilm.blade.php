@include('template.header', ['title' => 'insertion film'])
<section>
    <form action="/admin/films" method="post">
        @csrf
        <input type="text" name="title" placeholder="title" id="">
        <input type="text" name="synopsis" placeholder="synopsis" id="">
        <input type="number" name="releaseYear" placeholder="releaseYear" id="">
        <input type="submit" value="Crée">
    </form>
</section>
@include('template.footer')
