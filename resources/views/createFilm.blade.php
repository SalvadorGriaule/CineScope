@include('template.header', ['title' => 'insertion film'])
<section class="flex flex-col items-center">
    @if ($errors->any())
        <div class="bg-red-600 text-white">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/admin/films" method="post" class="flex flex-col w-1/2">
        @csrf
        <input type="text" name="title" placeholder="title" id="">
        <input type="text" name="synopsis" placeholder="synopsis" id="">
        <input type="number" name="releaseYear" placeholder="releaseYear" id="">
        @isset($pl[0])
            <select name="platformes" class="border border-black" multiple size="4">
                @foreach ($pl as $item)
                    <option value="{{ $item["id"] }}">{{ $item["name"] }}</option>
                @endforeach
            </select>
        @endisset
        @empty($pl[0])
            <p>Pas de catégories disponible</p>
        @endempty
        <input type="submit" value="Crée">
    </form>
</section>
@include('template.footer')
