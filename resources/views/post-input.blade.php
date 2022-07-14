<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create a new Post
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST">
                        @csrf
                        <label>
                            Post Title
                            <input type="text" name="title">
                        </label>
                        <label>
                            Post Body
                            <textarea name="body">
                            </textarea>
                        </label>
                        <button type="submit">Submit new Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
