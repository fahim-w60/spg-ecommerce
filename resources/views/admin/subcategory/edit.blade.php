@extends('admin.admin-dashboard')

@section('title')
    Admin Dashboard || Edit Subcategory
@endsection

@section('page_level_css')
    <!-- Select2 css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminBackend/assets/css/select2.min.css') }}">
@endsection

@section('main')
    <div class="page-body">

        <!-- Edit Subcategory Start -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-sm-8 m-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-header-2">
                                        <h5>Edit Subcategory Information</h5>
                                    </div>

                                    <form class="theme-form theme-form-2 mega-form" action="{{ route('subcategory.update',$subcategory->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                    
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Category Name</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100 form-control @error('categoryId') is-invalid @enderror" name="categoryId">
                                                    @foreach($categories as $category)
                                                        @if($category->level != 1)
                                                            @php
                                                                $name = $category->name;
                                                                $parentId = $category->parent_id;
                                                                while ($parentId != NULL) {
                                                                    $parentCategory = $categories->where('id', $parentId)->first();
                                                                    if ($parentCategory) {
                                                                        $name = $parentCategory->name . '//' . $name;
                                                                        $parentId = $parentCategory->parent_id;
                                                                    } else {
                                                                        $parentId = NULL;
                                                                    }
                                                                }
                                                            @endphp
                                                            <option value="{{ $category->id }}" {{ $subcategory->id == $category->id ? 'selected' : '' }}>{{ $name }}</option>
                                                        @else
                                                            <option value="{{ $category->id }}" {{ $subcategory->id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('categoryId')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Subcategory Name</label>
                                            <div class="col-sm-9">
                                                <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="Subcategory Name" name="name" value="{{ $subcategory->name }}">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Subcategory Name(বাংলা)</label>
                                            <div class="col-sm-9">
                                                <input class="form-control @error('translation_name') is-invalid @enderror" id="banglaInput" type="text" placeholder="সাবক্যাটাগরি" name="translation_name" value="{{ $subcategory->translations->name ?? '' }}">
                                                @error('translation_name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Subcategory Description</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="" cols="4" rows="2">{{ $subcategory->description }}</textarea>
                                                @error('description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                    
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Subcategory Description(বাংলা)</label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control @error('translation_description') is-invalid @enderror" name="translation_description" id="banglaInputText" cols="4" rows="2">{{ $subcategory->translations->name }}</textarea>
                                                @error('translation_description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                        
                                        <div class="mb-4 row align-items-center">
                                            <label class="col-sm-3 col-form-label form-label-title">Subcategory Image</label>
                                            <div class="form-group col-sm-9">
                                                <input type="file" class="form-control" name="image" onChange="mainThamUrl(this)">
                                            </div>
                                        </div>
                                        <img class="mb-4 row align-items-right" src="" id="mainThmb" />
                                        

                                        
                                        <div class="mb-4 row align-items-center">
                                            <label class="form-label-title col-sm-3 mb-0">Featured</label>
                                            <div class="form-group col-sm-9">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="featured" id="featuredYes" value="yes" {{ $subcategory->is_featured == 1 ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="featuredYes">Yes</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="featured" id="featuredNo" value="no" {{ $subcategory->is_featured == 0 ? 'checked' : '' }}>
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
    <script src="{{ asset('adminBackend/assets/js/select2.min.js') }}"></script>
    <script src="{{ asset('adminBackend/assets/js/select2-custom.js') }}"></script>
@endsection
