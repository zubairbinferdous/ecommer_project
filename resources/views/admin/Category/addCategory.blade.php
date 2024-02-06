@extends('admin.admin_index')
@section('dashborad_header')
    <div class="main-content">
        <div class="grid grid-cols-12 gap-x-6 mt-12">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="box-title">Add Category Area</h5>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('store.category') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Category title</label>
                                    <input type="text" name="cat_title" class="my-auto ti-form-input"
                                        placeholder="Product Name">
                                </div>
                            </div>

                            <div class="my-5">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Category img</label>
                                    <input type="file" name="cate_img" id="file-input"
                                        class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/70
                                    file:bg-transparent file:border-0
                                    file:bg-gray-100 ltr:file:mr-4 rtl:file:ml-4
                                    file:py-3 file:px-4
                                    dark:file:bg-black/20 dark:file:text-white/70">
                                </div>
                            </div>
                            <div class="my-5">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Category description</label>
                                    <textarea class="ti-form-input" name="description" rows="4" placeholder="Description"></textarea>
                                </div>
                            </div>

                            <div class="my-5">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Category position</label>
                                    <input type="text" name="position" class="my-auto ti-form-input"
                                        placeholder="Position">
                                </div>
                            </div>

                            <button type="submit" class="ti-btn ti-btn-primary">Submit Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
