<!DOCTYPE html>
<html lang="en" x-data="{ darkMode: false }" :class="{'dark': darkMode}">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white transition duration-300">

    <div class="container mx-auto p-4">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Blog</h1>
            <button
            @click="darkMode = !darkMode"
            class="bg-gray-800 text-white px-4 py-2 rounded">
            Toggle Dark Mode
        </button>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            @foreach($posts as $post)
                <div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-md">
                    <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-40 object-cover rounded">
                    <h2 class="text-xl font-semibold mt-4">{{ $post['title'] }}</h2>
                    <p class="mt-2">{{ $post['description'] }}</p>
                    <a href="#" class="inline-block mt-3 text-blue-600 dark:text-blue-400 hover:underline">Read More</a>

                    <!-- Bonus: Comment Section (AJAX) -->
                    <div class="mt-4">
                        <input type="text" class="w-full border rounded p-2" placeholder="Leave a comment..." @keydown.enter="postComment($event)">
                        <div class="mt-2 text-sm text-green-500" x-text="commentSuccess"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        function postComment(e) {
            const comment = e.target.value;
            if (!comment) return;
            fetch('/comments', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ comment })
            }).then(res => res.json())
              .then(data => {
                  e.target.value = '';
                  alert('Comment posted!');
              });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>
</html>
