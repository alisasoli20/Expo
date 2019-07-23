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
                        <h2 class="m-0 font-weight-bold text-primary mb-2">Place Orders</h2>
                    </div>
                </div>
                <div class="card-body">
                    <form id='form' class="user was-validated"
                        action="{{ route('orders.store') }}" method="POST">
                        @csrf
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-4 mb-3 ">
                                <input type="text" class="form-control" id="shop_id" name='shop_id' value=""
                                    placeholder="Shop id" required>
                            </div>
                            <div class="valid-feedback">Valid.</div>
                            <div class="invalid-feedback">Please fill out this field.</div>
                            <div class="col-sm-2 mb-3">
                                <button id="searchbtn" class="btn btn-primary" type="button">Search</button>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-3 mb-3 ">
                                <input type="text" class="form-control" id="shop_name" name='shop_name' value=''
                                    placeholder="Shop Name" disabled>
                            </div>
                            <div class="col-sm-3 mb-3 ">
                                <input type="text" class="form-control" id="owner_name" name='owner_name' value=''
                                    placeholder="ShopKeeper Name" disabled>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-2 mb-3 ">
                                <input type="text" class="form-control" id="street" name='street' value=""
                                    placeholder="Street" disabled>
                            </div>
                            <div class="col-sm-2 mb-3 ">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City"
                                    value="" disabled>
                            </div>
                            <div class="col-sm-2 mb-3 ">
                                @include('pages.admin.shops.countries',['default' => Auth::user()->country])
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-6 mb-3 ">
                                <input type="text" class="form-control" id="number" name="number" value=""
                                    placeholder="Phone No" disabled>
                            </div>
                        </div>
                        <div id='productsearch'>
                            <div class="form-group row justify-content-center">
                                <div class="col-sm-4 mb-3 ">
                                    <input type="text" class="form-control" id="product_id" name='product_id' value=""
                                        placeholder="Product Id" required>
                                </div>
                                <div class="col-sm-2 mb-3">
                                    <button id="searchproduct" class="btn btn-primary" type="button">Search</button>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-sm-3 mb-3 ">
                                    <input type="text" class="form-control" id="product_name" name='product_name'
                                        value="" placeholder="Product Name" disabled>
                                </div>
                                <div class="col-sm-3 mb-3 ">
                                    <input type="text" class="form-control" id="selling_price" name="selling_price"
                                        placeholder="Selling Price" value="" disabled>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">
                                <div class="col-auto">
                                    <label for="cartons" class="font-weight-bold my-2">Available In Stock:</label>
                                </div>
                            </div>
                            <div class="form-group row justify-content-center">

                                <div class="col-auto mb-3 ">
                                    <input type="text" class="form-control" id="s_cartons" name="s_cartons"
                                        placeholder="Carton" value="" disabled>
                                </div>
                                <span class="my-1">
                                    <p>X</p>
                                </span>
                                <div class="col-auto mb-3 ">
                                    <input type="text" class="form-control" id="s_boxes" name="s_boxes"
                                        placeholder="Boxes" value="" disabled>
                                </div>
                                <span class="my-1">X</span>
                                <div class="col-auto mb-3 ">
                                    <input type="text" class="form-control" id="s_pieces" name="s_pieces"
                                        placeholder="Pieces" value="" disabled>
                                </div>
                                <div class="col-sm-1 mb-3" hidden>
                                    <input type="text" class="form-control" id="p_cartons" name="p_pieces"
                                        placeholder="Cartons" value="" disabled>
                                </div>
                                <div class="col-sm-1 mb-3" hidden>
                                    <input type="text" class="form-control" id="p_boxes" name="p_boxes"
                                        placeholder="Boxes" value="" disabled>
                                </div>
                                <div class="col-sm-1 mb-3" hidden>
                                    <input type="text" class="form-control" id="p_pieces" name="p_pieces"
                                        placeholder="Pieces" value="" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-6 mb-3 ">
                                <label for="van_id" class="font-weight-bold">Select Van:</label>
                                <select name="van_id" id="van_id" class="form-control">
                                    <option value="1">Suzuki</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <button class="btn btn-primary">Place Order</button>
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

@section('script')
<script>
    $(document).ready(function(){
        //$('#productsearch').hide();
        $(function(){
        $('#searchbtn').click(function() {
            var query = $('#shop_id').val();
            console.log(query);
            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: "http://127.0.0.1:8000/searchshop",
                data : { query:query},
                success:function(data){
                    console.log(data);
                    $('#shop_name').val(data.name);
                    $('#owner_name').val(data.shopkeeper_name);
                    $('#street').val(data.street);
                    $('#city').val(data.city);
                    $('#country').val(data.country);
                    $('#number').val(data.number);
                    $('#productsearch').show();
                },
                error: function() {
                    console.log(data);
                }
            });
        });
        $('#searchproduct').click(function() {
            var query = $('#product_id').val();
            console.log(query);
            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: "http://127.0.0.1:8000/searchproduct",
                data : { query:query},
                success:function(data){
                    console.log(data);
                    $('#product_name').val(data.name);
                    $('#selling_price').val(data.selling_price);
                    $('#s_cartons').val(data.s_cartons);
                    $('#s_boxes').val(data.s_boxes);
                    $('#s_pieces').val(data.s_pieces);
                    $('#p_cartons').val(data.p_cartons);
                    $('#p_boxes').val(data.p_boxes);
                    $('#p_pieces').val(data.p_pieces);
                },
                error: function() {
                }
            });
        });
    });
    });
</script>
@endsection