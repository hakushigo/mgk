 <h1>
    Selamat datang, {{$auth->name}} ({{ $auth->email}})
 </h1>
 <a href="{{ route("logout") }}" class="btn btn-primary">Logout</a>  

 @yield('content')