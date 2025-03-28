<?php include "templates/header.php"; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['contact_name'];
    $email = $_POST['contact_email'];
    $message = $_POST['contact_message'];

    if (!empty($name) && !empty($email) && !empty($message)) {
        echo "<p>Thank you, $name! We have received your message.</p>";
    } else {
        echo "<p>Please fill in all fields.</p>";
    }
}
?>
<!-- Welcome Section -->
<section id="tmWelcome" class="parallax-window" data-parallax="scroll" data-image-src="img/mini-profile-bg-01.jpg">
  <div class="container-fluid tm-brand-container-outer">
    <div class="row">
      <div class="col-12">
        <!-- Logo Area -->
        <div class="ml-auto mr-0 tm-bg-black-transparent text-white tm-brand-container-inner">
          <div class="tm-brand-container text-center">
            <h1 class="tm-brand-name">Mini Profile</h1>
            <p class="tm-brand-description mb-0">simple parallax template</p>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <div class="tm-bg-white-transparent tm-welcome-container">
    <div class="container-fluid">
      <div class="row h-100">
        <div class="col-md-7 tm-welcome-left-col">
          <div class="tm-welcome-left">
            <h2 class="tm-welcome-title">Welcome to Mini Profile Page</h2>
            <p class="pb-0">
              This is Bootstrap v4.3.1 parallax layout for you. Credit goes to <a rel="nofollow" href="https://www.pexels.com">Pexels</a> for 2 background images.
            </p>
          </div>
        </div>
        <div class="col-md-5">
          <div class="tm-welcome-right">
            <i class="fas fa-4x fa-address-card p-3 tm-welcome-icon"></i>
            <p class="mb-0">Please spread a word about templatemo website. Anyone can download free Bootstrap CSS templates.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Portfolio Section -->
<section id="tmPortfolio">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="tm-portfolio-item">
          <div class="tm-portfolio-name text-white tm-bg-green">Project Manager</div>
          <div class="tm-portfolio-description">
            <h3 class="tm-text-green">New Company <span class="tm-title-small">(2019 January to Present)</span></h3>
            <p class="mb-0">Nullam a tellus ultricies, ornare purus vel, porttitor massa.</p>
          </div>
        </div>

        <div class="tm-portfolio-item">
          <div class="tm-portfolio-name text-white tm-bg-orange">Senior UX Designer</div>
          <div class="tm-portfolio-description">
            <h3 class="tm-text-orange">Studio One <span class="tm-title-small">(2017 April to 2018 Dec)</span></h3>
            <p class="mb-0">Morbi aliquam, nunc vel blandit mattis, sapien nisl convallis sem.</p>
          </div>
        </div>

        <div class="tm-portfolio-item">
          <div class="tm-portfolio-name text-white tm-bg-blue">Graphic Designer</div>
          <div class="tm-portfolio-description">
            <h3 class="tm-text-blue">Digital Com <span class="tm-title-small">(2015 Jan to 2016 Dec)</span></h3>
            <p class="mb-0">Etiam porta est nisl, consectetur dapibus ante faucibus id.</p>
          </div>
        </div>

        <div class="tm-portfolio-item">
          <div class="tm-portfolio-name text-white tm-bg-dark-gray">Design School</div>
          <div class="tm-portfolio-description">
            <h3 class="tm-text-dark-gray">Art Design College <span class="tm-title-small">(2012 May to 2014 Dec)</span></h3>
            <p class="mb-0">Proin vehicula mauris ipsum, euismod dignissim dolor convallis ac.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<div id="tmContact" class="parallax-window" data-parallax="scroll" data-image-src="img/mini-profile-bg-02.jpg">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="tm-contact-items-container">
          <div class="tm-contact-item">
            <i class="fas fa-5x fa-briefcase tm-contact-item-icon"></i>
            <p class="mb-0">Quisque venenatis viverra ultrices. Lorem ipsum dolor sit amet.</p>
          </div>
          <div class="tm-contact-item">
            <i class="fas fa-5x fa-building tm-contact-item-icon"></i>
            <p class="mb-0">You can use Mini Profile for your web page or any usage for your website.</p>
          </div>
          <div class="tm-contact-item">
            <i class="fas fa-5x fa-balance-scale tm-contact-item-icon"></i>
            <p class="mb-0">You are NOT allowed to re-distribute this template in any download website.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <form action="index.php" method="POST" id="tmContactForm" class="tm-bg-white-transparent">
          <div class="form-group">
            <input type="text" id="contact_name" name="contact_name" class="form-control rounded-0" placeholder="Name" required />
          </div>
          <div class="form-group">
            <input type="email" id="contact_email" name="contact_email" class="form-control rounded-0" placeholder="Email" required />
          </div>
          <div class="form-group">
            <textarea rows="4" id="contact_message" name="contact_message" class="form-control rounded-0" placeholder="Message" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn tm-btn-submit rounded-0 text-white">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include "templates/footer.php"; ?>
