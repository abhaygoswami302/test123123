@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 text-center p-4">
            <h3 class="m-0 font-weight-bold text-primary">All Themes</h3>
        </div>
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="table-responsive">
                    <table class="table card-body table-hover table-striped table-bordered">
                        <thead>
                            <tr class="text-primary">
                                <th>Name </th>
                                <th>Description</th>
                                <th>Created At</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($themes as $theme)
                            <tr>
                                <td>
                                    <a href="{{ route('admin_themes.show', $theme->id) }}">{{ $theme->name }}</a>
                                </td>
                                <td>{{ $theme->description }}</td>
                                <td>{{ $theme->created_at->diffForHumans() }}</td>
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