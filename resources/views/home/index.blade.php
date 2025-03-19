@extends('layouts.main')
@section('content')

    <div id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-1 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <p style="font-size: 12px"><a href="{{ route('home') }}">Home ></a><a href="{{ route('publication') }}"> find a journal</a></p>
          <h1>World Environment Journal</h1>
        </div>
        <div class="col-lg-4 order-2 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('assets/images/wejcover.png')}}" style="max-width:75%;" class="img-fluid animated" alt="">
        </div>
        
      </div>
    </div>

  </div>

        <main id="main">
                <!-- ======= Clients Section ======= -->
    <div id="clients" class="clients section-bg">
      <div class="container">

        <div class="row" data-aos="zoom-in">

          <div class="col-lg-12 col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
            <h2 style="border:1px solid #198754;padding: 10px 18px;font-size:16px;margin-top: 10px;"><a href="{{ route('journal.submission') }}">Submit Paper</a></h2>
          </div>
        </div>

      </div>
    </div><!-- End Cliens Section -->
          
            <!-- ======= About List Section ======= -->
            <section id="about-list" class="about-list">
            <div class="container">
    
              <div class="row">
                <div class="col-lg-9 order-1 order-lg-1" style="
    margin-bottom: 25px;
">
                  <div class="mInfo">
                    <h4>Aim and Scope of WEJ</h4>
                    <div class="mInfo-member">
                      <div>
                        <p>Welcome to the World Environment Journal</p>
                          <p>The World Environment Journal (WEJ) is a peer-reviewed, open-access publication dedicated to exploring the critical and emerging issues related to global environmental change and sustainability. The journal aim to provide an interdisciplinary platform for researchers, practitioners, and policy-makers from a wide range of fields to engage in discussions and share research on the interactions between human and environmental systems. We focus on understanding the complex relationships between ecological health, climate change, resource management, environmental management, environmental standard and safety, and socio-economic development. WEJ welcomes original research, review articles, and policy analyses that address urgent global challenges, advocate for sustainable solutions, and foster international collaboration. We invite contributions that reflect the interdisciplinary nature of these topics and that engage with both theoretical and practical approaches to solving contemporary environmental issues.</p>
                      </div>
                    </div>
                  </div>
                    <div class="card cardii">
                      <div class="card-body">
                         <h5 class="card-title">ISSN 2638-4808</h5>
                         <h5 class="card-title">eISSN:</h5>
                         <hr>
                        <img src="{{ asset('assets/images/wejlogo.png')}}" class="card-img-top" style="max-width:20%;" alt="...">
                      </div>
                    </div>
                </div>
                <div class="col-lg-3 order-2 order-lg-2" style="
    margin-bottom: 25px;
