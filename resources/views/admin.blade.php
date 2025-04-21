@extends('headers.headers')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold">Dashboard Admin</h2>
        <a href="{{ route('create') }}" class="btn btn-success">
            <span class="material-symbols-outlined align-middle">add</span> Tambah Data
        </a>
    </div>

    <div class="card shadow-sm rounded-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama Pemesan</th>
                            <th>Nomor Telepon</th>
                            <th>Total Berat (KG)</th>
                            <th>Total Harga</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datas as $data)
                        <tr>
                            <td>{{ $data->nama }}</td>
                            <td>+62 {{ $data->noHp }}</td>
                            <td>{{ $data->total_berat }} KG</td>
                            <td>Rp {{ number_format($data->total_harga, 0, ',', '.') }}</td>
                            <td>{{ $data->created_at->format('d-m-Y') }}</td>
                            <td>
                                <span class="badge
                                    @if($data->status == 'selesai') bg-success
                                    @elseif($data->status == 'proses') bg-warning
                                    @else bg-secondary
                                    @endif">
                                    {{ ucfirst($data->status) }}
                                </span>
                            </td>
                            <td class="text-center">
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="{{ route('edit', $data->id) }}" class="btn btn-outline-primary btn-sm">
                                        <span class="material-symbols-outlined align-middle">edit</span>
                                    </a>
                                    <form action="{{ route('delete', $data->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <span class="material-symbols-outlined align-middle">delete</span>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @if ($datas->isEmpty())
                        <tr>
                            <td colspan="7" class="text-center text-muted">Belum ada data laundry yang tersedia.</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
