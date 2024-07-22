<x-layout>
  <x-slot:title>Products</x-slot:title>
  <div class="container">
    @if (session('success'))
    <div class="alert alert-success text-center fs-6" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <div class="d-grid gap-2 d-md-flex justify-content-md-between mb-2">
      <a class="btn btn-sm btn-success" href="{{ route('products.create') }}">+ Tambah</a>
      <form class="d-flex gap-2" role="search" method="get">
        <x-search-input name="search" value="{{ request()->search }}" placeholder="Search Category"></x-search-input>
      </form>
    </div>
    <div class="card overflow-hidden">
      <table class="table m-0 text-center text-capitalize">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">Kategori</th>
            <th scope="col">Harga</th>
            <th scope="col">Aktif</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @forelse ($products as $index => $product)
          <tr>
            <td scope="row">{{ $index + 1 }}</td>
            <td>
              <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}" class="w-thumbnail img-thumbnail">
            </td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->category->name }}</td>
            <td> @currency($product->price) </td>
            <td>
              @if ($product->active)
                <span class="badge text-bg-success">Active</span>
              @else
                <span class="badge text-bg-danger">No Active</span>
              @endif
            </td>
            <td class="">
              <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a class="btn btn-sm btn-primary px-5" href="{{ route('products.edit', ['product' => $product->id]) }}" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Edit</a>
                <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post">
                  @csrf
                  @method('delete')
                  <button class="btn btn-sm btn-danger px-5" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Hapus</button>
                </form>
              </div>
            </td>
          </tr>
          @empty
          <tr  class="text-center">
            <td colspan="4">Tidak Ada Data Product</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</x-layout>