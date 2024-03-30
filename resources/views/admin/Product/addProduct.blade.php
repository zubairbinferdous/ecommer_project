<style>
    .ck-editor__editable[role="textbox"] {
        /* Editing area */
        min-height: 200px;
        min-width: 100px;
    }

    .selected-option {
        background-color: lightblue;
    }
</style>
@extends('admin.admin_index')
@section('dashborad_header')
    <div class="main-content">
        <div class="grid grid-cols-12 gap-x-6 mt-12">
            <div class="col-span-12">
                <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    @php
                        $productID = substr(mt_rand(10000000, 99999999), 0, 7);
                    @endphp

                    <div class="space-y-2 mt-5">
                        <input type="hidden" class="my-auto ti-form-input" name="ProductId" placeholder="{{ $productID }}"
                            value="{{ $productID }} " readonly>
                    </div>
                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Product Type</h5>
                        </div>
                        <div class="box-body">

                            <div class="space-y-2">
                                <label class="ti-form-label mb-0">Choose Product Type</label>
                                <select name="ProductType" id="pvSimple" class="ti-form-select sm:p-4">
                                    <option value="null" selected>Null</option>
                                    <option value="Simple">Simple Product</option>
                                    <option value="Variation">Variation Product</option>
                                </select>
                            </div>

                            <div class="displayProduct mt-5" id="SimpleProductData">
                                <div class="space-y-2 ">
                                    <label class="ti-form-label mb-1">Product regular price</label>
                                    <input type="text" class="my-auto ti-form-input " placeholder="Product Name"
                                        name="regularPrice">
                                </div>
                                <div class="space-y-2 mt-5">
                                    <label class="ti-form-label mb-1">Product sell price</label>
                                    <input type="text" class="my-auto ti-form-input " placeholder="Product Name"
                                        name="sellPrice">
                                </div>
                            </div>

                            <div class="displayProduct" id="VariationProductData">

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
                                                        <select class="ti-form-select sm:p-4 attribute-dropdown"
                                                            name="attributeValue[{{ $item->id }}][]" required
                                                            onchange="disableOption(event)">
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
                                                            placeholder="Product Price" name="productPrice[]" required>
                                                    </div>

                                                    <div class="mr-3 mt-2">
                                                        <label class="ti-form-label mb-0">Product quantity</label>
                                                        <input type="number" class="my-auto ti-form-input mt-1"
                                                            placeholder="Product Quantity" name="productQuantity[]"
                                                            required>
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
                            </div>


                        </div>

                    </div>

                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Add Product Area</h5>
                        </div>

                        <div class="box-body">

                            <div class="">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Product Name</label>
                                    <input type="text" class="my-auto ti-form-input" placeholder="Product Name"
                                        name="productName" required>
                                </div>
                            </div>


                            <div class="my-5">

                                <div class="box">
                                    <div class="box-header">
                                        <label class="ti-form-label mb-0">Product Image</label>
                                    </div>
                                    <div>
                                        <label for="file-input-medium" class="sr-only">Choose file</label>
                                        <input type="file" name="fileImg" id="file-input-medium"
                                            class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/70
                                          file:bg-transparent file:border-0
                                          file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4
                                          file:py-3 file:px-4
                                          dark:file:bg-black/20 dark:file:text-white/70"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="my-5">

                                <div class="box">
                                    <div class="box-header">
                                        <label class="ti-form-label mb-0">Product Gallery</label>
                                    </div>
                                    <div>
                                        <label for="file-input-medium" class="sr-only">Choose file</label>
                                        <input type="file" name="fileMulti[]" id="file-input-medium"
                                            class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/70
                                          file:bg-transparent file:border-0
                                          file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4
                                          file:py-3 file:px-4
                                          dark:file:bg-black/20 dark:file:text-white/70"
                                            multiple="multiple" required>
                                    </div>
                                </div>

                            </div>

                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <label class="ti-form-label mb-0">Product Short Description</label>
                                        </div>
                                        <div class="box-body">


                                            @error('ShortDescription')
                                                <div role="alert">
                                                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                                        Danger
                                                    </div>
                                                    <div
                                                        class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                                        <p>{{ $message }}</p>
                                                    </div>
                                                </div>
                                            @enderror
                                            <textarea class="ti-form-input" name="ShortDescription" id="short_editor" cols="" rows=""></textarea>
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
                                                @error('description')
                                                    <div role="alert">
                                                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                                                            Danger
                                                        </div>
                                                        <div
                                                            class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                                                            <p>{{ $message }}</p>
                                                        </div>
                                                    </div>
                                                @enderror
                                                <textarea class="ti-form-input" name="description" id="dis_editor" cols="" rows=""></textarea>
                                            </div>
                                        </div>

                                        <div class=""></div>
                                    </div>
                                </div>
                            </div>


                            {{-- 
                            <div class="grid grid-cols-12 gap-6">
                                <div class="col-span-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <label class="ti-form-label mb-0">Product SEO Section </label>
                                        </div>
                                        <div class="box-body">

                                            <div class="space-y-2 mb-5">
                                                <label class="ti-form-label mb-1">Product Seo Title</label>
                                                <input type="text" class="my-auto ti-form-input "
                                                    placeholder="Product Name" name="seoTitle" required>
                                            </div>

                                            <div class="space-y-2 mb-5">
                                                <label class="ti-form-label mb-1">Product Seo Image</label>
                                                <div>
                                                    <label for="file-input-medium" class="sr-only">Choose file</label>
                                                    <input type="file" name="fileSeo" id="file-input-medium"
                                                        class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/70
                                                      file:bg-transparent file:border-0
                                                      file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4
                                                      file:py-3 file:px-4
                                                      dark:file:bg-black/20 dark:file:text-white/70"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="space-y-2 mb-5">
                                                <label class="ti-form-label mb-1">Product Seo Description</label>
                                                <textarea class="ti-form-input" rows="3" name="seoDescription" required></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div> --}}


                            <div class="my-5">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Select Category</label>
                                    <select class="ti-form-select sm:p-4" name="category" required>
                                        @foreach ($allCategory as $item)
                                            <option selected="{{ 0 }}">NULL</option>
                                            <option value="{{ $item->id }}">{{ $item->category_title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="my-5">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Placement in shop</label>
                                    <input type="number" name="position" class="my-auto ti-form-input"
                                        placeholder="Placement" required>
                                </div>
                            </div>

                            <div class="my-5">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Product Status</label>
                                    <select class="ti-form-select sm:p-4" name="status" required>
                                        <option selected="">Active</option>
                                        <option>De-active</option>
                                        <option>Pending</option>
                                    </select>
                                </div>
                            </div>
                            <div class="my-5">
                                <div class="box">
                                    <div class="box-header">
                                        <label class="ti-form-label mb-0">Product Schedule </label>
                                    </div>
                                    <div class="box-body">
                                        <div class="flex rounded-sm shadow-sm">

                                            <input type="date" name="schedule" required>
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
                                                        class="my-auto ti-form-input" placeholder="Product Title"
                                                        required>

                                                    <label class="ti-form-label mb-0">Product Price</label>
                                                    <input type="number" name="itemPrice[]"
                                                        class="my-auto ti-form-input" placeholder="Product Price"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="ti-btn ti-btn-primary">Submit Product</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
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
@endsection
