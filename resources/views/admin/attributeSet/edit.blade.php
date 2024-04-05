@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Edit Attribute Set
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
                                    <h5>Edit Attribute Set Information</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form" action="{{ route('attributeSet.update', $attributeSet->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Title</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('title') is-invalid @enderror" type="text"
                                                placeholder="Title Name" name="title" value="{{ $attributeSet->title }}">
                                                @error('title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Title(বাংলা)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('translation_name') is-invalid @enderror" id="banglaInput" type="text" placeholder="টাইটেল নাম" name="translation_name" value="{{ $attributeSet->translations->title }}">
                                            @error('translation_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Display Layout</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control @error('display_layout')
                                                is-invalid
                                            @enderror" name="display_layout" id="" cols="4" rows="2">{{ $attributeSet->display_layout }}</textarea>
                                            @error('display_layout')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                   

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Searchable</label>
                                        <div class="form-group col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('searchable') is-invalid @enderror" type="radio" name="searchable" id="featuredYes" value="1" {{ $attributeSet->is_searchable == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('searchable') is-invalid @enderror" type="radio" name="searchable" id="featuredNo" value="0" {{ $attributeSet->is_searchable == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredNo">No</label>
                                            </div>
                                            @error('searchable')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Compareable</label>
                                        <div class="form-group col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('comparable') is-invalid @enderror" type="radio" name="comparable" id="featuredYes" value="1" {{ $attributeSet->is_comparable == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('comparable') is-invalid @enderror" type="radio" name="comparable" id="featuredNo" value="0" {{ $attributeSet->is_comparable == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredNo">No</label>
                                            </div>
                                            @error('comparable')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                    

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Use In Product Listing</label>
                                        <div class="form-group col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('useInProductListing') is-invalid @enderror" type="radio" name="useInProductListing" id="featuredYes" value="1" {{ $attributeSet->is_use_in_product_listing == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('useInProductListing') is-invalid @enderror" type="radio" name="useInProductListing" id="featuredNo" value="0" {{ $attributeSet->is_use_in_product_listing == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredNo">No</label>
                                            </div>
                                            @error('useInProductListing')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                   

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Use Image From Product Variation</label>
                                        <div class="form-group col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('useImageFromProductVariation') is-invalid @enderror" type="radio" name="useImageFromProductVariation" id="featuredYes" value="1" {{ $attributeSet->use_image_from_product_variation == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('useImageFromProductVariation') is-invalid @enderror" type="radio" name="useImageFromProductVariation" id="featuredNo" value="0" {{ $attributeSet->use_image_from_product_variation == 0 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredNo">No</label>
                                            </div>
                                            @error('useImageFromProductVariation')
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
