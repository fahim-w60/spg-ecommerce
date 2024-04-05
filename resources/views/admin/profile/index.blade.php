@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Profile Settings
@endsection
@section('main')
<div class="page-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">

                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="{{  $user->photo ? asset($user->photo) : asset('adminBackend/assets/images/profile/No_image.svg.png') }}" alt="Admin" class="rounded-circle p-1 bg-primary" width="110">
                                    <div class="mt-3">
                                        <h4>Name : {{ $user->name ? $user->name : 'NA' }}</h4>
                                        <h6 class="text-secondary mb-1">Role: {{ $user->role ? $user->role : 'NA' }}<h6>
                                        <p class="text-secondary mb-1">Phone : {{ $user->phone ? $user->phone : 'NA' }}</p>
                                        <p class="text-muted font-size-sm">Address: {{ $user->address ? $user->address : 'NA' }}</p>
                                        
                                    </div>
                                </div>
                                {{-- <hr class="my-4" /> --}}
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe me-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg></h6>
                                        <span class="text-secondary">NA</span>
                                    </li>
                                
                                    <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                        <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook me-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></h6>
                                        <span class="text-secondary">NA</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <!-- Details Start -->
                        <div class="card">
                            <div class="card-body">
                                <div class="title-header option-title">
                                    <h5>Profile Setting</h5>
                                </div>
                                <form action="{{ route('store.admin.profile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control @if($errors->has('name')) is-invalid @endif" name="name" type="text"
                                                    placeholder="Enter Your Name">
                                                @if($errors->has('name'))
                                                    <span class="invalid-feedback">{!! $errors->first('name') !!}</span>
                                                @endif
                                                
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Your Phone
                                                Number</label>
                                            <div class="col-sm-10">
                                                <input class="form-control @if($errors->first('phone')) is-invalid @endif" name="phone" type="number"
                                                    placeholder="Enter Your Number">
                                                @if($errors->has('phone'))
                                                    <span class="invalid-feedback">{!! $errors->first('phone') !!}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Enter Email
                                                Address</label>
                                            <div class="col-sm-10">
                                                <input class="form-control @if($errors->first('email')) is-invalid @endif" name="email" type="email"
                                                    placeholder="Enter Your Email Address">
                                                    @if($errors->has('email'))
                                                    <span class="invalid-feedback">{!! $errors->first('email') !!}</span>
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="mb-4 row align-items-center">
                                            <label
                                                class="col-sm-2 col-form-label form-label-title">Photo</label>
                                            <div class="col-sm-10">
                                                <input class="mt-4 mb-2 form-control @if($errors->first('photo')) is-invalid @endif" name="photo" type="file"
                                                         onChange="mainThamUrl(this)">
                                                    @if($errors->has('photo'))
                                                        <span class="invalid-feedback">{!! $errors->first('photo') !!}</span>
                                                    @endif
                                                    

                                            </div>
                                        </div>
                                        <img src="" id="mainThmb" />

                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-2 mb-0">Address</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control @if($errors->first('address')) is-invalid @endif" name="address" id="" cols="2" rows="1"></textarea>
                                                @if($errors->has('address'))
                                                        <span class="invalid-feedback">{!! $errors->first('address') !!}</span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    
                                    
                                </form>
                            </div>
                        </div>
                        <!-- Details End -->

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.home.footer')
</div>


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
@endsection