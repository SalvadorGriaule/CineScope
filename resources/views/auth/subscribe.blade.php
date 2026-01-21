 @include('template.header', ['title' => 'Inscription'])
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
     <form class="flex flex-col space-y-2" action="/subscribe" method="POST">
         @csrf
         <input class="border-2 border-gray-500 border-solid p-1 placeholder:text-center" type="text"
             value="{{ old('pseudo') }}" placeholder="pseudo" name="name">
         <input class="border-2 border-gray-500 border-solid p-1 placeholder:text-center" type="email"
             value="{{ old('email') }}" placeholder="email" name="email" id="">
         <input class="border-2 border-gray-500 border-solid p-1 placeholder:text-center" type="password"
             placeholder="password" name="password" id="">
         <input class="bg-orange-500 rounded-lg text-white p-1 w-fit cursor-pointer" type="submit" value="Envoyer">
     </form>
 </section>
 @include('template.footer')
