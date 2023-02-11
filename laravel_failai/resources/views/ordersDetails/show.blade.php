<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/300" alt="img">
                <span class="card-title">{{ $orderDetails->order_id }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$orderDetails->id}}</div>
                <p>order_id: {{ $orderDetails->order_id }}</p>
                <p>product_name: {{ $orderDetails->product_name }}</p>
                <p>product_id: {{ $orderDetails->product_id }}</p>
                <p>quantity: {{ $orderDetails->quantity }}</p>
                <p>price: {{ $orderDetails->price }}</p>
                <p>status_id: {{ $orderDetails->status_id }}</p>
                <p>Creation date: {{ $orderDetails->created_at }}</p>
                <p>Last updated: {{ $orderDetails->updated_at }}</p>
            </div>

            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <x-forms.buttons.action :model="$orderDetails" mainRoute="ordersDetails" :showBack="true" />
                </nav>
            </div>

        </div>

    </x-card>
</x-layout>

