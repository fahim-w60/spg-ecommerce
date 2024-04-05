@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Attribute Edit
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
                    <div class="col-sm-8 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Edit Attribute Information</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form" action="{{ route('attribute.update',$attribute->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Attribute Set</label>
                                        <div class="col-sm-9">
                                            <select class="js-example-basic-single w-100 form-control @error('attribute_set_id') is-invalid @enderror" name="attribute_set_id">
                                                @foreach ($attributeSets as $attributeSet)
                                                    <option value="{{ $attributeSet->id }}" {{ $attributeSet->id == $attribute->attribute_set_id ? 'selected' : '' }}>
                                                        {{ $attributeSet->title }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('attribute_set_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Title</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('title') is-invalid @enderror" type="text" placeholder="Title Name" name="title" value="{{ $attribute->title }}">
                                            @error('title')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Title(বাংলা)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('translation_name') is-invalid @enderror" id="banglaInput" type="text" placeholder="টাইটেল নাম" name="translation_name" value="{{ $attribute->translations->title }}">
                                            @error('translation_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Colour</label>
                                        <div class="col-sm-2">
                                            <input class="form-control @error('color') is-invalid @enderror" id="favcolor" type="color" placeholder="Colour" name="color" value="{{ $attribute->color }}">
                                            @error('color')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Attribute Image</label>
                                        <div class="form-group col-sm-9">
                                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" onChange="mainThamUrl(this)">
                                            @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <img class="mb-4 img-fluid" src="{{ asset($attribute->image) }}" id="mainThmb" />
                                
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Default</label>
                                        <div class="form-group col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('default') is-invalid @enderror" type="radio" name="default" id="featuredYes" value="1" {{ $attribute->is_default == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('default') is-invalid @enderror" type="radio" name="default" id="featuredNo" value="0" {{ $attribute->is_default == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredNo">No</label>
                                            </div>
                                            @error('default')
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
