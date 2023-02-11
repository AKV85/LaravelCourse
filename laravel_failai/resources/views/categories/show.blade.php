<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/300" alt="img">
                <span class="card-title">{{ $category->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$category->id}}</div>
                <p>slug: {{ $category->slug }}</p>
                <p>description: {{ $category->description }}</p>
                <p>status_id: {{ $category->status_id }}</p>
                <p>parent_id: {{ $category->parent_id }}</p>
                <p>sort_order: {{ $category->sort_order }}</p>
                <p>Creation date: {{ $category->created_at }}</p>
                <p>Last updated: {{ $category->updated_at }}</p>
            </div>

            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <x-forms.buttons.action :model="$category" mainRoute="categories" :showBack="true" />
                </nav>
            </div>

        </div>

    </x-card>
</x-layout>

