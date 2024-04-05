@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Category List
@endsection
@section('main')
<div class="page-body">
    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Brands</h5>
                            <form class="d-inline-flex">
                                <a href="{{ route('subcategory.index') }}" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus"></i>Add New Subcategory
                                </a>
                            </form>
                        </div>
                     

                        <div class="table-responsive table-product">
                            
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Subcategory Name</th>
                                        <th>Subcategory Description</th>
                                        <th>Parent Category</th>
                                        <th>Order</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ($subCategories as $subCategory)
                                    <tr>
                                        <td>
                                            <div class="table-image">
                                                <img src="{{ $subCategory->image ? asset($subCategory->image) : asset('adminBackend\assets\images\profile\No_image.svg.png') }}" class="img-fluid" alt="">
                                            </div>
                                        </td>
                            
                                        <td>
                                            <div class="user-name">
                                                @if(app()->getLocale() == 'bn')
                                                    @php
                                                        $translations = $subCategory->translations->where('lang_code', 'bn')->first();
                                                    @endphp
                                                    <span>{{ $translations ? $translations->name : 'NA' }}</span>
                                                    <span>{{ $translations ? $translations->name : 'NA' }}</span>
                                                @else
                                                    <span>{{ $subCategory->name ? $subCategory->name : 'NA' }}</span>
                                                    <span>{{ $subCategory->name ? $subCategory->name : 'NA' }}</span>
                                                @endif
                                            </div>
                                        </td>
                            
                                        <td>
                                            @if(app()->getLocale() == 'bn')
                                                {{ $translations->description ? $translations->description : 'NA' }}
                                            @else
                                                {{ $subCategory->description ? $subCategory->description : 'NA' }}
                                            @endif
                                        </td>
                            
                                        <td>
                                            @php
                                                $parent = $subCategory->where('id', $subCategory->parent_id)->first();
                                            @endphp
                                            {{ $parent->name }}
                                        </td>

                                        <td class="col-md-2">{{ $subCategory->order ? $subCategory->order : 'NA' }}</td>
                            
                                        <td>
                                            @if($subCategory->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Non-Active</span>
                                            @endif
                                        </td>
                            
                                        <td>
                                            <ul>
                                                {{-- <li>
                                                    <a href="order-detail.html">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li> --}}
                                                @can('subcategory.edit')
                                                <li>
                                                    <a href="{{ route('subcategory.edit',$subCategory->id) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>
                                                @endcan
                                                @can('subcategory.delete')
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-delete-bin-line delete-list"  data-url="{{ route('subcategory.destroy', $subCategory->id) }}"></i>
                                                    </a>
                                                </li>
                                                @endcan
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                                {{ $subCategories->links() }}                             
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

@include('admin.home.footer')
</div>
@endsection

