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

        <!-- Begin Page Content -->
        <div class="container-fluid">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Products</h1>
          <p class="mb-4">All the details about the Products</p>
          <div class="container mb-2">
            <div class="row justify-content-end">
            <a href="{{ route('products.create') }}" class="btn btn-md btn-primary">Add Product</a>
            </div>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Products Details</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width=100% cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Supplier</th>
                      <th>Invoice Rate</th>
                      <th>Selling Rate</th>
                      <th>Carton</th>
                      <th>Boxes</th>
                      <th>pieces</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Supplier</th>
                      <th>Invoice Rate</th>
                      <th>Selling Rate</th>
                      <th>Carton</th>
                      <th>Boxes</th>
                      <th>pieces</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($products as $product)
                    <tr>
                      <td>{{ $product->id }}</td>
                      <td>{{ $product->product_name }}</td>
                      <td>{{ $product->supplier }}</td>
                      <td>{{ $product->company_price }}</td>
                      <td>{{ $product->selling_price }}</td>
                      <td>{{ $product->cartons }}</td>
                      <td>{{ $product->boxes }}</td>
                      <td>{{ $product->pieces }}</td>
                      <td><a href="{{ route('products.edit',$product->id) }}" class="btn btn-success btn-sm">Edit</a></td>
                      <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button class="btn btn-sm btn-danger">Delete</button>
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
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      @include('partials.footer')
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

  @section('script')
  <!-- Page level plugins -->
  <script src="{{ asset('asset/vendor/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('asset/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

  <!-- Page level custom scripts -->
  <script src="{{ asset('asset/js/demo/datatables-demo.js') }}"></script>
  @endsection
  
@endsection