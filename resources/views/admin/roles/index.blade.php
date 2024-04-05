@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Role List
@endsection
@section('main')
<div class="page-body">
    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="title-header option-title">
                            <h5>All Roles</h5>
                            <form class="d-inline-flex">
                                <a href="{{ route('roles.create') }}" class="align-items-center btn btn-theme d-flex">
                                    <i data-feather="plus"></i>Add New Role
                                </a>
                            </form>
                        </div>
                     

                        <div class="table-responsive table-product">
                            
                            <table class="table all-package theme-table" id="table_id">
                                <thead>
                                    <tr>                                        
                                        <th>Role Name</th>
                                        <th>Option</th>
                                    </tr>
                                </thead>
                            
                                <tbody>
                                    @foreach ($roles as $role)
                                    <tr>
                                        <td class="col-md-2">{{ $role->name ? $role->name : 'NA' }}</td>
                            
                                       
                            
                                        <td>
                                            <ul>

                                                <li>
                                                    <a href="{{ route('role.permission.edit',$role->id) }}" title="View All Permission">
                                                        <i class="ri-eye-line"></i>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ route('roles.edit',$role->id) }}" title="Edit">
                                                        <i class="ri-pencil-line"></i>
                                                    </a>
                                                </li>
                            
                                                <li>
                                                    <a href="javascript:void(0)" title="Delete">
                                                        <i class="ri-delete-bin-line delete-list"  data-url="{{ route('roles.destroy',$role->id) }}"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                                {{ $roles->links() }}                             
                            

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