">
                    <div class="card" style="box-shadow: 0 0 2rem rgba(0, 0, 0, 0.1), 1.25em 1.25em 0 -0.5em #e1eded;">
                        <div class="card-header">What's here?</div>
                      <div class="card-body">
                        <nav class="nav flex-column">
                        <a class="nav-link" href="#about-list">Aim and Scope</a>
                          <hr>
                          <a class="nav-link" href="#call-list">Call For Papers</a>
                          <hr>
                          <a class="nav-link" href="#contact">Our Contact</a>
                          <hr>
                          <a class="nav-link" href="{{ route('journal.submission') }}">Submit Paper</a>
                        </nav>
                      </div>
                    </div>
                </div>
              </div>
    
            </div>
          </section><!-- End About List Section -->
    
            <!-- ======= Counts Section ======= -->
            <section id="counts" class="counts" style="background:url({{url('assets/images/paper-sub.png')}}); background-position: center;  background-size: cover;">
            <div class="container position-relative">
    
              <div class="text-center title">
                <h3>SOLICITING PAPERS IN THE DOMAINS OF</h3>
              </div>
    
              <div class="row counters" style="color: #198754;">
    
                <div class="col-lg-3 col-6">
                    <ul>
                        <li>Climate Change and Adaptation Strategies</li>
                        <li>Environmental Policy and Governance</li>
                        <li>Biodiversity Conservation and Ecosystem Services</li>
                    </ul>
                </div>
    
                <div class="col-lg-3 col-6">
                    <ul>
                        <li>Renewable Energy and Green Technology</li>
                        <li>Environmental Justice and Equity</li>
                        <li>Urban Sustainability and Smart Cities</li>
                    </ul>
                </div>
    
                <div class="col-lg-3 col-6">
                    <ul>
                        <li>Pollution Control and Waste Management</li>
                        <li>Environmental Economics and Sustainability</li>
                        <li>Human-Environment Interaction and Health</li>
                    </ul>
                </div>
    
                <div class="col-lg-3 col-6">
                    <ul>
                        <li>Water Resources and Conservation</li>
                        <li>Agriculture and Food Security</li>
                        <li>Environmental Management</li>
                    </ul>
                </div>
              </div>
    
            </div>
        </section><!-- End Counts Section -->
        
        <!-- ======= About List Section ======= -->
            <section id="call-list" class="call-list">
                <div class="container" style="justify-content:center; text-align:justify">
                    <div class="section-title">
                  <span>Call for Papers</span>
                  <h2>Call for Papers</h2>
                  <h4>WORLD ENVIRONMENT JOURNAL</h4>
                </div>
                <p>This is to inform interested members of the public, academics and professionals of an academic journal known as World Environment Journal (WEJ).</p>
                <p>The journal is published twice a year (June and December) by the University of Calabar, Calabar. It is a Peer-Reviewed Journal designed to promote scholarship in Nigeria and global contexts.</p>
            </section>
                
                
            <section id="call-list" class="call-list">
                <div class="container" style="justify-content:center; text-align:justify">
                 <div class="section-title">
                  <span>Subscription Rates</span>
                  <h2>Subscription Rates</h2>
                </div>
                
                <div class="row">
                <div class="col-lg-4 col-12" style="padding: 8px;">
                  <ul class="price">
                    <li class="header">Nigeria</li>
                    <li>₦5,500.00 / Issue</li>
                    <li>₦11,000.00 / Annum</li>
                    <li>-</li>
                    <li>-</li>
                    <li>-</li>
                    <li class="grey"><a href="{{ route('journal.submission') }}" class="button">Submit Paper</a></li>
                  </ul>
                </div>
                
                <div class="col-lg-4 col-12" style="padding: 8px;">
                  <ul class="price">
                    <li class="header" style="background-color:#6d9888">Other African Countries</li>
                    <li>$15.00 / Issue</li>
                    <li>$30.00 / Annum</li>
                    <li>-</li>
                    <li>-</li>
                    <li>-</li>
                    <li class="grey"><a href="{{ route('journal.submission') }}" class="button">Submit Paper</a></li>
                  </ul>
                </div>
                
                <div class="col-lg-4 col-12" style="padding: 8px;">
                  <ul class="price">
                    <li class="header">Institutional</li>
                    <li>$15.00 / Issue</li>
                    <li>$30.00 / Annum</li>
                    <li>Nigeria: ₦45,000.00 </li>
                    <li>Other Africa Countries: $150.00 </li>
                    <li>Other Countries: $150.00</li>
                    <li class="grey"><a href="{{ route('journal.submission') }}" class="button">Submit Paper</a></li>
                  </ul>
                </div>
                </div>
                
              </div>
          </section><!-- End About List Section -->
        
          
            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
          <div class="container">
            <div class="section-title">
              <span>Contact</span>
              <h2>Contact</h2>
              <p>Send us a message, we'll get back to you!</p>
            </div>
          </div>
    
          <div class="map">
            <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15899.691700698588!2d8.3407897!3d4.952475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x10678644d8ffffff%3A0xe7f894b8f90d39c1!2sUniversity%20of%20Calabar!5e0!3m2!1sen!2sng!4v1702558423593!5m2!1sen!2sng" frameborder="0" allowfullscreen></iframe>
          </div>
    
          <div class="container">
    
            <div class="info-wrap mt-5">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="ri-map-pin-line"></i>
                  <h4>Location:</h4>
                  <p>UNICAL,<br>Calabar, Nigeria</p>
                </div>
    
                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="ri-mail-line"></i>
                  <h4>Email:</h4>
                  <p>info@wej-unical.com<br>contact@wej-unical.com</p>
                </div>
    
                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="ri-phone-line"></i>
                  <h4>Call:</h4>
                  <p>+234 903 655 2684<br></p>
                </div>
              </div>
            </div>
    
            <form action="{{ route('contact.admin') }}" id="request" class="main_form php-email-form" method="POST" role="form">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="phone" class="form-control" name="phone" id="subject" placeholder="Phone Number" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
    
          </div>
        </section><!-- End Contact Section -->
                       <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
          <div class="container">
    
            <div class="row" data-aos="zoom-in">
    
              <div class="col-lg-12 col-md-6 col-sm-6" style="margin-top:10px; margin-bottom:10px;">
                  <p>Indexed By:</p>
                <img src="{{ asset('assets/images/01-googlescholar.png.crdownload')}}" class="card-img-top" style="max-width:20%;" alt="...">
                <br>
                </div>
              </div>
            </div>
    
          </div>
        </section><!-- End Cliens Section -->
        
        </main><!-- End #main -->
    <!-- Your JavaScript for AJAX -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('sendMessageBtn').addEventListener('click', function () {
      let form = document.getElementById('request');
      let formData = new FormData(form);

      fetch(form.getAttribute('action'), {
        method: 'POST',
        body: formData,
        headers: {
          'X-Requested-With': 'XMLHttpRequest',
          'Accept': 'application/json', // Specify that you expect a JSON response
        },
      })
      .then(response => response.json()) // Assuming the response is in JSON format
      .then(data => {
        // Handle the response data
        form.querySelector('.loading').classList.remove('d-block');
        if (data.success) {
          form.querySelector('.sent-message').classList.add('d-block');
          form.reset();
        } else {
          form.querySelector('.error-message').innerHTML = 'Server Error: ' + data.message;
          form.querySelector('.error-message').classList.add('d-block');
        }
      })
      .catch(error => {
        console.error('Error during form submission:', error);
        form.querySelector('.error-message').innerHTML = 'Error during form submission.';
        form.querySelector('.error-message').classList.add('d-block');
      });

      // Display loading message
      form.querySelector('.loading').classList.add('d-block');
      form.querySelector('.error-message').classList.remove('d-block');
      form.querySelector('.sent-message').classList.remove('d-block');
    });
  });
</script>

   @endsection