@extends('admin.admin-dashboard')
@section('title')
Admin Dashboard || Edit Product
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
                                    <h5>Product Inventory</h5>
                                </div>
                                <button type="button" class="btn btn-animation btn-md fw-bold mb-4 addMoreInventoryButton" data-bs-toggle="modal"
                                data-bs-target="#addInventory">+ Add Inventory</button>
    
    
                                <div class="inventory_parentDiv">
                                    <div  class="inventoryContainer">
                                        <div class="inventory-section">
                                            {{-- <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Attribute Set</label>
                                                        <div class="col-sm-9">
                                                            <select id="attribute_set" class="js-example-basic-single w-100 form-control attribute_set_id @error('name') is-invalid @enderror" name="attribute_set_id">
                                                                <option value="">Select Attribute Set</option>
                                                                @foreach ($attributeSets as $attributeSet)
                                                                    <option value="{{ $attributeSet->id }}">{{ $attributeSet->title }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                            </div>  --}}
                                             <table class="table variation-table table-responsive-sm mb-4">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Attribute Set</th>
                                                        <th scope="col">Attribute</th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Sale Price</th>
                                                        <th scope="col">Quantity</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="attributeTableBody">
                                                <div> 
                                                    @forelse ($product->inventory_stocks as $inventory_stock)
                                                        @php
                                                            $attribute_set = $attributeSets->where('id',$inventory_stock->inventory_details->attribute_set_id)->first();
                                                        @endphp
                                                        <tr>
                                                            <td>{{ $attribute_set->title }} </td>
                                                            <td>{{  $inventory_stock->inventory_details->title ?  $inventory_stock->inventory_details->title : '' }}</td>
                                                            <td>{{  $inventory_stock->price ? $inventory_stock->price : '' }}</td>
                                                            <td>{{  $inventory_stock->sale_price ? $inventory_stock->sale_price : ''  }}</td>
                                                            <td>{{  $inventory_stock->stock ? $inventory_stock->stock : '' }}</td>
                                                            <td>
                                                                @if($inventory_stock->status == 1)
                                                                        <span class="badge badge-success">Active</span>
                                                                    @elseif($inventory_stock->status == 0)
                                                                        <span class="badge badge-danger">In-Active</span>
                                                                    @endif
                                                            </td>
                                                            <td>
                                                                <ul>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="edit-inventory" data-bs-target="editInventory" data-inventory-id="{{ $inventory_stock->id }}">
                                                                            <i class="ri-pencil-line"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)">
                                                                            <i class="ri-delete-bin-line delete-list"  data-url="{{ route('inventory.destroy',$inventory_stock->id) }}"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        
                                                    @endforelse
                                                   
                                                </div>
                                                </tbody>
                                            </table> 
                                         </div>
                                    </div>
                                </div>
                                
                                <!-- Add Inventory Modal -->
                                <div class="modal fade theme-modal remove-coupon" id="addInventory" aria-hidden="true" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                   
                                        <div class="modal-content">
                                            <div class="modal-header d-block text-center">
                                                <h5 class="modal-title w-100" id="exampleModalLabel22">Add Inventory</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                            <form id="inventoryForm" class="theme-form theme-form-2 mega-form" action="" enctype="multipart/form-data">
                                                <div class="modal-body"> 
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-3 col-form-label form-label-title">Attribute Set</label>
                                                                    <div class="col-sm-9">
                                                                        <select id="attribute_set" class="js-example-basic-single-modal w-100 form-control attribute_set_id @error('attribute_set_id') is-invalid @enderror" name="attribute_set_id">
                                                                            <option value="">Select Attribute Set</option>
                                                                            @foreach ($attributeSets as $attributeSet)
                                                                                <option value="{{ $attributeSet->id }}">{{ $attributeSet->title }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        @error('attribute_set_id')
                                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                        </div>

                                                        <div class="mb-4 row align-items-center attribute_container" id="">
                                                            <label class="col-sm-3 col-form-label form-label-title">Attribute</label>
                                                            <div class="col-sm-9">
                                                                <select id="attributes" class="js-example-basic-single-modal attributes w-100 form-control @error('attribute_id') is-invalid @enderror" name="attribute_id">
                                                                    <option value="">Select Attribute</option>
                                                                </select>
                                                                @error('attribute_id')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-3 col-form-label form-label-title">Price</label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control price_class @error('inventory_price') is-invalid @enderror" type="number" id="inventory_price" name="inventory_price" placeholder="0">
                                                                        @error('inventory_price')
                                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                        </div>


                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-3 col-form-label form-label-title">Sale Price</label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control price_class" type="number" id="inventory_sale_price" name="inventory_sale_price" placeholder="0">
                                                                    </div>
                                                        </div>

                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-3 col-form-label form-label-title">Quantity</label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control price_class @error('inventory_quantity') is-invalid @enderror" type="number" id="inventory_quantity" name="inventory_quantity" placeholder="0">
                                                                        @error('inventory_quantity')
                                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                        </div>
                                                    <input type="hidden" id="product_id" name="product_id" value="{{ $product->id }}" />
                                                    
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-animation btn-md fw-bold mb-4" id="submitInventoryForm">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                   
                                    </div>
                                </div>

                                <!-- Edit Inventory Modal -->
                                <div class="modal fade theme-modal remove-coupon" id="editInventory" aria-hidden="true" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header d-block text-center">
                                                <h5 class="modal-title w-100" id="exampleModalLabel22">Edit Inventory</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                            <form id="editInventoryForm" class="theme-form theme-form-2 mega-form" action="" enctype="multipart/form-data">
                                                <div class="modal-body"> 
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-3 col-form-label form-label-title">Attribute Set</label>
                                                                    <div class="col-sm-9">
                                                                        <select id="edit_attribute_set" class="js-example-basic-single-modal w-100 form-control  @error('attribute_set_id') is-invalid @enderror" name="attribute_set_id">
                                                                            <option value="">Select Attribute Set</option>
                                                                            @foreach ($attributeSets as $attributeSet)
                                                                                <option value="{{ $attributeSet->id }}">{{ $attributeSet->title }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                        @error('attribute_set_id')
                                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                        </div>

                                                        <div class="mb-4 row align-items-center attribute_container" id="">
                                                            <label class="col-sm-3 col-form-label form-label-title">Attribute</label>
                                                            <div class="col-sm-9">
                                                                <select id="edit_attribute" class="js-example-basic-single-modal  w-100 attribute form-control @error('attribute_id') is-invalid @enderror" name="attribute_id">
                                                                    <option value="">Select Attribute</option>
                                                                </select>
                                                                @error('attribute_id')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-3 col-form-label form-label-title">Price</label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control price_class @error('inventory_price') is-invalid @enderror" type="number" id="edit_inventory_price" name="inventory_price" placeholder="0">
                                                                        @error('inventory_price')
                                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                        </div>


                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-3 col-form-label form-label-title">Sale Price</label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control price_class" type="number" id="edit_inventory_sale_price" name="inventory_sale_price" placeholder="0">
                                                                    </div>
                                                        </div>

                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-3 col-form-label form-label-title">Quantity</label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control price_class @error('inventory_quantity') is-invalid @enderror" type="number" id="edit_inventory_quantity" name="inventory_quantity" placeholder="0">
                                                                        @error('inventory_quantity')
                                                                            <div class="invalid-feedback">{{ $message }}</div>
                                                                        @enderror
                                                                    </div>
                                                        </div>
                                                        <input type="hidden" id="edit_product_id" name="product_id" value="{{ $product->id }}" />
                                                    
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-animation btn-md fw-bold mb-4" id="updateInventoryForm">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                   
                                    </div>
                                </div>

                                

                            </div>

                        </div>


                        <div class="card">

                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Video Information</h5>
                                </div>
                                <button type="button" class="btn btn-animation btn-md fw-bold mb-4 addMoreVideoButton" data-bs-toggle="modal"
                                data-bs-target="#addVideo">+ Add Video</button>
    
    
                                <div class="video_parentDiv">
                                    <div  class="videoContainer">
                                        <div class="video-section">
                                           
                                             <table class="table variation-table table-responsive-sm mb-4">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Video Type</th>
                                                        <th scope="col">Video Url</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="attributeTableBody">
                                                <div> 
                                                    @forelse ($product->videos as $video)
                                                        @php
                                                            
                                                        @endphp
                                                        <tr>
                                                            <td>{{ $video->video_detail->video_type }}</td>
                                                            <td>{{ $video->video_detail->video_link }}</td>
                                                            
                                                            <td>
                                                                <ul>
                                                                    <li>
                                                                        <a href="javascript:void(0)" class="edit-video" data-bs-target="edit-video" data-video-id="{{ $video->id }}">
                                                                            <i class="ri-pencil-line"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0)">
                                                                            <i class="ri-delete-bin-line delete-list"  data-url="{{ route('productvideo.destroy', $video->id) }}"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    @empty
                                                        
                                                    @endforelse
                                                   
                                                </div>
                                                </tbody>
                                            </table> 
                                         </div>
                                    </div>
                                </div>
                                
                                {{-- Add Video Modal --}}
                                <div class="modal fade theme-modal remove-coupon" id="addVideo" aria-hidden="true" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                   
                                        <div class="modal-content">
                                            <div class="modal-header d-block text-center">
                                                <h5 class="modal-title w-100" id="exampleModalLabel22">Add Video</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                            <form id="addVideoForm" class="theme-form theme-form-2 mega-form" action="" enctype="multipart/form-data">
                                                <div class="modal-body"> 
                                                    <div class="mb-4 row align-items-center video_container" id="">
                                                        <label class="col-sm-3 col-form-label form-label-title">Video Provider</label>
                                                        <div class="col-sm-9">
                                                            <select id="video_provider" class="js-example-basic-single-modal w-100 attribute form-control @error('attribute_id') is-invalid @enderror" name="video_provider">
                                                                <option value="">Select Provider</option>
                                                                <option value="vimeo">Vimeo</option>
                                                                <option value="youtube">Youtube</option>
                                                                <option value="dailymotion">Dailymotion</option>
                                                            </select>
                                                            @error('video_provider')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-sm-3 col-form-label form-label-title">Video link</label>
                                                                <div class="col-sm-9">
                                                                    <input class="form-control price_class @error('video_link') is-invalid @enderror" type="text" id="video_link" name="video_link" placeholder="video link">
                                                                </div>
                                                                @error('video_link')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                    </div>

                                                    <input type="hidden" id="video_product_id" name="product_id" value="{{ $product->id }}" />
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-animation btn-md fw-bold mb-4" id="">Submit</button>
                                                </div>
                                            </form>
                                        </div>
                                   
                                    </div>
                                </div>

                                {{-- Edit Video Modal --}}
                                <div class="modal fade theme-modal remove-coupon" id="editVideo" aria-hidden="true" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header d-block text-center">
                                                <h5 class="modal-title w-100" id="exampleModalLabel22">Edit Video</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </div>
                                            <form id="editVideoForm" class="theme-form theme-form-2 mega-form" action="" enctype="multipart/form-data">
                                                <div class="modal-body"> 
                                                        
                                                    <div class="mb-4 row align-items-center video_container" id="">
                                                        <label class="col-sm-3 col-form-label form-label-title">Video Provider</label>
                                                        <div class="col-sm-9">
                                                            <select id="edit_video_provider" class="js-example-basic-single-modal w-100 attribute form-control @error('attribute_id') is-invalid @enderror" name="video_provider">
                                                                <option value="">Select Provider</option>
                                                                <option value="vimeo">Vimeo</option>
                                                                <option value="youtube">Youtube</option>
                                                                <option value="dailymotion">Dailymotion</option>
                                                            </select>
                                                            @error('video_provider')
                                                                <div class="invalid-feedback">{{ $message }}</div>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                    <div class="mb-4 row align-items-center">
                                                        <label class="col-sm-3 col-form-label form-label-title">Video link</label>
                                                                <div class="col-sm-9">
                                                                    <input class="form-control price_class @error('video_link') is-invalid @enderror" type="text" id="edit_video_link" name="video_link" placeholder="video link">
                                                                </div>
                                                                @error('video_link')
                                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                                @enderror
                                                    </div>
                                                <input type="hidden" id="edit_video_product_id" name="product_id" value="{{ $product->id }}" />
                                                    
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-animation btn-md fw-bold mb-4" id="">Update</button>
                                                </div>
                                            </form>
                                        </div>
                                   
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-2">
                                    <h5>Product Information</h5>
                                </div>

                                <form class="theme-form theme-form-2 mega-form" action="{{ route('product.update',$product->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product
                                            Name</label>
                                        <div class="col-sm-9">
                                            <input type="hidden" name="id" value="{{ $product->id }}" />
                                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name"
                                                placeholder="Product Name" value="{{ $product->name }}"  value="{{ old('name') }}">
                                                @error('name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- <div class="modal fade theme-modal remove-coupon" id="addInventory" aria-hidden="true" tabindex="-1">
                                        <div class="modal-dialog modal-dialog-centered">
                                        <form id="inventoryForm" class="theme-form theme-form-2 mega-form">
                                            <div class="modal-content">
                                                <div class="modal-header d-block text-center">
                                                    <h5 class="modal-title w-100" id="exampleModalLabel22">Add Inventory</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-3 col-form-label form-label-title">Attribute Set</label>
                                                                    <div class="col-sm-9">
                                                                        <select id="attribute_set" class="js-example-basic-single-modal w-100 form-control attribute_set_id @error('name') is-invalid @enderror" name="attribute_set_id">
                                                                            <option value="">Select Attribute Set</option>
                                                                            @foreach ($attributeSets as $attributeSet)
                                                                                <option value="{{ $attributeSet->id }}">{{ $attributeSet->title }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                        </div>
    
                                                        <div class="mb-4 row align-items-center" id="attribute_container">
                                                            <label class="col-sm-3 col-form-label form-label-title">Attribute</label>
                                                            <div class="col-sm-9">
                                                                <select id="attributes" class="js-example-basic-single-modal w-100 form-control @error('attribute') is-invalid @enderror" name="attribute_id">
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-3 col-form-label form-label-title">Price</label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control price_class" type="number" name="price__1" placeholder="0">
                                                                    </div>
                                                        </div>
    
    
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-3 col-form-label form-label-title">Sale Price</label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control price_class" type="number" name="price__1" placeholder="0">
                                                                    </div>
                                                        </div>
    
                                                        <div class="mb-4 row align-items-center">
                                                            <label class="col-sm-3 col-form-label form-label-title">Quantity</label>
                                                                    <div class="col-sm-9">
                                                                        <input class="form-control price_class" type="number" name="price__1" placeholder="0">
                                                                    </div>
                                                        </div>
    
    
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-animation btn-md fw-bold" id="submitInventoryButton">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                        </div>
                                    </div> --}}

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product Name(বাংলা)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('translation_name') is-invalid @enderror" id="banglaInput" type="text" placeholder="Product Name(বাংলা)" name="translation_name" value="{{ $product->translations->translation_name }}" value="{{ old('translation_name') }}">
                                            @error('translation_name')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="editor" cols="30" rows="4" value={{ old('description') }}>{{ $product->description }}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product Content</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="" cols="1" rows="2" value="{{ old('content') }}">{{ $product->content }}</textarea>
                                            @error('content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product Content(বাংলা)</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control @error('content') is-invalid @enderror" name="translation_content" id="banglaInputContent" cols="1" rows="2"  value="{{ old('translation_content') }}">{{ $product->translations->content }}</textarea>
                                            @error('content')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Thumbnail
                                            Image</label>
                                        <div class="col-sm-5">
                                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ asset($product->image) }}" onChange="mainThamUrl(this)" value="{{ old(asset($product->image)) }}">
                                            @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <img class="col-sm-4 mb-4 row align-items-right" style="width: 100px; height: 80px;" src="{{ asset($product->image) }}" id="mainThmb" />
                                    </div>
                                    

                                    <div id="imageFieldsContainer">
                                        <label class="col-sm-3 col-form-label form-label-title">Multiple Images</label>
                                        @foreach ($product->multi_images as $multi_image)
                                        <div class="row">
                                            <div class="mb-4 row align-items-center image-field">
                                               
                                                <div class="col-sm-6">
                                                    <input type="file" class="form-control image-input" name="multi_img__{{ $multi_image->image_detail->id }}" onchange="previewImage(this)">
                                                    <div class="invalid-feedback error-message"></div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input class="ec_multi_images_id" type="hidden" name="ec_multi_images_id[]" value="{{ $multi_image->image_detail->id }}" />
                                                    <img class="image-preview mb-4 row align-items-right" style="height: 80px; width:100px;"  src="{{ asset($multi_image->image_detail->image) }}" />
                                                    
                                                </div>
                                                <div class="col-sm-2">
                                                    <button class="btn btn-danger" onclick="removeImagePreview(this)">X</button>
                                                </div>
                                            </div>
                                        </div>
                                            
                                        @endforeach
                                       
                                    </div>

                                    <button type="button" id="addMoreButton" class="btn btn-animation btn-md fw-bold mb-4">+ Add More Image</button>

                                    
                                        {{-- <div id="existing-video-fields" class="mb-4 row align-items-center"></div> --}}
                                        {{-- @forelse ($product->videos as $video)
                                        <div id="videoSection">
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title">Video Provider</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100" name="existing_video_type[]">
                                                        <option {{ $video->video_detail->video_type === 'Vimeo' ? 'selected' : '' }}>Vimeo</option>
                                                        <option {{ $video->video_detail->video_type === 'Youtube' ? 'selected' : '' }}>Youtube</option>
                                                        <option {{ $video->video_detail->video_type === 'Dailymotion' ? 'selected' : '' }}>Dailymotion</option>
                                                    </select>
                                                </div>
                                            </div>
                                        
                                            <div class="mb-4 row align-items-center">
                                                <label class="col-sm-3 col-form-label form-label-title mb-0">Video Link</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="existing_video_link[]" type="text" placeholder="Video Link" value="{{ $video->video_detail->video_link }}">
                                                    <input class="form-control" name="existing_video_id[]" type="hidden"  value="{{ $video->video_detail->id }}">
                                                </div>
                                            </div> 
                                            <div>
                                                <button class="btn btn-danger" onclick="removeVideoPreview(event, this)">Remove</button>
                                            </div>
                                        </div>
                                        @empty
                                            
                                        @endforelse
                                           
                                    
                                        <div id="video-fields" class="mb-4"></div>
                                      
                                        <button id="add-video-field" type="button" class="btn btn-animation btn-md fw-bold mb-4">+ Add More Video</button> --}}
                                   
                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Product
                                            Category</label>
                                            <div class="col-sm-9">
                                                <select class="js-example-basic-single w-100 form-control @error('categoryId') is-invalid @enderror" name="categoryId">
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
                                                            <option value="{{ $category->id  }}" {{ $product->categories->category_detail->id == $category->id ? 'selected' : '' }}>{{ $name }}</option>
                                                        @else
                                                            <option value="{{ $category->id }}" {{ $product->categories->category_detail->id == $category->id ? 'selected' : ''  }}>{{ $category->name }}</option>
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
                                                    <select class="js-example-basic-single w-100 form-control @error('brand_id') is-invalid @enderror" name="brand_id">
                                                        <option value="">Select Brand</option>
                                                        @foreach ($brands as $brand)
                                                            <option value="{{ $brand->id }}"{{ $product->brand_id == $brand->id ? 'selected' : '' }}>{{ $brand->name }}</option>
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
                                                    <select class="js-example-basic-single w-100 form-control @error('store_id') is-invalid @enderror" name="store_id">
                                                        <option value="">Select Store</option>
                                                        <option value="1" {{ $product->store_id == 1 ? 'selected' : '' }}>Store 1</option>
                                                        <option value="2" {{ $product->store_id == 2 ? 'selected' : '' }}>Store 2</option>
                                                    </select>
                                                    @error('store_id')
                                                        <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="col-sm-3 col-form-label form-label-title">Tax Id</label>
                                                <div class="col-sm-9">
                                                    <select class="js-example-basic-single w-100 form-control @error('tax_id') is-invalid @enderror" name="tax_id">
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
                                                    <select class="js-example-basic-single w-100 form-control @error('store_id') is-invalid @enderror" name="sale_type">
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
                                    </div>  --}}
                                    
                                        
                                   

                                    <!-- Modal -->
                                    
