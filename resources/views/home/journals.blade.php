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
                  <h2 class="animate__animated animate__fadeInDown">Publication</h2>
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
              <li>Publication</li>
            </ol>
          </div>

        </div>
      </div><!-- End Breadcrumbs -->

      <section class="inner-page">
        <div class="container">
          <div class="row">
                {{-- Left column with years --}}
                <div class="col-md-3">
                    <div class="card p-4" style="margin-bottom: 20px; border-radius: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);"><h4>Archive</h4>
<select onchange="location = this.value;">
    <option>select volume</option>
    @foreach ($Years as $year)
        <option value="{{ url('journals/for/' . $year->year) }}">Volume {{ $year->year }}</option>
    @endforeach
</select>
                    </div>
                </div>

                {{-- Right column with journal entries --}}
                <div class="col-md-9">
                    <div class="card p-4" style="border-radius: 15px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                        @foreach ($Years as $year)
                                @php
                                    $journalEntriesForYear = $Journal_submission->where('year', $year->year)
                                        ->where('status', 'Approved')
                                @endphp

                            @if ($journalEntriesForYear->isNotEmpty())
                                <div class="row mb-4">
                                    <div class="col-md-12">
                                        <h4>Volume {{ $year->id }}, {{ $year->year }}</h4>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="journal-entries">
                                            @foreach ($journalEntriesForYear as $post)
                                                <div class="card mb-3" style="border-radius: 10px; border: 1px solid silver;">
                                                    <div class="card-body">
                                                        <h5 class="card-title"><a href="/view/journal/information/{{ $post->id }}">{{ $post->year }}: {{ $post->title }}</a></h5>
                                                        <!--<p class="card-text">{{ $post->abstract }}</p>-->
                                                        <p class="card-subtitle mb-2 text-muted">By: {{ $post->author_name }}</p>
                                                        <a href="/post/{{ $post->file }}" target="_blank" class="card-link" style="text-decoration: underline !important; color: blue">Download</a> <br>
                                                        <!--<small class="text-muted">Posted: {{ $post->created_at }}</small>-->
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
      </section>

    </main><!-- End #main -->

  @endsection

