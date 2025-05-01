<x-app-layout>
    <h2 class="text-2xl font-bold mb-4">All Users</h2>
    @foreach ($users as $user)
        <div class="border p-4 mb-2 rounded flex justify-between items-center">
            <div>
                <strong>{{ $user->name }}</strong> ({{ $user->email }}) - Role: {{ $user->role }}
            </div>
            <div>
                <a href="{{ route('admin.users.edit', $user) }}" class="text-blue-600 mr-3">Edit</a>
                <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline-block">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Delete user?')" class="text-red-600">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
        <livewire:admin.user-management />
</x-app-layout>
