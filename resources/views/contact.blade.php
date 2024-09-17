@extends('layouts.app')
@section('content')
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs breadcrumbs-about">
      <div class="container">
          <div class="d-flex justify-content-between align-items-center">
              <h2>Contact Us</h2>
              <ol>
                  <li><a href="index.html">Home</a></li>
                  <li>Contact Us</li>
              </ol>
          </div>
      </div>
  </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <!-- <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/place/AGENSI+PEKERJAAN+ONLINE+JOBS+SDN+BHD/@3.0411624,101.6179263,19z/data=!4m5!3m4!1s0x31cc4bc8f241692f:0x711f4c56d78b859a!8m2!3d3.0412493!4d101.617818" frameborder="0" allowfullscreen></iframe> -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127485.74192874612!2d101.49463363163764!3d3.113372186516317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4bc8f241692f%3A0x711f4c56d78b859a!2sAGENSI%20PEKERJAAN%20ONLINE%20JOBS%20SDN%20BHD!5e0!3m2!1sen!2snp!4v1703571162375!5m2!1sen!2snp" style="border:0; width: 100%; height: 350px;"    frameborder="0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!--<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d996.0498427445926!2d101.61792632963206!3d3.041162393418384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc4bc8f241692f%3A0x711f4c56d78b859a!2sAGENSI%20PEKERJAAN%20ONLINE%20JOBS%20SDN%20BHD!5e0!3m2!1sen!2snp!4v1658396249318!5m2!1sen!2snp" frameborder="0" allowfullscreen referrerpolicy="no-referrer-when-downgrade"></iframe>-->
      </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Location:</h4>
                  <p>Unit C-3A-11, Centum @ Oasis Corporate Park No. 2, <br>
                  Jalan PJU 1A/2, Ara Damansara, 47301 Petaling Jaya,<br>
                  Selangor Darul Ehsan,<br> Malaysia
                  </p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p><a href="mailto:enquiry@onlinejobs.my">enquiry@onlinejobs.my</a><?php /* <br> <a href="mailto:marketing@onlinejobs.my">marketing@onlinejobs.my</a> */?></p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="bi bi-phone"></i>
                  <h4>Call:</h4>
                  <p> <a href="Tel:++60376623791">+603 7662 3791</a> <?php /*<br> <a href="Tel:+60380805249">+603 80805249</a> */?></p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
              <form action="{{ route('contact.send') }}" method="POST">
                  @csrf
                  <div class="row">
                      <div class="col-md-12 form-group">
                          <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Your Name" required>
                          @error('name')
                              <div style="color: red;">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                          <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Your Email" required>
                          @error('email')
                              <div style="color: red;">{{ $message }}</div>
                          @enderror
                      </div>
                      <div class="col-md-6 form-group mt-3 mt-md-0">
                          <input type="text" class="form-control" name="phone" value="{{ old('phone') }}" id="phone" placeholder="Your Contact No" required>
                          @error('phone')
                              <div style="color: red;">{{ $message }}</div>
                          @enderror
                      </div>
                  </div>
                  <div class="form-group mt-3">
                      <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Subject" required>
                      @error('subject')
                          <div style="color: red;">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="form-group mt-3">
                      <textarea class="form-control" name="message" rows="5" placeholder="Message" required>{{ old('message') }}</textarea>
                      @error('message')
                          <div style="color: red;">{{ $message }}</div>
                      @enderror
                  </div>
                  <div class="my-3">
                      @if (session()->has('success'))
                          <div class="alert alert-success text-center" role="alert">Your message has been sent. Thank you!</div>

                      @elseif (session()->has('error'))
                          <div class="alert alert-danger text-center" role="alert">Something went wrong. Please try again later.</div>
                      @endif
                  </div>
                  <div class="text-center"><button class="btn-success" type="submit">Send Message</button></div>
              </form>
          </div>
      </div>
      

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection