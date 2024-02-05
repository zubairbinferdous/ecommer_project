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
                        <form>
                            <div class="">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Product Name</label>
                                    <input type="text" class="my-auto ti-form-input" placeholder="Product Name">
                                </div>

                            </div>
                            <div class="my-5">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Product URL</label>
                                    <input type="text" class="my-auto ti-form-input" placeholder="Product URL">
                                </div>
                            </div>
                            <div class="my-5">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Address</label>
                                    <input type="text" class="my-auto ti-form-input" placeholder="Address">
                                </div>
                            </div>
                            <div class="my-5">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Address</label>
                                    <input type="text" class="my-auto ti-form-input" placeholder="Address">
                                </div>
                            </div>
                            <div class="my-5">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Address</label>
                                    <input type="text" class="my-auto ti-form-input" placeholder="Address">
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
