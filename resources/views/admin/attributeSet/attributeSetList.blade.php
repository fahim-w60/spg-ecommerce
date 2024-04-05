@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Attribute Set List
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
                                <a href="{{ route('attributeSet.index') }}" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus"></i>Add New Attribute Set
                                </a>
                            </form>
                        </div>
                     

                        <div class="table-responsive table-product">
                            
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Display Layout</th>
                                        <th>Searchable</th>
                                        <th>Compareable</th>
                                        <th>Status</th>
                                        <th>Order</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ($datas as $data)
                                    <tr>
                                        
                            
                                        <td class="col-md-2">
                                            
                                                @if(app()->getLocale() == 'bn')
                                                    @php
                                                        $translations = $data->translations->where('lang_code', 'bn')->first();
                                                    @endphp
                                                    <span>{{ $translations ? $translations->title : 'NA' }}</span>
                                                    <span>{{ $translations ? $translations->title : 'NA' }}</span>
                                                @else
                                                    <span>{{ $data->title ? $data->title : 'NA' }}</span>
                                                    <span>{{ $data->title ? $data->title : 'NA' }}</span>
                                                @endif
                                            
                                        </td>
                            
                                        
                            
                                        <td class="col-md-2">{{ $data->slug ? $data->slug : 'NA' }}</td>
                            
                                        <td class="col-md-2">{{ $data->display_layout ? $data->display_layout : 'NA' }}</td>

                                        <td>
                                            @if($data->is_searchable == 1)
                                                <span class="badge badge-success">Yes</span>
                                            @else
                                                <span class="badge badge-danger">No</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if($data->is_comparable == 1)
                                                <span class="badge badge-success">Yes</span>
                                            @else
                                                <span class="badge badge-danger">No</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if($data->status == 1)
                                                <span class="badge badge-success">Active</span>
                                            @else
                                                <span class="badge badge-danger">Non-Active</span>
                                            @endif
                                        </td>

                                        <td class="col-md-2">{{ $data->order ? $data->order : 'NA' }}</td>

                                        <td>
                                            <ul>
                                               
                                                @can('attribute_set.edit')
                                                <li>
                                                    <a href="{{ route('attributeSet.edit', $data->id) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>
                                                @endcan

                                                @can('attribute_set.delete')
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-delete-bin-line delete-list"  data-url="{{ route('attributeSet.destroy', $data->id) }}"></i>
                                                    </a>
                                                </li>
                                                @endcan
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                                {{ $datas->links() }}                             
                            

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