<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Huntshills</title>
    @vite('resources/css/app.css')
</head>

<body>
    <header class="flex justify-between w-full p-9">
        <div>
            <img src="/imgs/logo.svg" alt="img">
        </div>
        <nav>
            <ul class="flex gap-6">
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Project</a>
                </li>
                <li>
                    <a href="#">Blog</a>
                </li>
            </ul>
        </nav>
        <div>
            <button class="text-white bg-black px-5 py-2 rounded-md">Book a Demo</button>
        </div>
    </header>
    <main>
        <section class="flex p-9 md:flex-row flex-col space-y-7">
            <div class="space-y-5 md:w-1/2 w-full">
                <h1 class="text-center" style="font-size: 68px">Elevating brands
                    through digital
                    experiences</h1>
                <p style="font-size: 18px" class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing
                    suscipit nec iaculis
                    pellentesque et sapien nisl
                    erat
                    diam aliquet.</p>
                <div class="w-full flex justify-center gap-5">
                    <button class="text-white bg-black px-5 py-3 rounded-md">Book a Demo</button>
                    <button
                        class="text-black bg-white px-5 py-3 rounded-md hover:bg-black hover:text-white border">Check
                        our work</button>
                </div>
            </div>
            <div class="md:w-1/2 w-full">
                <img src="imgs/hero.webp" alt="">
            </div>
        </section>
        <section>
            <h4 class="text-center"><span class="font-bold">More than 200+</span> companies trusted us worldwide</h4>
            <div class="flex w-full justify-center gap-4">
                <img src="imgs/invert.svg" class=" max-w-full" alt="">
                <img src="imgs/snowflake.svg" class="max-w-full" alt="">
                <img src="imgs/proline.svg" class="max-w-full" alt="">
            </div>
        </section>
        <section class="p-9 w-full">
            <h1 class="md:text-[44px] text-center text-[40px] mx-44 m-14">
                We're the agency that builds brands
            </h1>
            <section class="space-y-8 w-full text-left">
                <div class="flex justify-between border p-3">
                    <div class="text-3xl font-bold">
                        01
                    </div>
                    <div class="text-3xl font-bold">
                        Web Design
                    </div>
                    <div>
                        <img src="imgs/arrow.svg" alt="">
                    </div>
                </div>
                <div class="flex justify-between p-3">
                    <div class="text-3xl font-bold">
                        02

                        Webflow Development
                    </div>
                    <div>
                        <img src="imgs/arrow.svg" alt="">
                    </div>
                </div>
                <div class="flex justify-between p-3">
                    <div class="text-3xl font-bold">
                        03
                    </div>
                    <div class="text-3xl font-bold">
                        Digital Marketing
                    </div>
                    <div>
                        <img src="imgs/arrow.svg" alt="">
                    </div>
                </div>
                <div class="flex justify-between p-3">
                    <div class="text-3xl font-bold">
                        04
                    </div>
                    <div class="text-3xl font-bold">
                        Product Management
                    </div>
                    <div>
                        <img src="imgs/arrow.svg" alt="">
                    </div>
                </div>
            </section>
        </section>
        <section class="p-9">
            <div class="flex items-center">
                <div class="w-full">
                    <h1 class="text-6xl font-bold text-left w-1/2">
                        Projects we have done and only results
                    </h1>
                </div>
                <div>
                    <button class="text-white bg-black w-[10rem] py-2 rounded-md">Check our Work</button>
                </div>
            </div>
            <section class="flex gap-6">
                <div class="p-9 space-y-3 border rounded-lg">
                    <div class="flex">
                        <img src="imgs/proj1.webp" alt="" class="relative w-[525px] h-[570px]">
                        <p class="absolute p- bg-black">LOGO DESIGN</p>
                        <p class="absolute">USER INTERFACE</p>
                    </div>
                    <div class="flex justify-between border p-4 rounded-lg">
                        <h1 class="text-2xl ">Zaptec Website</h1>
                        <img src="imgs/small-arrow.svg" alt="">
                    </div>
                </div>
                <div class="p-9 space-y-3 border rounded-lg">
                    <div class="flex">
                        <img src="imgs/proj1.webp" alt="" class="relative w-[525px] h-[570px]">
                        <p class="absolute p- bg-black">LOGO DESIGN</p>
                        <p class="absolute">USER INTERFACE</p>
                    </div>
                    <div class="flex justify-between border p-4 rounded-lg">
                        <h1 class="text-2xl ">Zaptec Website</h1>
                        <img src="imgs/small-arrow.svg" alt="">
                    </div>
                </div>
            </section>
            <section class="flex">
                <div class="p-9 space-y-3 border rounded-lg">
                    <div class="flex">
                        <img src="imgs/proj1.webp" alt="" class="relative w-[525px] h-[570px]">
                        <p class="absolute p- bg-black">LOGO DESIGN</p>
                        <p class="absolute">USER INTERFACE</p>
                    </div>
                    <div class="flex justify-between border p-4 rounded-lg">
                        <h1 class="text-2xl ">Zaptec Website</h1>
                        <img src="imgs/small-arrow.svg" alt="">
                    </div>
                </div>
                <div class="p-9 space-y-3 border rounded-lg">
                    <div class="flex">
                        <img src="imgs/proj1.webp" alt="" class="relative w-[525px] h-[570px]">
                        <p class="absolute p- bg-black">LOGO DESIGN</p>
                        <p class="absolute">USER INTERFACE</p>
                    </div>
                    <div class="flex justify-between border p-4 rounded-lg">
                        <h1 class="text-2xl ">Zaptec Website</h1>
                        <img src="imgs/small-arrow.svg" alt="">
                    </div>
                </div>
            </section>
        </section>
        <section class="bg-black text-white">
            <div class="container mx-auto py-16 flex flex-col items-center">
                <!-- Image Section -->
                <div class="flex justify-between items-center mb-8 w-full max-w-5xl space-x-4">
                    <!-- Left Image -->
                    <div class="w-1/3 flex justify-center">
                        <img src="imgs/cto.webp" alt="Client 1" class="w-full h-auto rounded shadow-lg">
                    </div>

                    <!-- Empty Space (Center) -->
                    <div class="w-1/3 flex justify-center items-center">
                        <!-- Placeholder for any centered content -->
                    </div>

                    <!-- Right Image -->
                    <div class="w-1/3 flex justify-center">
                        <img src="imgs/drone.webp" alt="Client 2" class="w-full h-auto rounded shadow-lg">
                    </div>
                </div>

                <!-- Center Image below the text -->
                <div class="w-1/3 flex justify-center mb-8">
                    <img src="imgs/ceo.webp" alt="Client 3" class="w-full h-auto rounded shadow-lg">
                </div>

                <!-- Action Button -->
                <div class="mb-8">
                    <button
                        class="px-6 py-2 border border-white rounded-full hover:bg-white hover:text-black transition">
                        LET'S WORK
                    </button>
                </div>

                <!-- Text Section -->
                <div class="text-center mb-8">
                    <h1 class="text-5xl font-bold mb-4">More than 120+ clients</h1>
                </div>

                <!-- Book a Demo Button -->
                <div class="flex justify-center">
                    <button
                        class="px-6 py-3 bg-yellow-500 text-black rounded-full font-medium hover:bg-yellow-600 transition">
                        Book a Demo
                    </button>
                </div>

            </div>

        </section>
        <section class="p-9 flex">
            <div class="p-9">
                <img src="imgs/mac.webp" class="w-[600px] h-[720px]" alt="">
            </div>
            <div class="flex justify-evenly flex-col w-1/2">
                <div>
                    <h1 class="text-3xl">Proved process to maximize your business growth</h1>
                </div>
                <div>
                    <h1 class="text-[40px] underline p-2">Discover Workshop</h1>
                    <p class="text-[40px] text-[#d5d5d5]">Web Design</p>
                    <p class="text-[40px] text-[#cac9c9]">Web Development</p>
                    <p class="text-[40px] text-[#cac9c9]">Product Result</p>
                </div>
                <div>
                    <h1 class="text-4xl">Discover Section</h1>
                    <p class="text-xl">Lorem ipsum dolor sit amet, consectetur adipiscing suscipit nec iaculis
                        pellentesque et sapien
                        nisl
                    </p>
                </div>
            </div>
        </section>
        <section class="w-full">
            <div class="flex justify-between">
                <h1 class="text-3xl">Kind words from clients around the world</h1>
                <div class="flex">
                    <img src="imgs/right-arrow.svg" alt="">
                    <img src="imgs/face.svg" class="" alt="">
                </div>
            </div>
            <div class="flex">
                <div>
                    <img src="imgs/russ.webp" alt="">
                </div>
                <div>
                    <h1 class="font-bold">
                        It has been an absolute pleasur bring to the table wsurvival strategi ensure proacti doation At
                        t going forward a new nor evolgenerati heading.
                    </h1>
                    <h1 class="font-bold">Russ Herrison</h1>
                    <h3>Founder and CEO at Recharge</h3>
                </div>
            </div>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>
