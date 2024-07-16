<x-layout>
  <x-slot:title>Categories</x-slot:title>
  <div class="container">
    @if (session('success'))
    <div class="alert alert-success text-center fs-6" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <div class="d-grid gap-2 d-md-flex justify-content-md-between mb-2">
      <a class="btn btn-sm btn-success" href="/categories/create">+ Tambah</a>
      <form class="d-flex" role="search">
        <input class="form-control form-control-sm border border-dark focus-ring focus-ring-dark me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-sm btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
    <div class="card overflow-hidden">
      <table class="table m-0 text-center text-capitalize">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Aktif</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @forelse ($categories as $index => $category)
          <tr>
            <td scope="row">{{ $index + 1 }}</td>
            <td>{{ $category->name }}</td>
            <td>Aktif</td>
            <td class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a class="btn btn-sm btn-primary px-5" href="{{ route('categories.edit', ['category' => $category->id]) }}" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Edit</a>
              <form action="{{ route('categories.destroy', ['category' => $category->id]) }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-sm btn-danger px-5" style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">Hapus</button>
              </form>
            </td>
          </tr>
          @empty
          <tr  class="text-center">
            <td colspan="4">Belum Ada Data Category</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
</x-layout>
