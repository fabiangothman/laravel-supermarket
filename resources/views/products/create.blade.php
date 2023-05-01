@include('layout.header')

<section id="products_modify">
  <br />
  <h1>Crear producto</h1>
  <div class="main-center">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label for="name">Nombre</label>
        <input
          type="text"
          name="name"
          class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
          value="{{ old('name') }}"
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
        <label for="description">Descripción</label>
        <textarea name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" rows="5" required>{{ old('description') }}</textarea>
        @if ($errors->has('description'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('description') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group">
        <label for="ingredients">Ingredientes</label>
        <input
          type="text"
          name="ingredients"
          class="form-control{{ $errors->has('ingredients') ? ' is-invalid' : '' }}"
          value="{{ old('ingredients') }}"
          required
          autofocus
        />
        @if ($errors->has('ingredients'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('ingredients') }}</strong>
          </span>
        @endif
      </div>

      <div class="form-group">
        <label for="price">Price</label>
        <input
          type="number"
          name="price"
          class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
          value="{{ old('price') }}"
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
          value="{{ old('image') }}"
          accept="image/png, image/gif, image/jpeg"
          required
        />
        @if ($errors->has('image'))
          <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('image') }}</strong>
          </span>
        @endif
      </div>

      <button type="submit" class="btn btn-primary">Create</button>
      <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
</section>

@include('layout.footer')
