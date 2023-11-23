@extends("layouts.auth")

  @section("content")
  <div class="card mt-5 mx-auto" style="max-width: 400px;">
    <div class="card-body">
      <h1>Register</h1>
      <hr/>
      <form action="{{route("post.register")}}" method="POST">
        <div class="mb-3">
          @csrf
          <label for="inputName" class="form-label">Name</label>
          <input type="text" name="name" id="inputName" class="form-control">
          @error("name")
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="inputEmail" class="form-label">Email</label>
          <input type="email" name="email" id="inputEmail" class="form-control">
          @error("email")
           <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3">
          <label for="inputPassword" class="form-label">Password</label>
          <input type="password" name="password" id="inputPassword" class="form-control">
          @error("password")
            <span class="text-danger">{{$message}}</span>
          @enderror
        </div>
        <div class="mb-3 text-end">
          <button class="btn btn-primary" type="submit">Daftar</button>
        </div>
        <hr />
        <div class="mb-3 text-center">
          <p>Sudah memiliki akun? <a class="text-decoration-none" href="{{route("login")}}">Masuk disini</a></p>
      </form>
    </div>
@endsection

