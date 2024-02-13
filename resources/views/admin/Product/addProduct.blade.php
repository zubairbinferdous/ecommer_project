<style>
    .ck-editor__editable[role="textbox"] {
        /* Editing area */
        min-height: 250px;
    }
</style>
@extends('admin.admin_index')
@section('dashborad_header')
    <div class="main-content">
        <div class="grid grid-cols-12 gap-x-6 mt-12">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="box-title">Add Product Area</h5>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Product Name</label>
                                    <input type="text" class="my-auto ti-form-input" placeholder="Product Name"
                                        name="productName">
                                </div>

                                @php
                                    $productID = substr(mt_rand(10000000, 99999999), 0, 7);
                                @endphp
                                <div class="space-y-2 mt-5">
                                    <input type="text" class="my-auto ti-form-input" name="ProductId"
                                        placeholder="{{ $productID }}" value="{{ $productID }} " readonly>
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
                                          dark:file:bg-black/20 dark:file:text-white/70">
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
                                            multiple="multiple">
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
                                            <textarea name="ShortDescription" id="short_editor" cols="" rows=""></textarea>
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
                                                <textarea name="description" id="dis_editor" cols="" rows=""></textarea>
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
                                                <input type="text" class="my-auto ti-form-input "
                                                    placeholder="Product Name" name="seoTitle">
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
                                                      dark:file:bg-black/20 dark:file:text-white/70">
                                                </div>
                                            </div>

                                            <div class="space-y-2 mb-5">
                                                <label class="ti-form-label mb-1">Product Seo Description</label>
                                                <textarea class="ti-form-input" rows="3" name="seoDescription"></textarea>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="my-5">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Select Category</label>
                                    <select class="ti-form-select sm:p-4" name="category">
                                        <option selected="">Select Category</option>
                                        @foreach ($allCategory as $item)
                                            <option value="{{ $item->id }}">{{ $item->category_title }} </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>



                            <div class="my-5">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Placement in shop</label>
                                    <input type="number" name="position" class="my-auto ti-form-input"
                                        placeholder="Placement">
                                </div>
                            </div>

                            <div class="my-5">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Product Status</label>
                                    <select class="ti-form-select sm:p-4" name="status">
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
                                            <div
                                                class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                                <span class="text-sm text-gray-500 dark:text-white/70"><i
                                                        class="ri ri-calendar-line"></i></span>
                                            </div>

                                            <input type="text"
                                                class="ti-form-input ltr:rounded-l-none rtl:rounded-r-none focus:z-10 flatpickr-input"
                                                id="date" placeholder="Choose date" readonly="readonly"
                                                name="schedule">
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

        var count = 0;


        document.getElementById('addEditorBtn').addEventListener('click', function() {
            var id = count++;
            // Clone the HTML content
            var newContent = document.createElement('div');
            newContent.innerHTML = `
        <div>
            <label class="ti-form-label mt-7">Product images</label>
            <label for="file-input-medium" class="sr-only">Choose file</label>
            <input type="file" name="ExtraFileDescription[]" id="file-input-medium" class="block mb-2 w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/70 file:bg-transparent file:border-0 file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4 file:py-3 file:px-4 dark:file:bg-black/20 dark:file:text-white/70">

            <label class="ti-form-label mb-2">Product Description</label>
            <textarea name="ExtraDescription[]" id="dis_editor${id}" cols="" rows=""></textarea>

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
