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
                    <h2 class="text-center font-weight-bold">Stock Purchase</h2>
                </div>
                <div class="card-body">
                    <form id='form' class="user" action="{{ route('stocks.store') }}" method="POST">
                        @csrf
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-4 mb-1 ">
                                <input type="text" class="form-control " id="search" value="" name='search'
                                    placeholder="Enter Product ID">

                            </div>
                            <div class="col-sm-2 mb-1 ">
                                <button id='searchbtn' class="btn btn-primary btn-md" type="button"
                                    onclick="search">Search</button>
                            </div>

                        </div>

                        <div class="row justify-content-center">
                            <div class="col-sm-6 justify-content-center mb-2">
                                <div class="alert-danger text-center" id='error'></div>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 ">
                                <label for="" class="font-weight-bold">Packing:</label>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">

                            <div class="col-sm-2 mb-3 ">
                                <input type="text" class="form-control" id="cartons" name="cartons" placeholder="Carton"
                                    disabled>
                            </div>
                            <span class="my-2">X</span>
                            <div class="col-sm-2 mb-3 ">
                                <input type="text" class="form-control" id="boxes" name="boxes" placeholder="Boxes"
                                    disabled>
                            </div>
                            <span class="my-2">X</span>
                            <div class="col-sm-2 mb-3 ">
                                <input type="text" class="form-control" id="pieces" name="pieces" placeholder="Pieces"
                                    disabled>
                            </div>
                            <div class="col-sm-6 mb-3 ">
                                <label for="p_name" class="font-weight-bold">Product Name:</label>
                                <input type="text" class="form-control" id="p_name" name='p_name' value=""
                                    placeholder="Product Name" disabled>
                                <label for="company_price" class="font-weight-bold">Company Price:</label>
                                <input type="text" class="form-control " id="company_price" name='company_price'
                                    value="" placeholder="Product Company Price" disabled>

                                <label for="selling_price" class="font-weight-bold">Selling Price:</label>
                                <input type="text" class="form-control" id="sellig_price" name='selling_price' value=""
                                    placeholder="Product Selling Price" disabled>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-6 ">
                                <label for="s_cartons" class="font-weight-bold">Enter Purchase:</label>
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-sm-2 mb-3 ">
                                <input type="text" class="form-control" id="s_cartons" name='s_cartons' value=""
                                    placeholder="Cartons">
                            </div>
                            <div class="col-sm-2 mb-3 ">
                                <input type="text" class="form-control" id="s_boxes" name='s_boxes' value=""
                                    placeholder="Boxes">
                            </div>
                            <div class="col-sm-2 mb-3 ">
                                <input type="text" class="form-control" id="s_pieces" name='s_pieces' value=""
                                    placeholder="Pieces">
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <button class="btn btn-primary text-white">Purchase</button>
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
    $(function(){
        $('#searchbtn').click(function() {
            var query = $('#search').val();
            console.log(query);
            $.ajax({
                type: 'GET', //THIS NEEDS TO BE GET
                url: "http://127.0.0.1:8000/search",
                data : { query:query},
                success:function(data){
                    console.log(data);
                    $('#error').html('');  
                    $('#p_name').val(data.name);
                    $('#company_price').val(data.c_price);
                    $('#sellig_price').val(data.s_price);
                    $('#cartons').val(data.cartons);
                    $('#boxes').val(data.boxes);
                    $('#pieces').val(data.pieces);
                    $('#s_cartons').val(0);
                    $('#s_boxes').val(0);
                    $('#s_pieces').val(0);
                    if(parseInt(data.boxes)==0){
                        $('#s_boxes').prop('disabled',true);
                        $('#s_boxes').val(0);
                    }
                    else{
                        $('#s_boxes').prop('disabled',false);
                        $('#s_boxes').val(0);
                    }
                },
                error: function() {
                    $('#p_name').val('');
                    $('#company_price').val('');
                    $('#sellig_price').val('');
                    $('#cartons').val('');
                    $('#boxes').val('');
                    $('#pieces').val('');
                    $('#error').html('Product Not Found');        
                }
            });
        });
    });


    $(document).ready(function(){
        var cartons =0;
        var boxes = 0;
        $('#s_pieces').on('input',function(e){
                if(parseInt($('#boxes').val())==0){
                var stock_pieces  = $('#s_pieces').val();
                var product_pieces = $('#pieces').val();
                    cartons = parseInt($('#s_cartons').val());
                var divided = Math.trunc(stock_pieces/product_pieces);
                if(divided>0){
                    stock_pieces= stock_pieces-(product_pieces*divided);
                    $('#s_pieces').val(stock_pieces);
                    cartons= cartons + divided;
                    $('#s_cartons').val(cartons);
                    }
                }
                else{
                    var stock_pieces  = $('#s_pieces').val();
                    var product_pieces = $('#pieces').val();
                    boxes = parseInt($('#s_boxes').val());
                    var divided = Math.trunc(stock_pieces/product_pieces);
                    if(divided>0){
                        stock_pieces= stock_pieces-(product_pieces*divided);
                        $('#s_pieces').val(stock_pieces);
                        boxes= boxes + divided;
                        $('#s_boxes').val(boxes);
                    }
                }
        });
    });
    $(document).ready(function(){
        $('#s_cartons').on('input',function(){
            var num = parseInt($(this).val());
            if(isNaN(num)){
                $(this).val(0);
            }
        });
    });
    $(document).ready(function(){
        var cartons =0;
        $('#s_boxes').on('input',function(){
            var stock_boxes = parseInt($(this).val());
            if(isNaN(stock_boxes)){
                $(this).val(0);
            }
            var product_boxes = $('#boxes').val();
            cartons = parseInt($('#s_cartons').val());
            var divided = Math.trunc(stock_boxes/product_boxes);
            if(divided>0){
                stock_boxes= stock_boxes-(product_boxes*divided);
                $('#s_boxes').val(stock_boxes);
                cartons= cartons + divided;
                $('#s_cartons').val(cartons);
            }

        });
    });
        
</script>

@endsection