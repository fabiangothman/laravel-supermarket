@include('layout.header')

<!-- ======= Productos - Slider ======= -->
<section id="products" class="testimonials section-bg">
  <div class="container" data-aos="fade-up">
    <br />
    <br />
    <div class="section-header">
      <p>Conozca más de <span>Nuestros productos</span></p>
    </div>

    <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
        @foreach ($products as $product)
          @if ($loop->iteration > 5)
            @break
          @endif
          <!-- Start slider item -->
          <div class="swiper-slide">
            <div class="testimonial-item">
              <div class="row gy-4 justify-content-center">
                <div class="col-lg-6">
                  <div class="testimonial-content">
                    <p>{{ $product->description }}</p>
                    <h3>{{ $product->name }}</h3>
                    <h4>$ {{ number_format($product->price) }}</h4>
                  </div>
                </div>
                <div class="col-lg-2 text-center">
                  <img
                    src="{{ asset('storage/images/'.$product->image) }}"
                    class="img-fluid testimonial-img"
                    alt="{{ $product->name }}"
                    width="200"
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- End slider item -->
        @endforeach
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
<!-- End productos Section -->

<main id="main">
  <!-- ======= Menu Section ======= -->
  <section id="menu" class="menu">
    <div class="container" data-aos="fade-up">
      <div class="section-header">
        <h2>Nuestro Menú</h2>
        <p>Consulta la lista completa de nuestros {{ count($products) }} <span>Productos del Menú</span></p>
      </div>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300">
        <div class="tab-pane fade active show" id="menu-starters">
          <div class="row gy-5">
            @foreach ($products as $product)
              <!-- Start Menu Item -->
              <div class="col-lg-4 menu-item">
                <a href="{{ route('products.show', $product->id) }}">
                  <img
                    src="{{ asset('storage/images/'.$product->image) }}"
                    class="img-fluid testimonial-img"
                    alt="{{ $product->name }}"
                    width="200"
                  />
                </a>
                <h4>{{ $product->name }}</h4>
                <p class="ingredients">{{ $product->ingredients }}</p>
                <p class="price">$ {{ number_format($product->price) }}</p>
                <!-- <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View</a>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                </form> -->
              </div>
              <!-- End Menu Item -->
            @endforeach            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Menu Section -->
</main>
<!-- End #main -->

@include('layout.footer')
