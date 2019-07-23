@extends('layouts.layout')
@section('css')
<!-- Custom styles for this page -->
<link href="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('section')
<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    @include('partials.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            @include('partials.top-bar')
            <!-- End of Topbar -->

            <div class="card card-default">
                @include('partials.errors')
                <div class="card-header">
                    <div class="text-center">
                        <h2 class="m-0 font-weight-bold text-primary mb-2">{{isset($van)?'Edit Van':'Add Van'}}</h2>
                    </div>
                </div>
                <div class="card-body">
                    <form id='form' class="user"
                        action="{{ isset($van)?route('vans.update',$van->id):route('vans.store') }}" method="POST">
                        @csrf
                        @if (isset($van))
                        @method('PUT')
                        @endif
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-6 mb-3 ">
                                <label for="van_name" class="font-weight-bold">Van Name:</label>
                                <input type="text" class="form-control" id="van_name"
                                    name='van_name' value="{{ isset($van)?$van->name:'' }}"
                                    placeholder="Van Name">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <button class="btn btn-primary">{{ isset($van)?'EDIT':'ADD' }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        @include('partials.footer')
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
@include('partials.logout-model')
@endsection