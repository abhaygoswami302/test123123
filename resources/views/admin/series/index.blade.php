@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">All Subseries</h3>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Series Name </th>
                                <th>Subseries Name</th>
                                <th>Collection Name</th>
                                <th>Category Name</th>
                                <th>Casting Name</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($series as $s1)
                            <tr>
                                <td>
                                    <a href="{{ route('admin_series.show', $s1->id) }}">
                                        <b>{{ $s1->category_name }} : {{ $s1->name }}</b>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin_series.show', $s1->id) }}">{{ $s1->name }}</a>
                                </td>
                                <td>
                                    <a href="{{ route('admin_collections.index') }}">
                                        {{ $s1->collection_name }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('admin_categories.show', $s1->category_id) }}">
                                        {{ $s1->category_name }}
                                    </a>
                                </td>
                                <td>{{ $s1->casting }}</td>
                                <td>{{ $s1->created_at->diffForHumans() }}</td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>      
    </div>
</div>
@endsection