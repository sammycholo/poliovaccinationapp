<!DOCTYPE html>
<html lang="en" class="h-100"> <!-- Primary Language of Document = English "en" -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Samuel Emmanuel, Numan Nazir">
	<title>Polio Vaccination System</title>
	<link href="../css/bootstrap.css" rel="stylesheet">
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
    <link href="../css/signin-admin.css" rel="stylesheet">
  </head>
  <body class="text-center">
  @include('sweet::alert')

<main class="form-signin">
<h2>Polio Vaccination System</h2><br>
  <form action="{{ route('user.register') }}" method="POST">
    @csrf
    <img class="mb-4" src="{{asset('imgs/signincon.png')}}" alt="" width="230" height="230">
	
	<div class="form-floating">
      <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
      <label for="name">Full Name</label>
  </div>
	<div class="form-floating">
	<input type="text" class="form-control" name="cnic" id="cnic" placeholder="11111-2222222-3" required  minlength="13" maxlength="13">
      <label for="cnic">CNIC</label>
	</div>	
  <div class="form-floating">
      <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
      <label for="email">Email address</label>
  </div>
  <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password" required  minlength="8">
      <label for="password">Password</label>  
  </div>
    <div class="form-floating">
      <input type="text" class="form-control" name="phone" id="phone" placeholder="03xxxxxxxxx" required minlength="11" maxlength="11">
          <label for="phone">Phone</label>
    </div>
    <div class="form-floating">
        <input type="text" class="form-control" name="city" id="city" placeholder="City" required>
        <label for="address">City</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
  </form>
    <p class="mt-5 mb-3 text-muted">A Project Of <a href="https://www.fccollege.edu.pk/faculty-of-computer-science/" class="text-black">FCCU</a>, by <a href="https://linktr.ee/dpvs" class="text-black">Numan, Rabeet & Samuel</a> | &#169; 2021-22 FCCU | <a href="https://www.fccollege.edu.pk/faculty-of-computer-science/" class="text-black">Site Map</a></p>

</main> 
</body>
</html>
