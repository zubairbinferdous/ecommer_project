@extends('admin.admin_index')
@section('dashborad_header')
    <div class="main-content">
        <div class="grid grid-cols-12 gap-x-6 mt-12">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="box-title">Add Attribute Value</h5>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('store.attributeValue') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="">
                                <div class="my-5">
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Select Attribute</label>
                                        <select class="ti-form-select sm:p-4" name="attribute" required="">
                                            <option selected="0">NULL</option>
                                            @foreach ($data as $item)
                                                <option value="{{ $item->id }}">{{ $item->attribute_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Attribute Value</label>
                                    <input type="text" name="attribute_value" class="my-auto ti-form-input"
                                        placeholder="Attribute Value" required>
                                </div>

                            </div>
                            <button type="submit" class="ti-btn ti-btn-primary mt-5">Submit Attribute Value</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
