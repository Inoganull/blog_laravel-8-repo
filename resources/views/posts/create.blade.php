<x-layout>
    <section class="py-8 max-w-md mx-auto">
        <h1 class="font-bold text-xl mb-4">
            Publish New Post
        </h1>

        <x-panel>
        <form action="/admin/posts" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="title">
                    Title
                </label>
                <input class="border border-gray-400 p-2 w-full" name="title" id="title" type="text" value="{{ old('title') }}" required>
                @error('title')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="slug">
                    Slug
                </label>
                <input class="border border-gray-400 p-2 w-full" name="slug" id="slug" type="text" value="{{ old('slug') }}" required>
                @error('slug')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="thumbnail">
                    Thumbnail
                </label>
                <input class="border border-gray-400 p-2 w-full" name="thumbnail" id="thumbnail" type="file" value="{{ old('thumbnail') }}" required>
                @error('thumbnail')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="excerpt">
                    Excerpt
                </label>
                <textarea class="border border-gray-400 p-2 w-full" name="excerpt" id="excerpt" required>
                    {{ old('excerpt') }}
                </textarea>
                @error('excerpt')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="body">
                    Body
                </label>
                <textarea class="border border-gray-400 p-2 w-full" name="body" id="body" required>
                    {{ old('body') }}
                </textarea>
                @error('body')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                    Category
                </label>
                <select name="category_id" id="category_id">
                    @foreach (\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                    @endforeach
                </select>
                @error('category')
                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>

            <x-submit-button>
                Publish
            </x-submit-button>
        </form>
        </x-panel>
    </main>

    </section>
</x-layout>