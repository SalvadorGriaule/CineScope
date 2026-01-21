@include('template.header', ['title' => 'connection'])
<section>
    @if ($errors->any())
        <div class="bg-red-600 text-white">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="" class="flex flex-col justify-center items-center space-y-1" method="post">
        @csrf
        <input class="border-2 border-gray-500 border-solid p-1 placeholder:text-center" placeholder="email" type="email"
            name="email" id="" value="{{ old('email') }}">
        <input class="border-2 border-gray-500 border-solid p-1 placeholder:text-center" placeholder="password"
            type="password" name="password" id="">
        <input class="bg-orange-500 rounded-lg text-white p-1 w-fit cursor-pointer" name="adminSub" type="submit">
    </form>
</section>
@include('template.footer')
