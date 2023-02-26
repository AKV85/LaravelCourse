<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/300" alt="img">
                <span class="card-title">{{ $payment->order_id }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$payment->id}}</div>
                <p>order_id: {{ $payment->order_id }}</p>
                <p>payment_type_id: {{ $payment->payment_type_id }}</p>
                <p>amount: {{ $payment->amount }}</p>
                <p>status_id: {{ $payment->status_id }}</p>
                <p>Creation date: {{ $payment->created_at }}</p>
                <p>Last updated: {{ $payment->updated_at }}</p>
            </div>

            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <x-forms.buttons.action :model="$payment" mainRoute="payments" :showBack="true"/>
                </nav>
            </div>

        </div>

    </x-card>
</x-layout>

