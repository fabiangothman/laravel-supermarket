@include('layout.header')

<!-- ======= Login Section ======= -->
<section id="hero" class="hero d-flex align-items-center section-bg">
  <div class="container">
    <div class="row justify-content-between gy-5">
      <div
        class="col-lg-12 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start"
      >
        <body id="book-a-table" class="book-a-table">
          <div class="container">
            <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                  <div class="card-body p-4 p-sm-5 reservation-form-bg">
                    <h5 class="text-center">Iniciar sesión</h5>
                    <form action="/login" method="post">
                      @csrf
                      @method('POST')
                      <div class="form-floating mb-3">
                        <input
                          type="email"
                          name="email"
                          class="form-control"
                          id="floatingEmail"
                          placeholder="email"
                          required
                        />
                        <label for="floatingEmail">Correo</label>
                      </div>
                      
                      <div class="form-floating mb-3">
                        <input
                          type="password"
                          name="password"
                          class="form-control"
                          id="floatingPassword"
                          placeholder="password"
                        />
                        <label for="floatingPassword">Contraseña</label>
                      </div>

                      <div class="form-check mb-3">
                        <input
                          type="checkbox"
                          name="remember"
                          class="form-check-input"
                          id="rememberPasswordCheck"
                          value="1"
                          checked
                        />
                        <label class="form-check-label" for="rememberPasswordCheck">Recordar contraseña</label>
                      </div>
                      <div class="d-grid">
                        <button class="btn-book-a-table" type="submit">
                          <span>INICIAR SESIÓN</span>
                          <i class="bi bi-box-arrow-in-right"></i>
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </body>
      </div>
      <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
        <img
          src="assets/img/hero-img.png"
          class="img-fluid"
          alt=""
          data-aos="zoom-out"
          data-aos-delay="300"
        />
      </div>
    </div>
  </div>
</section>
<!-- End Login -->

@include('layout.footer')
