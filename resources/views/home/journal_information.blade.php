@extends('layouts.info')
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
                  <h2 class="animate__animated animate__fadeInDown">Journal Information</h2>
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
              <li>About</li>
            </ol>
          </div>

        </div>
      </div><!-- End Breadcrumbs -->

      <section class="inner-page">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card pb-4">
                    <div class="card-body">
                        @foreach($Journal_submission as $post)
                            <div>
                                <h2 class="card-title">{{ $post->title }}</h2>
                                @if(isset($post->day))
                                    <p class="card-text">Publication Date: {{ $post->day }}/{{ $post->month }}/{{ $post->year }}</p>
                                @endif
                            </div>
                            <br>
    
                            <div>
                                <p class="card-text">Author(s): {{ $post->author_name }} <br>
                                Institute(s): {{ $post->institute_organization }}
                                </p>
                                <p class="card-text">Volume {{ $post->year }} / Issue {{ $post->citation_issue }} </p>
                            </div>
                            <br>
    
                            <div>
                                
                            </div>
                            <br>
    
                            <div>
                                <p class="card-text">Abstract</p>
                                <p class="card-text">{{ $post->abstract }}</p>
                            </div>
                            <br>
    
                            <div>
                                <p class="card-text">Number of Pages: <span style="color:blue"> {{ $post->page }}</span></p>
                                <p class="card-text">Number of Words: <span style="color:blue"> {{ $post->word }}</span></p>
                                <p class="card-text">First Page: <span style="color:blue"> {{ $post->first }}</span></p>
                                <p class="card-text">Last Page: <span style="color:blue"> {{ $post->last }} </span></p>
                            </div>
                            <br>
    
                            <div>
                                <p class="card-text"><a href="/post/{{ $post->file }}" target="_blank" style="text-decoration: underline !important; color:blue">Click here Download Paper</a></p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
      </section>

    </main><!-- End #main -->

  @endsection