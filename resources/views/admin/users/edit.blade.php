<x-app-layout>
    <h2 class="text-2xl font-bold mb-4">Edit User</h2>

    <form method="POST" action="{{ route('admin.users.update', $user) }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label>Name</label>
            <input type="text" name="name" value="{{ $user->name }}" class="w-full border rounded p-2" />
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ $user->email }}" class="w-full border rounded p-2" />
        </div>

        <div>
            <label>Role</label>
            <select name="role" class="w-full border rounded p-2">
                <option value="user" @selected($user->role == 'user')>User</option>
                <option value="admin" @selected($user->role == 'admin')>Admin</option>
            </select>
        </div>

        <button class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</x-app-layout>
