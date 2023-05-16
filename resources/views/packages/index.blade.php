@extends('layouts.master')
@section('title')
    Company
@endsection
@section('content')
    <div class="mr-breadcrumb">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="heading">Products</h4>
                <ul class="links">
                    <li>
                        <a href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin">Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">Products </a>
                    </li>
                    <li>
                        <a
                                href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products">All
                            Products</a>
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

                    <div class="table-responsiv">
                        <div id="geniustable_wrapper"
                             class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row btn-area">
                                <div class="col-sm-4">
                                    <div class="dataTables_length" id="geniustable_length"><label>Show
                                            <select name="geniustable_length"
                                                    aria-controls="geniustable"
                                                    class="custom-select custom-select-sm form-control form-control-sm">
                                                <option value="10">10</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="100">100</option>
                                            </select> entries</label></div>
                                </div>
                                <div class="col-sm-4">
                                    <div id="geniustable_filter" class="dataTables_filter">
                                        <label>Search:<input type="search" class="form-control form-control-sm"
                                                             placeholder=""
                                                             aria-controls="geniustable">
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4 table-contents">
                                    <a class="add-btn"  href="{{ url('efris/package/create') }}">
                                        <i class="fas fa-plus"></i><span class="remove-mobile">Add New Package</span>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="geniustable"
                                           class="table table-hover dt-responsive dataTable no-footer dtr-inline collapsed"
                                           cellspacing="0" width="100%" role="grid"
                                           aria-describedby="geniustable_info" style="width: 100%;">
                                        <thead>
                                        <tr>
                                            <th style="width: 20px;">#</th>
                                            <th style="width: 60px;">Package Name</th>
                                            <th style="width: 60px;">Type</th>
                                            <th style="width: 63px;">Price</th>
                                            <th style="width: 63px;">Renewal Price</th>
                                            <th style="width: 60px;">No of Users</th>
                                            <th style="width: 60px;">No of Branches</th>
                                            <th style="width: 63px;">Created By</th>
                                            <th style="width: 63px;">Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($packages as $index => $key)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td>{{ $key['name'] }}</td>
                                                <td>{{ $key['packageTypeName'] }}</td>
                                                <td>{{ $key['price'] }}</td>
                                                <td>{{ $key['renewalPrice'] }}</td>
                                                <td>{{ $key['numberOfUsers'] }}</td>
                                                <td>{{ $key['numberOfBranches'] }}</td>
                                                <td>{{ $key['createdByName'] }}</td>
                                                <td>
                                                    <a class="add-btn"
                                                       href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products/types"><i
                                                                class="fas fa-eye"></i> <span
                                                                class="remove-mobile"><span></span></span></a>

                                                    <a class="add-btn"
                                                       href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products/types"><i
                                                                class="fas fa-pencil-alt"></i> <span
                                                                class="remove-mobile"><span></span></span></a>

                                                    <a class="add-btn"
                                                       href="https://product.geniusocean.com/kingcommerce/kingcommerce/admin/products/types"><i
                                                                class="fas fa-trash"></i> <span
                                                                class="remove-mobile"><span></span></span></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Area End -->
        <div class="modal fade" id="setgallery" tabindex="-1" role="dialog" aria-labelledby="setgallery"
             aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Package</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="{{ url('efris/packages-type/store') }}" method="POST">
                        @csrf
                        <div class="modal-body">
                            <div class="top-area">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label for="mobile_number">Package Name<span
                                                        style="color: red;">*</span></label>
                                            <input type="text" class="input-field" placeholder="Package Name"
                                                   name="package"
                                                   required="">
                                        </div>
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#myModal').modal('show');
        })
    </script>
@endsection