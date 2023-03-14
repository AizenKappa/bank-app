<form action="/register" method="POST" class="container">
    @csrf
    <div class="mb-3">
        <label for="name" class="mb-1">Username</label>
        <input type="text" value="{{old('name')}}" id='name' class="form-control" name="name" placeholder="Example123">
        @error('name')
            <small class="form-text text-danger">{{ $message }}</small>
        @endif

    </div>
    <div class="mb-3">
        <label for="email" class="mb-1">Email address</label>
        <input type="email" value="{{old('email')}}" id='email' class="form-control" name="email" placeholder="name@example.com">
        @error('email')
            <small class="form-text text-danger">{{ $message }}</small>
        @endif

    </div>
    <div class="mb-3">
        <label for="password" class="mb-1">Password</label>
        <input type="password" id='password' class="form-control" name="password" placeholder="********">
        @error('password')
            <small class="form-text text-danger">{{ $message }}</small>
        @endif
    </div>
    <div class="mb-3">
        <label for="password_confirmation" class="mb-1">Repeat</label>
        <input type="password" id='password_confirmation' class="form-control" name="password_confirmation" placeholder="********">
        @error('password_confirmation')
            <small class="form-text text-danger">{{ $message }}</small>
        @endif
    </div>

    <a href="/login" class='float-end'>Login ?</a>
   
    <div class="my-3">
        <button type="submit" class="btn btn-primary mb-3">Register</button>
    </div>
</form>