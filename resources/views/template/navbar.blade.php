 <header class="flex justify-between items-center p-2">
     <a href="/">
         <h1 class="text-2xl ">Trello Wich</h1>
     </a>
     <nav class="flex space-x-2">
         @guest
             <li class="list-none"><a href="/subscribe">Inscription</a></li>
             <li class="list-none"><a href="/login">Connection</a></li>
         @endguest
         @auth
            
             <li class="list-none"><a href="/createTask">Créer une tache</a></li>
             <li class="list-none"><a href="/listTask">'liste des tache</a></li>
         @endauth
     </nav>
 </header>
