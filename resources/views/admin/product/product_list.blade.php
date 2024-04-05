@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Brand List
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
                            <h5>All Brands</h5>
                            <form class="d-inline-flex">
                                <a href="{{ route('product.index') }}" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus"></i>Add New Product
                                </a>
                            </form>
                        </div>
                     

                        <div class="table-responsive table-product">
                            
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Product Name</th>
                                        <th>Content</th>
                                        <th>Category</th>
                                        <th>Brand</th>
                                        <th>Quantity</th>
                                        <th>Sku</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ($productPaginates as $productPaginate)
                                    <tr>
                                        <td>
                                            <div class="table-image">
                                                <img src="{{ $productPaginate->image ? asset($productPaginate->image) : asset('adminBackend\assets\images\profile\No_image.svg.png') }}" class="img-fluid" alt="">
                                            </div>
                                        </td>
                            
                                        <td>
                                            <div class="user-name">
                                                @if(app()->getLocale() == 'bn')
                                                    @php
                                                        $translations = $productPaginate->translations->where('lang_code', 'bn')->first();
                                                    @endphp
                                                    <span>{{ $translations ? $translations->name : 'NA' }}</span>
                                                    <span>{{ $translations ? $translations->name : 'NA' }}</span>
                                                @else
                                                    <span>{{ $productPaginate->name ? $productPaginate->name : 'NA' }}</span>
                                                    <span>{{ $productPaginate->name ? $productPaginate->name : 'NA' }}</span>
                                                @endif
                                            </div>
                                        </td>
                            
                                        <td class="col-md-2">{{ $productPaginate->content ? $productPaginate->content : 'NA' }}</td>

                                        <td class="col-md-2">{{ $productPaginate->categories->first()->category_detail->name ? $productPaginate->categories->first()->category_detail->name : 'NA' }}</td>


                                        <td class="col-md-2">{{ $productPaginate->brands->name ? $productPaginate->brands->name : 'NA' }}</td>
                                        
                                        <td class="col-md-2">{{ $productPaginate->quantity ? $productPaginate->quantity : 'NA' }}</td>

                                        <td class="col-md-2">{{ $productPaginate->sku ? $productPaginate->sku : 'NA' }}</td>

                                        <td>
                                            @if($productPaginate->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">In-Active</span>
                                            @endif
                                        </td>
                            
                                        <td>
                                            <ul>
                                               
                                                @can('product.edit')
                                                    <li>
                                                        <a href="{{ route('product.edit',$productPaginate->id) }}">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>
                                                @endcan
                                                @can('product.delete')
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-delete-bin-line delete-list"  data-url="{{ route('product.destroy',$productPaginate->id) }}"></i>
                                                        </a>
                                                </li>
                                                @endcan
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                                {{ $productPaginates->links() }}                             
                            

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