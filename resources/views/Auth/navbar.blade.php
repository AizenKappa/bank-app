<nav class="nav  justify-content-between p-5">

    <div>
        <a class="navbar-brand fs-2 mx-2" href="/home">BankSys</a>
        <span class='text-secondary'>{{Auth::user()->name}}</span>
    </div>
    <form action="/destroy" method='POST'>
        @csrf
        <button type='submit' title='logout' class='btn hover:text'>Logout</button>
    </form>
</nav>