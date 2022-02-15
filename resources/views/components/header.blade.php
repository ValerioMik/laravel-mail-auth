<header>
    <h1>
        Videogame:
    </h1>

    @auth
        <h2>Ciao: {{Auth::user() -> name }}</h2>
        <a class="btn btn-danger" href="{{route('logout')}}">LOGOUT</a>

    @else

        <form action="{{route('login')}}" method="POST">

            @method('POST')
             @csrf
             <label for="email">Email</label><br>
            <input type="email" name="email" ><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" ><br>
            <br>
            <button type="submit" class="btn btn-success">LOGIN</button>

        </form>
       <form action="{{route('register')}}" method="POST">

        @method('POST')
        @csrf
                            
            <label for="name">Name</label><br>
            <input type="text" name="name" ><br>
            <label for="email">Email</label><br>
            <input type="email" name="email" ><br>
            <label for="password">Password</label><br>
            <input type="password" name="password" ><br>
            <label for="password_confirmatio">Password Confirmation</label><br>
            <input type="password" name="password_confirmation" ><br>
            <br>
            <button type="submit" class="btn btn-success">REGISTER</button>

    
        </form>
    @endauth

</header>