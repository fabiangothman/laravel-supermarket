@include('layout.header')

<section id="products_edit">
  <h1>Edit Product</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
      <label for="name">Name</label>
      <input
        type="text"
        name="name"
        class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
        value="{{ old('name', $product->name) }}"
        required
        autofocus
      />
      @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
      @endif
    </div>

    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="5" required>{{ old('description', $product->description) }}</textarea>
      @if ($errors->has('description'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('description') }}</strong>
        </span>
      @endif
    </div>

    <div class="form-group">
      <label for="price">Price</label>
      <input
        type="number"
        name="price"
        class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
        value="{{ old('price', $product->price) }}"
        min="0"
        required
      />
      @if ($errors->has('price'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('price') }}</strong>
        </span>
      @endif
    </div>

    <div class="form-group">
      <label for="image">Image</label>
      <input
        type="file"
        name="image"
        class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
        value="{{ old('image', $product->image) }}"
        accept="image/png, image/gif, image/jpeg"
      />
      @if ($errors->has('image'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('image') }}</strong>
        </span>
      @endif
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
</section>

@include('layout.footer')
