<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>All Products | Prestige</title>
    <link rel="icon" type="image/x-icon"
        href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtQdSPKEv1mNQUcChuwUqcjgm--Wh0XmEwqQ&s">
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
</head>

<body class="bg-gray-50">
    <div class="md:flex flex-col md:flex-row min-h-screen">
        @include('partials.sidebar')

        <div class="flex-1 p-6 animate__animated animate__fadeIn">
            <div class="max-w-full mx-auto">

                <!-- Header -->
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6 gap-4">
                    <div>
                        <h1 class="text-2xl font-bold text-gray-800">All Products</h1>
                        <p class="text-gray-600">Manage your product inventory</p>
                    </div>
                    <div class="flex flex-wrap gap-3">
                        <a href="{{ route('admin.storeProduct') }}"
                            class="flex items-center px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition duration-300">
                            <i class="fas fa-plus mr-2"></i> Add Product
                        </a>
                        <button class="flex items-center px-4 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 transition duration-300">
                            <i class="fas fa-filter mr-2 text-gray-600"></i> Filter
                        </button>
                    </div>
                </div>

                <!-- Search and Filters -->
                <div class="bg-white p-4 rounded-lg shadow-sm mb-6">
                    <div class="flex flex-col md:flex-row flex-wrap gap-4">
                        <div class="flex-1 relative">
                            <input type="text" placeholder="Search products..."
                                class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                        <select class="w-full md:w-auto border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option>All Categories</option>
                            <option>Electronics</option>
                            <option>Clothing</option>
                            <option>Home & Garden</option>
                        </select>
                        <select class="w-full md:w-auto border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                            <option>Sort by: Newest</option>
                            <option>Sort by: Oldest</option>
                            <option>Sort by: Name (A-Z)</option>
                            <option>Sort by: Name (Z-A)</option>
                        </select>
                    </div>
                </div>

                <!-- Products Table -->
                <div class="bg-white rounded-lg shadow-sm overflow-hidden animate__animated animate__fadeInUp">
                    <div class="overflow-x-auto w-full">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Product</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Elements</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Uses</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Limit of use</th>
                                    <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($products as $product)
                                <tr class="hover:bg-gray-50 transition duration-150"
                                    data-id="{{ $product->id }}"
                                    data-name="{{ $product->name }}"
                                    data-category="{{ $product->category->name ?? '' }}"
                                    data-category-id="{{ $product->category_id }}"
                                    data-element="{{ $product->element }}"
                                    data-uses="{{ $product->uses }}"
                                    data-limit="{{ $product->limit }}"
                                    data-details="{{ $product->details }}"
                                    data-img="{{ $product->img }}">
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-md object-cover" src="{{ $product->img }}" alt="{{ $product->name }}">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">{{ $product->name }}</div>
                                                <div class="text-sm text-gray-500 truncate max-w-xs">{{ Str::limit($product->details, 50) }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                            {{ $product->category->name ?? 'Uncategorized' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ Str::limit($product->element, 30) }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-500">{{ Str::limit($product->uses, 30) }}</td>
                                    <td class="px-6 py-4">
                                        <span class="ml-2 text-sm font-medium text-gray-700">
                                            {{ $product->limit ?? 'N/A' }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-right text-sm font-medium">
                                        <div class="flex justify-end space-x-3">
                                            <button onclick="openEditModal(this)" class="text-blue-600 hover:text-blue-800">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <form action="{{ route('admin.deleteProduct', $product->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-800" title="Delete" onclick="return confirm('Are you sure you want to delete this product?')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6 mt-4">
                        <div>
                            {{ $products->links('pagination::tailwind') }}
                        </div>
                        <div class="hidden sm:block">
                            <p class="text-sm text-gray-700">
                                Showing
                                <span class="font-medium">{{ $products->firstItem() }}</span>
                                to
                                <span class="font-medium">{{ $products->lastItem() }}</span>
                                of
                                <span class="font-medium">{{ $products->total() }}</span>
                                results
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Product Modal -->
    <div id="editModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-xl shadow-2xl w-full max-w-2xl mx-4 overflow-hidden transform transition-all duration-300 scale-95"
            id="modalContent">
            <!-- Modal Header -->
            <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center bg-gray-50">
                <div class="flex items-center">
                    <div class="bg-indigo-100 p-2 rounded-lg mr-3">
                        <i class="fas fa-edit text-indigo-600"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800">Edit Product</h3>
                </div>
                <button onclick="closeEditModal()" class="text-gray-400 hover:text-gray-500">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Modal Body -->
            <form id="editForm" method="POST" enctype="multipart/form-data" class="p-6 space-y-6">
                @csrf
                @method('PUT')
                <input type="hidden" id="editProductId" name="id">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Product Image -->
                    <div class="col-span-1">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Product Image</label>
                        <div class="relative group">
                            <img id="editProductImagePreview" src="" alt="Product Image"
                                class="h-40 w-full object-cover rounded-lg border-2 border-gray-200 shadow-sm">
                            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <span class="text-white text-sm font-medium">Change Image</span>
                            </div>
                        </div>
                        <input type="file" id="editProductImage" name="image" class="mt-2 w-full text-sm text-gray-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded-lg file:border-0
                            file:text-sm file:font-semibold
                            file:bg-indigo-50 file:text-indigo-700
                            hover:file:bg-indigo-100">
                    </div>

                    <!-- Product Details -->
                    <div class="col-span-1 space-y-6">
                        <div>
                            <label for="editProductName" class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                            <input type="text" id="editProductName" name="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200" required>
                        </div>

                        <div>
                            <label for="editProductCategory" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                            <select id="editProductCategory" name="category_id"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200">
                                <option value="">Select Category</option>
                                @foreach(\App\Models\Category::all() as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <!-- Full-width fields -->
                    <div class="col-span-1 ">
                        <label for="editProductDetails" class="block text-sm font-medium text-gray-700 mb-1">Details</label>
                        <textarea id="editProductDetails" name="details" rows="3"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200"></textarea>
                    </div>

                    <div class="col-span-1">
                        <label for="editProductElement" class="block text-sm font-medium text-gray-700 mb-1">Elements</label>
                        <textarea id="editProductElement" name="element" rows="2"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200"></textarea>
                    </div>

                    <div class="col-span-1">
                        <label for="editProductUses" class="block text-sm font-medium text-gray-700 mb-1">Uses</label>
                        <textarea id="editProductUses" name="uses" rows="2"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200"></textarea>
                    </div>

                    <div class="col-span-1">
                        <label for="editProductLimit" class="block text-sm font-medium text-gray-700 mb-1">Limit</label>
                        <input type="number" id="editProductLimit" name="limit"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all duration-200">
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="flex justify-end space-x-3 pt-4 border-t border-gray-200">
                    <button type="button" onclick="closeEditModal()"
                        class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition-colors duration-200">
                        Cancel
                    </button>
                    <button type="submit"
                        class="px-6 py-2 bg-gradient-to-r from-indigo-600 to-indigo-700 text-white rounded-lg hover:from-indigo-700 hover:to-indigo-800 transition-all duration-200 shadow-md hover:shadow-lg">
                        <i class="fas fa-save mr-2"></i> Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        // Animation for table rows
        document.addEventListener('DOMContentLoaded', function() {
            const rows = document.querySelectorAll('tbody tr');
            rows.forEach((row, index) => {
                setTimeout(() => {
                    row.classList.add('animate__animated', 'animate__fadeIn');
                }, index * 50);
            });
        });

        // Modal functions
        function openEditModal(button) {
            const row = button.closest('tr');
            const modal = document.getElementById('editModal');
            const modalContent = document.getElementById('modalContent');

            // Set form action with ID
            const form = document.getElementById('editForm');
            form.action = `/admin/product/update/${row.dataset.id}`;

            // Populate form fields
            document.getElementById('editProductId').value = row.dataset.id;
            document.getElementById('editProductName').value = row.dataset.name;
            document.getElementById('editProductCategory').value = row.dataset.categoryId;
            document.getElementById('editProductElement').value = row.dataset.element;
            document.getElementById('editProductUses').value = row.dataset.uses;
            document.getElementById('editProductLimit').value = row.dataset.limit;
            document.getElementById('editProductDetails').value = row.dataset.details;
            document.getElementById('editProductImagePreview').src = row.dataset.img;

            // Show modal with animation
            modal.classList.remove('hidden');
            setTimeout(() => {
                modalContent.classList.remove('scale-95');
                modalContent.classList.add('scale-100');
            }, 10);
        }

        function closeEditModal() {
            const modal = document.getElementById('editModal');
            const modalContent = document.getElementById('modalContent');

            // Hide modal with animation
            modalContent.classList.remove('scale-100');
            modalContent.classList.add('scale-95');

            setTimeout(() => {
                modal.classList.add('hidden');
            }, 300);
        }

        // Preview image when selected
        document.getElementById('editProductImage').addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(event) {
                    document.getElementById('editProductImagePreview').src = event.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>

    <!-- Toastr CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- jQuery + Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if(session('success'))
        toastr.success("{{ session('success') }}");
        @endif
        @if(session('error'))
        toastr.error("{{ session('error') }}");
        @endif

        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "3000"
        };
    </script>
</body>

</html>
