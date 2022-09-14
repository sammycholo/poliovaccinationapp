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
  <link href="{{asset('css/page1.css')}}" rel="stylesheet">
</head>

<body>
  @include('sweet::alert')
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
  </script>
  <img src="imgs/welcome.svg" class="img-fluid" alt="polio system graphic"><br><br>
  <div class="p-3 mb-2 bg-white text-dark">
    <div class="d-flex justify-content-center">
      <div class="d-grid gap-3 d-md-block">
        <button class="btn btn-primary btn-lg" type="button"><a href="  {{route('admin.login')}}"
            style="color:inherit">Admin Area</a></button>
        <button class="btn btn-primary btn-lg" type="button"><a href="{{route('front.login')}}"
            style="color:inherit">User Login</a></button>
        <button class="btn btn-primary btn-lg" type="button"><a href="{{route('front.register')}}"
            style="color:inherit">User Signup</a></button>
      </div>
    </div><br><br>
    <div class="accordion" id="accordionExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne">
            <b>What Is Polio?</b>
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Polio or Poliomyelitis</strong> is a highly infectious disease that most commonly affects children
            under the age of 5. The virus is spread person to person, typically through contaminated water. It can
            attack the nervous system, and in some instances, lead to paralysis. Although there is no cure, there is a
            safe and effective vaccine – one which Rotary and it's partners use to immunize over 2.5 billion children
            worldwide.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <b>Polio In Pakistan?</b>
          </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>Pakistan is one of the two remaining countries</strong> in the world where poliomyelitis (polio) is
            still categorized as an endemic viral infection, the other one being Afghanistan. As of 8 March 2021, there
            have been 1 documented cases in Pakistan in 2021, and 84 documented cases in Pakistan in 2020.
          </div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <b>How Can I Help?</b>
          </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
          data-bs-parent="#accordionExample">
          <div class="accordion-body">
            <strong>The most important step in eradication of polio</strong> is interruption of endemic transmission of
            poliovirus. Stopping polio transmission has been pursued through a combination of routine immunization,
            supplementary immunization campaigns and surveillance of possible outbreaks. Make a difference by educating
            people in your local communities to help us save more smiles.
          </div>
        </div>
      </div>
    </div><br><br>
    <footer class="mt-auto text-black text-center">
      <p>A Project Of <a href="https://www.fccollege.edu.pk/faculty-of-computer-science/" class="text-black">FCCU</a>,
        by <a href="https://linktr.ee/dpvs" class="text-black">Numan, Rabeet & Samuel</a> | &#169; 2021-22 FCCU | <a
          href="https://www.fccollege.edu.pk/faculty-of-computer-science/" class="text-black">Site Map</a></p>
    </footer>
  </div>
</body>

</html>