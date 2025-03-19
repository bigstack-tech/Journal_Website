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
              <li>About</li>
            </ol>
          </div>

        </div>
      </div><!-- End Breadcrumbs -->

      <section class="inner-page">
        <div class="container">
            <div style="text-align:center"><br><br>
          <h4><strong>WORLD ENVIRONMENT JOURNAL</strong>
          </h4><br>
          <p>Volume 12, Number 1, June, 2024</p>
          <p>ISSN 2638-4808</p>
          <br>
          <p>Published by</p>
          <br>
          <p>FACULTY OF ENVIRONMENTAL SCIENCES</p>
          <p><strong>UNIVERSITY OF CALABAR, CALABAR, NIGERIA</strong></p><br>
          <br><br>
          </div>
          <div style="justify-content:center; text-align:justify; padding:0 10px;">
            <p>
                 The World Environment Journal (WEJ) was midwifed from the maiden World Environment Day Conference (WEDC) 
                 of the Department of Geography and Environmental Sciences (GES), University of Calabar (Unical), Calabar, 
                 Nigeria, held on the 5th of June 2017 as part of the global World Environment Day (WED celebration. 
                 The conference was conceived as a perpetual annual event of GES that would be held between the 
                 1st - 5th of June and will yearly adopt the WEJ global theme, hence, the theme of the 2017 conference 
                 was Connecting people to nature-in the city and on the land from the pole to the equator. 
                 Empirically rescarched papers presented at the conference whose authors) effect suggested correction 
                 within stipulated timeframe are the primary papers published in WEJ first volumes (c. g. Vol. 1.1). 
                 Other empirically researched paper that meet the requirement of the global WEJ celebration theme of 
                 the year in focus are published in the following volume (e.g. Vol. 1 .2). <br><br>

                The conference and journal seek to create the required awareness for scholars all over the world in 
                global WED celebration, thus, contributing to trending environmental issues, in their tradition niches 
                (research and publication). Therefore, the journal specifically seeks to provide an appropriate forum 
                for interaction and dissemination of empirical problems and solutions in all ficlds, but, especially, 
                the ficld, of Environment and Earth Sciences, Social and Management Sciences. Education and Humanities. 
                WEJ is a peerreviewed journal.
            </p><br><br>
                <h4 id="ntc" style="text-align:center"><strong>NOTE TO CONTRIBUTORS</strong></h4>
                <br>
                <p>Authors interested in submitting manuscripts to WEJ are encouraged to ensure that their work aligns with the journal’s scope and aims.</p><br>
                <p>Submissions should be original, unpublished works that are not under consideration elsewhere. Manuscripts should follow the journal’s guidelines for format and style, available on the journal’s website.</p>
                <p>All submissions will undergo a rigorous peer review process, ensuring high academic standards and relevance to the journal’s readership.</p>
                <p>For detailed submission instructions and formatting guidelines, please refer to the Author Guidelines</p>
                <h5 style="margin-bottom: 20px"><a href="{{ asset('assets/file/WEJ_author_guidelines.pdf')}}" download="wej_author_guidelines" target="_blank">Click here to Download Author Guidelines</a></h5>
                <br><br>
                <h4 id="peer" style="text-align:center"><strong>PEER REVIEW POLICY</strong></h4>
                <br>
                <p>At WEJ, we uphold a double-blind peer review policy, ensuring that both the identity of the authors and reviewers remain confidential throughout the review process. This allows for an unbiased evaluation of the manuscript's quality, validity, and contribution to the field.</p>
                <p>We aim to provide timely, constructive feedback to authors, with the goal of improving the quality and impact of the published work. We value transparency and integrity in the peer review process and strive to maintain the highest academic standards in every publication.</p>
                <br><br>
                <h4 id="ntc" style="text-align:center"><strong>Copyright Information</strong></h4>
                <p>All articles published in the World Environment Journal are open access and licensed under the Creative Commons Attribution 4.0 International License (CC BY 4.0). This means that the authors retain copyright over their work but allow others to share and adapt the article, as long as appropriate citation or acknowledgement is given.</p>
                <p>Authors are responsible for securing the necessary permissions for any third-party material included in their article. By submitting a manuscript to WEJ, authors agree to the journal's terms of publication and copyright.</p><br>
                <p>This therefore, grants WEJ the right to publish the work under the Creative Commons License mentioned above. It also ensures that you, as the author, retain the rights to your article and can reuse it in future publications with proper attribution.</p>
                <h5 style="margin-bottom: 20px"><a href="{{ asset('assets/file/WEJ_copy_right_form.pdf')}}" download="wej_copyright_form" target="_blank">Click here to Download copyright form</a></h5>
                </div>
                
        </div>
      </section>

    </main><!-- End #main -->

  @endsection
