<x-app-layout>
    <h2 class="text-2xl font-bold mb-4">External Users</h2>

    <form method="GET" class="mb-4">
        <input type="text" name="search" placeholder="Search by name"
               value="{{ request('search') }}"
               class="border px-4 py-2 rounded w-1/3" />
        <button type="submit" class="ml-2 px-4 py-2 bg-blue-600 text-white rounded">Search</button>
    </form>

    @if ($users->isEmpty())
        <p class="text-gray-500">No external users found.</p>
    @else
        <div class="grid gap-4">
            @foreach ($users as $user)
                <div class="border p-4 rounded shadow-sm bg-white dark:bg-gray-800">
                    <p><strong>{{ $user->name }}</strong></p>
                    <p>Email: {{ $user->email }}</p>
                    <p>Source: {{ $user->source }}</p>
                </div>
            @endforeach
        </div>
    @endif
</x-app-layout>
