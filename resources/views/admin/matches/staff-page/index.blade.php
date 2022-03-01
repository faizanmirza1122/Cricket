@extends('admin.layouts.app')
@section('content')

    <!-- Page content -->
    <div class="page-content">

        <!-- Main content -->
        <div class="content-wrapper">

            <!-- Content area -->
            <div class="page-header page-header-light">
                <div class="page-header-content header-elements-md-inline">
                    <div class="page-title d-flex">
                        <h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Staff Page</span></h4>
                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>
                </div>
                <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
                    <div class="d-flex">
                        <div class="breadcrumb">
                            <a href="/admin/dashboard" class="breadcrumb-item"><i class="icon-team2 mr-2"></i> Dashboard</a>
                            <a href="{{ route('management-team-members.index') }}" class="breadcrumb-item">Staff Page</a>
                            <span class="breadcrumb-item active">Index</span>
                        </div>

                        <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
                    </div>

                </div>
            </div>
            <div class="content">
                <!-- Page header -->
                <!-- /page header -->

                <!-- Basic datatable -->
                <div class="card">
                    <div class="card-body ">
                        <a class="btn btn-primary float-right" href="{{ route('management-team-members.create') }}"> Add
                            New team item</a>
                    </div>

                    <table class="table datatable-basic">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Designation</th>
                                <th>Joining Date</th>
                                <th>Age</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($teams as $key => $team)
                                <tr>

                                    <td>{{ $key + 1 }}</td>
                                    <td><img src="{{ asset('public/storage/' . $team->image) }}" width="100px"></td>
                                    <td>{{ $team->name }}</td>
                                    <td>{{ $team->designation }}</td>
                                    <td>{{ $team->joining_date }}</td>
                                    <td>{{ $team->age }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>
                                                <form action="{{ route('management-team-members.destroy', $team->id) }}"
                                                    method="POST">
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a href="{{ route('management-team-members.edit', $team->id) }}"
                                                            class="dropdown-item"><i class="icon-pencil7"></i> edit</a>
                                                        <a onclick="return confirm('Are you sure?')">
                                                            <button type="submit"
                                                                class="btn bg-transparent dropdown-item"><i
                                                                    class="icon-trash"></i> Delete</button>
                                                        </a>
                                                    </div>
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </div>
                                        </div>
                                    </td>

                                </tr>
                            @empty
                                <h1 class="text-center ">No Data Found </h1>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <!-- /basic datatable -->



            </div>
            <!-- /content area -->

        </div>
        <!-- /main content -->

    </div>
    <!-- /page content -->

@endsection

@push('script')
    <script>
        $(document).on('click', '.delete', function() {
            let id = $(this).attr('data-id');
            $('#id').val(id);
        });
    </script>
@endpush
