@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Change Password
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
                                        <p>Role: {{ $user->role ? $user->role : 'NA' }}<p>
                                        <p class="text-secondary mb-1">Phone : {{ $user->phone ? $user->phone : 'NA' }}</p>
                                        <p class="text-muted font-size-sm">Address: {{ $user->address ? $user->address : 'NA' }}</p>
                                        
                                    </div>
                                </div>
                                <hr class="my-4" />
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
                                    <h5>Change Password</h5>
                                </div>
                                <form action="{{ route('admin.update.password') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-4 row align-items-center">
                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title">Old Password</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control @if($errors->first('oldPassword')) is-invalid @endif" name="oldPassword" type="password" 
                                                        placeholder="Enter Old Password">
                                                        @if($errors->has('oldPassword'))
                                                            <span class="invalid-feedback">{!! $errors->first('oldPassword') !!}</span>
                                                        @endif
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title">Enter New Password</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control @if($errors->first('newPassword')) is-invalid @endif" id="new-password" name="newPassword" type="password"
                                                      oninput="validateNewPassword()"  placeholder="Enter New Password">
                                                      @if($errors->has('newPassword'))
                                                            <span class="invalid-feedback">{!! $errors->first('newPassword') !!}</span>
                                                        @endif
                                                      <p id="newPasswordError" style="color: red;"></p>
                                                </div>
                                            </div>

                                            <div class="mb-4 row align-items-center">
                                                <label class="form-label-title">Confirm New
                                                    Password</label>
                                                <div class="col-sm-12">
                                                    <input class="form-control @if($errors->first('confirmPassword')) is-invalid @endif" type="password" id="confirm-password" name="confirmPassword" oninput="validateConfirmPassword(event)" placeholder="Enter Your Confirm Password">
                                                    @if($errors->has('confirmPassword'))
                                                            <span class="invalid-feedback">{!! $errors->first('confirmPassword') !!}</span>
                                                        @endif
                                                    <p id="confirmPasswordError" style="color: red;"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                    
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
<script>
    function validateNewPassword() {
        
        var password = document.getElementById('new-password').value;
        //console.log(password);
        
        var hasLetter = /[a-zA-Z]/.test(password);
        var hasNumber = /\d/.test(password);
        var hasMinimumLength = password.length >= 6;

        
        if (hasLetter && hasNumber && hasMinimumLength) {
        
            document.getElementById('newPasswordError').innerHTML = '';
        } else {
            
            document.getElementById('newPasswordError').innerHTML = 'Password must be at least 6 characters long and contain both letters and numbers.';
            event.preventDefault();
        }
    }


    function validateConfirmPassword(event) {
    var newPassword = document.getElementById('new-password').value;
    var confirmPassword = document.getElementById('confirm-password').value;
    
    if (newPassword == confirmPassword) {
        document.getElementById('confirmPasswordError').innerHTML = '';
    } else {
        document.getElementById('confirmPasswordError').innerHTML = 'Password must be matched with the new password.';
        event.preventDefault();
    }
}
</script>



@endsection