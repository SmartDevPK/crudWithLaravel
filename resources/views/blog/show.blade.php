<x-app-layout>

    <div class="container mx-auto px-4 py-8">
        <!-- Page Heading -->
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-800">📖 Blog Details</h2>
            <a href="#"
                class="px-4 py-2 bg-gray-600 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-gray-700 transition">
                ← Back to Blogs
            </a>
        </div>

        <!-- Blog Details Card -->
        <div class="bg-white shadow-lg rounded-lg p-6 max-w-2xl mx-auto">
            <!-- Banner Image -->
            <div class="mb-6">
                <img src="https://via.placeholder.com/600x300" alt="Banner Image"
                    class="w-full h-60 object-cover rounded-lg shadow-md">
            </div>

            <!-- Title -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold text-gray-700">📌 Title:</h3>
                <p class="text-gray-900 bg-gray-100 p-3 rounded-lg shadow-sm">Sample Blog Title</p>
            </div>

            <!-- Description -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold text-gray-700">📝 Description:</h3>
                <p class="text-gray-900 bg-gray-100 p-3 rounded-lg shadow-sm">This is a sample description for the blog
                    post. It provides an overview of the content.</p>
            </div>

            <!-- Created At -->
            <div class="mb-4">
                <h3 class="text-lg font-semibold text-gray-700">📅 Created At:</h3>
                <p class="text-gray-900 bg-gray-100 p-3 rounded-lg shadow-sm">February 28, 2025, 10:00 AM</p>
            </div>

            <!-- Action Buttons -->
            <div class="flex justify-end space-x-4 mt-6">
                <a href="#"
                    class="px-4 py-2 bg-blue-600 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-blue-700 transition">
                    ✏️ Edit Blog
                </a>
                <button type="button"
                    class="px-4 py-2 bg-red-600 text-white text-sm font-semibold rounded-lg shadow-md hover:bg-red-700 transition">
                    🗑 Delete
                </button>
            </div>
        </div>
    </div>
</x-app-layout>