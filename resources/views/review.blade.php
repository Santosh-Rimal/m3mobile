<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reviews</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 font-sans antialiased">
    <div class="container mx-auto p-6">

        <!-- Navigation Bar -->
        <nav class="flex justify-between items-center bg-white p-4 shadow-md mb-8 rounded-lg">
            <a class="text-2xl font-bold text-gray-800" href="/">Mobile Store</a>
            <div>
                <a class="text-gray-600 hover:text-yellow-500 transition-colors" href="/">Home</a>
                <a class="ml-6 text-gray-600 hover:text-yellow-500 transition-colors"
                    href="{{ route('reviews.index') }}">Reviews</a>
            </div>
        </nav>

        <h1 class="text-4xl font-bold text-center mb-8">Customer Reviews</h1>

        <!-- Reviews List -->
        @foreach ($reviews as $review)
            <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                <div class="flex items-center mb-4">
                    <h2 class="text-2xl font-semibold">{{ $review->name }}</h2>
                    <span class="ml-4 text-gray-500 text-sm">{{ $review->created_at->format('M d, Y') }}</span>
                </div>

                <!-- Star Rating Display -->
                <div class="flex mb-4">
                    @for ($i = 1; $i <= 5; $i++)
                        <span class="text-3xl {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }}">
                            ★
                        </span>
                    @endfor
                </div>

                <p class="text-gray-700 mb-4">{{ $review->comment }}</p>

                <!-- Email of Reviewer -->
                <p class="text-gray-500">Email: {{ $review->email }}</p>
            </div>
        @endforeach

        <!-- Pagination Links -->
        <div class="mt-8">
            {{ $reviews->links('pagination::tailwind') }}
        </div>
    </div>
</body>

</html>
