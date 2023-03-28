
                <section id="newsletter">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-12 col-lg-6">
                            <h2 class="mb-3">Do you need to be faster?</h2>
                            <div class="important-text mb-3">
                                Contact us to find out how we are helping our clients build|go|innovate faster and get a free evaluation
                            </div>
                            <a href="mailto:jimmehyuen@gmail.com">
                                <div class="cta shadow">
                                    Contact us
                                </div>
                            </a>
                        </div>
                    </div>
                </section>

                <section id="offices">
                    <div class="container">
                        <div class="d-flex justify-content-center mb-5 pb-5">
                            <div class="line"></div>
                        </div>
                        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 mt-5">
                            <div class="col p-0">
                                <div class="office text-center text-lg-center me-0">
                                        <div class="map mb-3 mb-md-0">
                                            <img src="assets/NewYork.svg" class="" alt="USA">
                                        </div>
                                        <div class="city">New York</div>
                                        <div class="address"></div>
                                        <div class="phone"></div>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="office text-center text-lg-center me-0">
                                        <div class="map mb-3 mb-md-0">
                                            <img src="assets/UK.svg" class="" alt="UK">
                                        </div>
                                        <div class="city">London</div>
                                        <div class="address"></div>
                                        <div class="phone"></div>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="office text-center text-lg-center me-0">
                                        <div class="map mb-3 mb-md-0">
                                            <img src="assets/Germany.svg" class="" alt="Germany">
                                        </div>
                                        <div class="city">Frankfurt</div>
                                        <div class="address"></div>
                                        <div class="phone"></div>
                                </div>
                            </div>
                            <div class="col p-0">
                                <div class="office text-center text-lg-center me-0">
                                        <div class="map mb-3 mb-md-0">
                                            <img src="assets/China.svg" class="" alt="China">
                                        </div>
                                        <div class="city">Shanghai</div>
                                        <div class="address"></div>
                                </div>
                            </div>
                            <!-- <div class="col">
                                <div class="office text-center text-lg-start">
                                        <div class="map mb-3 mb-md-0">
                                            <img src="assets/India.svg" class="" alt="India">
                                        </div>
                                        <div class="city">Bangalore</div>
                                        <div class="address"></div>
                                        <div class="phone"></div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </section>
                <footer>
                    <div class="container">
                        <div class="row d-flex justify-content-between">
                            <div class="col">
                                <img src="assets/jimmy_logo.png" class="logo" alt="Jimmy Logo" />
                            </div>
                            <div class="col d-flex justify-content-end align-items-center">
                                <a href="privacy">Privacy</a>
                                <button id="ot-sdk-btn" class="ot-sdk-show-settings">Cookie Settings??!?!?!?!</button>
                                <a href="https://www.linkedin.com/in/jimmy-yuen/" target="_blank" rel="nofollow">
                                    <img class="icon-linkedin" src="assets/linkedin.svg" alt="Jimmy linked" />
                                </a>
                            </div>
                        </div>
                    </div>
                </footer>
            </main>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
        <script src="js/bundle.min.js"></script>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog mx-auto">
            <div class="modal-content mx-auto">
              <div class="modal-header d-flex flex-column">
                <h2 class="modal-title mb-3" id="exampleModalLabel">Do you need to go faster?</h2>
                <div class="line"></div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div id="modal-body" class="modal-body">
                <form id="contact-form" action="send/send.php" method="POST" class="needs-validation" novalidate>
                  <div class="mb-3 row">
                    <div class="col-12 col-md-6">
                      <label for="firstname" class="form-label">First Name*</label>
                      <input name="firstname" type="text" class="form-control" id="firstname" aria-describedby="firstname" required>
                      <div class="invalid-feedback">
                        Please enter a first name.
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <label for="lastname" class="form-label">Last Name*</label>
                      <input name="lastname" type="text" class="form-control" id="lastname" aria-describedby="lastname" required>
                      <div class="invalid-feedback">
                        Please enter a last name.
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <div class="col-12 col-md-6">
                      <label for="company" class="form-label">Company*</label>
                      <input type="text" class="form-control" id="company" name="company" aria-describedby="company">
                      <div class="invalid-feedback">
                        Please enter a company.
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <label for="title" class="form-label">Title / Role</label>
                      <input name="title" type="text" class="form-control" id="title" aria-describedby="title">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <div class="col-12 col-md-6">
                      <label for="country" class="form-label">Country</label>
                      <input name="country" type="text" class="form-control" id="country" aria-describedby="country">
                    </div>
                    <div class="col-12 col-md-6">
                    </div>
                  </div>
                  <div class="mb-3 row">
                    <div class="col-12 col-md-6">
                      <label for="email" class="form-label">E-Mail*</label>
                      <input name="email" type="text" class="form-control" id="email" aria-describedby="email" required>
                      <div class="invalid-feedback">
                        Please enter an e-mail.
                      </div>
                    </div>
                    <div class="col-12 col-md-6">
                      <label for="phone" class="form-label">Phone number</label>
                      <input name="phone" type="text" class="form-control" id="phone" aria-describedby="phone">
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="message" class="form-label">Your message</label>
                    <textarea class="form-control" id="message" name="message"></textarea>
                  </div>
                  <div class="mb-5 smallprint">
                    * Required field
                    <br/>
                    <br/>
                    Your privacy is important to us.
                    The information collected here will be used to provide the information you requested and you may opt out of further communications at any time.
                    <br/>
                    <br/>
                    For further details, please read our Privacy Policy</a>.
                  </div>
                  <div class="d-flex justify-content-center">
                      <button class="cta shadow" type="submit">Contact Us</button>
                  </div>
                  <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?>" />
                    <div id="captcha-api-response">

                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <script>

        (function () {
            'use strict'
            var forms = document.querySelectorAll('.needs-validation')
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                    form.addEventListener('submit', function (event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        } else {
                            event.preventDefault();
                            event.stopPropagation();
                            onSubmit();
                        }

                        form.classList.add('was-validated');
                    }, false)
                })
        })()

        function onSubmit() {
            grecaptcha.ready(function() {
                grecaptcha.execute('<?=$reCAPTCHAsiteKey?>', {action: 'contactform'}).then(function(token) {

                    $('#contact-form').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');

                    var data = $("#contact-form").serialize();

                    $.ajax({
                        type: "POST",
                        url: "send/send.php",
                        data: data,
                        success: function(result){
                            const data = JSON.parse(result);
                            if (data.success) {
                                afterSend();
                            } else {
                                afterCaptchaError();
                            }
                        }
                    });
                });;
            });;
        }

        function afterCaptchaError() {
          document.getElementById("modal-body").innerHTML = "Please send an e-mail directly to <a href='mailto:jimmehyuen@gmail.com'>jimmehyuen@gmail.com</a>. Unfortunately we couldn't confirm your bot-status.";
        }

        function afterSend() {
          document.getElementById("modal-body").innerHTML = "Thank you very much for your interest in Jimmy. We will contact you shortly.<br/><br/>Kind regards,<br/>Jimmy";
        }
        </script>
    </body>
</html>
