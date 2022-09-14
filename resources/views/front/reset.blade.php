<!DOCTYPE html>
<html lang="en" class="h-100">
<!-- Primary Language of Document = English "en" -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Samuel Emmanuel, Numan Nazir">
  <title>Polio Vaccination System</title>
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="{{asset('css/signin-admin.css')}}" rel="stylesheet">
</head>

<body class="text-center">
  @include('sweet::alert')
  <main class="form-signin">
    <h2>Polio Vaccination System</h2><br>
    <form action="{{ route('front.resetPassword') }}" method="POST">
      @csrf
      <img class="mb-4" src="{{asset('imgs/signincon.png')}}" alt="" width="230" height="230">
      <h1 class="h3 mb-3 fw-normal">Enter Your Code</h1>
      <input type="hidden" name="id" value="{{ $user->id }}">

      <div class="form-floating">
        <input type="text" name="code" class="form-control" id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput">Verification Code</label>
      </div>

      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="floatingInput" placeholder="name@example.com"
          required>
        <label for="floatingInput">New Password</label>
      </div>
      <button class="w-100 btn btn-lg btn-primary" type="submit">Send</button>
      <p class="mt-5 mb-3 text-muted">A Project Of <a href="https://www.fccollege.edu.pk/faculty-of-computer-science/"
          class="text-black">FCCU</a>, by <a href="https://linktr.ee/dpvs" class="text-black">Numan, Rabeet & Samuel</a>
        | &#169; 2021-22 FCCU | <a href="https://www.fccollege.edu.pk/faculty-of-computer-science/"
          class="text-black">Site Map</a></p>
    </form>
  </main>

</body>

</html>