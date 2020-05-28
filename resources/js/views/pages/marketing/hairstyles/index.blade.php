@extends('layouts.frontLayout.front_design')

@section('content')

<!--================ Start Trainers Area =================-->
<section class="trainer_area section_gap_top">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-5">
        <div class="main_title">
          <h2 class="mb-3">Hair Styles</h2>
          <p>
            Get the best of hair styles here on B-Styles
          </p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center d-flex align-items-center">
      <div class="col-lg-4 col-md-6 col-sm-12 single-trainer">
        <div class="thumb d-flex justify-content-sm-center">
            <a href="/marketing/hairstyles/natural-hair"><img class="img-fluid" src="/img/marketing/hairstyles/natural/natural.png" alt="" /></a>
        </div>
        <div class="meta-text text-sm-center">
          <h4>Natural Hair</h4>
          <p class="designation">Testing</p>
          <div class="mb-4">
            <p>
              If you are looking at blank cassettes on the web, you may be
              very confused at the.
            </p>
          </div>
          <div>
                <a href="/marketing/hairstyles/natural-hair" class="primary-btntest ">View Details</a>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 single-trainer">
        <div class="thumb d-flex justify-content-sm-center">
            <a href="/marketing/hairstyles/synthetic-hair"><img class="img-fluid" src="/img/marketing/hairstyles/synthetic/synthetic.png" alt="" /></a>
        </div>
        <div class="meta-text text-sm-center">
          <h4>Synthentic Hair</h4>
          <p class="designation">Testing</p>
          <div class="mb-4">
            <p>
              If you are looking at blank cassettes on the web, you may be
              very confused at the.
            </p>
          </div>
          <div>
                <a href="/marketing/hairstyles/synthetic-hair" class="primary-btntest ">View Details</a>
            </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12 single-trainer">
        <div class="thumb d-flex justify-content-sm-center">
            <a href="/marketing/hairstyles/coloured-hair"><img class="img-fluid" src="/img/marketing/hairstyles/haircolour/haircolour2.png" alt="" /></a>
        </div>
        <div class="meta-text text-sm-center">
          <h4>Hair Colouring/Tinting</h4>
          <p class="designation">Testing</p>
          <div class="mb-4">
            <p>
              If you are looking at blank cassettes on the web, you may be
              very confused at the.
            </p>
          </div>
          <div>
                <a href="/marketing/hairstyles/coloured-hair" class="primary-btntest ">View Details</a>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================ End Trainers Area =================-->

@endsection ('content')
