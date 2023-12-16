@extends('auth.master', ['title'=>'contact'])
@section('section')
<main id="main">
  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div id="footer" class="section-title">
          <h2>Contact</h2>
          <p>Si vous avez une préocupation, veuillez nous contacter gratuitement.</p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-1"></div>


          <div class="col-lg-12 mt-5 mt-lg-0">
            <div class="card">
                <div class="card-img-actions mx-1 mt-1 p-3">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Votre Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer Message</button></div>
            </form>

          </div>
          </div>
          </div>
          <div class="col-lg-1"></div>
        </div>

      </div>
    </section><!-- End Contact Section -->
</main>
@include('auth.footer2')
@stop
