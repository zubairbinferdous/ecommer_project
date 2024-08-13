@foreach ($attribute as $item)
    <div class="Attribute-item-value mr-3" id="dropdown_{{ $item->id }}" style="display: none;">
        <label class="ti-form-label mt-3">{{ $item->attribute_name }}<span class="ml-1">VALUE</span></label>
        <select class="ti-form-select sm:p-4 attribute-dropdown" name="attributeValue[{{ $item->id }}][]" required
            onchange="disableOption(event, '{{ $item->attribute_name }}')" id="attributeValue">
            <option value="null">Null</option>
            @foreach ($item->attributeValue as $itemValue)
                <option value="{{ $itemValue->attribute_values_name }}">
                    {{ $itemValue->attribute_values_name }}</option>
            @endforeach
        </select>
    </div>
@endforeach
