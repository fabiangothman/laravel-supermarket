@include('layout.header')

<section id="login">

  <div class="formContainer">
    <form action="/login" method="post">
      @csrf
      @method('POST')

      <div class="mainTitle">
        <h1>{{ config('app.name') }}</h1>
      </div>

      <div class="formGroup">
        <label for="email"><b>Email</b></label><br />
        <input type="email" placeholder="Enter email" name="email" required />
      </div>

      <div class="formGroup">
        <label for="password"><b>Password</b></label><br />
        <input type="password" placeholder="Enter password" name="password" required />
      </div>
    
      <div class="formGroup">
        <label for="remember">Remember me</label>
        <input type="checkbox" name="remember" value="1" />
      </div>
    
      <div class="formGroup">
        <button type="submit" class="submit">Login</button>
      </div>
    </form>
  </div>
</section>

@include('layout.footer')
