@include('layout.header')

@php
  $firstWordTitle = strtok($product->name, " ");
  $restOfTextTitle = trim(strstr($product->name, " "));
@endphp

<!-- ======= description Section ======= -->
<section id="book-a-table" class="book-a-table">
  <br />
  <br />
  @if (session()->has('product_saved'))
    <div class="message">
      {{ session('product_saved') }}
    </div>
  @endif

  <div class="container" data-aos="fade-up">
    <div class="section-header">
      <h2>DESCRIPCIÓN</h2>
      <p>{{ $firstWordTitle }} <span>{{ $restOfTextTitle }}</span></p>
    </div>

    <div class="row g-0">
      <div
        class="col-lg-4 reservation-img"
        style="background-image: url({{ asset('storage/images/'.$product->image) }})"
        data-aos="zoom-out"
        data-aos-delay="200"
      ></div>

      <div class="col-lg-8 d-flex align-items-center reservation-form-bg">
        <div class="php-email-form">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-12">
              <div class="testimonial-content">
                <p>{{ $product->description }}</p>
                <p><i>{{ $product->ingredients }}</i></p>
                <h4>$ {{ number_format($product->price) }}</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
  </div>
</section>
<!-- End description Section -->

@include('layout.footer')
