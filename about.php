<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="../../sass/styles.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
</head>

<body>
  <!------bg-yellow-->
  <section class="ts-org-bg-yellow pb-4">
    <!----------Header------------------>
    <header class="ts-org-header">
      <div class="ts-content-container">
        <nav class="navbar navbar-expand-md navbar-light ">
          <a class="navbar-brand " href="./index.html"><img class="ts-atom-logo" src="/images/adaptable-blk-fade.svg"
              alt=""></a>
          <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-md-center justify-content-lg-end ts-molc-header
            " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
              <li class="nav-item active ">
                <a class="nav-link ts-atom-header-link ts-atom-header-link--me" href="#">How it works </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link ts-atom-header-link ts-atom-header-link--me" href="#" id="navbarDropdown"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Use Cases
                </a>
                <ul class="dropdown-menu nav-drop-content ps-0" aria-labelledby="navbarDropdown">
                  <li class="nav-item dropdown"><a class="nav-link ts-atom-header-link" href="/agencies.html">For
                      Agencies</a></li>
                  <li><a class="nav-link ts-atom-header-link" href="#">For Inbound teams</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link ts-atom-header-link ts-atom-header-link--me" href="#">Plans</a>
              </li>

              <li class="nav-item">
                <a class="nav-link ts-atom-header-link ts-atom-header-link--me" href="/about.html">About</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link ts-atom-header-link ts-atom-header-link--me border-start" href="#">Signin</a>
              </li>
              <li class="ts-molc-header-button">
                <button class=" btn-dark my-2 my-sm-0 ts-atom-button" data-bs-toggle="modal" onclick="myFunction()"
                  data-bs-target="#staticBackdrop" type="submit">Book demo </button>
              </li>
            </ul>
          </div>
        </nav>
      </div>


    </header>
    <!----------Header------------------>
    <!-- Pop up -->
    <!-- Modal -->
    <div class="modal fade modal-dialog modal-dialog-centered modal-dialog-scrollable" id="staticBackdrop"
      data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
      aria-hidden="true">
      <div class="modal-dialog" id="demo1" style="display: none;">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-12 col-lg-6 text-center text-lg-start">
                <img src="/images/adaptable-blk-fade.svg" alt="" style="width: 75px;">
                <h3 class="ts-atom-h3">get started.</h3>
                <div class="ts-atom-h2-para">No sales pitch. No pressure.</div>
                <div class="ts-atom-h3-para pt-5">Our 15-min demo call helps you:</div>
                <div class="ts-atom-h3-para pt-3">Understand our service and benefits.</div>
                <div class="ts-atom-h3-para pt-3">See our platform and how we integrate with your team.</div>
                <div class="ts-atom-h3-para pt-3">Identify which plan fits your needs.</div>
              </div>
              <div class="col-12 col-lg-6 text-start">
                <form>
                  <div class="form-group">
                    <label for="examplename">Name</label>
                    <input type="text" class="form-control" id="examplename" aria-describedby="emailHelp"
                      placeholder="John Doe">
                  </div>

                  <div class="form-group pb-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                      placeholder="name@mail.com">

                  </div>

                  <select class="form-control">
                    <label for="exampleplan">Plan</label>
                    <option>Select one</option>
                  </select>
                  <small id="emailHelp" class="form-text text-muted"> <i> By clicking the book me in button you agree to
                      our Terms and Privacy Policy.</i> </small>

                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Book me in </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Pop up -->

    <!-- about adaptable -->
    <section class="mt-5 mt-md-5 mt-lg-5 pb-lg-3">
      <div class="container">
        <div class="row text-center mt-lg-5 pt-lg-4">
          <div class="col-12 col-md-12 col-lg-12 text-center mt-3 mt-md-0">
            <h1 class="ts-atom-h1 ts-atom-h1--pad-left text-center">
              about adaptable.
            </h1>
            <p class="ts-atom-h1-para ts-atom-h1-para--about-px  pb-2 px-md-5 mx-md-5 mt-3 mt-lg-4 ">
              <b>Our mission</b> is to create better customer experiences by making quality web delivery accessible and
              cost-effective to all companies.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!----about adaptable------->
  </section>
  <!-------bg-yellow-->

  <!-- start -->
  <section class="ts-org-thoughtful mt-5 mt-md-5 px-3 px-md-5 ps-lg-1">
    <div class="container">
      <div class="row pt-lg-5 ">
        <div class="col-12 col-md-9 col-lg-6 ts-molc-head-desc">
          <h2 class="ts-atom-h2 ">
            the start of something new.
          </h2>
          <p class="ts-atom-about-para pt-2 pt-lg-1">
            Adaptable is a web services company providing growth-oriented organizations with uncapped design and
            technical work at a flat-rate. From routinely updated websites to marketing pages, our platform gives
            customer-centric teams the ability to create remarkable sites that scale and drive business forward.</p>
        </div>
        <div class="col-12 col-md-4 col-lg-6">
          <img src="./images/hands.svg" class="ts-atom-h2-img ts-atom-h2-img--size300" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- start -->
  <!-- getting -->
  <section class="ts-org-about-getting mt-0 mt-lg-5 pb-lg-5">
    <div class="container">
      <div class="row text-center">
        <div class="ts-molc-getting col-12 col-md-12 col-lg-12 text-center">
          <h2 class="ts-atom-h2 text-center px-3 px-md-5">
            how we're getting it done.
          </h2>
          <p class="ts-atom-h1-para ts-atom-h1-para--size22 mt-3 mt-md-4 mt-lg-4">
            We've engineered something special.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- getting -->
  <!-- card section -->
  <section class="mt-lg-5 mt-2 mt-md-4">
    <div class="container ts-org-card-about">
      <div class="row text-center ms-0 me-0">

        <div class="col-lg-4 col-md-4 text-center pt-2 ">
          <div class="ts-molc-card ts-molc-card__width ts-molc-card__width-aboutpg h-auto pb-3">
            <img src="/images/for_website.svg" class="card-img-top ts-atom-card-img  img-fluid pt-lg-5 pt-0 pt-md-1"
              alt="...">
            <div class="card-body">
              <h5 class="card-title ts-atom-card-title-h3 ch-font  mb-3">global remote team</h5>
              <p class="card-text ts-atom-card-body ts-atom-card-body--lineheight px-lg-4 text-secondary">Our
                battle-tested team of top creative and technical specialists from around the world allows us to offer
                exceptional work with a faster turnaround.</p>


            </div>
          </div>

        </div>

        <div class="col-lg-4 col-md-4 text-center mt-2">
          <div class="ts-molc-card ts-molc-card__width h-auto pb-5 ">
            <img src="/images/for_aquisition.svg" class="ts-atom-card-img pt-lg-5 pt-0 pt-md-1" alt="...">
            <div class="card-body">
              <h5 class="ts-atom-card-title-h3 ch-font mb-3">tech enabled</h5>
              <p class="card-text text-center ts-atom-card-body ts-atom-card-body--lineheight px-lg-4 text-secondary">We
                use purpose-built technology combined with a specialized toolset to offer our unchained design and
                technical scope on an enterprise level.</p>



            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 text-center mt-2">
          <div class="ts-molc-card ts-molc-card__width h-auto pb-3">
            <img src="/images/for_prototyping.svg" class="ts-atom-card-img pt-lg-5 pt-md-1 pt-0" alt="...">
            <div class="card-body">
              <h5 class="card-title ts-atom-card-title-h3 ch-font mb-3">semi-automated</h5>
              <p class="card-text ts-atom-card-body ts-atom-card-body--lineheight px-lg-4 text-secondary">Our
                orchestration is our secret sauce. We've developed a proprietary rigor of web ops and tech complemented
                by an app to deliver a game-changing experience for you.
              </p>
            </div>
          </div>

        </div>



      </div>
    </div>



  </section>
  <!-- card section -->
  <!-- Footer Section -->
  <footer class="container-fluid ts-org-footer pt-5 mt-5">


    </div>
    <hr class="d-block d-md-block d-lg-none text-decoration-line-through  mt-4" style="color: #cacaca;">
    <div class="container">
      <div class="row container ps-lg-4">
        <div class="col-12 col-md-6">
          <img src="/adaptable-wht-fade.svg" class="img-fluid ts-footer__logo-img">
          <p class="ts-atom-p ts-footer__p-demo text-light">Get started today. 15-day trial with a 100% money-back
            guarantee.</p>
          <button class="btn border border-white rounded-0 ts-atom-p ts-footer__btn-text text-light fw-bold mt-1">Book
            demo</button>
        </div>

        <div class="col-12 col-md-6 text-sm-start mt-5">
          <ul calss="ts-footer__list ">
            <p class="ts-atom-p ts-footer__list-heading text-light fw-bolder pb-2">Products</p>
            <li class="ts-footer__list-items">Features</li>
            <li class="ts-footer__list-items">For Agencies</li>
            <li class="ts-footer__list-items">For Inbound teams</li>
            <li class="ts-footer__list-items">Sign in</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container pt-5 mx-auto">
      <div class="row">

        <div class="col-12 col-md-12 col-lg-4   text-start order-first order-lg-last">
          <div class="ms-2 pb-2 ps-4 ps-md-4">
            <ul class="ts-footer__list-social d-flex">
              <li class="ts-footer__list-social-items">
                <img src="/likned_wht.svg" class="img-fluid ts-footer__list-social-img" alt="social media">
              </li>
              <li class="ts-footer__list-social-items">
                <img src="/likned_wht.svg" class="img-fluid ts-footer__list-social-img" alt="social media">
              </li>
              <li class="ts-footer__list-social-items">
                <img src="/likned_wht.svg" class="img-fluid ts-footer__list-social-img" alt="social media">
              </li>
              <li class="ts-footer__list-social-items">
                <img src="/likned_wht.svg" class="img-fluid ts-footer__list-social-img" alt="social media">
              </li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-md-12 col-lg-8 text-start order-last order-lg-first">
          <div class=" ms-3 ps-md-4 ps-lg-4">
            <p class="ts-atom-p ts-footer__credits">&nbsp;© 2021 Adaptable.&hearts; from Los Angeles. All rights
              reserved.</p>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <!-- Footer Section -->


  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
    integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/fa595a4e66.js" crossorigin="anonymous"></script>
  <script>
    function myFunction() {
      document.getElementById("demo1").style.display = "block";
    }
  </script>

</body>

</html>