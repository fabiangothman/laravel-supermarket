@include('layout.header')

<!-- ======= Sección Main Listar Producto ======= -->
<main class="main-central">
  <section class="products">
    <h2>Listar Productos</h2>
    <br />
    <center>
      <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Crear producto</a>
    </center>
    <div class="product-flex">
      @foreach ($products as $product)
        <div class="product-card">
          <a href="{{ route('products.show', $product->id) }}" class="card-link">
            <img src="{{ asset('storage/images/'.$product->image) }}" alt="{{ $product->name }}" width="200" />
            <h3>{{ $product->name }}</h3>
            <p class="price">$ {{ number_format($product->price) }}</p>
            <p class="description">{{ $product->description }}</p>
            <p class="ingredients">{{ $product->ingredients }}</p>
          </a>
          <div class="button-group">
            <a href="{{ route('products.edit', $product->id) }}" class="edit-button">Editar</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this product?')">Eliminar</button>
            </form>
          </div>
        </div>
      @endforeach
    </div>
    
  </section>
</main>
<!-- ======= Fin de la Sección Main Listar Producto ======= -->

@include('layout.footer')
