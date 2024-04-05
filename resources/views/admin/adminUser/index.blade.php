@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Admin User List
@endsection
@section('main')
<div class="page-body">
    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Admin User</h5>
                            <form class="d-inline-flex">
                                <a href="{{ route('adminUser.create') }}" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus"></i>Add New Admin User
                                </a>
                            </form>
                        </div>
                     

                        <div class="table-responsive table-product">
                            
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>                                        
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ($datas as $data)
                                    <tr>
                                        <td class="col-md-2">{{ $data->name ? $data->name : 'NA' }}</td>
                            
                                        <td>
                                            {{ $data->email ? $data->email : 'NA' }}
                                        </td>

                                        <td>
                                            {{ $data->phone ? $data->phone : 'NA' }}
                                        </td>

                                        <td>
                                            {{ $data->address ? $data->address : 'NA' }}
                                        </td>
                            
                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>
                            
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-delete-bin-line delete-list"  data-url="{{ route('adminUser.destroy',$data->id) }}"></i>
                                                    </a>
                                                </li>
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