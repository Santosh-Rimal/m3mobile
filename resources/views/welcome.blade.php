<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile Store</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .star-rating span {
            position: relative;
            display: inline-block;
            width: 1.5em;
            height: 1.5em;
            font-size: 2rem;
            line-height: 1.5em;
        }

        .star-rating span::before {
            content: "☆";
            position: absolute;
            top: 0;
            left: 0;
            color: gray;
        }

        .star-rating span.active::before,
        .star-rating span.hovered::before {
            content: "★";
            color: transparent;
            background-color: #fbbf24;
            /* Tailwind's yellow-400 */
            -webkit-background-clip: text;
            background-clip: text;
        }

        .image-hover-effect {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .image-hover-effect:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gray-50 font-sans antialiased">

    <!-- Navigation Bar -->
    <nav class="bg-white shadow-lg py-4 fixed top-0 left-0 w-full z-10">
        <div class="container mx-auto flex justify-between items-center px-6">
            <a class="text-2xl font-bold text-gray-800 hover:text-yellow-500 transition-colors" href="/">Mobile
                Store</a>
            <ul class="flex space-x-6">
                <li>
                    <a class="text-lg font-medium text-gray-600 hover:text-yellow-500 transition-colors"
                        href="/">Home</a>
                </li>
                <li>
                    <a class="text-lg font-medium text-gray-600 hover:text-yellow-500 transition-colors"
                        href="{{ route('reviews.index') }}">Reviews</a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container mx-auto p-6 mt-20">
        <!-- Hero Section -->
        <section class="text-center my-8">
            <img class="mx-auto rounded-lg shadow-lg image-hover-effect" src="{{ asset('img/1.jpeg') }}"
                alt="Store Image" height="500" width="auto">
        </section>

        <!-- About Us Section -->
        <section class="my-12 text-center" id="about-us">
            <h4 class="text-3xl font-bold text-gray-800 mb-6">About Us</h4>
            <p class="text-lg text-gray-600 leading-relaxed max-w-3xl mx-auto">
                Established in 2065, we aim to provide a variety of mobile-related services for our customers. Whether
                you're buying, selling, or repairing phones, we cover all types of mobile activities with a commitment
                to excellence.
            </p>
        </section>

        <!-- Categories Section -->
        <section class="my-12 mx-2 text-center">
            <h4 class="text-3xl font-bold text-gray-800 mb-6">Categories</h4>
            <div class="flex justify-center gap-4">
                <img class="h-48 w-auto rounded-lg shadow-lg image-hover-effect" src="{{ asset('img/laptop.jfif') }}"
                    alt="Category 1">
                <img class="h-48 w-auto rounded-lg shadow-lg image-hover-effect" src="{{ asset('img/macbook.jfif') }}"
                    alt="Category 2">
                <img class="h-48 w-auto rounded-lg shadow-lg image-hover-effect"
                    src="{{ asset('img/smartwatch.jfif') }}" alt="Category 3">
                <img class="h-48 w-auto rounded-lg shadow-lg image-hover-effect" src="{{ asset('img/smg.jfif') }}"
                    alt="Category 4">
                <img class="h-48 w-auto rounded-lg shadow-lg image-hover-effect" src="{{ asset('img/ip.jfif') }}"
                    alt="Category 5">
            </div>
        </section>

        <!-- Our Services Section -->
        <section class="my-12" id="services">
            <h4 class="text-3xl font-bold text-gray-800 mb-6 text-center">Our Services</h4>
            <div class="flex justify-center items-start gap-8">
                <div class="w-1/2">
                    <ul class="list-none text-left text-gray-600 text-lg leading-relaxed">
                        <li>✔️ New Mobile Phones</li>
                        <li>✔️ Installment Plans</li>
                        <li>✔️ Mobile Gadgets & Accessories</li>
                        <li>✔️ Mobile Repair Services</li>
                        <li>✔️ Buy and Sell Used Mobiles</li>
                    </ul>
                </div>
                <div class="w-1/2">
                    <img class="w-full h-auto rounded-lg shadow-lg image-hover-effect"
                        src="{{ asset('img/repair.jfif') }}" alt="Service Image">
                </div>
            </div>
        </section>

        <!-- Our Team Section -->
        <section class="my-12 text-center">
            <h4 class="text-3xl font-bold text-gray-800 mb-6">Our Team Members</h4>
            <img class="mx-auto rounded-lg shadow-lg image-hover-effect" src="{{ asset('img/2.jpeg') }}"
                alt="Team Image">
        </section>

        <!-- Rating Section -->
        <section class="my-12">
            <h4 class="text-3xl font-bold text-gray-800 mb-6 text-center">Rate Our Service/Product</h4>
            <form class="space-y-6 bg-white p-8 shadow-lg rounded-lg mx-auto w-full md:w-2/3 lg:w-1/2"
                action="{{ route('reviews.store') }}" method="POST">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block text-lg font-medium text-gray-700" for="name">Name:</label>
                    <input
                        class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        id="name" type="text" name="name" required>
                </div>

                <!-- Email -->
                <div>
                    <label class="block text-lg font-medium text-gray-700" for="email">Email:</label>
                    <input
                        class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        id="email" type="email" name="email" required>
                </div>

                <!-- Rating -->
                <label class="block text-lg font-medium text-gray-700" for="rating">Rating:</label>
                <div class="star-rating flex space-x-1 text-3xl cursor-pointer mb-4" id="stars">
                    <span class="star" data-rating="1">☆</span>
                    <span class="star" data-rating="2">☆</span>
                    <span class="star" data-rating="3">☆</span>
                    <span class="star" data-rating="4">☆</span>
                    <span class="star" data-rating="5">☆</span>
                </div>
                <input id="ratingValue" type="hidden" name="rating" required>

                <!-- Comment -->
                <div>
                    <label class="block text-lg font-medium text-gray-700" for="comment">Comment:</label>
                    <textarea
                        class="mt-2 w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-yellow-400"
                        id="comment" name="comment" rows="4" required></textarea>
                </div>

                <input type="hidden" name="product_id" value="12345"> <!-- Set product_id dynamically -->

                <button
                    class="w-full bg-yellow-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-yellow-600 transition-colors duration-300"
                    type="submit">Submit Review</button>
            </form>
        </section>
        <!-- Footer Section with Image -->
        <footer class="bg-blue-200 p-6 mt-12 rounded-lg shadow-lg">
            <div class="flex justify-between items-center">
                <!-- Image -->
                <div>
                    <img class="h-24 w-24 object-cover rounded-full shadow-lg" src="{{ asset('img/3.jpeg') }}"
                        alt="Footer Image">
                </div>

                <!-- Contact Info -->
                <div class="text-gray-800">
                    <h4 class="font-bold text-lg">Contact Us</h4>
                    <p>📞 9845055438</p>
                    <p>📧 crazydipen6@gmail.com</p>
                    <p>🏢 M3 Mobile House</p>
                    <p>📍 Indradev Marga, Narayanghat, Nepal</p>
                </div>

                <!-- Links -->
                <div class="text-gray-800">
                    <h4 class="font-bold text-lg">Privacy & Terms</h4>
                    <a class="block" href="#">Delivery & Returns</a>
                </div>
            </div>
        </footer>

    </div>

    <script>
        const stars = document.querySelectorAll(".star-rating span");
        const ratingValue = document.getElementById("ratingValue");

        stars.forEach(star => {
            star.addEventListener("click", function() {
                const rating = this.getAttribute("data-rating");
                ratingValue.value = rating;

                // Reset all stars
                stars.forEach(s => s.classList.remove("active"));

                // Set selected stars to active
                for (let i = 0; i < rating; i++) {
                    stars[i].classList.add("active");
                }
            });

            // Add hover effect to highlight stars
            star.addEventListener("mouseover", function() {
                const rating = this.getAttribute("data-rating");

                stars.forEach(s => s.classList.remove("hovered"));

                for (let i = 0; i < rating; i++) {
                    stars[i].classList.add("hovered");
                }
            });

            // Remove hover effect when mouse leaves
            star.addEventListener("mouseleave", function() {
                stars.forEach(s => s.classList.remove("hovered"));
            });
        });
    </script>

</body>

</html>
