<x-layout>
  <x-slot:title>Tambah Product</x-slot:title>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="card">
            <form class="row g-3 p-3" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="col-12">
                <label for="category_id" class="d-flex form-label text-capitalize">Category</label>
                <select name="category_id" id="category_id" class="form-select form-select-sm">
                  @forelse ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @empty
                      <option>Belum ada Category</option>
                  @endforelse
                </select>
              </div>
              <x-text-input label="Nama" type="text" name="name" placeholder="Masukan Nama Product" value="{{ old('name') }}"></x-text-input>
              <x-text-input label="Harga" type="number" name="price" placeholder="Masukan Harga Product" value="{{ old('price') }}"></x-text-input>
              <div class="col-12">
                <label for="image" class="form-label text-capitalize">Uploud Gambar</label>
                <input type="file" class="form-control form-control-sm @error('image') is-invalid @enderror" id="image" placeholder="Masukan " name="image" value="" accept="image/jpeg,image/png">
                @error('image')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <x-check-input name="active"></x-check-input>
              <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-between">
                <a href="{{ route('products.index') }}" class="btn btn-sm btn-danger px-5">Batal</a>
                <button type="submit" class="btn btn-sm btn-success px-5">Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>