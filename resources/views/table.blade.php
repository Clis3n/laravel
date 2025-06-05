@extends('layouts/template')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.bootstrap5.min.css">
    <style>
        body {
            background-color: #f0f2f5;
        }
        .table th {
            font-weight: 600;
            color: #333;
            background-color: #fafafa;
            border-bottom: 1px solid #ddd;
        }
        .card {
            border: none;
            border-radius: 0.5rem;
        }
        .card-header {
            border-bottom: none;
            padding: 1rem;
            font-size: 1.25rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .card-header h2 {
            margin-bottom: 0;
            font-size: 1.25rem;
            color: inherit;
        }
        .card-header.bg-primary {
            background-color: #bd4f7e !important;
        }
        .card-header.bg-success {
            background-color: #38a169 !important;
        }
        .card-header.bg-info {
            background-color: #4f90be !important;
        }
        .table-responsive {
            padding: 0.75rem;
        }
        .table {
            --bs-table-striped-bg: #f8f9fa;
            border-collapse: collapse;
            border-radius: 0.25rem;
        }
        .table td, .table th {
            padding: 0.5rem 0.75rem;
            vertical-align: middle;
            border-top: 1px solid #e9ecef;
        }
        .table tbody tr:first-child td {
            border-top: none;
        }
        .img-thumbnail-table {
            max-width: 70px;
            max-height: 40px;
            object-fit: cover;
            border-radius: 0.2rem;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .text-muted {
            color: #6c757d !important;
        }
        .table-hover tbody tr:hover {
            background-color: #e2e6ea;
            cursor: pointer;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button.current,
        .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
            background-color: #0069d9;
            border-color: #0069d9;
            color: #fff !important;
        }
        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color: #e9ecef;
            border-color: #dee2e6;
        }
        .dataTables_wrapper .dataTables_filter input,
        .dataTables_wrapper .dataTables_length select {
            border: 1px solid #ced4da;
            border-radius: 0.2rem;
            padding: 0.3rem 0.6rem;
        }
    </style>
@endsection

@section('content')
    <div class="container py-4">
        <h1 class="text-center mb-4 fw-bold text-dark">Data Features Overview</h1>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-primary text-white">
                <h2 class="h5 mb-0">Points Data</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle" id="pointstable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($points as $index => $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ Str::limit($p->description, 100) }}</td>
                                    <td>
                                        @if ($p->image)
                                            <img src="{{ asset('storage/images/'.$p->image) }}" alt="{{ $p->name }}" class="img-thumbnail-table" title="{{ $p->image }}">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $p->created_at->format('d M Y, H:i') }}</td>
                                    <td>{{ $p->updated_at->format('d M Y, H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-3">No point data available. Please add some points.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-success text-white">
                <h2 class="h5 mb-0">Polylines Data</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle" id="polylinestable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($polylines as $index => $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ Str::limit($p->description, 100) }}</td>
                                    <td>
                                        @if ($p->image)
                                            <img src="{{ asset('storage/images/'.$p->image) }}" alt="{{ $p->name }}" class="img-thumbnail-table" title="{{ $p->image }}">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $p->created_at->format('d M Y, H:i') }}</td>
                                    <td>{{ $p->updated_at->format('d M Y, H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-3">No polyline data available. Please add some polylines.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow-sm mb-4">
            <div class="card-header bg-info text-white">
                <h2 class="h5 mb-0">Polygons Data</h2>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover align-middle" id="polygonstable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($polygons as $index => $p)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $p->name }}</td>
                                    <td>{{ Str::limit($p->description, 100) }}</td>
                                    <td>
                                        @if ($p->image)
                                            <img src="{{ asset('storage/images/'.$p->image) }}" alt="{{ $p->name }}" class="img-thumbnail-table" title="{{ $p->image }}">
                                        @else
                                            <span class="text-muted">No Image</span>
                                        @endif
                                    </td>
                                    <td>{{ $p->created_at->format('d M Y, H:i') }}</td>
                                    <td>{{ $p->updated_at->format('d M Y, H:i') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" class="text-center text-muted py-3">No polygon data available. Please add some polygons.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.3.1/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#pointstable').DataTable();
        $('#polylinestable').DataTable();
        $('#polygonstable').DataTable();
    });
</script>

@endsection

