@include('layout.header')

<section id="products_show">
  @if (session()->has('product_saved'))
    <div class="message">
      {{ session('product_saved') }}
    </div>
  @endif

  <h1>{{ $product->name }}</h1>
  <img src="{{ asset('storage/images/'.$product->image) }}" alt="{{ $product->name }}" width="200" />
  <p>{{ $product->description }}</p>
  <p>Price: {{ number_format($product->price) }}</p>
  <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
</section>

@include('layout.footer')
