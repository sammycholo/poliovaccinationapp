@extends('layout.user')

@section('content')
<div class="container-fluid px-4">
  <h1 class="mt-4">User Dashboard</h1>
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('slider/BMGF.webp') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('slider/rotary.webp') }}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('slider/uni.webp') }}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <b>What Is Polio?</b>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>Polio or Poliomyelitis</strong> is a highly infectious disease that most commonly affects children under the age of 5. The virus is spread person to person, typically through contaminated water. It can attack the nervous system, and in some instances, lead to paralysis. Although there is no cure, there is a safe and effective vaccine – one which Rotary and it's partners use to immunize over 2.5 billion children worldwide.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <b>Polio In Pakistan?</b>
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>Pakistan is one of the two remaining countries</strong> in the world where poliomyelitis (polio) is still categorized as an endemic viral infection, the other one being Afghanistan. As of 8 March 2021, there have been 1 documented cases in Pakistan in 2021, and 84 documented cases in Pakistan in 2020.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <b>How Can I Help?</b>
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <strong>The most important step in eradication of polio</strong> is interruption of endemic transmission of poliovirus. Stopping polio transmission has been pursued through a combination of routine immunization, supplementary immunization campaigns and surveillance of possible outbreaks. Make a difference by educating people in your local communities to help us save more smiles.
        </div>
      </div>
    </div>
  </div>
</div>
@endsection