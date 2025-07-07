@extends('layout.admin')
@section('content')
<div class="app-content">
    <div class="side-app">

        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Eulogies</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Manage Content</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Eulogies</li>
                </ol>
            </div>
            <div class="ms-auto pageheader-btn">
                <a href="{{ route('admin.eulogy.upload') }}" class="btn btn-primary btn-icon text-white me-2">
                    <span><i class="fe fe-plus"></i></span> Add Eulogy
                </a>
            </div>
        </div>
        <!-- PAGE-HEADER END -->



        <!-- ROW-2 OPEN -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Manage Eulogies</h3>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Page #</th>
                                    <th scope="col">Preview</th>
                                    <th scope="col">Image Path</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($eulogies as $eulogy)
                                <tr>
                                    <td>{{ $eulogy->page_number ?? 'N/A' }}</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $eulogy->image_path) }}" alt="Eulogy Preview" style="max-height: 50px;">
                                    </td>
                                    <td>{{ $eulogy->image_path }}</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="{{ route('admin.eulogy.edit', $eulogy->id) }}">
                                            <i class="fa fa-edit"></i> Edit
                                        </a>
                                        <form action="{{ route('admin.eulogy.destroy', $eulogy->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this eulogy?')">
                                                <i class="fa fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW-2 CLOSED -->
    </div>
</div>
@endsection
