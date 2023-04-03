@include('layout.header')

<section id="products_index">
  <h1>Products index</h1>
  <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Create Product</a>
  <table class="table" border="1">
    <thead>
      <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr>
          <td>
            <img src="{{ asset('storage/images/'.$product->image) }}" alt="{{ $product->name }}" width="200" />
          </td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->description }}</td>
          <td>{{ number_format($product->price) }}</td>
          <td>
            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View</a>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</section>

@include('layout.footer')
