<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Add Product | Prestige</title>
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
</head>
<style>
    .scroller {
        scrollbar-color: #a0aec0 #141b2a;
        scrollbar-width: none !important;
    }

    .scroller::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    .scroller::-webkit-scrollbar-track {
        border-radius: 100vh;
        background: #141b2a;
    }

    .scroller::-webkit-scrollbar-thumb {
        background: #181818;
        border-radius: 100vh;
        border: 1px solid #181818;
    }

    .scroller::-webkit-scrollbar-thumb:hover {
        background: #a0aec0;
    }

    .scrollerlight {
        scrollbar-color: #cfcfcf #ffffff;
        scrollbar-width: none !important;
    }

    .scrollerlight::-webkit-scrollbar {
        width: 2px;
        height: 6px;
    }

    .scrollerlight::-webkit-scrollbar-track {
        border-radius: 100vh;
        background: #ffffff;
    }

    .scrollerlight::-webkit-scrollbar-thumb {
        background: #cecece;
        border-radius: 100vh;
        border: 1px solid #cecece;
    }

    .scrollerlight::-webkit-scrollbar-thumb:hover {
        background: #cecece;
    }

    .form-input {
        transition: all 0.3s ease;
    }

    .form-input:focus {
        transform: translateY(-2px);
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .form-label {
        transition: all 0.3s ease;
    }

    .form-input:focus+.form-label {
        transform: translateY(-10px);
        color: #4f46e5;
    }

    .file-upload:hover .file-upload-label {
        background-color: #4f46e5;
        color: white;
    }

    .file-upload-input:focus+.file-upload-label {
        box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.3);
    }
</style>

<body class="bg-gray-50">
    <div class="md:flex min-h-screen">
        @include('partials.sidebar')

        <div class="flex-1 p-8 animate__animated animate__fadeIn">
            @if (session('success'))
            <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-800 border border-green-200 animate__animated animate__fadeInDown">
                {{ session('success') }}
            </div>
            @endif

            @if ($errors->any())
            <div class="mb-4 p-4 rounded-lg bg-red-100 text-red-800 border border-red-200 animate__animated animate__fadeInDown">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md overflow-hidden animate__animated animate__fadeInUp">
                <div class="p-8">
                    <div class="flex justify-between items-center mb-8">
                        <h1 class="text-3xl font-bold text-gray-800">Add New Product</h1>
                        <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </div>
                    </div>

                    <form method="POST" action="{{ route('admin.storeProduct') }}" enctype="multipart/form-data" x-data="{ isSubmitting: false }" @submit.prevent="$el.submit(); isSubmitting = true" class="space-y-6">
                        @csrf
                        <div class="relative">
                            <input id="name" name="name" type="text" required
                                class="form-input peer w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder=" Product Name" />

                        </div>

                        <!-- Category Dropdown -->
                        <div class="relative">
                            <select id="category" name="category" required
                                class="form-input w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 appearance-none bg-white">
                                <option value="" disabled selected>Select a category</option>

                                @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </div>
                        </div>

                        <!-- Product Details -->
                        <div class="relative">
                            <textarea id="details" name="details" rows="3" required
                                class="form-input peer w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Product Details "></textarea>

                        </div>

                        <!-- Elements -->
                        <div class="relative">
                            <input id="elements" name="elements" type="text"
                                class="form-input peer w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder=" Elements/Materials" />
                        </div>

                        <!-- Uses -->
                        <div class="relative">
                            <textarea id="uses" name="uses" rows="2"
                                class="form-input peer w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder="Uses/Applications "></textarea>
                        </div>

                        <!-- Limit -->
                        <div class="relative">
                            <input id="limit" name="limit" type="number"
                                class="form-input peer w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                placeholder=" Stock Limit" />
                        </div>

                        <!-- Image Upload -->
                        <div class="file-upload">
                            <input type="file" id="image" name="image" accept="image/*" class="file-upload-input hidden">
                            <label for="image" class="file-upload-label block w-full px-4 py-12 border-2 border-dashed border-gray-300 rounded-lg text-center cursor-pointer hover:border-indigo-500 transition duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span class="mt-2 block text-sm font-medium text-gray-700">Upload product image</span>
                                <span class="mt-1 block text-xs text-gray-500">PNG, JPG, GIF up to 5MB</span>
                            </label>
                        </div>

                        <!-- Preview Image (will be shown after selection) -->
                        <div id="image-preview" class="hidden mt-4">
                            <img id="preview" class="h-40 rounded-lg object-cover mx-auto" src="#" alt="Preview" />
                        </div>

                        <!-- Submit Button -->
                        <div class="pt-4">
                            <button type="submit" x-bind:disabled="isSubmitting"
                                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-medium py-3 px-4 rounded-lg shadow-md transition duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed"
                                x-text="isSubmitting ? 'Adding Product...' : 'Add Product'">
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Image preview functionality
        document.getElementById('image').addEventListener('change', function(e) {
            const preview = document.getElementById('preview');
            const previewContainer = document.getElementById('image-preview');

            if (this.files && this.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    previewContainer.classList.remove('hidden');
                }

                reader.readAsDataURL(this.files[0]);
            }
        });

        // Add animation to form elements on page load
        document.addEventListener('DOMContentLoaded', function() {
            const formElements = document.querySelectorAll('.form-input, select, textarea, .file-upload-label');

            formElements.forEach((element, index) => {
                setTimeout(() => {
                    element.classList.add('animate__animated', 'animate__fadeInUp');
                }, index * 100);
            });
        });
        document.addEventListener('DOMContentLoaded', function() {
            const successAlert = document.querySelector('[class*="bg-green-100"]');
            if (successAlert) {
                setTimeout(() => {
                    successAlert.classList.add('animate__fadeOut');
                    setTimeout(() => successAlert.remove(), 1000);
                }, 4000); // Auto-hide after 4 seconds
            }
        });
    </script>
</body>

</html>
