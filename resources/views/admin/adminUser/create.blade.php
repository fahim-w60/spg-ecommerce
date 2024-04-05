@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Admin User
@endsection

@section('page_level_css')
<!-- Select2 css -->
<link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/select2.min.css') }}">
@endsection

@section('main')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-10 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Admin User Information</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form" action="{{ route('adminUser.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-4 row align-items-center">
                                        <label for="fullname">Full Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control @if($errors->has('name')) is-invalid @endif" id="fullname" value="{{ old('name') }}" placeholder="Full Name">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label for="email">Email Address</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif" value="{{ old('email') }}" id="email" placeholder="Email Address">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="mb-4 row align-items-center">
                                        <label for="tel">Phone Number</label>
                                        <div class="col-sm-9">
                                            <input type="number" name="phone" class="form-control @if($errors->has('phone')) is-invalid @endif" value="{{ old('phone') }}" id="phone" placeholder="Phone Number">
                                                @error('phone')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>
    
                                    <div class="mb-4 row align-items-center">
                                        <label for="password">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password"  
                                                class="form-control @if($errors->has('password')) is-invalid @endif" id="password"
                                                placeholder="Password">
                                                @error('password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label for="password">Confirm Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="confirm_password"  
                                                class="form-control @if($errors->has('confirm_password')) is-invalid @endif" id="password"
                                                placeholder="Password">
                                                @error('confirm_password')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label >Role</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100 form-control @error('role_name') is-invalid @enderror" name="role_name" value="{{ old('role_name') }}">
                                                        <option value="">Select Role</option>
                                                        @foreach ($roles as $role)
                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                        @endforeach
                                                    </select>

                                                    @error('role_name')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                    </div>

                                    <div class="mb-4 row float-right">
                                        <div class="col-md-12 float-right">
                                            <button type="submit" class="btn btn-primary">Submit</button>
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
