@extends('admin.admin_index')
@section('dashborad_header')
    <div class="main-content">
        <div class="grid grid-cols-12 gap-x-6 mt-12">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="box-title">Add Attribute </h5>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('store.attribute') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Attribute name</label>
                                    <input type="text" name="attribute_name" class="my-auto ti-form-input"
                                        placeholder="Attribute">
                                </div>
                            </div>
                            <button type="submit" class="ti-btn ti-btn-primary mt-5">Submit Attribute</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
