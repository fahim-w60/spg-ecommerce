@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Vendor List
@endsection
@section('main')
<div class="page-body">
    <!-- All User Table Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Vendors</h5>
                            <form class="d-inline-flex">
                                <a href="add-new-user.html" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus"></i>Add New
                                </a>
                            </form>
                        </div>

                        <div class="table-responsive table-product">
                            
                                <table class="table all-package theme-table" id="table_id">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Option</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        @foreach ($vendors as $vendor)
                                        <tr>
                                            <td>
                                                <div class="table-image">
                                                    <img src= "{{ $vendor->photo ?  asset($vendor->photo) : asset('adminBackend\assets\images\profile\No_image.svg.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </td>

                                            <td>
                                                <div class="user-name">
                                                    <span>{{ $vendor->name? $vendor->name : 'NA' }}</span>
                                                    <span>{{ $vendor->name? $vendor->name : 'NA' }}</span>
                                                </div>
                                            </td>

                                            <td>{{ $vendor->phone? $vendor->phone : 'NA' }}</td>

                                            <td>{{ $vendor->email? $vendor->email : 'NA' }}</td>

                                            <td>
                                                <ul>
                                                    <li>
                                                        <a href="order-detail.html">
                                                            <i class="ri-eye-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>

                                                    <li>
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#exampleModalToggle">
                                                            <i class="ri-delete-bin-line"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>   
                                {{ $vendors->links() }}                             
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- All User Table Ends-->

@include('admin.home.footer')
</div>
@endsection