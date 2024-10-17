@extends('templates.app')

@section('content-dinamis')
<div class="container mx-auto my-10 p-8 bg-white shadow-lg rounded-lg">
    @if (Session::get('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6 fade-in" role="alert">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif
    <div class="flex justify-between items-center mb-6">
        <div class="datamember">
        <h2 class="text-3xl font-bold text-gray-800">Data Member</h2>
    </div>
        <a href="{{ route('create_user') }}" class="btn btn-primary text-white font-bold py-2 px-4 rounded">
            Tambah User
        </a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">No</th>
                    <th class="py-3 px-6 text-left">Nama Member</th>
                    <th class="py-3 px-6 text-left">Gmail</th>
                    <th class="py-3 px-6 text-center">Action</th>
                    {{-- <th class="py-3 px-6 text-left">Password</th> --}}
                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @if ($users->count() > 0)
                    @foreach ($users as $index => $user)
                        <tr class="product-row border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                {{ ($users->currentPage() - 1) * $users->perPage() + ($index + 1) }}
                            </td>
                            <td class="py-3 px-6 text-left">{{ $user['name'] }}</td>
                            <td class="py-3 px-6 text-left">{{ $user['email'] }}</td>
                            {{-- <td class="py-3 px-6 text-left">{{ $user['password'] }}</td> --}}
                            <td class="py-3 px-6 text-center">
                                <div class="flex item-center justify-center">
                                    <a href="{{ route('edit_user', $user['id']) }}" class=" btn btn-info text-white font-bold py-1 px-3 rounded mr-2">Edit</a>
                                    <form action="{{ route('delete_user', $user['id']) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger text-white font-bold py-1 px-3 rounded">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="5" class="py-3 px-6 text-center">Tidak ada produk ditemukan.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
    <div class="mt-6 flex justify-end">
        {{ $users->links() }}
    </div>
</div>
@endsection

@push('style')
    <style>
        .datamember {
            font-family: "Londrina Sketch", sans-serif;
  font-weight: 400;
  font-style: normal;
        }

         <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in {
            animation: fadeIn 0.5s ease-out forwards;
        }
        .product-row:nth-child(even) {
            background-color: #f8f9fa;
        }
        .product-row:hover {
            background-color: #e9ecef;
            transition: background-color 0.3s ease;
        }
        .btn-primary {
            background-color: #176a1e;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #149d20;
        }
        .btn-info {
            background-color: #17a2b8;
            transition: background-color 0.3s ease;
        }
        .btn-info:hover {
            background-color: #117a8b;
        }
        .btn-danger {
            background-color: #dc3545;
            transition: background-color 0.3s ease;
        }
        .btn-danger:hover {
            background-color: #bd2130;
        }
        .low-stock {
            background-color: #ffcccb;
        }
    </style>
    </style>
@endpush

@push('script')
<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('.product-row').forEach((row, index) => {
            row.style.animationDelay = `${index * 0.1}s`;
            row.classList.add('fade-in');
        });
    });
</script>
@endpush

