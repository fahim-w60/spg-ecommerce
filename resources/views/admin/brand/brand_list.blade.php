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
                                @can('brand.add')
                                <a href="{{ route('admin.brand') }}" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus"></i>Add New Brand
                                </a>
                                @endcan
                            </form>
                        </div>
                     

                        <div class="table-responsive table-product">
                            
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Brand Name</th>
                                        <th>Brand Description</th>
                                        <th>Website</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ($brands as $brand)
                                    <tr>
                                        <td>
                                            <div class="table-image">
                                                <img src="{{ $brand->logo ? asset($brand->logo) : asset('adminBackend\assets\images\profile\No_image.svg.png') }}" class="img-fluid" alt="">
                                            </div>
                                        </td>
                            
                                        <td>
                                            <div class="user-name">
                                                @if(app()->getLocale() == 'bn')
                                                    @php
                                                        $translations = $brand->translations->where('lang_code', 'bn')->first();
                                                    @endphp
                                                    <span>{{ $translations ? $translations->name : 'NA' }}</span>
                                                    <span>{{ $translations ? $translations->name : 'NA' }}</span>
                                                @else
                                                    <span>{{ $brand->name ? $brand->name : 'NA' }}</span>
                                                    <span>{{ $brand->name ? $brand->name : 'NA' }}</span>
                                                @endif
                                            </div>
                                        </td>
                            
                                        <td>
                                            @if(app()->getLocale() == 'bn')
                                                {{ $translations->description ? $translations->description : 'NA' }}
                                            @else
                                                {{ $brand->description ? $brand->description : 'NA' }}
                                            @endif
                                        </td>
                            
                                        <td class="col-md-2">{{ $brand->website ? $brand->website : 'NA' }}</td>
                            
                                        <td>
                                            @if($brand->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Non-Active</span>
                                            @endif
                                        </td>
                            
                                        <td>
                                            <ul>
                                               
                                                @can('brand.edit')
                                                <li>
                                                    <a href="{{ route('admin.edit.brand', $brand->id) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>
                                                @endcan
                                                @can('brand.delete')
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-delete-bin-line delete-list"  data-url="{{ route('admin.brand.destroy', $brand->id) }}"></i>
                                                    </a>
                                                </li>
                                                @endcan
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                                {{ $brands->links() }}                             
                            

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