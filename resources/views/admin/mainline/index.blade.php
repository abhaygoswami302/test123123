@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">All Mainline Series</h3>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Name</th>
                                <th>Subseries Name</th>
                                <th>Category Name</th>
                                <th>Casting Name</th>
                                <th>Created At</th> 
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($mainline_series as $mainline)
                            <tr>      
                                <td>
                                    {{ $mainline->name }}
                                </td>
                                <td>
                                    <a href="{{ route('admin_series.show', $mainline->subseries_id) }}">
                                        {{ $mainline->subseries_name }}
                                    </a>
                                </td>
                                <td>
                                    {{ $mainline->category_name }}
                                </td>
                                <td>
                                    {{ $mainline->casting_name }}
                                </td>
                                <td>{{ $mainline->created_at->diffForHumans() }}</td>
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