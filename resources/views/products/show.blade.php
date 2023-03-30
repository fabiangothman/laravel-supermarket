@include('layout.header')

<section id="products_show">
  <h1>{{ $product->name }}</h1>
  <p>{{ $product->description }}</p>
  <p>Price: {{ $product->price }}</p>
  <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</section>

@include('layout.footer')
