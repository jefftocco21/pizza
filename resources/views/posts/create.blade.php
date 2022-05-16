<x-layout>
    <x-card
    class="p-10 rounded max-w-lg mx-auto mt-24"
>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create Post
        </h2>
        <p class="mb-4">Enter details below to create a post</p>
    </header>

    <form action="">
        <div class="mb-6">
            <label
                for="company"
                class="inline-block text-lg mb-2"
                >Company Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="company"
            />
        </div>

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2"
                >Post Title</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
            />
        </div>

        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2"
                >Location</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="title"
            />
        </div>

        <div class="mb-6">
            <label
                for="website"
                class="inline-block text-lg mb-2"
            >
                Website
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="website"
            />
        </div>

        <div class="mb-6">
            <label for="tags" class="inline-block text-lg mb-2">
                Tags (Comma Separated)
            </label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="tags"
                placeholder="Example: Laravel, Backend, Postgres, etc"
            />
        </div>

        <div class="mb-6">
            <label for="logo" class="inline-block text-lg mb-2">
                Picture
            </label>
            <input
                type="file"
                class="border border-gray-200 rounded p-2 w-full"
                name="logo"
            />
        </div>

        <div class="mb-6">
            <label
                for="description"
                class="inline-block text-lg mb-2"
            >
                Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="description"
                rows="10"
            ></textarea>
        </div>

        <div class="mb-6">
            <button
                class="bg-orange-400 text-white rounded-xl py-2 px-4 hover:bg-orange-500"
            >
                Create Gig
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
    </x-card>
</x-layout>
