@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Roles In Permission
@endsection

@section('page_level_css')
<!-- Select2 css -->
<link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/select2.min.css') }}">
@endsection

@section('main')


<div class="page-body">
    <!-- New Product Add Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Add Role In Permission</h5>
                                </div>

                                <form action="{{ route('updateRoleInPermission') }}" class="theme-form theme-form-2 mega-form" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Role <span
                                                class="theme-color">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="hidden" name="role_id" value="{{ $role->id }} ">
                                                <select class="js-example-basic-single w-100 form-control @error('role') is-invalid @enderror" name="role" value="{{ old('role') }}">
                                                   
                                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                   {{-- @foreach ($roles as $role)
                                                        
                                                   @endforeach --}}
                                                </select>

                                                @error('role')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                    </div>
                                
                                <div class="mb-3">
                                    <h4 class="form-label-title">Permissions</h4>
                                </div>

                                <input class="checkbox_animated checkall mt-3" id="masterCheckbox" type="checkbox" />
                                                            <label class="form-check-label m-0"
                                                                for="role1">Give All Permission</label>
                               <hr>
                                    <div class="mx-5">
                                        <div class="col-xl-12">
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <ul>
                                                        @foreach ($group_array as $key=>$group)
                                                        <li>{{  $key ?? '' }} :</li>
                                                        <li class="mx-5">
                                                            <input class="checkbox_animated checkall childCheckbox" type="checkbox" data-group="{{ $key }}" />
                                                            <label class="form-check-label m-0"
                                                                for="role1">All</label>
                                                        </li>
                                                       
                                                        @foreach ($group as $group_wise_permission)
                                                            <li class="mx-5">
                                                                <input class="checkbox_animated childCheckbox" type="checkbox" name="permission[]" value="{{ $group_wise_permission->id }}" {{ in_array($group_wise_permission->id, $roles_permission) ? 'checked' : '' }} data-group="{{ $key }}" />
                                                                <label class="form-check-label m-0"
                                                                    for="role1">{{ $group_wise_permission->name }}</label>
                                                            </li>
                                                        @endforeach
                                                        

                                                        @endforeach
                                                        
                                                        
                                                    </ul>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-primary ms-auto mt-4">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- New Product Add End -->

    <!-- footer Start -->
    @include('admin.home.footer')
    <!-- footer En -->
</div>


@endsection

@section('page_level_script')
<script src="https://cdn.jsdelivr.net/npm/jquery.bangla@1/dist/jquery.bangla.js"></script>
<script>
    $('#banglaInput').bangla({ enable: true });
    $('#banglaInput').bangla('on'); 
    
    $('#banglaInputText').bangla({ enable: true });
    $('#banglaInputText').bangla('on');
    
</script>
<script type="text/javascript">
	$(document).ready(function(){
    $('.checkall').click(function(){
        var group = $(this).data('group');
        var isChecked = $(this).is(':checked'); 
        
        $('input[type="checkbox"][data-group="' + group + '"]').prop('checked', isChecked);
    });
});
$(document).ready(function(){
    $('#masterCheckbox').click(function(){
        $('.childCheckbox').prop('checked', this.checked);
    });
});
</script>

<script src="{{ asset('adminBackend/assets/js/select2.min.js') }}"></script>
<script src="{{ asset('adminBackend/assets/js/select2-custom.js') }}"></script>
@endsection
