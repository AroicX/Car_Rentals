@extends('layouts.frontLayout.front_design')

@section('content')

<!--================ Start Events Area =================-->
    <div class="events_area">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3 text-white">B-Styles Marketing</h2>
              <p style="color: #ffffff;">
                Checkout our marketing styles
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="single_event position-relative">
              <div class="event_thumb">
                <img src="img/marketing/hairstyles.png" alt="" />
              </div>
              <div class="event_details">
                <div class="d-flex mb-4">
                  <div class="date"><span>15</span> Jun</div>

                  <div class="time-location">
                    <p>
                      <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                    </p>
                    <p>
                      <span class="ti-location-pin mr-2"></span> Hilton Quebec
                    </p>
                  </div>
                </div>
                <p>
                  One make creepeth man for so bearing their firmament won't
                  fowl meat over seas great
                </p>
                <a href="/marketing/hairstyles" class="primary-btn rounded-0 mt-3" style="font-size: 20px;">HAIR STYLES</a>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="single_event position-relative">
              <div class="event_thumb">
                <img src="img/marketing/clothstyles.png" alt="" />
              </div>
              <div class="event_details">
                <div class="d-flex mb-4">
                  <div class="date"><span>15</span> Jun</div>

                  <div class="time-location">
                    <p>
                      <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                    </p>
                    <p>
                      <span class="ti-location-pin mr-2"></span> Hilton Quebec
                    </p>
                  </div>
                </div>
                <p>
                  One make creepeth man for so bearing their firmament won't
                  fowl meat over seas great
                </p>
                <a href="/marketing/clothstyles" class="primary-btn rounded-0 mt-3" style="font-size: 17px;">CLOTH STYLES</a>
              </div>
            </div>
          </div>


        </div>

        <div class="row">
                <div class="col-lg-6 col-md-6">
                  <div class="single_event position-relative">
                    <div class="event_thumb">
                      <img src="img/marketing/makeup.png" alt="" />
                    </div>
                    <div class="event_details">
                      <div class="d-flex mb-4">
                        <div class="date"><span>15</span> Jun</div>

                        <div class="time-location">
                          <p>
                            <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                          </p>
                          <p>
                            <span class="ti-location-pin mr-2"></span> Hilton Quebec
                          </p>
                        </div>
                      </div>
                      <p>
                        One make creepeth man for so bearing their firmament won't
                        fowl meat over seas great
                      </p>
                      <a href="/marketing/make-ups" class="primary-btn rounded-0 mt-3" style="font-size: 20px;">MAKE-UPS</a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="single_event position-relative">
                    <div class="event_thumb">
                      <img src="img/marketing/models.png" alt="" />
                    </div>
                    <div class="event_details">
                      <div class="d-flex mb-4">
                        <div class="date"><span>15</span> Jun</div>

                        <div class="time-location">
                          <p>
                            <span class="ti-time mr-2"></span> 12:00 AM - 12:30 AM
                          </p>
                          <p>
                            <span class="ti-location-pin mr-2"></span> Hilton Quebec
                          </p>
                        </div>
                      </div>
                      <p>
                        One make creepeth man for so bearing their firmament won't
                        fowl meat over seas great
                      </p>
                      <a href="/marketing/models" class="primary-btn rounded-0 mt-3" style="font-size: 20px;">MODELS</a>
                    </div>
                  </div>
                </div>

                <div class="col-lg-12">
                  <div class="text-center pt-lg-5 pt-3">
                    <a href="/" class="event-link">
                        <img src="img/prev.png" alt="" /> Back to Homepage
                    </a>
                  </div>
                </div>
              </div>
      </div>
    </div>
    <!--================ End Events Area =================-->


@endsection ('content')
