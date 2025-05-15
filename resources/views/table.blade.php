@extends('layouts/template')

@section('content')
    <div class="container mt">
        <table class="table table-striped">
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
                @foreach ($points as $point)
                    <tr>
                        <td>{{ $point->id }}</td>
                        <td>{{ $point->name }}</td>
                        <td>{{ $point->description }}</td>
                        <td>
                            <img src="{{ asset(path: 'storage/images/' . $point->image) }}" alt=""
                            width="100" title="{{ $point->image }}">
                        </td>
                        <td>{{ $point->created_at }}</td>
                        <td>{{ $point->updated_at }}</td>
                    </tr>
                @endforeach
                @foreach ($polylines as $polyline)
                    <tr>
                        <td>{{ $polyline->id }}</td>
                        <td>{{ $polyline->name }}</td>
                        <td>{{ $polyline->description }}</td>
                        <td>
                            <img src="{{ asset(path: 'storage/images/' . $polyline->image) }}" alt=""
                            width="100" title="{{ $polyline->image }}">
                        </td>
                        <td>{{ $polyline->created_at }}</td>
                        <td>{{ $polyline->updated_at }}</td>
                    </tr>
                @endforeach
                @foreach ($polygons as $polygon)
                    <tr>
                        <td>{{ $polygon->id }}</td>
                        <td>{{ $polygon->name }}</td>
                        <td>{{ $polygon->description }}</td>
                        <td>
                            <img src="{{ asset(path: 'storage/images/' . $polygon->image) }}" alt=""
                            width="100" title="{{ $polygon->image }}">
                        </td>
                        <td>{{ $polygon->created_at }}</td>
                        <td>{{ $polygon->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
