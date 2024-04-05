@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Edit Permissions
@endsection

@section('page_level_css')

<link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/select2.min.css') }}">
@endsection

@section('main')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Edit Permission</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form" action="{{ route('permission.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Permission Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('name') is-invalid @enderror" type="text"
                                                placeholder="Permission Name" value="{{ $data->name }}" name="name" value="{{ old('name') }}">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Group Name</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100 form-control @error('group_name') is-invalid @enderror" name="group_name" value="{{ old('group_name') }}">
                                                        <option value="">Select Group Name</option>
                                                        <option value="product" {{ $data->group_name == 'product' ? 'selected' : '' }}>Product</option>
                                                        <option value="category" {{ $data->group_name == 'category' ? 'selected' : '' }}>Category</option>
                                                        <option value="subcategory"{{ $data->group_name == 'subcategory' ? 'selected' : '' }}>Subcategory</option>
                                                        <option value="brand" {{ $data->group_name == 'brand' ? 'selected' : '' }}>Brands</option>
                                                        <option value="attribute_set" {{ $data->group_name == 'attribute_set' ? 'selected' : '' }}>Attribute Set</option>
                                                        <option value="attribute" {{ $data->group_name == 'attribute' ? 'selected' : '' }}>Attributes</option>
                                                        <option value="users" {{ $data->group_name == 'users' ? 'selected' : '' }}>Users</option>
                                                        <option value="role" {{ $data->group_name == 'role' ? 'selected' : '' }}>Role</option>
                                                        <option value="permission" {{ $data->group_name == 'permission' ? 'selected' : '' }}>Permission</option>
                                                    </select>

                                                    @error('group_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                    </div>

                                    
                                    <div class="mb-4 row float-right">
                                        <div class="col-md-12 float-right">
                                            <button type="submit" class="btn btn-primary">update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.home.footer')
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
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>

<script src="{{ asset('adminBackend/assets/js/select2.min.js') }}"></script>
<script src="{{ asset('adminBackend/assets/js/select2-custom.js') }}"></script>
@endsection
