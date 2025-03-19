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
                  <h2 class="animate__animated animate__fadeInDown">Editorial</h2>
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
              <li>Editorial</li>
            </ol>
          </div>

        </div>
      </div><!-- End Breadcrumbs -->

      <section class="inner-page">
        <div class="container" style="text-align:center">
            <br><br>
          <!--<div class="row" style="display: flex; justify-content:center; text-align:center">-->
             <!--<div>-->
             <!--   @foreach ($data as $editorial)-->
             <!--   <div style="border: 1px solid silver; margin-bottom:10px; padding 10px;">-->
             <!--       <p><strong>{{ $editorial->name }},</strong> {{ $editorial->institute }}, <strong>{{ $editorial->country }}</strong></p>-->
             <!--   </div>-->
             <!--   @endforeach-->
             <!--</div>-->
            <h4><strong>WORLD ENVIRONMENTAL JOURNAL (WEJ)</strong>
          </h4><br>
          <h5><strong>Editor-in-Chief</strong></h5>
          <p>AJAKE, ANIM O. P <small>(Professor)</small>
          <br><small>Dean, Faculty of Environmental Sciences University of Calabar, Nigeria</small><br>
          <br><br>
          
          <h5><strong>Editor</strong></h5>
          <p>ATU, Joy Eko <small>(Professor)</small>
          <br><small>Department of Geography & Environmental Science, University of Calabar, Nigeria</small></p>
          <br><br>
          
          <h5><strong>Assistant Editors</strong></h5>
          <p>PAULINE, Ayuk Essoka <small>(Professor)</small></p>
          <p>AKEH, Linus Beba Akeh <small>(Ph.D)</small></p>
          <p>UTTAH, Chinasa <small>(Ph.D)</small></p>
          <p>OFFIONG, Raphael A. <small>(Professor)</small></p>
          <p>OFFIONG, Joel <small>(Ph.D)</small></p>
          <p>ENI, Devalsam Imoke <small>(Associate Professor)</small></p>
          <p>EVARISTUS, Idaga Igelle <small>(Ph.D)</small></p>
          <br><br>
          <h5><strong>Managing Editor</strong></h5>
          <p>Prof. Mrs Joy Eko Atu
          <br><small>Department of Geography & Environmental Science, University of Calabar, Nigeria</small></p>
          
          <br><br>
          <h5><strong>Associate Editors</strong></h5>
          <p>BISONG, Francis Ebuta <small>(Professor)</small></p>
          <p>EZE, Bassey Eze <small>(Professor)</small></p>
          <p>ANIAH, Eugene J <small>(Professor)</small></p>
          <p>EKPOH, Imoh J <small>(Professor)</small></p>
          <p>ENI, David David <small>(Professor)</small></p>
          <p>AFANGIDEH, Isaac Asuquo <small>(Professor)</small></p>
          <p>ANDREW-ESSIEN, Elizabeth <small>(Professor)</small></p>
          
          <br><br>
          <h5><strong>Direct all editorial correspondence to:</strong></h5>
          <p>The Editor-in-Chief <br>World Enviromental Journal (WEJ)
Room 3, Old Law Faculty Block, Main Campus, University of Calabar, Calabar, Nigeria.<br>Phone: +234 903 655 2684<br>
Email: info@wej-unical.com</p>
           <!--</div>-->
        </div>
      </section>

    </main><!-- End #main -->

  @endsection
