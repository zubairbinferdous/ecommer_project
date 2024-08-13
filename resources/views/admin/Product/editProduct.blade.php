{{-- @section('script')
@endsection --}}

<style>
    .ck-editor__editable[role="textbox"] {
        /* Editing area */
        min-height: 200px;
        min-width: 100px;
    }

    .selected-option {
        background-color: lightblue;
    }

    .hiddin_element {
        display: none !important;
        visibility: hidden !important;
        opacity: -1;
        border: 5px solid red;
    }

    .preview-image {
        max-width: 50px;
        max-height: 50px;
        border-radius: 50%;
        margin-top: 10px;
        background-color: yellow;
        margin-right: 10px;
    }

    #imagePreview {
        display: flex;
        width: 300px;
    }

    .remove-btn {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        color: aliceblue;
        background-color: rgb(32, 32, 32);
    }

    .fileInput {
        cursor: pointer;
        height: 100%;
        position: absolute;
        top: 0;
        right: 0;
        z-index: 99;
        /*This makes the button huge. If you want a bigger button, increase the font size*/
        font-size: 50px;
        /*Opacity settings for all browsers*/
        opacity: 0;
        -moz-opacity: 0;
        filter: progid:DXImageTransform.Microsoft.Alpha(opacity=0)
    }

    .fileName {
        width: 98px;
    }

    .fileName1 {
        width: 105px;
    }

    input[type="file"] {
        display: none;
    }

    .custom-file-upload {
        border: 1px solid #ccc;
        display: inline-block;
        padding: 6px 12px;
        cursor: pointer;
        background-color: black;
        color: aliceblue;
        border-radius: 8px;
    }
