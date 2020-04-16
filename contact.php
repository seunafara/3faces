<!DOCTYPE html>
<html lang="en-US">


<?php require('header.php') ?>

  <main class="main-root">
    <div id="dsn-scrollbar">
      <header>
        <div class="container header-hero">
          <div class="row">
            <div class="col-lg-6">
              <div class="contenet-hero">
                <h5>Lat's Talk</h5>
                <h1>Contact Us</h1>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div class="wrapper">
        <div class="root-contact">
          <div class="container-fluid">
            <div class="map-custom" id="map" data-dsn-lat="30.0489206" data-dsn-len="31.258553" data-dsn-zoom="14">
            </div>
          </div>

          <div class="container section-margin">
            <div class="row">
              <div class="col-lg-6">
                <div class="box-info-contact">
                  <h3>work with us</h3>
                  <h5>Visit our office at</h5>
                  <p>Sed ut perspiciatis unde omnis iste natus error sit vo
                    luptatem accusantium natus error sit omnis iste natus</p>

                  <ul>
                    <li>
                      <span>Phone</span>
                      <a href="#">+234 (701) 453 9565</a>
                    </li>
                    <li>
                      <span>Email</span>
                      <a href="#">hello@triangle.ng</a>
                    </li>
                    <li>
                      <span>Address</span>
                      <a href="#">6, Oye Balogun Street, off Freedom Way, Lekki</a>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- <div class="col-lg-6">
                <div class="form-box">
                  <h3>Write A Comment</h3>
                  <form id="contact-form" class="form" method="post" action="http://theme.dsngrid.com/droow-l/contact.php" data-toggle="validator">
                    <div class="messages"></div>
                    <div class="input__wrap controls">
                      <div class="form-group">

                        <div class="entry">
                          <label>What's your name?</label>
                          <input id="form_name" type="text" name="name" placeholder="Type your name" required="required"
                            data-error="name is required.">
                        </div>
                        <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                        <div class="entry">
                          <label>What's your email address?</label>
                          <input id="form_email" type="email" name="email" placeholder="Type your Email Address"
                            required="required" data-error="Valid email is required.">
                        </div>
                        <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group">
                        <div class="entry">
                          <label>What's up?</label>
                          <textarea id="form_message" class="form-control" name="message"
                            placeholder="Tell us about you and the world" required="required"
                            data-error="Please,leave us a message."></textarea>
                        </div>
                        <div class="help-block with-errors"></div>
                      </div>

                      <div class="image-zoom" data-dsn="parallax">
                        <button>Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div> -->
            </div>
          </div>
        </div>

    

        <?php require_once('footer.php') ?>
     
  <script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA49hGCmzG22gXOfg784H0w8DtKEsSvq7k"></script>
  

</body>



</html>