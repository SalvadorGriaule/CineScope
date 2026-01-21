@include('template.header', ['title' => 'insertion film'])
<section>
    <form action="/admin/platforms" method="post">
        @csrf
        <input type="text" name="name" placeholder="name" id="">
        <input type="text" name="URL" placeholder="URL" id="">
        <input type="text" name="LOGO" placeholder="LOGO" id="">
        <input type="submit" value="Crée">
    </form>
</section>
@include('template.footer')