</style>
@extends('admin.admin_index')
@section('dashborad_header')
    @foreach ($getProduct as $item)
        <div class="main-content mt-8">
            <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- file upload  --}}
                <div class="hiddin_element">
                    <div action="/file-upload" class="dropzone" class=""></div>
                </div>
                <div id="valueShow"></div>


                <div class="grid grid-cols-12 gap-x-6">

                    <div class="col-span-8 lg:col-span-8">
                        <div class="box">
                            <div class="box-header">
                                <h5 class="box-title">Edit Product Area</h5>
                            </div>


                            <div class="box-body">
                                <div class="space-y-2">
                                    {{-- <label class="ti-form-label mb-0"> Product Type {{ $item->ProductType }}</label> --}}
                                    {{-- <select name="ProductType" id="pvSimple" class="ti-form-select sm:p-4">
                                        <option value="Simple"> {{ $item->ProductType }} </option>
                                    </select> --}}

                                </div>
                                <div class=" mt-5" id="SimpleProductData">
                                    <div class="space-y-2 ">
                                        <label class="ti-form-label mb-1">Product regular price</label>
                                        <input type="text" class="my-auto ti-form-input " placeholder=""
                                            name="regularPrice" value="{{ $item->Regular_price }}">
                                    </div>
                                    <div class="space-y-2 mt-5">
                                        <label class="ti-form-label mb-1">Product sell price</label>
                                        <input type="text" class="my-auto ti-form-input " placeholder="" name="sellPrice"
                                            value="{{ $item->Sell_price }}">
                                    </div>
                                </div>

                                {{-- <div class="displayProduct" id="VariationProductData">
                                <div class="space-y-2 mt-5">
                                    <div class="flex justify-between">
                                        <label class="ti-form-label mb-0">Set Product Attribute</label>
                                        <button id="duplicateButton"
                                            class="ti-btn bg-indigo-500 text-white hover:bg-indigo-600 focus:ring-indigo-500 dark:focus:ring-offset-white/10">+</button>
                                    </div>
                                    <div class="col-md">
                                        <div class="form-check form-check-inline mt-3 flex">
                                            @foreach ($attribute as $item)
                                                <div class="Attribute-area mr-5">
                                                    <div class="Attribute-item" id="checkAttribute_{{ $item->id }}">

                                                        <label class="form-check-label" for="attribute_{{ $item->id }}">
                                                            {{ $item->attribute_name }}
                                                        </label>
                                                        <input class="form-check-input attribute-checkbox" type="checkbox"
                                                            value="{{ $item->id }}" name="attributeId[]"
                                                            id="attribute_{{ $item->id }}"onchange="toggleDropdown('{{ $item->id }}')">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="" id="SetAttributeValue">
                                            <div class="flex flex-wrap grid grid-cols-2 gap-4">
                                                @foreach ($attribute as $item)
                                                    <div class="Attribute-item-value mr-3" id="dropdown_{{ $item->id }}"
                                                        style="display: none;">
                                                        <label class="ti-form-label mt-3">{{ $item->attribute_name }}<span
                                                                class="ml-1">VALUE</span></label>
                                                        <select
                                                            class="ti-form-select sm:p-4 attribute-dropdown"name="attributeValue[{{ $item->id }}][]"
                                                            required onchange="disableOption(event)" id="attributeValue">
                                                            <option value="null">Null</option>
                                                            @foreach ($item->attributeValue as $itemValue)
                                                                <option value="{{ $itemValue->attribute_values_name }}">
                                                                    {{ $itemValue->attribute_values_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div id="Attribute-item-value">
                                                <div class="flex mt-2 grid grid-cols-2 gap-4">
                                                    <div class="mr-4 mt-2">
                                                        <label class="ti-form-label mb-0">Product Price </label>
                                                        <input type="number" class="my-auto ti-form-input mt-1"
                                                            placeholder="Product Price" name="productPrice[]">
                                                    </div>
                                                    <div class="mr-3 mt-2">
                                                        <label class="ti-form-label mb-0">Product quantity</label>
                                                        <input type="number" class="my-auto ti-form-input mt-1"
                                                            placeholder="Product Quantity" name="productQuantity[]">
                                                    </div>

                                                    <div class="mr-3 mt-2">
                                                        <label class="ti-form-label mb-0">Product Description</label>
                                                        <textarea class="ti-form-input" name="AttributeDescription[]" id="" cols="5" rows="5"></textarea>
                                                    </div>
                                                    <div class="mr-3 mt-2">
                                                        <label class="ti-form-label mb-0">Product Img Upload</label>
                                                        <input type="file" name="ImgAttribute[]" id="file-input-medium"
                                                            class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/70
                                                      file:bg-transparent file:border-0
                                                      file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4
                                                      file:py-3 file:px-4
                                                      dark:file:bg-black/20 dark:file:text-white/70">
                                                    </div>
                                                    <div id="duplicatedDelete" class="mt-5"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            </div>


                            <div class="box-body">
                                <div class="">
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Product Name</label>
                                        <input type="text" class="my-auto ti-form-input" placeholder=""
                                            name="productName" required id="ProductNameId" value="{{ $item->ProductName }}">
                                    </div>
                                </div>
                                <div class="my-5">
                                </div>

                                <div class="col-span-12 lg:col-span-4">
                                </div>

                                <div class="">
                                    <div class="">
                                        <div class="box">
                                            <div class="box-header">
                                                <label class="ti-form-label mb-0">Product Short Description</label>
                                            </div>
                                            <div class="box-body">

                                                <textarea id="short_editord" class="ti-form-input" rows="9" name="ShortDescription" required> {{ $item->ProductShortDescription }} </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-12">
                                        <div class="box">
                                            <div class="box-header flex justify-between">
                                                <label class="ti-form-label mb-0 pt-3">Product Description </label>
                                                <div class="">
                                                    <button type="button"
                                                        class="ti-btn bg-indigo-500 text-white hover:bg-indigo-600 focus:ring-indigo-500 dark:focus:ring-offset-white/10"
                                                        id="addEditorBtn">
                                                        +
                                                    </button>

                                                </div>
                                            </div>
                                            <div class="box-body" id="description">
                                                <div>
                                                    <label class="ti-form-label mb-2">Product Description</label>

                                                    <textarea class="ti-form-input" name="description" id="dis_editor" cols="" rows="">{{ $item->description }}</textarea>
                                                </div>
                                            </div>

                                            <div class=""></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-12">
                                        <div class="box">
                                            <div class="box-header">
                                                <label class="ti-form-label mb-0">Product SEO Section </label>
                                            </div>
                                            <div class="box-body">

                                                <div class="space-y-2 mb-5">
                                                    <label class="ti-form-label mb-1">Product Seo Title</label>
                                                    <input type="text" class="my-auto ti-form-input " placeholder=""
                                                        name="seoTitle" id="seoTitleId" required
                                                        value="{{ $item->SeoTitle }}">
                                                </div>


                                                <div class="space-y-2 mb-5">
                                                    <label class="ti-form-label mb-1">Product Seo Description</label>
                                                    <textarea class="ti-form-input" rows="9" name="seoDescription" required id="seoDescription">{{ $item->SeoDescription }}</textarea>
                                                </div>

                                                <div class="space-y-2 mb-5">
                                                    <label class="ti-form-label mb-1">Product Seo Image</label>
                                                    <div>

                                                        <label for="fileSeo" class="custom-file-upload">
                                                            Upload Seo Image
                                                        </label>
                                                        <input type="file" name="fileSeo" id="fileSeo"
                                                            class="fileName" />
                                                        <div id="imagePreviewSeo" class="preview-container"></div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grid grid-cols-12 gap-6">
                                    <div class="col-span-12">
                                        <div class="box">
                                            <div class="box-header flex justify-between">
                                                <label class="ti-form-label mb-0 pt-3"> User Inputs Fields
                                                </label>
                                                <button type="button"
                                                    class="ti-btn bg-indigo-500 text-white hover:bg-indigo-600 focus:ring-indigo-500 dark:focus:ring-offset-white/10"
                                                    id="addItemBtn">
                                                    add more item
                                                </button>
                                            </div>
                                            <div class="box-body">
                                                <div id="item-data">
                                                    <div class="space-y-2  mb-3">
                                                        <label class="ti-form-label mb-0">Product Title</label>
                                                        <input type="text" name="itemTitle[]"
                                                            class="my-auto ti-form-input" placeholder="Product Title">

                                                        <label class="ti-form-label mb-0">Product Price</label>
                                                        <input type="number" name="itemPrice[]"
                                                            class="my-auto ti-form-input" placeholder="Product Price">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-span-4 lg:col-span-4">
                        <div class="box">
                            <div class="col-span-12 lg:col-span-4">
                                <div class="box ">
                                    <div class="box-header p-3">
                                        <label class="ti-form-label mb-0">Single Product Image Upload</label>
                                    </div>

                                    <div class="box-body">
                                        <label for="fileInputOne" class="custom-file-upload">
                                            Single Product Image
                                        </label>
                                        <input type="file" id="fileInputOne" accept="image/*" name="fileImg"
                                            class="fileName" />
                                        <div id="imagePreviewOne" class="preview-container"></div>

                                        <img src="{{ asset($item->ProductImages) }}" alt="" class="w-24 m-3">
                                    </div>


                                    <div class="box">
                                        <div class="box-header p-3">
                                            <label class="ti-form-label mb-0"> Multiple Product Image Upload</label>
                                        </div>

                                        <div class="box-body">
                                            <label for="fileInputEdit" class="custom-file-upload">
                                                Multiple Product Image
                                            </label>
                                            <input type="file" name="fileMulti[]" id="fileInputEdit" accept="image/*"
                                                multiple class="fileName1" />
                                            <div id="editImagePreview" class="preview-container"></div>

                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-12 xl:col-span-4 p-3">
                                    <div class="box ">
                                        <div class="box-header">
                                            <label class="ti-form-label mb-0">Select Category</label>
                                        </div>
                                        <div class="box-body ">
                                            <div class="space-y-2">
                                                <div class="flex gap-x-6">
                                                    <div class="flex">
                                                        {{-- 
                                                        <input type="checkbox" class="ti-form-checkbox mt-0.5"
                                                            id="hs-checkbox-group-{{ $item->Category_id }}"
                                                            name="category[]" value="{{ $item->Category_id }}">
                                                        <label for="hs-checkbox-group-{{ $item->id }}"
                                                            class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70 pr-3">
                                                            {{ $item->category_title }}
                                                        </label> --}}

                                                        <input type="checkbox" id="level">
                                                        <label for="level">0nw</label>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-3 p-3">
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Placement in shop</label>
                                        <input type="number" name="position" class="my-auto ti-form-input"
                                            placeholder="" value="{{ $item->PlacementInShop }}">
                                    </div>
                                </div>

                                <div class="my-3  p-3">
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Product Status</label>
                                        <select class="ti-form-select sm:p-4" name="status" required>
                                            <option selected="">{{ $item->ProductStatus }}</option>
                                            <option>Active</option>
                                            <option>De-active</option>
                                            <option>Pending</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="my-3 p-3">
                                    <div class="box">
                                        <div class="box-header">
                                            <label class="ti-form-label mb-0">Product Schedule </label>
                                        </div>
                                        <div class="box-body">
                                            <div class="flex rounded-sm shadow-sm">
                                                <input type="date" name="schedule"
                                                    value="{{ $item->ProductSchedule }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="ti-btn ti-btn-primary">Submit Product</button>
            </form>
        </div>
    @endforeach
@endsection

@section('script')
    <script>
        ClassicEditor
            .create(document.querySelector('#short_editor'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#dis_editor'))
            .catch(error => {
                console.error(error);
            });
        ClassicEditor
            .create(document.querySelector('#act_editor'))
            .catch(error => {
                console.error(error);
            });

        var count = 0;


        document.getElementById('addEditorBtn').addEventListener('click', function() {
            var id = count++;
            // Clone the HTML content
            var newContent = document.createElement('div');
            newContent.innerHTML = `
        <div>
            <label class="ti-form-label mt-7">Product images</label>
            <label for="file-input-medium" class="sr-only">Choose file</label>
            <input type="file" name="ExtraFileDescription[]" id="file-input-medium" class="block mb-2 w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/70 file:bg-transparent file:border-0 file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4 file:py-3 file:px-4 dark:file:bg-black/20 dark:file:text-white/70" required>

            <label class="ti-form-label mb-2">Product Description</label>
            <textarea name="ExtraDescription[]" id="dis_editor${id}" cols="" rows="" ></textarea>

            <button class="removeEditorBtn ti-btn bg-indigo-500 text-white hover:bg-indigo-600 focus:ring-indigo-500 dark:focus:ring-offset-white/10" data-id="${id}">Remove</button>
        </div>
    `;


            var boxBody = document.querySelector('#description');
            boxBody.appendChild(newContent);

            ClassicEditor
                .create(document.querySelector(`#dis_editor${id}`))
                .catch(error => {
                    console.error(error);
                });
        });


        function removeEditor(event) {
            var id = event.target.dataset.id;
            var elementToRemove = document.querySelector(`#dis_editor${id}`).parentElement;
            elementToRemove.remove();
        }

        // Add event listener to dynamically added remove buttons
        document.addEventListener('click', function(event) {
            if (event.target && event.target.classList.contains('removeEditorBtn')) {
                removeEditor(event);
            }
        });
    </script>

    <script>
        var count = 0;
        document.getElementById('addItemBtn').addEventListener('click', function() {
            var id = count++;
            var newContent = document.createElement('div');
            newContent.innerHTML = `
        <div class="item" id="item-${id}">
            <div class="space-y-2 mb-3">
            <label class="ti-form-label mb-0">Product Title</label>
            <input type="text" name="itemTitle[]" class="my-auto ti-form-input"  placeholder="Product Title">
            <label class="ti-form-label mb-0">Product Price</label>
            <input type="number" name="itemPrice[]" class="my-auto ti-form-input" placeholder="Product Price">
            </div>
            <button class="removeBtn ti-btn bg-indigo-500 text-white hover:bg-indigo-600 focus:ring-indigo-500 dark:focus:ring-offset-white/10" id="removeBtn-${id}" data-id="${id}">Remove</button>
        </div>
        `;

            var boxBody = document.querySelector('#item-data');
            boxBody.appendChild(newContent);

            // Add event listener for remove button
            newContent.querySelector(`#removeBtn-${id}`).addEventListener('click', function() {
                var itemId = this.getAttribute('data-id');
                var itemToRemove = document.getElementById('item-' + itemId);
                itemToRemove.remove();
            });
        });
    </script>
    <script>
        document.getElementById('short_editord').addEventListener('input', function() {
            var shortDescriptionValue = this.value;
            document.getElementById('seoDescription').value = shortDescriptionValue;
        });
    </script>

    <script>
        // Function to display the uploaded images
        function previewImages(event) {
            const files = event.target.files;
            const previewContainer = document.getElementById("editImagePreview");
            previewContainer.innerHTML = ""; // Clear existing previews

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function() {
                        const img = document.createElement("img");
                        img.src = reader.result;
                        img.classList.add("preview-image");

                        const previewItem = document.createElement("div");
                        previewItem.classList.add("preview-item");
                        previewItem.appendChild(img);

                        const removeBtn = document.createElement("button");
                        removeBtn.classList.add("remove-btn");
                        removeBtn.innerHTML = "X";
                        removeBtn.addEventListener("click", function() {
                            previewContainer.removeChild(previewItem);
                        });

                        previewItem.appendChild(removeBtn);
                        previewContainer.appendChild(previewItem);
                    }
                    reader.readAsDataURL(file);
                }
            }
        }

        // Function to remove all uploaded images 


        // Event listener for file input change
        document.getElementById("fileInputEdit").addEventListener("change", previewImages);



        // // Function to display the uploaded images
        function previewImagesOneEdit(event) {
            const files = event.target.files;
            const previewContainer = document.getElementById("imagePreviewOne");
            const previewContainerSeo = document.getElementById("fileSeo");
            previewContainer.innerHTML = "";

            console.log('hello')

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function() {
                        const img = document.createElement("img");
                        img.src = reader.result;
                        img.classList.add("preview-image");

                        const previewItem = document.createElement("div");
                        previewItem.classList.add("preview-item");
                        previewItem.appendChild(img);

                        const removeBtn = document.createElement("button");
                        removeBtn.classList.add("remove-btn");
                        removeBtn.innerHTML = "X";
                        removeBtn.addEventListener("click", function() {
                            previewContainer.removeChild(previewItem);
                        });
                        previewItem.appendChild(removeBtn);

                        previewContainer.appendChild(previewItem);

                    }
                    reader.readAsDataURL(file);
                }
            }
        }

        // Function to remove all uploaded images

        // Event listener for file input change
        document.getElementById("fileInputOne").addEventListener("change", previewImagesOneEdit);






        // // Function to display the uploaded images
        function previewImagesSeo(event) {
            const files = event.target.files;
            const previewContainer = document.getElementById("imagePreviewSeo");
            previewContainer.innerHTML = ""; // Clear existing previews

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function() {
                        const img = document.createElement("img");
                        img.src = reader.result;
                        img.classList.add("preview-image");

                        const previewItem = document.createElement("div");
                        previewItem.classList.add("preview-item");
                        previewItem.appendChild(img);

                        const removeBtn = document.createElement("button");
                        removeBtn.classList.add("remove-btn");
                        removeBtn.innerHTML = "X";
                        removeBtn.addEventListener("click", function() {
                            previewContainer.removeChild(previewItem);
                        });
                        previewItem.appendChild(removeBtn);

                        previewContainer.appendChild(previewItem);
                    }
                    reader.readAsDataURL(file);
                }
            }
        }

        // Function to remove all uploaded images

        // Event listener for file input change
        document.getElementById("fileSeo").addEventListener("change", previewImagesSeo);
    </script>
@endsection
