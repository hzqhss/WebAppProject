@extends('master.layout')
@section('content')



  <!-- Menu Section -->
  <section id="menu" class="menu section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>MENU</h2>
      <p>Please choose which Mahallah cafeteria's food that you would like to order</p>
    </div><!-- End Section Title -->

    <div class="container">

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-aminah">
            <h4>Mahallah Aminah</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-hafsa">
            <h4>Mahallah Hafsa</h4>
          </a><!-- End tab nav item -->

        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-nusaibah">
            <h4>Mahallah Nusaibah</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-salahuddin">
            <h4>Mahallah Salahuddin</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-zubair">
              <h4>Mahallah Zubair</h4>
            </a>
          </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-ali">
            <h4>Mahallah Ali</h4>
          </a>
        </li><!-- End tab nav item -->




      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

        <div class="tab-pane fade active show" id="menu-aminah">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Mahallah Aminah</h3>
            <img src="public\assets\img\menu\AminahLogo.png" alt="aminahlogo">

          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/Nasilemak.jpg" class="glightbox"><img src="assets/img/menu/Nasilemak.jpg" class="menu-img img-fluid" alt=""></a>
              <h4>Nasi Lemak Ayam Goreng</h4>
              <p class="price">
                RM 6
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Chicken Mix</h4>
              <p class="price">
                RM 5
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Shawarma</h4>
              <p class="price">
                RM 7
              </p>
            </div><!-- Menu Item -->


          </div>
        </div><!-- End Aminah Menu Content -->

        <div class="tab-pane fade" id="menu-hafsa">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Mahallah Hafsa</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
              <h4>Nasi Lemak Ayam Goreng</h4>
              <p class="price">
                RM 6
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Chicken Mix</h4>
              <p class="price">
                RM 5
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Shawarma</h4>
              <p class="price">
                RM 6
              </p>
            </div><!-- Menu Item -->

          </div>
        </div><!-- End Hafsa Menu Content -->

        <div class="tab-pane fade" id="menu-nusaibah">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Mahallah Nusaibah</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
              <h4>Nasi Lemak Ayam Goreng</h4>
              <p class="price">
                RM 6
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
              <h4>Chicken Mix</h4>
              <p class="price">
                RM 5
              </p>
            </div><!-- Menu Item -->

            <div class="col-lg-4 menu-item">
              <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
              <h4>Shawarma</h4>
              <p class="price">
                RM 7
              </p>
            </div><!-- Menu Item -->


          </div>
        </div><!-- End Nusaibah Menu Content -->

        <div class="tab-pane fade" id="menu-salahuddin">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Mahallah Salahuddin</h3>
          </div>

          <div class="row gy-5">

            <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\ayampenyet.png" class="glightbox"><img src="assets\img\menu\ayampenyet.png" class="menu-img img-fluid" alt=""></a>
                <h4>Nasi Ayam Penyet</h4>
                <p class="price">
                  RM 7.00
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\Ckt.jpg" class="glightbox"><img src="assets\img\menu\Ckt.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Char Kuey Teow</h4>
                <p class="price">
                  RM 6.50
                </p>
              </div><!-- Menu Item -->

              <div class="col-lg-4 menu-item">
                <a href="assets\img\menu\tembikai.jpg" class="glightbox"><img src="assets\img\menu\tembikai.jpg" class="menu-img img-fluid" alt=""></a>
                <h4>Jus Tembikai</h4>
                <p class="price">
                  RM 2.50
                </p>
              </div><!-- Menu Item -->

          </div>
        </div><!-- End Salahuddin Menu Content -->

        <div class="tab-pane fade" id="menu-zubair">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Mahallah Zubair</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-1.png" class="glightbox"><img src="assets/img/menu/menu-item-1.png" class="menu-img img-fluid" alt=""></a>
                  <h4>Nasi Lemak Ayam Goreng</h4>
                  <p class="price">
                    RM 6
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-2.png" class="glightbox"><img src="assets/img/menu/menu-item-2.png" class="menu-img img-fluid" alt=""></a>
                  <h4>Chicken Mix</h4>
                  <p class="price">
                    RM 5
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/menu-item-3.png" class="glightbox"><img src="assets/img/menu/menu-item-3.png" class="menu-img img-fluid" alt=""></a>
                  <h4>Shawarma</h4>
                  <p class="price">
                    RM 7
                  </p>
                </div><!-- Menu Item -->


            </div>
          </div><!-- End Zubair Menu Content -->

          <div class="tab-pane fade" id="menu-ali">

            <div class="tab-header text-center">
              <p>Menu</p>
              <h3>Mahallah Ali</h3>
            </div>

            <div class="row gy-5">

              <div class="col-lg-4 menu-item">
                  <a href="assets/img/menu/greentea.png" class="glightbox"><img src="assets/img/menu/greentea.png" class="menu-img img-fluid" alt=""></a>
                  <h4>Iced Green Tea</h4>
                  <p class="price">
                    RM 3.00
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets\img\menu\takoyaki.jpg" class="glightbox"><img src="assets\img\menu\takoyaki.jpg" class="menu-img img-fluid" alt=""></a>
                  <h4>Takoyaki</h4>
                  <p class="price">
                    RM 6.50
                  </p>
                </div><!-- Menu Item -->

                <div class="col-lg-4 menu-item">
                  <a href="assets\img\menu\shawarma.jpg" class="glightbox"><img src="assets\img\menu\shawarma.jpg" class="menu-img img-fluid" alt=""></a>
                  <h4>Shawarma</h4>
                  <p class="price">
                    RM 6.00
                  </p>
                </div><!-- Menu Item -->


            </div>
          </div><!-- End Ali Menu Content -->



      </div>

    </div>

  </section><!-- /Menu Section -->

  @endsection
