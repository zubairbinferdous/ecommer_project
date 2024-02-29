@extends('admin.admin_index')
@section('dashborad_header')
    <div class="main-content">
        <div class="grid grid-cols-12 gap-x-6 mt-12">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header">
                        <h5 class="box-title">Add Variation</h5>
                    </div>
                    <div class="box-body">
                        <form action="{{ route('store.variation') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $product->id }}" name="product_id">
                            <input type="hidden" value="{{ $product->Product_id }}" name="product_code">
                            <div class="">
                                <div class="my-5">
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Attribute</label>
                                        <select class="ti-form-select sm:p-4" name="attribute" required="">
                                            <option selected="0">NULL</option>
                                            @foreach ($attribute as $item)
                                                <option value="{{ $item->id }}">{{ $item->attribute_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="my-5">
                                    <div class="space-y-2">
                                        <label class="ti-form-label mb-0">Attribute Value</label>
                                        <select class="ti-form-select sm:p-4" name="attribute_value" required="">
                                            <option selected="0">NULL</option>
                                            @foreach ($attributeValue as $item)
                                                <option value="{{ $item->id }}">{{ $item->attribute_values_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="space-y-2 my-5">
                                    <label class="ti-form-label mb-0">Quantily</label>
                                    <input type="text" name="quantity" class="my-auto ti-form-input"
                                        placeholder="Attribute Value" required>
                                </div>
                                <div class="space-y-2">
                                    <label class="ti-form-label mb-0">Price</label>
                                    <input type="text" name="price" class="my-auto ti-form-input"
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
