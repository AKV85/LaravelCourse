<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/300" alt="img">
                <span class="card-title">{{ $order->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$order->id}}</div>
                <p>shipping_address: {{ $order->shipping_address }}</p>
                <p>billing_address: {{ $order->billing_address }}</p>
                <p>payment_id: {{ $order->payment_id }}</p>
                <p>status_id: {{ $order->status_id }}</p>
                <p>Creation date: {{ $order->created_at }}</p>
                <p>Last updated: {{ $order->updated_at }}</p>
            </div>

            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <x-forms.buttons.action :model="$order" mainRoute="orders" :showBack="true" />
                </nav>
            </div>

        </div>

    </x-card>
</x-layout>

