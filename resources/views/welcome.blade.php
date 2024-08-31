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
            <div class="flex">
                <img src="imgs/invert.svg" class=" max-w-full" alt="">
                <img src="imgs/snowflake.svg" class="max-w-full" alt="">
                <img src="imgs/proline.svg" class="max-w-full" alt="">
            </div>
        </section>
        <section class="p-9">
            <h1 class="md:text-[64px] text-center text-[40px]">
                We're the agency that builds brands
            </h1>
            <section class="space-y-8 w-full">
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
    </main>
    <footer>

    </footer>
</body>

</html>
