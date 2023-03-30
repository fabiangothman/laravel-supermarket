@include('layout.header')

<section id="products_create">
  <h1>Create Product</h1>
  <form action="{{ route('products.store') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" name="name" id="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autofocus>
      @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
      @endif
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea name="description" id="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="5" required>{{ old('description') }}</textarea>
      @if ($errors->has('description'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('description') }}</strong>
        </span>
      @endif
    </div>
    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" name="price" id="price" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" value="{{ old('price') }}" min="0" required>
      @if ($errors->has('price'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('price') }}</strong>
        </span>
      @endif
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
    <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
  </form>
</section>

@include('layout.footer')
