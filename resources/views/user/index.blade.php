<x-layout>
  <x-slot:title>Users</x-slot:title>
  <div class="container">
    <div class="d-grid gap-2 d-md-flex justify-content-md-between mb-2">
      <a class="btn btn-sm btn-success" href="users/create">+ Tambah</a>
      <form class="d-flex" role="search">
        <input class="form-control form-control-sm border border-dark focus-ring focus-ring-dark me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-sm btn-outline-dark" type="submit">Search</button>
      </form>
    </div>
    <div class="card overflow-hidden">
      <table class="table m-0">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody class="table-group-divider"> 
          @foreach ($users as $index => $user)
          <tr>
            <th scope="row">{{ $index + 1 }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="d-grid gap-2 d-md-flex justify-content-md-end">
              <a class="btn btn-sm btn-primary px-5" href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
              <a class="btn btn-sm btn-danger px-5" href="user/">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</x-layout>