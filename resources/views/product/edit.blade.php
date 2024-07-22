<x-layout>
  <x-slot:title>Edit Product</x-slot:title>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="card">
          <form class="row g-3 p-3" action="{{ route('products.update', ['product' => $product->id]) }}" method="post">
            @csrf
            @method('put')

            <div class="col-12">
              <label for="category_id" class="d-flex form-label text-capitalize">Category</label>
              <select name="category_id" id="category_id" class="form-select form-select-sm">
                @forelse ($categories as $category)
                    <option value="{{ $category->id }}" @if ($category->id == $product->id) selected @endif>{{ $category->name }}</option>
                @empty
                    <option>Belum ada Category</option>
                @endforelse
              </select>
            </div>
            <x-text-input label="Nama" type="text" name="name" value="{{ old('name', $product->name) }}"></x-text-input>
            <x-text-input label="Harga" type="number" name="price" value="{{ old('name', $product->price) }}"></x-text-input>
            <div class="col-12">
              <label for="image" class="form-label text-capitalize">Uploud Gambar</label>
              <input type="file" class="form-control form-control-sm" id="image" placeholder="Masukan " name="image" value="" accept="image/jpeg,image/png">
              <div class="form-text" style="font-size:12px;">Note: Kosongkan Jika Tidak Perbarui</div>
            </div>
            <div class="col-12">
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="active" name="active" @checked((!old() && $product->active) || old('active') == 'on')>
                <label class="form-check-label" for="active">Aktif</label>
              </div>
            </div>
            <div class="col-12 d-grid gap-2 d-md-flex justify-content-md-between">
              <a href="{{ route('products.index') }}" class="btn btn-sm btn-danger px-5">Batal</a>
              <button type="submit" class="btn btn-sm btn-primary px-5">Simpan</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-layout>