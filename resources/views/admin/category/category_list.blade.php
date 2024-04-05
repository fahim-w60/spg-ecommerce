@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Category List
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
                                <a href="{{ route('admin.category') }}" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus"></i>Add New Category
                                </a>
                            </form>
                        </div>
                     

                        <div class="table-responsive table-product">
                            
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Category Name</th>
                                        <th>Category Description</th>
                                        <th>Order</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ($categories as $categorie)
                                    <tr>
                                        <td>
                                            <div class="table-image">
                                                <img src="{{ $categorie->image ? asset($categorie->image) : asset('adminBackend\assets\images\profile\No_image.svg.png') }}" class="img-fluid" alt="">
                                            </div>
                                        </td>
                            
                                        <td>
                                            <div class="user-name">
                                                @if(app()->getLocale() == 'bn')
                                                    @php
                                                        $translations = $categorie->translations->where('lang_code', 'bn')->first();
                                                    @endphp
                                                    <span>{{ $translations ? $translations->name : 'NA' }}</span>
                                                    <span>{{ $translations ? $translations->name : 'NA' }}</span>
                                                @else
                                                    <span>{{ $categorie->name ? $categorie->name : 'NA' }}</span>
                                                    <span>{{ $categorie->name ? $categorie->name : 'NA' }}</span>
                                                @endif
                                            </div>
                                        </td>
                            
                                        <td>
                                            @if(app()->getLocale() == 'bn')
                                                {{ $translations->description ? $translations->description : 'NA' }}
                                            @else
                                                {{ $categorie->description ? $categorie->description : 'NA' }}
                                            @endif
                                        </td>
                            
                                        <td class="col-md-2">{{ $categorie->order ? $categorie->order : 'NA' }}</td>
                            
                                        <td>
                                            @if($categorie->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Non-Active</span>
                                            @endif
                                        </td>
                            
                                        <td>
                                            <ul>
                                                @can('category.edit')
                                                    <li>
                                                        <a href="{{ route('admin.edit.category',$categorie->id) }}">
                                                            <i class="ri-pencil-line"></i>
                                                        </a>
                                                    </li>
                                                @endcan
                                                @can('category.delete')
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <i class="ri-delete-bin-line delete-list"  data-url="{{ route('admin.category.destroy', $categorie->id) }}"></i>
                                                        </a>
                                                    </li>
                                                @endcan   
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                                {{ $categories->links() }}                             
                            

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
