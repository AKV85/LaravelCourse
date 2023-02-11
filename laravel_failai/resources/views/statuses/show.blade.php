<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/300" alt="img">
                <span class="card-title">{{ $status->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$status->id}}</div>
                <p>type: {{ $status->type }}</p>
                <p>Creation date: {{ $status->created_at }}</p>
                <p>Last updated: {{ $status->updated_at }}</p>
            </div>

            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <x-forms.buttons.action :model="$status" mainRoute="statuses" :showBack="true" />
                </nav>
            </div>

        </div>
    </x-card>
</x-layout>

