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
                                <a href="{{ route('attribute.index') }}" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus"></i>Add New Attribute
                                </a>
                            </form>
                        </div>
                     

                        <div class="table-responsive table-product">
                            
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Attribute Set</th>
                                        <th>Color Code</th>
                                        <th>Default</th>
                                        <th>Status</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ($datas as $data)
                                    <tr>
                                        <td>
                                            <div class="table-image">
                                                <img src="{{ $data->image ? asset($data->image) : asset('adminBackend\assets\images\profile\No_image.svg.png') }}" class="img-fluid" alt="">
                                            </div>
                                        </td>
                            
                                        <td>
                                            <div class="user-name">
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
                                            </div>
                                        </td>
                                        @php
                                            $attributeSet = App\Models\Ec_product_attribute_set::where('id',$data->attribute_set_id)->first();
                                        @endphp
                                        <td class="col-md-2">{{ $attributeSet->title ? $attributeSet->title : 'NA' }}</td>

                                        <td class="col-md-2">{{ $data->color ? $data->color : 'NA' }}</td>

                                        <td>
                                            @if($data->is_default == 1)
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
                            
                                        <td>
                                            <ul>
                                                @can('attribute.edit')
                                                <li>
                                                    <a href="{{ route('attribute.edit', $data->id) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>
                                                @endcan
                                                @can('attribute.delete')
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-delete-bin-line delete-list"  data-url="{{ route('attribute.destroy',$data->id) }}"></i>
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