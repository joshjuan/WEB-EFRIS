@extends('layouts.master')
@section('title')
    Create Business
@endsection
@section('content')
    <div class="mr-breadcrumb">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="heading">Packages</h4>
                <ul class="links">
                    <li>
                        <a href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin">Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">Packages </a>
                    </li>
                    <li>
                        <a href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products">Add
                            Package</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="product-area">
        <div class="row">
            <div class="col-lg-12">
                <div class="mr-table allproduct">

                    <div class="alert alert-success validation" style="display: none;">
                        <button type="button" class="close alert-close"><span>×</span></button>
                        <p class="text-left"></p>
                    </div>

                    <h5>Enter Packages Details Bellow</h5>
                    <div>
                        <hr>
                    </div>
                    <div class="table-responsiv">
                        <div id="geniustable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <form action="{{ url('efris/package/store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="mobile_number">Package Name<span
                                                        style="color: red;">*</span></label>
                                            <input type="text" class="input-field" placeholder="Package Name"
                                                   name="packageName"
                                                   required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="mobile_number">Package Type<span
                                                        style="color: red;">*</span></label>
                                            <select id="cat" name="packagesId" required="">
                                                <option value="">Select Package Type</option>
                                                @foreach($packagesTypes as  $key)
                                                    <option value="{{ $key['id'] }}">{{ $key['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="mobile_number">Price<span
                                                        style="color: red;">*</span></label>
                                            <input type="text" class="input-field" placeholder="Price"
                                                   name="price"
                                                   required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="mobile_number">Renewal Price<span
                                                        style="color: red;">*</span></label>
                                            <input type="text" class="input-field" placeholder="Renewal Price"
                                                   name="renewalPrice"
                                                   required="">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="mobile_number">Number of Users<span
                                                        style="color: red;">*</span></label>
                                            <input type="text" class="input-field" placeholder="Number of Users"
                                                   name="noUsers" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <label for="mobile_number">Number of Branches <span
                                                        style="color: red;">*</span></label>
                                            <input type="text" class="input-field" placeholder="Number of Branches "
                                                   name="noBranches" required="">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-12 text-right">
                                    <div>
                                        <button
                                                style="background: #1f224f; width: 160px; height: 40px; color: #fff; font-size: 14px; border: 0px; margin-top: 15px;"
                                                type="submit">Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Main Content Area End -->
    </div>
@endsection
