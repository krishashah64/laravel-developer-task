<x-app-layout>
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold mb-4">{{ $post['title'] }}</h1>
        <img src="{{ $post['image'] }}" class="w-full mb-4 rounded">
        <p>{{ $post['content'] }}</p>
        <a href="{{ route('blog.index') }}" class="text-blue-600 hover:underline mt-4 inline-block">← Back to Blog</a>
    </div>
</x-app-layout>