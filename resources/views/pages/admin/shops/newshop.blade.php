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
              <h2 class="m-0 font-weight-bold text-primary mb-2">{{isset($shop)?'Edit Shop':'Add Shop'}}</h2>
            </div>
          </div>
          <div class="card-body">
            <form id='form' class="user"
              action="{{ isset($shop)?route('shops.update',$shop->id):route('shops.store') }}" method="POST">
              @csrf
              @if (isset($shop))
              @method('PUT')
              @endif
              <div class="form-group row justify-content-center">
                <div class="col-sm-6 mb-3 ">
                  <input type="text" class="form-control form-control-user" id="shop_name" name='shop_name'
                    value="{{ isset($shop)?$shop->Shop_Name:'' }}" placeholder="Shop Name">
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-sm-6 mb-3 ">
                  <input type="text" class="form-control form-control-user" id="owner_name" name='owner_name'
                    value="{{ isset($shop)?$shop->Shopkeeper_Name:'' }}" placeholder="ShopKeeper Name">
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-sm-6 mb-3 ">
                  <input type="text" class="form-control form-control-user" id="street" name='street'
                    value="{{ isset($shop)?$shop->street:'' }}" placeholder="Street">
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-sm-6 mb-3 ">
                  <input type="text" class="form-control form-control-user" id="city" name="city" placeholder="City"
                    value="{{ isset($shop)?$shop->City:'' }}">
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-sm-6 mb-3 ">
                  @include('pages.admin.shops.countries', isset($shop)?['default'=>$shop->Country]:['default' => Auth::user()->country])
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <div class="col-sm-6 mb-3 ">
                  <input type="text" class="form-control form-control-user" id="number" name="number"
                    value="{{ isset($shop)?$shop->Telephone_No:'' }}" placeholder="Phone No">
                </div>
              </div>
              <div class="form-group row justify-content-center">
                <button class="btn btn-primary btn-user btn-block">{{ isset($shop)?'EDIT':'ADD' }}</button>
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
