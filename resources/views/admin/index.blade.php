@extends('layout.admin')
@section('content')
<div class="app-content">
    <div class="side-app">


        <!-- PAGE-HEADER -->
        <div class="page-header">
            <div>
                <h1 class="page-title">Dashboard</h1>
            </div>
            <div class="ms-auto pageheader-btn">
                <a href="{{ route('admin.tributes.upload') }}" class="btn btn-primary btn-icon text-white me-2">
                    <span>
                        <i class="fe fe-plus"></i>
                    </span> Upload
                </a>

            </div>
        </div>
        <!-- PAGE-HEADER END -->

        <!-- ROW-2 OPEN -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header ">
                        <h3 class="card-title ">Tributes</h3>

                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover card-table table-striped table-vcenter table-outline text-nowrap">
                            <thead>
                                <tr>
                                    <th scope="col">Backend</th>
                                    <th scope="col">Deadline</th>
                                    <th scope="col">Team Members</th>
                                    <th scope="col">Edit Project Details </th>
                                    <th scope="col">list info</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PHP</td>
                                    <td>15/11/2018</td>
                                    <td>15 Members</td>
                                    <td>
                                        <a class="btn btn-sm btn-primary" href="#"><i class="fa fa-edit"></i> Edit</a>
                                        <a class="btn btn-sm btn-danger" href="#"><i class="fa fa-trash"></i> Delete</a>
                                    </td>
                                    <td><a class="btn btn-sm btn-secondary" href="#"><i class="fa fa-info-circle"></i> Details</a> </td>
                                </tr>
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
