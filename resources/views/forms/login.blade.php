

<form action="/login" method="POST" class="container">
    @csrf
    <div class="mb-3">
        <label for="email" class="mb-1">Email address</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com">
        @error('email')
            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
        @endif

    </div>
    <div class="mb-3">
        <label for="pwd" class="mb-1">Password</label>
        <input type="password" class="form-control" name="password" placeholder="********">
        @error('password')
            <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
        @endif
    </div>

    <div class="form-check">
        <input type="checkbox" class="form-check-input" name="remember">
        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
    </div>
   
    <div class="my-3">
        <button type="submit" class="btn btn-primary mb-3">Login</button>
    </div>
</form>