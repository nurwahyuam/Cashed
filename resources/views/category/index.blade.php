<x-layout>
  <x-slot:title>Categories</x-slot:title>
  <div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a class="btn btn-sm btn-success mb-2" href="/categories/create">+ Tambah</a>
    </div>
    <div class="card overflow-hidden">
      <table class="table m-0">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Category</th>
            <th scope="col">Aktif</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @foreach ($categories as $index => $category)
          <tr>
            <th scope="row">{{ $index + 1 }}</th>
            <td>{{ $category->name }}</td>
            <td>Aktif</td>
            <td class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a class="btn btn-sm btn-primary px-5" href="{{ route('categories.edit', ['category' => $category->id]) }}">Edit</a>
              <a class="btn btn-sm btn-danger px-5">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-layout>
