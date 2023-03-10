@ -1,53 +0,0 @@
{{--<div class="mb-6">--}}
{{--    <label--}}
{{--        for="$field"--}}
{{--        class="inline-block text-lg mb-2">--}}
{{--        {{$field}}</label>--}}
{{--    <input--}}
{{--        type="text"--}}
{{--        class="border border-gray-200 rounded p-2 w-full"--}}
{{--        name="{{$field}}"--}}
{{--        placeholder="..."--}}
{{--        value="{{old($field) ?? $model->$field}}"--}}
{{--    />--}}

{{--    @error($field)--}}
{{--    <p class="text-red-500 text-xs mt-1">{{$message}}</p>--}}
{{--    @enderror--}}
{{--</div>--}}

{{--<div class="mb-6">--}}
{{--    <x-input-label--}}
{{--        :for="$field"--}}
{{--        class="inline-block text-lg mb-2">--}}
{{--        {{$field}}</x-input-label>--}}
{{--    <x-text-input--}}
{{--        type="text"--}}
{{--        class="border border-gray-200 rounded p-2 w-full"--}}
{{--        :name="$field"--}}
{{--        placeholder="..."--}}
{{--        :value="old($field, $model->$field)"--}}
{{--        autofocus--}}
{{--        :autocomplete="$field"--}}
{{--    />--}}
{{--    <x-input-error class="mt-2" :messages="$errors->get($field)" />--}}

{{--</div>--}}


@php
    $reflect = new ReflectionClass($model);
    $translation = lcfirst($reflect->getShortName()) . '.' . $field;
@endphp

<div>
    <x-input-label :for="$field" :value="__($translation)"/>
    <x-text-input :id="'field_'.$field"
                  :name="$field"
                  type="text"
                  class="mt-1 block w-full"
                  :value="old($field, $model->$field)"
                  autofocus
                  :autocomplete="$field"/>
    <x-input-error class="mt-2" :messages="$errors->get($field)" />
</div>
