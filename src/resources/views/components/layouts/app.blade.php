<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Warranty</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.2/dist/full.min.css" rel="stylesheet" />
    <style>
        /* Hides scrollbar for a cleaner look */
        #carousel::-webkit-scrollbar {
            display: none;
        }

        #carousel {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
</head>

<body class="bg-base-100 text-base-content">

    <header class="navbar bg-base-100 shadow sticky top-0 z-50">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-200 rounded-box w-52">
                    <li><a>Home</a></li>
                    <li><a>Register</a></li>
                    <li><a>Claim</a></li>
                    <li><a>Check Warranty</a></li>
                </ul>
            </div>
            <a class="btn btn-ghost text-xl font-bold">SecureWarranty</a>
        </div>

        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1">
                <li><a>Home</a></li>
                <li><a>Register</a></li>
                <li><a>Claim</a></li>
            </ul>
        </div>
        <div class="navbar-end flex items-center gap-4">
            <label class="flex items-center gap-2 cursor-pointer">
                <input type="checkbox" value="synthwave" class="toggle theme-controller" />
                <span class="text-sm hidden sm:inline">Dark Mode</span>
            </label>
            <a class="btn btn-primary btn-sm hidden lg:flex">Check Warranty</a>
        </div>
    </header>

    <section class="hero min-h-screen bg-base-200">
        <div class="hero-content flex-col lg:flex-row-reverse text-center lg:text-left">
            <img src="https://images.unsplash.com/photo-1683507557764-ee6625d7ec0c?auto=format&fit=crop&w=800&q=80"
                class="max-w-xs sm:max-w-sm rounded-lg shadow-2xl" alt="Hero" />
            <div>
                <h1 class="text-4xl md:text-5xl font-bold">Protect Your Product</h1>
                <p class="py-6">Register your purchase in minutes and enjoy peace of mind. Warranty support has never
                    been easier.</p>
                <a class="btn btn-primary">Register Product</a>
            </div>
        </div>
    </section>

    <section class="py-20 px-4 bg-base-100">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold">🔥 Featured Products</h2>
            <p class="text-gray-500">Enjoy extended warranties on our top picks!</p>
        </div>

        <div id="carousel"
            class="flex gap-4 overflow-x-auto scroll-smooth snap-x snap-mandatory px-4 sm:px-8 max-w-6xl mx-auto">
            <div class="flex-shrink-0 snap-start w-full max-w-xs">
                <div class="card bg-base-200 shadow-xl">
                    <figure class="aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1580894908361-967195033215?auto=format&fit=crop&w=600"
                            alt="Headphones" class="w-full h-full object-cover" />
                    </figure>
                    <div class="card-body">
                        <h3 class="card-title">Smart Headphones X200</h3>
                        <p>1-Year Extended Warranty</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">View Product</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 snap-start w-full max-w-xs">
                <div class="card bg-base-200 shadow-xl">
                    <figure class="aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1593642532842-98d0fd5ebc1a?auto=format&fit=crop&w=600"
                            alt="Laptop" class="w-full h-full object-cover" />
                    </figure>
                    <div class="card-body">
                        <h3 class="card-title">UltraBook Pro 15"</h3>
                        <p>2-Year Premium Coverage</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">View Product</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 snap-start w-full max-w-xs">
                <div class="card bg-base-200 shadow-xl">
                    <figure class="aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1546868871-7041f2a55e12?auto=format&fit=crop&w=600"
                            alt="Watch" class="w-full h-full object-cover" />
                    </figure>
                    <div class="card-body">
                        <h3 class="card-title">WatchSync Sport</h3>
                        <p>Damage Protection</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">View Product</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-shrink-0 snap-start w-full max-w-xs">
                <div class="card bg-base-200 shadow-xl">
                    <figure class="aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1519638831568-d9897f54ed69?auto=format&fit=crop&w=600"
                            alt="Camera" class="w-full h-full object-cover" />
                    </figure>
                    <div class="card-body">
                        <h3 class="card-title">ProCam Z5</h3>
                        <p>Lens & Sensor Warranty</p>
                        <div class="card-actions justify-end">
                            <button class="btn btn-primary btn-sm">View Product</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-base-100">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-8">What You Can Do</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="card bg-base-200 shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-2">📝 Easy Registration</h3>
                    <p>Register your product with serial number and proof of purchase.</p>
                </div>
                <div class="card bg-base-200 shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-2">⚙️ Fast Claim Process</h3>
                    <p>File and track your warranty claim online in just a few steps.</p>
                </div>
                <div class="card bg-base-200 shadow-md p-6">
                    <h3 class="text-xl font-semibold mb-2">📦 Status Tracking</h3>
                    <p>Get real-time updates on your claim and shipping process.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-base-200 text-center">
        <div class="max-w-xl mx-auto px-4">
            <h2 class="text-2xl font-bold mb-4">Already Registered?</h2>
            <p class="mb-6">Check your product warranty or submit a support request.</p>
            <a class="btn btn-secondary">Check Warranty Status</a>
        </div>
    </section>

    <footer class="footer p-10 bg-base-300 text-base-content">
        <aside>
            <h3 class="text-xl font-bold">SecureWarranty</h3>
            <p>Your product, our protection.</p>
        </aside>
        <nav>
            <h6 class="footer-title">Links</h6>
            <a class="link link-hover">Home</a>
            <a class="link link-hover">Register</a>
            <a class="link link-hover">Claim</a>
        </nav>
        <nav>
            <h6 class="footer-title">Contact</h6>
            <a class="link link-hover">support@securewarranty.com</a>
            <a class="link link-hover">+62 812 3456 7890</a>
        </nav>
    </footer>

    <script>
        const carousel = document.getElementById("carousel");
        let autoScrollInterval;

        const startCarouselAutoScroll = () => {
            if (autoScrollInterval) {
                clearInterval(autoScrollInterval);
            }
            if (!carousel) return;
            const carouselItems = carousel.querySelectorAll(".flex-shrink-0");
            if (carouselItems.length <= 1) return;
            const itemWidth = carouselItems[0].offsetWidth + parseInt(getComputedStyle(carouselItems[0]).marginRight) *
                2;
            autoScrollInterval = setInterval(() => {
                const currentIndex = Math.round(carousel.scrollLeft / itemWidth);
                const nextIndex = (currentIndex + 1) % carouselItems.length;
                if (carouselItems[nextIndex]) {
                    const nextItem = carouselItems[nextIndex];
                    carousel.scrollTo({
                        left: nextItem.offsetLeft,
                        behavior: "smooth"
                    });
                }
            }, 4000);
        };
        window.addEventListener('load', startCarouselAutoScroll);
        window.addEventListener('resize', startCarouselAutoScroll);
    </script>

</body>

</html>
