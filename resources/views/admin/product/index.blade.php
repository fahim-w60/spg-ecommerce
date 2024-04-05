@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Add Product
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
                    <div class="col-sm-10 m-auto">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Information</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('translation_name') is-invalid @enderror" type="text" name="name"
                                                placeholder="Product Name" value="{{ old('name') }}">
                                                @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product Name(বাংলা)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('translation_name') is-invalid @enderror" id="banglaInput" type="text" placeholder="Product Name(বাংলা)" name="translation_name" value="{{ old('translation_name') }}">
                                            @error('translation_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product Description</label>
                                        <div class="col-sm-9">
                                            <textarea id="product_description" class="form-control @error('description') is-invalid @enderror" name="description" id="editor" cols="30" rows="4">{{ old('description') }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror

    
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product Content</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="" cols="1" rows="2">{{ old('content') }}</textarea>
                                            @error('content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-8 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product Content(বাংলা)</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control @error('content') is-invalid @enderror" name="translation_content" id="banglaInputContent" cols="1" rows="2">{{ old('translation_content') }}</textarea>
                                            @error('translation_content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="card-header-2 my-5">
                                        <h5>Image Information</h5>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Thumbnail
                                            Image</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ old('image') }}" onChange="mainThamUrl(this)">
                                            @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <img class="col-sm-4 mb-4 row align-items-right" style="m" src="" id="mainThmb" />
                                    </div>
                                    


                                    <div id="imageFieldsContainer">
                                       
                                            <div class="mb-4 row align-items-center image-field">
                                                <label class="col-sm-3 col-form-label form-label-title">Multiple Images</label>
                                                <div class="col-sm-5">
                                                    <input type="file" class="form-control image-input" name="multi_img[]" onchange="previewImage(this)" value="{{ old('multi_img[]') }}">
                                                    <div class="invalid-feedback error-message"></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="ec_multi_images_id" type="hidden" name="ec_multi_images_id[]"  value="{{ old('ec_multi_images_id[]') }}"/>
                                                    <img class="image-preview mb-4 row align-items-right" style=""  src="" />
                                                    
                                                </div>
                                                
                                            </div>
                                        
                                            
                                     
                                       
                                    </div>

                                    <button type="button" id="addMoreButton" class="btn btn-animation btn-md fw-bold mb-4">+ Add More Image</button>
                                    

                                    <div class="card-header-2 my-5">
                                        <h5>Video Information</h5>
                                    </div>

                                    <div class="" id="videoContainer">
                                        <div class="row">
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Video Provider</label>
                                                <div class="col-sm-3">
                                                    <select class="js-example-basic-single w-100" name="video_type[]">
                                                        <option>Vimeo</option>
                                                        <option>Youtube</option>
                                                        <option>Dailymotion</option>
                                                    </select>
                                                </div>
                                            
                                                
                                            
                                                <label class="col-sm-3 col-form-label form-label-title mb-0">Video Link</label>
                                                <div class="col-sm-3">
                                                    <input class="form-control" name="video_link[]" type="text" placeholder="Video Link">
                                                </div>
                                            </div>
                                        </div> 
                                    </div>   
                                    {{-- <div id="video-fields" class="mb-4"></div> --}}
                                    <button id="add-video-field" type="button" class="btn btn-animation btn-md fw-bold mb-4">+ Add More</button>
                                      
                                      
                                    

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Product
                                            Category</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100 form-control @error('categoryId') is-invalid @enderror" name="categoryId" value="{{ old('categoryId') }}">
                                                    <option value="">Select Category</option>
                                                    @foreach ($categories as $category)
                                                        @if ($category->level != 1)
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
                                                            <option value="{{ $category->id }}">{{ $name }}</option>
                                                        @else
                                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                        @endif
                                                    @endforeach
    
                                                </select>
    
                                                @error('categoryId')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Brand</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100 form-control @error('brand_id') is-invalid @enderror" name="brand_id" value="{{ old('brand_id') }}">
                                                        <option value="">Select Brand</option>
                                                        @foreach ($brands as $brand)
                                                            <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('brand_id')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Store</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100 form-control @error('store_id') is-invalid @enderror" name="store_id" value="{{ old('store_id') }}">
                                                        <option value="">Select Store</option>
                                                        <option value="1">Store 1</option>
                                                        <option value="2">Store 2</option>
                                                    </select>
                                                    @error('store_id')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Tax Id</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100 form-control @error('tax_id') is-invalid @enderror" name="tax_id" value="{{ old('tax_id') }}">
                                                        <option value="">Select Tax Id</option>
                                                        <option value="1"> 1</option>
                                                        <option value="2"> 2</option>
                                                    </select>
                                                    @error('tax_id')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Sale Type</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100 form-control @error('sale_type') is-invalid @enderror" name="sale_type" value="{{ old('sale_type') }}">
                                                        <option value="">Select Sale Type</option>
                                                        <option value="1">Type 1</option>
                                                        <option value="2">Type 2</option>
                                                    </select>
                                                </div>
                                    </div>

                                    {{-- <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Attribute Set</label>
                                                <div class="col-sm-9">
                                                    <select id="attribute_set" class="js-example-basic-single w-100 form-control @error('name') is-invalid @enderror" name="attribute_set_id">
                                                        <option value="">Select Attribute Set</option>
                                                        @foreach ($attributeSets as $attributeSet)
                                                            <option value="{{ $attributeSet->id }}">{{ $attributeSet->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                    </div>

                                    <div class="mb-4 row align-items-center" id="attribute_container" style="display: none;">
                                        <label class="col-sm-3 col-form-label form-label-title">Attribute</label>
                                        <div class="col-sm-9">
                                            <select id="attributes" class="js-example-basic-single w-100 form-control @error('attribute') is-invalid @enderror" name="attribute_id">
                                            </select>
                                        </div>
                                    </div> --}}
                                     {{-- 
                                         --}}

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">SKU</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('sku') is-invalid @enderror" type="text" name="sku" value="{{ old('sku') }}">
                                            @error('sku')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div> 
                                    </div>


                                    
                                    {{-- <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('translation_name') is-invalid @enderror" id="banglaInput" type="number" placeholder="Product Price" name="price" value="{{ old('price') }}">
                                            @error('price')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    {{-- <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product Sale Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('sale_price') is-invalid @enderror" id="banglaInput" type="number" placeholder="Product Sale Price" name="sale_price" value="{{ old('price') }}">
                                            @error('sale_price')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Quantity</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('quantity') is-invalid @enderror" name="quantity" type="number" placeholder="Quantity" value="{{ old('quantity') }}">
                                            @error('quantity')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Start Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('sale_price') is-invalid @enderror" id="" type="date"  name="start_date" value="{{ old('start_date') }}">
                                            @error('start_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">End Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('sale_price') is-invalid @enderror" id="" type="date"  name="end_date" value="{{ old('end_date') }}">
                                            @error('start_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Height(Cm)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="height" type="number" placeholder="height" value="{{ old('height') }}">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Weight
                                            (kg)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="weight" type="number" placeholder="Weight" value="{{ old('weight') }}">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Length
                                            (Meter)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="length" type="number" placeholder="length" value="{{ old('length') }}">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Wide
                                            (Meter)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="wide" type="number" placeholder="wide" value="{{ old('wide') }}">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Stock Status</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="stock_status" value="{{ old('stock_status') }}">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Featured</label>
                                        <div class="form-group col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="featured" id="featuredYes" value="1" {{ old('featured') == 'yes' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="featured" id="featuredNo" value="0"
                                                {{ old('featured') == 'no' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredNo">No</label>
                                            </div>
                                            @error('featured')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Storehouse Management</label>
                                        <div class="form-group col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="storehouse" id="featuredYes" value="1" {{ old('storehouse') == 'yes' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="storehouse" id="featuredNo" value="0" {{ old('storehouse') == 'no' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredNo">No</label>
                                            </div>
                                            @error('featured')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Checkout When Out of Stock</label>
                                        <div class="form-group col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="stock" id="featuredYes" value="1"
                                                {{ old('stock') == 'yes' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="stock" id="featuredNo" value="0"
                                                {{ old('stock') == 'no' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredNo">No</label>
                                            </div>
                                            @error('featured')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-6 row float-right">
                                        <div class="col-md-12 float-right">
                                            <button type="submit" class="btn btn-animation btn-md fw-bold mb-4">Submit</button>
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

    $('#banglaInputContent').bangla({ enable: true});
    $('#banglaInputContent').bangla('on');

    $('#editor_banglaDescription').bangla({ enable: true });
    $('#editor_banglaDescription').bangla('on');



$(document).on("change",".attribute_set_id",function(){
    var __global_this = $(this);
    var attribute_set_id = $(this).val();
    //alert(attribute_set_id);
    var $attributeSelect = __global_this.closest('.inventoryContainer').find('.attribute_id_class');
    // alert($attributeSelect);
    //var $attributeSelectSet = __global_this.closest('.inventoryContainer').find('.attribute_set_id');
    loadAttributesForSelect(attribute_set_id, $attributeSelect);

    updateSelectedAttributes();
    //alert(attribute_set_id);
   /// updateSelectedAttributeSet();
    add_attribute_name_change(__global_this,attribute_set_id);

    var $attributeSelectSet = __global_this.closest('.inventory_parentDiv').find('.attribute_set_id').not(__global_this);

    // $attributeSelectSet.each(function() {
    //     $(this).find("option").each(function() {
    //         if ($(this).val() == attribute_set_id) {
    //             $(this).prop('disabled', true);
    //             //alert('ok');
    //         }
    //     });
        
        
    // });
    
});

var selectedIds = [];
var selectedAttributes = [];

function loadAttributesForSelect(attributeSetId, $selectElement) {
    //alert('ok');
    if(attributeSetId) {
        $.ajax({
            url: '/admin/get-attributs/' + attributeSetId,
            type: 'GET',
            dataType: 'json',
            asyc:false,
            success: function(data) {
                console.log(data)
                $selectElement.empty(); 
                $selectElement.prepend('<option value="">Select Attribute</option>');
                $.each(data, function(key, value) {
                    $selectElement.append('<option value="' + key + '">' + value + '</option>');
                });
            }
        });
    }
}


function add_attribute_name_change(__global_this,attribute_set_id){
    __global_this.closest('.inventoryContainer').find('.price_class').each(function(index){
        $(this).attr('name', 'price__' + attribute_set_id+'[]' );
    })
    __global_this.closest('.inventoryContainer').find('.sale_price_class').each(function(index){
        $(this).attr('name', 'sale_price__' + attribute_set_id + '[]');
    })
    
    __global_this.closest('.inventoryContainer').find('.attribute_id_class').each(function(index){
        $(this).attr('name', 'attribute_id__' + attribute_set_id + '[]');

    })
    
    __global_this.closest('.inventoryContainer').find('.quantity_class').each(function(index){
        $(this).attr('name', 'quantity__' + attribute_set_id + '[]');
    })


}


$(document).on('click','.add_row_button',function(){
    var __global_this = $(this);
    var attribute_set_id =  $(this).closest('.inventoryContainer').find('.attribute_set_id :selected').val();
    var $inventoryContainer = __global_this.closest('.inventoryContainer');
    var $newRowSelect = $inventoryContainer.find('.attribute_id_class').last();

    var attibutes_array=[];
   
    $.ajax({
            url: '/admin/get-attributs/' + attribute_set_id,
            type: 'GET',
            dataType: 'json',
            asyc:true,
            success: function(data) {
                console.log(data)
                attibutes_array = data;
                var option_html=``;
                option_html+=`<option value="">Select Attribute</option>`;
                $.each(data, function(key, value) {
                    option_html+=`<option value="${key}">${value}</option>`;
                });

                var option_rows=`<tr><td class="col-sm-3">
            <select  class="js-example-basic-single w-100 form-control attribute-select attribute_id_class" name="attribute_id__${attribute_set_id}[]">
                ${option_html} </select></td>
            <td>
            <input class="form-control price_class" type="number" name="price__${attribute_set_id}[]" placeholder="0">
            </td>
            <td>
            <input class="form-control sale_price_class" type="number" name="sale_price__${attribute_set_id}[]" placeholder="0">
            </td>
        <td>
            <input class="form-control quantity_class" type="number" name="quantity__${attribute_set_id}[]" placeholder="0">
        </td>
        <td>
            <ul class="order-option">
                <li>
                    <a href="javascript:void(0)" onclick="deleteAttribute(this)">
                        <i class="ri-delete-bin-line"></i>
                    </a>
                </li>
            </ul>
        </td></tr>`;
    
            __global_this.closest(".inventoryContainer").find(".attributeTableBody").append(option_rows);
            $('.js-example-basic-single').select2();
            updateSelectedAttributes();
            }
        });
   

    
   
   // loadAttributesForSelect(attribute_set_id, $newRowSelect);
    
   
})

function addMoreInventory(){
    var full_div=`                  <div class="card">
                                    <div  class="inventoryContainer">
                                        <div class="inventory-section">
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Attribute Set</label>
                                                        <div class="col-sm-9">
                                                            <select id="attribute_set" class="js-example-basic-single w-100 form-control attribute_set_id @error('name') is-invalid @enderror" name="attribute_set_id[]">
                                                                <option value="">Select Attribute Set</option>
                                                                @foreach ($attributeSets as $attributeSet)
                                                                    <option value="{{ $attributeSet->id }}">{{ $attributeSet->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                            </div>
                                            <table class="table variation-table table-responsive-sm mb-4">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Attribute</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Sale Price</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col"></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="attributeTableBody">
                                                <div>
                                                    <tr>
                                                        <td class="col-sm-3">
                                                            <select  class="js-example-basic-single w-100 form-control attribute_id_class @error('attribute') is-invalid @enderror attribute-select" name="attribute_id__">
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <input class="form-control price_class" type="number" name="price__1" placeholder="0">
                                                        </td>
                                                        <td>
                                                            <input class="form-control sale_price_class" type="number" name="sale_price__1" placeholder="0">
                                                        </td>
                                                        <td>
                                                            <input class="form-control quantity_class" type="number" name="quantity__1" placeholder="0">
                                                        </td>
                                                        <td>
                                                            <ul class="order-option">
                                                                <li><a href="javascript:void(0)" class="add_row_button"
                                                                        data-target=""><i
                                                                            class="ri-add-line"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                </div>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>`;
 $(document).find(".inventory_parentDiv").append(full_div);
 $('.js-example-basic-single').select2();

 
    $('.attribute_set_id').each(function() {
        var selectedValue = $(this).val();
        if (selectedValue) {
           selectedIds.push(selectedValue);
       }
    });

    // Apply the disabling logic to all selects
    $(".inventory_parentDiv").find('.attribute_set_id').each(function() {
        var $currentSelect = $(this);
        $currentSelect.find("option").each(function() {
            if (selectedIds.includes($(this).val())) {
               $(this).prop('disabled', true);
           }
       });
    });

    // Refresh the Select2 elements to reflect the changes
    $('.attribute_set_id').select2();

    console.log('Inventory updated and select options disabled accordingly.');
}


function addMoreAttribute(element) {
    var __global_this = element;
    
    console.log(__global_this)
    console.log(attribute_set_id)

    

    attributeCounter++; 

    var newRow = document.createElement('tr');
    newRow.innerHTML = `
        <td class="col-sm-3">
            <select  class="js-example-basic-single w-100 form-control attribute-select" name="attribute_id[]">
            </select>
        </td>
        <td>
            <input class="form-control price_class" type="number" name="price_attribute_placeholder" placeholder="0">
        </td>
        <td>
            <input class="form-control sale_price_class" type="number" name="sale_price_attribute_placeholder" placeholder="0">
        </td>
        <td>
            <input class="form-control quantity_class" type="number" name="quantity_attribute_placeholder" placeholder="0">
        </td>
        <td>
            <ul class="order-option">
                <li>
                    <a href="javascript:void(0)" onclick="deleteAttribute(this)">
                        <i class="ri-delete-bin-line"></i>
                    </a>
                </li>
            </ul>
        </td>
    `;
    document.querySelector('.attributeTableBody').appendChild(newRow);
    $('.js-example-basic-single').select2();

    add_attribute_name_change(__global_this,attribute_set_id);

    // var selectElement = newRow.querySelector('.attribute-select');

    // $(selectElement).on('change', function() {
    //     var selectedAttributeId = this.value;
      
    //     newRow.querySelector('.price_class').setAttribute('name', `price_${selectedAttributeId}`);
    //     newRow.querySelector('.sale_price_class').setAttribute('name', `sale_price_${selectedAttributeId}`);
    //     newRow.querySelector('.quantity_class').setAttribute('name', `quantity_${selectedAttributeId}`);
    // });


    // var selectElement = newRow.querySelector('select');
    // var attributeSetId = $('#attribute_set').val();
    // if (attributeSetId) {
    //     $.ajax({
    //         url: '/admin/get-attributs/' + attributeSetId,
    //         type: 'GET',
    //         dataType: 'json',
    //         success: function (data) {
    //             console.log(data);
    //             $.each(data, function (key, value) {
    //                 var option = new Option(value, key);
    //                 selectElement.add(option);
    //                 if (selectedAttributes.includes(key.toString())) {
    //                     option.disabled = true;
    //                 }
    //             });
    //             $(selectElement).select2();
    //         }
    //     });
    // }

    // $(newRow).find('.attribute-select').select2().on('change', function () {
    //     updateSelectedAttributes();
    // });

    // // Initial update for all rows in case this is the first row
    // updateSelectedAttributes();
}



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

// $(document).ready(function(){
//    $('#multiImg').on('change', function(){ //on file input change
//       if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
//       {
//           var data = $(this)[0].files; //this file data

//           $.each(data, function(index, file){ //loop though each file
//               if(/(\.|\/)(gif|jpe?g|png|jpg|jpeg|webp)$/i.test(file.type)){ //check supported file type
//                   var fRead = new FileReader(); //new filereader
//                   fRead.onload = (function(file){ //trigger function on successful read
//                   return function(e) {
//                       var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
//                   .height(80); //create image element
//                       $('#preview_img').append(img); //append image to output element
//                   };
//                   })(file);
//                   fRead.readAsDataURL(file); //URL representing the file's data.
//               }
//           });

//       }else{
//           alert("Your browser doesn't support File API!"); //if File API is absent
//       }
//    });
//   });

  $(document).ready(function(){
    $('#attribute_set').change(function(){
        var attributeSetId = $(this).val();
        if(attributeSetId)
        {
            $.ajax({
                url:'/admin/get-attributs/'+attributeSetId,
                type: 'GET',
                dataType: 'json',
                success:function(data){
                    console.log(data);
                   // $('#attribute_container').show();
                    $('#attributes').empty();
                    $('#attributes').prepend('<option value="">Select Attribute</option>');
                    $.each(data, function(key, value) {
                            $('#attributes').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        }
    });
  });

  $(document).ready(function() {
    // var videoProviders = ["Vimeo", "Youtube", "Dailymotion"];
    // var selectElement = $("select[name='video_type[]']");

    // // Dynamically add options to the select element
    // $.each(videoProviders, function(index, value) {
    //     selectElement.append($('<option>', {
    //         value: value,
    //         text : value
    //     }));
    // });

    // // Initialize Select2
    // $('.js-example-basic-single').select2();

    // Functionality to add more video input fields
    $('#add-video-field').click(function() {
        var newRow = `<div class="row ">
                        <div class="mb-4 row align-items-center">
                            <label class="col-sm-3 col-form-label form-label-title">Video Provider</label>
                            <div class="col-sm-3">
                                <select class="js-example-basic-single w-100" name="video_type[]">
                                    <option>Vimeo</option>
                                    <option>Youtube</option>
                                    <option>Dailymotion</option>
                                </select>
                            </div>
                        
                            
                        
                            <label class="col-sm-3 col-form-label form-label-title mb-0">Video Link</label>
                            <div class="col-sm-3">
                                <input class="form-control" name="video_link[]" type="text" placeholder="Video Link">
                            </div>
                        </div>
                    </div>`
        
        console.log(newRow);
        $('#videoContainer').append(newRow);
        $('.js-example-basic-single').select2();
    });
});

let imageCounter = 1;

function previewImage(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            const imagePreview = input.parentNode.parentNode.querySelector('.image-preview');
            imagePreview.src = e.target.result;
             imagePreview.style.width = '100px'; 
            imagePreview.style.height = '80px';
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$('#addMoreButton').on('click', function() {
    
    var imageField = $('.image-field').first().clone(true);
    
    const newImageInput = $(imageField).find('.image-input');
    const newImagePreview = $(imageField).find('.image-preview');
    const newErrorMessage = $(imageField).find('.error-message');
    
    newImageInput.attr('id', 'imageInput_' + imageCounter);
    newImageInput.attr('name', 'multi_img[]');
    newImageInput.val('');
    newImagePreview.attr('src', '');
    newImagePreview.css({'width': '', 'height': ''});
    newImagePreview.attr('id', 'imagePreview_' + imageCounter);
    newErrorMessage.text('');
    
    $('#imageFieldsContainer').append(imageField);
    newImageInput.on('change', function() {
        previewImage(this); 
    });

    imageCounter++;
});

let attributeCounter = 1;



// function updateSelectedAttributeSet() {
  
//     var selectedAttributeSets = [];
//     $('.attribute_set_id').each(function () {
//         var value = $(this).val();
//         if (value) {
//             selectedAttributeSets.push(value);
//            // alert(value);
//         }
//     });

//     // $('.attribute_set_id').each(function () {
//     //     var currentSelect = this;
//     //     $('option', this).each(function () {
//     //         alert('Disabling option with value: ' + this.value);
//     //         if (selectedAttributeSets.includes(this.value) && currentSelect.value !== this.value) {
                
//     //             $(this).prop('disabled', true);
//     //         } 
//     //     });
//     // });
//     // $('.attribute_set_id').select2();
// }


function updateSelectedAttributes() {
    // Reset selected attributes
    
    $('.attribute-select').each(function () {
        var value = $(this).val();
        //alert(value);
        
        if (value) {
            selectedAttributes.push(value);
        }
    });

    // Disable options that are already selected
    $('.attribute-select').each(function () {
        var currentSelect = this;
        $('option', this).each(function () {
            if (selectedAttributes.includes(this.value) && currentSelect.value !== this.value) {
                $(this).prop('disabled', true);
                
            } 
            // else {
            //     $(this).prop('disabled', false);
            // }
        });
    });
    
    //alert(selectedAttributes);
    // Refresh all select2 elements to apply the changes
    $('.attribute-select').select2();
}





    // function addMoreInventory() {
    //     var inventorySectionTemplate = document.querySelector('.inventory-section').cloneNode(true);
    //     var inputs = inventorySectionTemplate.querySelectorAll('select, input');
    //     inputs.forEach(function(input) {
    //         input.value = '';
    //     });
    //     document.getElementById('inventoryContainer').appendChild(inventorySectionTemplate);
    //     // $('.js-example-basic-single').select2();
    // }
    // document.getElementById('addMoreInventory').addEventListener('click', addMoreInventory);

    function deleteAttribute(element) {
    var row = element.closest('tr');
    row.remove();
    }


//     $(document).ready(function() {
//     $('.addMoreInventoryButton').click(function() {
//         // Clone the last '.inventory-section'
//         var $lastSection = $('.inventory-section').last();
//         var $clone = $lastSection.clone(true);

//         // Preserve selected 'attribute_set' value for the clone
//         var selectedAttributeSet = $lastSection.find('#attribute_set').val();

//         // Reset input fields in the cloned section, excluding the 'attribute_set' dropdown
//         $clone.find('input[type="text"], input[type="number"]').val('');
//         $clone.find('select').each(function() {
//             if (!$(this).is('#attribute_set')) {
//                 $(this).find('option').prop('selected', function() {
//                     return this.defaultSelected;
//                 });
//             }
//         });

//         // Append cloned section to the container
//         $('#inventoryContainer').append($clone);

//         // Reset Select2 and re-apply the selected value for 'attribute_set'
//         $clone.find('.js-example-basic-single').select2();
//         $clone.find('#attribute_set').val(selectedAttributeSet).trigger('change');

//         // Correct IDs and Names for the clone to ensure uniqueness
//         $clone.find('[id], [name]').each(function() {
//             var newId = $(this).attr('id') + '_' + new Date().getTime();
//             $(this).attr('id', newId);

//             if ($(this).attr('name')) {
//                 var newName = $(this).attr('name').replace(/\[\d+\]$/, '') + '[' + new Date().getTime() + ']';
//                 $(this).attr('name', newName);
//             }
//         });

//         // Note: You might need additional adjustments here to handle other specific elements within the cloned section.
//     });
// });

</script>
<script src="{{ asset('adminBackend/assets/js/select2.min.js') }}"></script>
<script src="{{ asset('adminBackend/assets/js/select2-custom.js') }}"></script>

<script src="{{ asset('adminBackend/assets/js/ckeditor.js') }}"></script>
<script src="{{ asset('adminBackend/assets/js/ckeditor-custom.js') }}"></script>

@endsection
