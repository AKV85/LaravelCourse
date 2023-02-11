<div class="mb-6">
    <label
        for="$field"
        class="inline-block text-lg mb-2">
        {{$field}}</label>
    <input
        type="text"
        class="border border-gray-200 rounded p-2 w-full"
        name="{{$field}}"
        placeholder="..."
        value="{{old($field) ?? $model->$field}}"
    />

    @error($field)
    <p class="text-red-500 text-xs mt-1">{{$message}}</p>
    @enderror
</div>
