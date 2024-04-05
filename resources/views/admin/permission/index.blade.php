@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Permission List
@endsection
@section('main')
<div class="page-body">
    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Permissions</h5>
                            <form class="d-inline-flex">
                                <a href="{{ route('permission.create') }}" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus"></i>Add New Permission
                                </a>
                            </form>
                        </div>
                     

                        <div class="table-responsive table-product">
                            
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>                                        
                                        <th>Permission Name</th>
                                        <th>Group Name</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ($permissions as $permission)
                                    <tr>
                                        <td class="col-md-2">{{ $permission->name ? $permission->name : 'NA' }}</td>
                            
                                        <td>
                                            {{ $permission->group_name ? $permission->group_name : 'NA' }}
                                        </td>
                            
                                        <td>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('permission.edit',$permission->id) }}">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>
                            
                                                <li>
                                                    <a href="javascript:void(0)">
                                                        <i class="ri-delete-bin-line delete-list"  data-url="{{ route('permission.destroy',$permission->id) }}"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                                {{ $permissions->links() }}                             
                            

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