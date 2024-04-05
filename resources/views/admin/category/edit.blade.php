@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Edit Category
@endsection

@section('main')
<div class="page-body">

    <!-- Edit Category Form Start -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Edit Category</h5>
                                </div>

                            
                                <form class="theme-form theme-form-2 mega-form" action="{{ route('admin.update.category',$category->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Category Name" name="name" value="{{ $category->name }}">
                                            @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Category Name(বাংলা)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('translation_name') is-invalid @enderror" id="banglaInput" type="text" placeholder="ক্যাটাগরি" name="translation_name" value="{{ $category->translations->name }}">
                                            @error('translation_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Category Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="" cols="4" rows="2">{{ $category->description }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Category Description(বাংলা)</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control @error('translation_description') is-invalid @enderror" name="translation_description" id="banglaInputText" cols="4" rows="2">{{ $category->translations->description }}</textarea>
                                            @error('translation_description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Category Image</label>
                                        <div class="form-group col-sm-9">
                                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" onChange="mainThamUrl(this)">
                                            @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <img class="mb-4 row align-items-right" src="" id="mainThmb" />

                                   
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Featured</label>
                                        <div class="form-group col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="featured" id="featuredYes" value="yes" {{ $category->is_featured == '1' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="featured" id="featuredNo" value="no" {{ $category->is_featured == '0' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredNo">No</label>
                                            </div>
                                            @error('featured')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="mb-4 row float-right">
                                        <div class="col-md-12 float-right">
                                            <button type="submit" class="btn btn-primary">Update</button>
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

@endsection