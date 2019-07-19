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
                        <h2 class="m-0 font-weight-bold text-primary mb-2">
                            {{isset($product)?'Edit Product':'Add Product'}}</h2>
                    </div>
                </div>
                <div class="card-body">
                    <form id='form' class="user"
                        action="{{ isset($product)?route('products.update',$product->id):route('products.store') }}"
                        method="POST">
                        @csrf
                        @if (isset($product))
                        @method('PUT')
                        @endif
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-6 mb-3 ">
                                <input type="text" class="form-control form-control-user" id="product_name"
                                    name='product_name' value="{{ isset($product)?$product->product_name:'' }}"
                                    placeholder="Product Name">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-6 mb-3 ">
                                <input type="text" class="form-control form-control-user" id="supplier" name='supplier'
                                    value="{{ isset($product)?$product->supplier:'' }}" placeholder="Supplier">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-6 mb-3 ">
                                <input type="text" class="form-control form-control-user" id="company_price"
                                    name='company_price' value="{{ isset($product)?$product->company_price:'' }}"
                                    placeholder="Company Price">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-6 mb-3 ">
                                <input type="text" class="form-control form-control-user" id="selling_price"
                                    name="selling_price" placeholder="Selling Price"
                                    value="{{ isset($product)?$product->selling_price:'' }}">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-2 mb-3 ">
                                <input type="text" class="form-control form-control-user" id="cartons" name="cartons"
                                    placeholder="Carton" value="{{ isset($product)?$product->cartons:'' }}">
                            </div>
                            <span class="my-3">X</span>
                            <div class="col-sm-2 mb-3 ">
                                <input type="text" class="form-control form-control-user" id="boxes" name="boxes"
                                    placeholder="Boxes" value="{{ isset($product)?$product->boxes:'' }}">
                            </div>
                            <span class="my-3">X</span>
                            <div class="col-sm-2 mb-3 ">
                                <input type="text" class="form-control form-control-user" id="pieces" name="pieces"
                                    placeholder="Pieces" value="{{ isset($product)?$product->pieces:'' }}">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <button
                                class="btn btn-primary btn-user btn-block">{{ isset($product)?'EDIT':'ADD' }}</button>
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