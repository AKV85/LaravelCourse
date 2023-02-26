<x-layout>
    @include('partials._hero')
    <x-card class="p-10 max-w-lg mx-auto mt-24">
        <div class="card">
            <div class="card-image">
                <img src="https://picsum.photos/200">
                <span class="card-title">{{ $person->name }}</span>
            </div>
            <div class="card-content">
                <div>ID: {{$person->id}}</div>
                <p>Name: {{ $person->name }}</p>
                <p>Surname: {{ $person->surname }}</p>
                <p>PersCod: {{ $person->personal_code }}</p>
                <p>Email: {{ $person->email }}</p>
                <p>Phone: {{ $person->phone }}</p>
                <p>user Name: {{ $person->user->name }}</p>
                <p>Address: {{ $person->address_id}}</p>
                <p>Creation date: {{ $person->created_at }}</p>
                <p>Last updated: {{ $person->updated_at }}</p>
            </div>

            <div class="card-action">
                <nav class="flex justify-between items-center mb-4">
                    <x-forms.buttons.action :model="$person" mainRoute="persons" :showBack="true"/>
                </nav>
            </div>

        </div>

    </x-card>
</x-layout>
