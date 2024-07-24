<x-layout>
  <x-slot:title>Orders</x-slot:title>
  <div class="container">
    @if (session('success'))
    <div class="alert alert-success text-center fs-6" role="alert">
      {{ session('success') }}
    </div>
    @endif
    <div class="d-grid gap-2 d-md-flex justify-content-md-between mb-2">
      <a class="btn btn-sm btn-success" href="{{ route('orders.create') }}">+ Buat Baru</a>
      <form class="d-flex gap-2 align-items-center" role="search" method="get">
        <input type="date" class="form-control form-control-sm border border-dark focus-ring focus-ring-dark" type="start_date" aria-label="Search" name="start_date" value="{{ request()->start_date ?? date('Y-m-d') }}">
        -
        <input type="date" class="form-control form-control-sm border border-dark focus-ring focus-ring-dark" type="start_date" aria-label="Search" name="end_date" value="{{ request()->end_date ?? date('Y-m-d') }}">
        <x-search-input name="search" value="{{ request()->search }}" placeholder="Search User"></x-search-input>
      </form>
    </div>
    <div class="card overflow-hidden mb-2">
      <table class="table m-0 text-center text-capitalize">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Customer</th>
            <th scope="col">Payment</th>
            <th scope="col">Total</th>
            <th scope="col">User</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
          @forelse ($orders as $order)
          <tr>
            <td>Order #{{ $order->id }}</td>
              <td>{{ $order->customer }}</td>
              <td>Rp.{{ number_format($order->payment) }}</td>
              <td>Rp.{{ number_format($order->total) }}</td>
              <td>{{ $order->user->name }}</td>
              <td>{{ $order->formatted_created_at }}</td>
              <td>
                <a href="{{ route('orders.show', ['order' => $order->id]) }}" class="btn btn-sm btn-secondary px-5">Lihat</a>
              </td>
          </tr>
          @empty
          <tr>
            <td colspan="7">Data Order Belum Ada</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
      {{ $orders->links() }}      
  </div>
</x-layout>