{{--                                     
                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('translation_name') is-invalid @enderror" id="banglaInput" type="number" placeholder="Product Price" name="price" value="{{ $product->price }}">
                                            @error('price')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    {{-- <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Product Sale Price</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('sale_price') is-invalid @enderror" id="banglaInput" type="number" placeholder="Product Sale Price" name="sale_price" value="{{ $product->sale_price }}">
                                            @error('sale_price')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div> --}}

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Quantity</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('quantity') quantity @enderror" name="quantity" type="number" placeholder="Quantity" value="{{ $product->quantity }}">
                                            @error('quantity')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Start Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('start_date') is-invalid @enderror" id="" type="date"  name="start_date" value="{{ date('Y-m-d', strtotime($product->start_date)) }}">
                                            @error('start_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">End Date</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('end_date') is-invalid @enderror" id="" type="date"  name="end_date" value="{{ date('Y-m-d', strtotime($product->end_date)) }}">
                                            @error('end_date')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Height(Cm)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="height" type="number" placeholder="height" value="{{ $product->height }}">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Weight
                                            (kg)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="weight" type="number" placeholder="Weight" value="{{ $product->weight }}">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Length
                                            (Meter)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="length" type="number" placeholder="length" value="{{ $product->length }}">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Wide
                                            (Meter)</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" name="wide" type="number" placeholder="wide" value="{{ $product->wide }}">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">SKU</label>
                                        <div class="col-sm-9">
                                            <input class="form-control @error('sku') is-invalid @enderror" type="text" name="sku" value="{{ $product->sku }}">
                                            @error('sku')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Stock Status</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="stock_status" value="{{ $product->stock_status }}">
                                        </div>
                                    </div>

                                    <div class="mb-4 row align-items-center">
                                        <label class="form-label-title col-sm-3 mb-0">Featured</label>
                                        <div class="form-group col-sm-9">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="featured" id="featuredYes" value="1" {{ $product->is_featured == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="featured" id="featuredNo" value="0" {{ $product->is_featured == 0 ? 'checked' : '' }}>
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
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="storehouse" id="featuredYes" value="1" {{ $product->with_storehouse_management == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="storehouse" id="featuredNo" value="0" {{ $product->with_storehouse_management == 0 ? 'checked' : '' }}>
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
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="stock" id="featuredYes" value="1" {{ $product->allow_checkout_when_out_of_stock == 1 ? 'checked' : '' }}>
                                                <label class="form-check-label" for="featuredYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input @error('featured') is-invalid @enderror" type="radio" name="stock" id="featuredNo" value="0" {{ $product->allow_checkout_when_out_of_stock == 0 ? 'checked' : '' }}>
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

$(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
          var data = $(this)[0].files; //this file data

          $.each(data, function(index, file){ //loop though each file
              if(/(\.|\/)(gif|jpe?g|png|jpg|jpeg|webp)$/i.test(file.type)){ //check supported file type
                  var fRead = new FileReader(); //new filereader
                  fRead.onload = (function(file){ //trigger function on successful read
                  return function(e) {
                      var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                  .height(80); //create image element
                      $('#preview_img').append(img); //append image to output element
                  };
                  })(file);
                  fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });

      }

      else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });

  $(document).ready(function(){
    $('.attribute_set_id').change(function(){
        var attributeSetId = $(this).val();
        if(attributeSetId)
        {
            $.ajax({
                url:'/admin/get-attributs/'+attributeSetId,
                type: 'GET',
                dataType: 'json',
                success:function(data){
                    // console.log(data);
                    // console.log(attributeSetId);
                    $('.attribute_container').show();
                    $('.attributes').empty();
                    $('.attributes').val(data.attribute).trigger('change');
                    $.each(data, function(key, value) {
                            $('.attributes').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        }
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
function removeImagePreview(button) {
    var imageField = button.parentNode.parentNode;
    imageField.remove();
};

function removeVideoPreview(event, button) {
    event.preventDefault();
    var parentDiv = button.parentNode.parentNode;
    
    //console.log(parentDiv);
    parentDiv.remove();
}





</script>
<script src="{{ asset('adminBackend/assets/js/select2.min.js') }}"></script>
<script src="{{ asset('adminBackend/assets/js/select2-custom.js') }}"></script>

<script src="{{ asset('adminBackend/assets/js/ckeditor.js') }}"></script>
<script src="{{ asset('adminBackend/assets/js/ckeditor-custom.js') }}"></script>

<script>
$(document).ready(function() {

    $('.js-example-basic-single').select2();
    $('#addInventory').on('shown.bs.modal', function() {
        $('.js-example-basic-single-modal').select2({
            dropdownParent: $('#addInventory')
        });
    });

    $('#addInventory').on('hidden.bs.modal', function() {
        $('.js-example-basic-single').select2();
    });
});

$(document).ready(function(){
    $('#inventoryForm').submit(function(e){
        e.preventDefault();
        var data = {
            attribute_set_id : $('#attribute_set').val(),
            attribute_id : $('#attributes').val(),
            inventory_price : $('#inventory_price').val(),
            inventory_sale_price : $('#inventory_sale_price').val(),
            inventory_quantity : $('#inventory_quantity').val(),
            product_id : $('#product_id').val(),
        };

       
        $.ajax({
            url:'/admin/inventory',
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(data),
            
            success: function(response) {
                $('#addInventory').find('input').each(function() {
                    $(this).val('');
                });
                $('#addInventory').find('select').each(function() {
                    $(this).prop('selectedIndex', 0); 
                });
                $('#addInventory').modal('hide');
                
                if(response['alert-type'] === 'success') {
                    toastr.success(response.message);
                    location.reload();
                } else if(response['alert-type'] === 'error') {
                    toastr.error(response.message);
                } 
            },
            error: function(xhr) {
                if(xhr.status === 422) { 
                    var errors = xhr.responseJSON.errors;
                    $('.is-invalid').removeClass('is-invalid');
                    $('.invalid-feedback').remove();

                    
                    $.each(errors, function(field, messages) {
                        var inputField = $('[name="' + field + '"]');
                        inputField.addClass('is-invalid');
                        inputField.after('<div class="invalid-feedback">' + messages[0] + '</div>');
                    });
                }
            },
        });
    });
});



$(document).ready(function() {
    $(document).on('click', '.edit-inventory', function() {

            var inventoryId = $(this).attr('data-inventory-id');
            //console.log(inventoryId);
            $('#editInventoryForm').data('inventory-id', inventoryId);
            $.ajax({
                url: '/admin/get-inventory-details/' + inventoryId,
                type: 'GET',
                dataType : 'json',
                success: function(data) {
                    //console.log(data);
                    $('.attributes').empty();
                    attribute = data.attribute;
                    $('#edit_attribute_set').change(function(){
                        var attributeSetId = $(this).val();
                        
                        if(attributeSetId)
                        {
                            $.ajax({
                                url:'/admin/get-attributs/'+attributeSetId,
                                type: 'GET',
                                dataType: 'json',
                                success:function(data){
                                    console.log(data);
                                    console.log(attribute);
                                    $('#edit_attribute').empty();
                                    $.each(data, function(key, value) {
                                        $('#edit_attribute').append('<option value="' + key + '">' + value + '</option>');
                                    });
                                    $('#edit_attribute').val(attribute).trigger('change');
                                }
                            });
                        }
                    });
                    
                      
                    $('#edit_attribute_set').val(data.attribute_set_id).trigger('change');
                    
                    
                    $('#edit_inventory_price').val(data.price);
                    $('#edit_inventory_sale_price').val(data.sale_price);
                    $('#edit_inventory_quantity').val(data.quantity);
                    
                },
            });
            $('#editInventory').modal('show');
            $('.js-example-basic-single-modal').select2({
                dropdownParent: $('#editInventory')
            });
            $('#editInventory').on('hidden.bs.modal', function() {
                $('.js-example-basic-single').select2();
                $('#editInventory').find('input').each(function() {
                        $(this).val('');
                    });
                    $('#editInventory').find('select').each(function() {
                        $(this).prop('selectedIndex', 0); 
                    });
            });
       
    });

    $('#editInventoryForm').submit(function(e){
        var inventoryId = $(this).data('inventory-id');
        console.log(inventoryId);
        e.preventDefault();
        var data = {
            attribute_set_id : $('#edit_attribute_set').val(),
            attribute_id : $('#edit_attribute').val(),
            inventory_price : $('#edit_inventory_price').val(),
            inventory_sale_price : $('#edit_inventory_sale_price').val(),
            inventory_quantity : $('#edit_inventory_quantity').val(),
            product_id : $('#edit_product_id').val(),
        };
        $.ajax({
            url:'/admin/inventory/' + inventoryId,
            type: 'PUT',
            contentType: 'application/json',
            data: JSON.stringify(data),
            success: function(response) {
                $('#editInventory').find('input').each(function() {
                    $(this).val('');
                });
                $('#editInventory').find('select').each(function() {
                    $(this).prop('selectedIndex', 0); 
                });
                $('#editInventory').modal('hide');
                
                if(response['alert-type'] === 'success') {
                    toastr.success(response.message);
                    location.reload();
                } else if(response['alert-type'] === 'error') {
                    toastr.error(response.message);
                } 
            },
            error: function(xhr) {
                if(xhr.status === 422) { 
                    var errors = xhr.responseJSON.errors;
                    $('.is-invalid').removeClass('is-invalid');
                    $('.invalid-feedback').remove();

                    
                    $.each(errors, function(field, messages) {
                        var inputField = $('[name="' + field + '"]');
                        inputField.addClass('is-invalid');
                        inputField.after('<div class="invalid-feedback">' + messages[0] + '</div>');
                    });
                }
            },

        });
    });

    $('.js-example-basic-single').select2();
    $('#addVideo').on('shown.bs.modal', function() {
        $('.js-example-basic-single-modal').select2({
            dropdownParent: $('#addVideo')
        });
    });

    $('#addVideo').on('hidden.bs.modal', function() {
        $('.js-example-basic-single').select2();
    });


    $('#addVideoForm').submit(function(e){
        e.preventDefault();
        var data = {
            video_provider : $('#video_provider').val(),
            video_link : $('#video_link').val(),
            product_id : $('#video_product_id').val(),
        };

        //console.log(data);
       
        $.ajax({
            url:'/admin/productvideo',
            type: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(data),
            
            success: function(response) {
                $('#addVideoForm').find('input').each(function() {
                    $(this).val('');
                });
                $('#addVideoForm').find('select').each(function() {
                    $(this).prop('selectedIndex', 0); 
                });
                $('#addVideoForm').modal('hide');
                
                if(response['alert-type'] === 'success') {
                    toastr.success(response.message);
                    location.reload();
                } else if(response['alert-type'] === 'error') {
                    toastr.error(response.message);
                } 
            },
            error: function(xhr) {
                if(xhr.status === 422) { 
                    var errors = xhr.responseJSON.errors;
                    $('.is-invalid').removeClass('is-invalid');
                    $('.invalid-feedback').remove();

                    
                    $.each(errors, function(field, messages) {
                        var inputField = $('[name="' + field + '"]');
                        inputField.addClass('is-invalid');
                        inputField.after('<div class="invalid-feedback">' + messages[0] + '</div>');
                    });
                }
            },
        });
    });

    $(document).on('click', '.edit-video', function() {
        
        var videoId = $(this).attr('data-video-id');
        //console.log(videoId);
        $('#editVideoForm').data('video-id', videoId);
        $.ajax({
            url: '/admin/get-video-details/' + videoId,
            type: 'GET',
            dataType : 'json',
            success: function(data) {
                //console.log(data);
                    $('#edit_video_provider').val(data.video_type).trigger('change');
                    $('#edit_video_link').val(data.video_link);
                
            },
        });
        $('#editVideo').modal('show');
        $('.js-example-basic-single-modal').select2({
            dropdownParent: $('#editVideo')
        });
        $('#editVideo').on('hidden.bs.modal', function() {
            $('.js-example-basic-single').select2();
            $('#editVideo').find('input').each(function() {
                    $(this).val('');
            });
            $('#editVideo').find('select').each(function() {
                    $(this).prop('selectedIndex', 0); 
            });
        });
   
    });

    $('#editVideoForm').submit(function(e){
        var videoId = $(this).data('video-id');
        //console.log(inventoryId);
        e.preventDefault();
        var data = {
            video_type : $('#edit_video_provider').val(),
            video_link : $('#edit_video_link').val(),
            product_id : $('#edit_video_product_id').val(),
        };
        //console.log(data);
        $.ajax({
            url:'/admin/productvideo/' + videoId,
            type: 'PUT',
            contentType: 'application/json',
            data: JSON.stringify(data),
            // console.log(data),
            success: function(response) {
                $('#editVideo').find('input').each(function() {
                    $(this).val('');
                });
                $('#editVideo').find('select').each(function() {
                    $(this).prop('selectedIndex', 0); 
                });
                $('#editVideo').modal('hide');
                
                if(response['alert-type'] === 'success') {
                    toastr.success(response.message);
                    location.reload();
                } else if(response['alert-type'] === 'error') {
                    toastr.error(response.message);
                } 
            },
            error: function(xhr) {
                if(xhr.status === 422) { 
                    var errors = xhr.responseJSON.errors;
                    $('.is-invalid').removeClass('is-invalid');
                    $('.invalid-feedback').remove();

                    
                    $.each(errors, function(field, messages) {
                        var inputField = $('[name="' + field + '"]');
                        inputField.addClass('is-invalid');
                        inputField.after('<div class="invalid-feedback">' + messages[0] + '</div>');
                    });
                }
            },

        });
    });

});



</script>
@endsection
