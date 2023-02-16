<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/300" alt="img">
                <span class="card-title">{{ $user->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$user->id}}</div>
                <p>Price: {{ $user->name }}</p>
                <p>email: {{ $user->email }}</p>
                <p>email_verified_at: {{ $user->email_verified_at }}</p>
                <p>password: {{ $user->password }}</p>
                <p>role: {{ $user->role }}</p>
                <p>remember_token: {{ $user->remember_token }}</p>

                <p>Creation date: {{ $user->created_at }}</p>
                <p>Last updated: {{ $user->updated_at }}</p>
            </div>

            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <x-forms.buttons.action :model="$user" mainRoute="users" :showBack="true" />
                </nav>
            </div>

        </div>
    </x-card>
</x-layout>

