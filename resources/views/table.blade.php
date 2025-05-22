@extends('layouts/template')

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">Points</h3>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Geom</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($points as $p)
                            <tr>
                                <th scope="row">{{ $p->id }}</th>
                                <td>{{ $p->geom_point }}</td>
                                <td>{{ $p->name }}</td>
                                <td>{{ $p->description }}</td>
                                <td>
                                    <img src="{{ asset('storage/images/' . $p->image) }}"
                                        alt="Photo of {{ $p->name }}. {{ $p->description }}" style="max-width: 100px;">
                                </td>
                                <td>{{ $p->created_at }}</td>
                                <td>{{ $p->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <h3 class="text-center">Polylines</h3>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Geom</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($polylines as $pl)
                            <tr>
                                <th scope="row">{{ $pl->id }}</th>
                                <td>{{ $pl->geom_line }}</td>
                                <td>{{ $pl->name }}</td>
                                <td>{{ $pl->description }}</td>
                                <td>
                                    <img src="{{ asset('storage/images/' . $pl->image) }}"
                                        alt="Photo of {{ $pl->name }}. {{ $pl->description }}" style="max-width: 100px;">
                                </td>
                                <td>{{ $pl->created_at }}</td>
                                <td>{{ $pl->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <h3 class="text-center">Polygons</h3>
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Geom</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($polygons as $pg)
                            <tr>
                                <th scope="row">{{ $pg->id }}</th>
                                <td>{{ $pg->geom_polygon }}</td>
                                <td>{{ $pg->name }}</td>
                                <td>{{ $pg->description }}</td>
                                <td>
                                    <img src="{{ asset('storage/images/' . $pg->image) }}"
                                        alt="Photo of {{ $pg->name }}. {{ $pg->description }}" style="max-width: 100px;">
                                </td>
                                <td>{{ $pg->created_at }}</td>
                                <td>{{ $pg->updated_at }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

