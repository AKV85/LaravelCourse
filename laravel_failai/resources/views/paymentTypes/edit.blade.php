<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/300" alt="img">
                <span class="card-title">{{ $paymentType->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$paymentType->id}}</div>
                <p>Name: {{ $paymentType->name }}</p>
                <p>Creation date: {{ $paymentType->created_at }}</p>
                <p>Last updated: {{ $paymentType->updated_at }}</p>
            </div>

            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <x-forms.buttons.action :model="$paymentType" mainRoute="paymentTypes" :showBack="true"/>
                </nav>
            </div>

        </div>

    </x-card>
</x-layout>

