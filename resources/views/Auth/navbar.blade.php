<nav class="nav justify-content-between p-5">
  
    <a class="navbar-brand fs-2" href="/home">BankSys</a>
     <form action="/logout" method='POST'>
            @csrf
         <button type='submit' class='btn hover:text'>Logout</button>
     </form>
</nav>