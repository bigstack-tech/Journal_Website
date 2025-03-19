@extends('layouts.main')
@section('content')
    <style type="text/css">
        #hero .carousel-item {
        height: 55vh;
        }
        #hero {
        height: 55vh;
        }
    </style>
      <!-- ======= Hero Section ======= -->
    <div id="hero">
      <div class="hero-container">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

          <div class="carousel-inner" role="listbox">

            <!-- Slide 1 -->
            <div class="carousel-item active" style="background-image:url({{url('assets/images/world-globe.jpg')}})">
              <div class="carousel-container">
                <div class="carousel-content">
                  <h2 class="animate__animated animate__fadeInDown">About</h2>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div><!-- End Hero -->

    <main id="main">

      <!-- ======= Breadcrumbs ======= -->
      <div class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <ol>
              <li><a href="{{ route('home') }}">Home</a></li>
              <li>volumes</li>
            </ol>
          </div>

        </div>
      </div><!-- End Breadcrumbs -->

      <section class="inner-page">
        <div class="container">
           <div class="row align-items-start">
              <div class="col">
                @foreach ($Years as $years)
                    <div>
                       <a href="{{ url('journals/for/' . $year->year) }}" style="color: blue">Volume {{ $years->year }}</a>
                    </div>
                 @endforeach
              </div>
            </div>
        </div>
      </section>

    </main><!-- End #main -->

  @endsection
