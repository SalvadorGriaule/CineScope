 <header class="flex justify-between items-center p-2">
     <a href="/">
         <h1 class="text-2xl ">Cinescope</h1>
     </a>
     <nav class="flex space-x-2">
         @guest
             <li class="list-none"><a href="/subscribe">Inscription</a></li>
             <li class="list-none"><a href="/login">Connection</a></li>
         @endguest

         @auth
             @session('role')
                 @if ($value == 'admin')
                     <li class="list-none"><a href="/admin/films">Ajouter un film</a></li>
                     <li class="list-none"><a href="/admin/platforms">'Ajouter une platforme</a></li>
                 @endif
             @endsession
             <li class="list-none"><a href="/films">liste de film</a></li>
             <li class="list-none"><a href="/logout">Déconnexion</a></li>
         @endauth
     </nav>
 </header>
