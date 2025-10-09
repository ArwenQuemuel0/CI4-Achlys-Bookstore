<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Achlys' Bookstore – Sign Up</title>
    <link rel="shortcut icon" type="image/png" href="/assets/book_icon.ico" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Righteous&family=Roboto+Slab:wght@100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto Slab', serif;
        }

        .header-title,
        h1,
        h2,
        h3,
        h4,
        .heading {
            font-family: "Righteous", sans-serif;
            font-weight: 400;
            font-style: normal;
        }

        input:focus {
            transition: all 0.3s ease;
            transform: scale(1.02);
        }

        button {
            transition: all 0.3s ease;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(139, 126, 116, 0.3);
        }

        /* Left Section with Darker Overlay */
        .bookstore-gradient {
            position: relative;
            background: url('https://static.vecteezy.com/system/resources/previews/022/336/538/non_2x/coffee-and-book-minimalist-background-illustration-ai-generative-free-photo.jpg') no-repeat center center;
            background-size: cover;
        }

        .bookstore-gradient::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(44, 41, 41, 0.85), rgba(139, 126, 116, 0.6));
            z-index: 0;
        }

        .bookstore-gradient>div {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body class="text-gray-100">
    <div class="flex flex-col min-h-screen overlay">
        <!-- Main Content -->
        <main class="flex md:flex-row flex-col flex-grow">

            <!-- Left Section -->
            <div class="flex flex-col justify-center items-center p-12 md:w-2/3 text-white bookstore-gradient">
                <div class="space-y-6 max-w-md text-center">
                    <h2 class="font-bold text-4xl md:text-5xl header-title">Join the Achlys Community</h2>
                    <p class="text-white/90 text-lg leading-relaxed">
                        Unlock a world of stories, connect with fellow readers, and keep track of your literary adventures.
                    </p>
                </div>
            </div>

            <!-- Right Section (Sign Up Form) -->
            <div class="flex justify-center items-center bg-white px-6 py-16 md:w-1/3">
                <div class="bg-white bg-opacity-90 shadow-2xl p-10 rounded-2xl w-full max-w-md">
                    <div class="mb-8 text-center">
                        <img src="/assets/circle_logo.png" alt="Achlys Circle Logo" class="mx-auto mb-4 w-16 h-16">
                        <h2 class="font-bold text-gray-900 text-3xl header-title">Create Account</h2>
                        <p class="mt-2 text-gray-600">Discover stories that speak to you</p>
                    </div>

                    <form action="#" method="post" class="space-y-6">
                        <div>
                            <label for="name" class="block mb-3 font-semibold text-gray-700">Full Name</label>
                            <input type="text" id="name" name="name" required
                                class="px-4 py-4 border-2 border-gray-200 focus:border-[#8B7E74] rounded-xl focus:outline-none focus:ring-[#8B7E74]/20 focus:ring-4 w-full text-gray-900 transition-all duration-300 placeholder-gray-500"
                                placeholder="Enter your full name" />
                        </div>

                        <div>
                            <label for="email" class="block mb-3 font-semibold text-gray-700">Email Address</label>
                            <input type="email" id="email" name="email" required
                                class="px-4 py-4 border-2 border-gray-200 focus:border-[#8B7E74] rounded-xl focus:outline-none focus:ring-[#8B7E74]/20 focus:ring-4 w-full text-gray-900 transition-all duration-300 placeholder-gray-500"
                                placeholder="Enter your email" />
                        </div>

                        <div>
                            <label for="password" class="block mb-3 font-semibold text-gray-700">Password</label>
                            <input type="password" id="password" name="password" required
                                class="px-4 py-4 border-2 border-gray-200 focus:border-[#8B7E74] rounded-xl focus:outline-none focus:ring-[#8B7E74]/20 focus:ring-4 w-full text-gray-900 transition-all duration-300 placeholder-gray-500"
                                placeholder="Create a password" />
                        </div>

                        <div>
                            <label for="confirm" class="block mb-3 font-semibold text-gray-700">Confirm Password</label>
                            <input type="password" id="confirm" name="confirm" required
                                class="px-4 py-4 border-2 border-gray-200 focus:border-[#8B7E74] rounded-xl focus:outline-none focus:ring-[#8B7E74]/20 focus:ring-4 w-full text-gray-900 transition-all duration-300 placeholder-gray-500"
                                placeholder="Confirm your password" />
                        </div>

                        <button type="submit"
                            class="bg-[#8B7E74] hover:bg-[#A99D92] shadow-lg px-6 py-4 rounded-full focus:outline-none focus:ring-[#8B7E74]/50 focus:ring-4 w-full font-semibold text-white text-lg transition-all duration-300">
                            Sign Up
                        </button>
                    </form>

                    <div class="space-y-2 mt-6 text-center">
                        <p class="text-gray-700">
                            Already have an account?
                            <a href="/loginPage" class="font-semibold text-[#8B7E74] hover:text-[#A99D92] transition-colors">Log in here</a>
                        </p>
                        <?= view('components/buttons/back_button', [
                            'href' => '/',
                            'label' => 'Back to Home'
                        ]) ?>
                    </div>
                </div>
            </div>
        </main>
    </div>

</body>

</html>