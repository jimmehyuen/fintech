<?php
?>
<!doctype html>
<html lang="en">
    <head>

<style>
    #ot-sdk-btn-floating.ot-floating-button {
        display: none;
    }
    #ot-sdk-btn {
        border: none !important;
        background: none !important;
        text-decoration: underline !important;
        color: #646466 !important;
        margin: 7px 0 7px 20px !important;
        /* padding-top: 0 !important; */
        font-size: 1em !important;
        padding: 0 !important;
    }
</style>
        <meta charset="utf-8">
        <base href="/">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css?v=221108">
        <title>Fintech</title>
        <link rel="shortcut icon" href="assets/favicon.ico">

    </head>
    <body class="<?php if(isset($bodyClass)) echo $bodyClass ?>">

        <nav id="nav" class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand scroll" href="#body">
                    <img src="assets/jimmy_logo.png" class="logo" alt="Jimmy Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'><path stroke='#22233D' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/></svg>
                    </span>
                </button>

                <!-- Desktop -->
                <div class="site-header-desktop d-none d-lg-block">
                  <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                      <div class="navbar-nav my-3 my-md-0">

                      <div class="nav-item btn-group btn-group-cust">
                        <button type="button" class="btn dropbtn" data-bs-toggle="dropdown" aria-expanded="false">
                          About Us
                          <span class="plus">+</span>
                          <span class="minus">-</span>
                        </button>
                        <ul class="dropdown-menu dropdown-content">
                          <li><a class="dropdown-item" href="#about-us">About Us</a></li>
                          <li><a class="dropdown-item" href="#products">Product Description</a></li>
                          <li><a class="dropdown-item" href="#key-fact">Key Facts</a></li>
                          <li><a class="dropdown-item" href="#use-cases">Use Cases</a></li>
                          <li><a class="dropdown-item" href="#why">Why Jimmy</a></li>
                        </ul>
                      </div>
                        <a class="scroll" href="#team">
                          <button type="button" class="btn dropbtn" data-bs-toggle="dropdown" aria-expanded="false">
                            Team
                          </button>
                        </a>
                        <a class="scroll" href="#newsmedia">
                          <button type="button" class="btn dropbtn" data-bs-toggle="dropdown" aria-expanded="false">
                            News & Media
                          </button>
                        </a>
                        <a class="scroll" href="#insights">
                          <button type="button" class="btn dropbtn" data-bs-toggle="dropdown" aria-expanded="false">
                          Insights
                          </button>
                        </a>

                        <div class="nav-item btn-group btn-group-cust">
                        <button type="button" class="btn dropbtn" data-bs-toggle="dropdown" aria-expanded="false">
                          Client Portal
                          <span class="plus">+</span>
                          <span class="minus">-</span>
                        </button>
                        <ul class="dropdown-menu dropdown-content">
                          <li><a class="dropdown-item" target="_blank">Community</a></li>
                          <li><a class="dropdown-item" target="_blank">Products</a></li>
                          <li><a class="dropdown-item" target="_blank">Portal</a></li>
                        </ul>
                      </div>

                        <a href="mailto:jimmehyuen@gmail.com">
                            <div class="cta">
                                Contact us
                            </div>
                        </a>

                  </div>
                </div>
              </div>
              <div class="background"></div>
            </div>

              <!-- Mobile -->
              <div class="site-header-mobile d-block d-lg-none">
                <div class="collapse navbar-collapse nav-mb-container" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      About Us
                    </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#about-us">About Us</a></li>
                        <li><a class="dropdown-item" href="#products">Product Description</a></li>
                        <li><a class="dropdown-item" href="#key-fact">Key Facts</a></li>
                        <li><a class="dropdown-item" href="#use-cases">Use Cases</a></li>
                        <li><a class="dropdown-item" href="#why">Why Jimmy</a></li>
                      </ul>
                  </li>
                  <div class="nav-item-container">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#team">Team</a>
                    </li>
                  </div>
                  <div class="nav-item-container">
                    <li class="nav-item">
                      <a class="nav-link" href="#newsmedia">News & Media</a>
                    </li>
                  </div>
                  <div class="nav-item-container">
                    <li class="nav-item">
                      <a class="nav-link" href="#insights">Insights</a>
                    </li>
                  </div>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Client Portal
                    </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" target="_blank">Community</a></li>
                        <li><a class="dropdown-item" target="_blank">Documents</a></li>
                        <li><a class="dropdown-item" target="_blank">Portal</a></li>
                      </ul>
                  </li>
                  <div class="mb-dropdown-container">
                    <a href="mailto:jimmehyuen@gmail.com">
                    <div class="cta-mb">
                      Contact us
                    </div>
                    </a>
                  </div>
                </ul>
              </div>

      </nav>
      <script>
                $(function () {
                  $(".nav-link:not(.dropdown-toggle)").click(function () {
                    let nav = $(".navbar-collapse");
                    if (nav.hasClass("show")) {
                      nav.removeClass("show");
                    }
                  });
                });
              </script>
