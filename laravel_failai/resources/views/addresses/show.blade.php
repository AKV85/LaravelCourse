<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <span class="card-title">{{ $address->country }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$address->id}}</div>
                <p>Name: {{ $address->name }}</p>
                <p>City: {{ $address->city }}</p>
                <p>Zip: {{ $address->zip }}</p>
                <p>Street: {{ $address->street }}</p>
                <p>House_number: {{ $address->house_number }}</p>
                <p>Apartment_number: {{ $address->apartment_number }}</p>
                <p>Creation date: {{ $address->created_at }}</p>
                <p>Last updated: {{ $address->updated_at }}</p>
            </div>

            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <x-forms.buttons.action :model="$address" mainRoute="addresses" :showBack="true"/>
                </nav>
            </div>

        </div>

    </x-card>
</x-layout>
