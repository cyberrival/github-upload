@extends('layouts.app')

@section('seo')
<x-seo title="Karlie Fit" description="Karlie provides affordable remote and personal training in Perth. Qualified Personal Trainer and mother of two helping you achieve your fitness goals. Independent Arbonne consultant." />
@endsection

@section('content')
<!-- hero cta -->
<div class="bg-contain bg-no-repeat" style="background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.5)), url(https://images.unsplash.com/photo-1574680088814-c9e8a10d8a4d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80);background-size: cover;background-repeat: no-repeat;background-position: bottom;">
    <div class="py-10 mx-auto max-w-screen-xl px-4 sm:py-12 sm:px-6 md:py-16 lg:py-20 lg:px-8 xl:py-28">
        <div class="sm:text-center lg:text-left">
            <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-white sm:text-5xl sm:leading-none md:text-6xl">
                Get fit and
                <br class />confident
                <br class />with Karlie
            </h2>
            <p class="mt-3 text-base text-white sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                Whatever your health and fitness goals may be, Karlie is here to help you achieve them and put you on the path to reaching your goals, one step at a time, supporting you all the way.
            </p>
            <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                <div class="rounded-md shadow">
                    <a href="/products" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pink-600 hover:bg-pink-400 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">Get started</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- services -->
<section id="services">
    <div class="py-12 bg-white">
        <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
                <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">What can we do together?</h3>
                <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
                    I offer a wide range of services and workouts to help you reach your full potential!
                </p>
            </div>

            <div class="mt-10">
                <ul class="md:grid md:grid-cols-3 md:col-gap-8 md:row-gap-10">
                    <li>
                        <div class="relative pb-5/6">
                            <img class="absolute h-full w-full object-cover rounded-lg shadow-md" src="https://images.unsplash.com/photo-1476480862126-209bfaa8edc8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="cardio exercise" />
                        </div>
                        <div class="relative px-4 -mt-16">
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-lg text-pink-500 bg-pink-200">
                                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="running" class="h-6 w-6" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 416 512">
                                        <path fill="currentColor" d="M272 96c26.51 0 48-21.49 48-48S298.51 0 272 0s-48 21.49-48 48 21.49 48 48 48zM113.69 317.47l-14.8 34.52H32c-17.67 0-32 14.33-32 32s14.33 32 32 32h77.45c19.25 0 36.58-11.44 44.11-29.09l8.79-20.52-10.67-6.3c-17.32-10.23-30.06-25.37-37.99-42.61zM384 223.99h-44.03l-26.06-53.25c-12.5-25.55-35.45-44.23-61.78-50.94l-71.08-21.14c-28.3-6.8-57.77-.55-80.84 17.14l-39.67 30.41c-14.03 10.75-16.69 30.83-5.92 44.86s30.84 16.66 44.86 5.92l39.69-30.41c7.67-5.89 17.44-8 25.27-6.14l14.7 4.37-37.46 87.39c-12.62 29.48-1.31 64.01 26.3 80.31l84.98 50.17-27.47 87.73c-5.28 16.86 4.11 34.81 20.97 40.09 3.19 1 6.41 1.48 9.58 1.48 13.61 0 26.23-8.77 30.52-22.45l31.64-101.06c5.91-20.77-2.89-43.08-21.64-54.39l-61.24-36.14 31.31-78.28 20.27 41.43c8 16.34 24.92 26.89 43.11 26.89H384c17.67 0 32-14.33 32-32s-14.33-31.99-32-31.99z" />
                                    </svg>
                                </div>

                                <div class="pt-4 text-center">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">Cardio Training</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        Cardio exercize is any exercise that raises your heart rate.
                                        We all know that to keep our muscles in shape we need to move
                                        them. This movement makes them stronger, and stronger muscles
                                        make for a more efficient and healthy body. With a variety of options to help increase your fitness levels.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="relative pb-5/6">
                            <img class="absolute h-full w-full object-cover rounded-lg shadow-md" src="{{ asset('/images/arbonne.jpg') }}" alt="arbonne products" />
                        </div>
                        <div class="relative px-4 -mt-16">
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-lg text-pink-500 bg-pink-200">
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="utensils" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 416 512">
                                        <path fill="currentColor" d="M207.9 15.2c.8 4.7 16.1 94.5 16.1 128.8 0 52.3-27.8 89.6-68.9 104.6L168 486.7c.7 13.7-10.2 25.3-24 25.3H80c-13.7 0-24.7-11.5-24-25.3l12.9-238.1C27.7 233.6 0 196.2 0 144 0 109.6 15.3 19.9 16.1 15.2 19.3-5.1 61.4-5.4 64 16.3v141.2c1.3 3.4 15.1 3.2 16 0 1.4-25.3 7.9-139.2 8-141.8 3.3-20.8 44.7-20.8 47.9 0 .2 2.7 6.6 116.5 8 141.8.9 3.2 14.8 3.4 16 0V16.3c2.6-21.6 44.8-21.4 48-1.1zm119.2 285.7l-15 185.1c-1.2 14 9.9 26 23.9 26h56c13.3 0 24-10.7 24-24V24c0-13.2-10.7-24-24-24-82.5 0-221.4 178.5-64.9 300.9z" />
                                    </svg>
                                </div>

                                <div class="pt-4 text-center">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">Arbonne</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        A holistic approach to Health - Mind - Body - Skin. A wide range of products helping you fell better from the inside out!
                                        We all need to start from feeling better withing ourselves to grow.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="mt-10 md:mt-0">
                        <div class="relative pb-5/6">
                            <img class="absolute h-full w-full object-cover rounded-lg shadow-md" alt="strength training" src="https://images.unsplash.com/photo-1541534741688-6078c6bfb5c5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1349&q=80" />
                        </div>
                        <div class="relative px-4 -mt-16">
                            <div class="bg-white p-6 rounded-lg shadow-lg">
                                <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-lg text-pink-500 bg-pink-200">
                                    <svg aria-hidden="true" data-prefix="fas" data-icon="dumbbell" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                        <path fill="currentColor" d="M104 96H56c-13.3 0-24 10.7-24 24v104H8c-4.4 0-8 3.6-8 8v48c0 4.4 3.6 8 8 8h24v104c0 13.3 10.7 24 24 24h48c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24zm528 128h-24V120c0-13.3-10.7-24-24-24h-48c-13.3 0-24 10.7-24 24v272c0 13.3 10.7 24 24 24h48c13.3 0 24-10.7 24-24V288h24c4.4 0 8-3.6 8-8v-48c0-4.4-3.6-8-8-8zM456 32h-48c-13.3 0-24 10.7-24 24v168H256V56c0-13.3-10.7-24-24-24h-48c-13.3 0-24 10.7-24 24v400c0 13.3 10.7 24 24 24h48c13.3 0 24-10.7 24-24V288h128v168c0 13.3 10.7 24 24 24h48c13.3 0 24-10.7 24-24V56c0-13.3-10.7-24-24-24z" />
                                    </svg>
                                </div>

                                <div class="pt-4 text-center">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">Strength</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        Muscles can either shrink or threy grown depending on how we are using them.
                                        In order to get optimum results and a toned body, shedding body fat as well as
                                        strength training is the best way to tone. With a variet of options to help
                                        increase your strength and in turn tone your body.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- app features -->
<section>
    <div class="py-16 bg-gray-50 overflow-hidden md:py-20 lg:py-24">
        <div class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-screen-xl">
            <svg class="hidden lg:block absolute left-full transform -translate-x-1/2 -translate-y-1/4" width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="svg-pattern-squares-1" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#svg-pattern-squares-1)"></rect>
            </svg>

            <div class="relative">
                <h3 class="text-center text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                    A smarter way to train
                </h3>
                <p class="mt-4 max-w-3xl mx-auto text-center text-xl leading-7 text-gray-500">
                    Use an industry leading professionally crafted mobile app to take your training to the next level, fitness has never been more accessible.
                </p>
            </div>

            <div class="relative mt-12 lg:mt-20 lg:grid lg:grid-cols-2 lg:gap-8 lg:items-start">
                <div class="relative">
                    <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                        Always in the loop
                    </h4>
                    <p class="mt-3 text-lg leading-7 text-gray-500">
                        Track workouts, nutrition, fitness targets, progress photos, personal bests, and more with the Trainerize mobile app. </p>

                    <ul class="mt-10">
                        <li>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-pink-200 text-pink-500">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">Notifications</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        Reminders to help you keep on top of your workouts and check-ins. </p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-10">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-md bg-pink-200 text-pink-500">
                                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg leading-6 font-medium text-gray-900">In app messaging</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-500">
                                        Keep engaged with in app messaging and one on one communication.
                                    </p>
                                </div>
                            </div>
                        </li>

                    </ul>
                </div>

                <div class="mt-10 -mx-4 relative lg:mt-0">
                    <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404">
                        <defs>
                            <pattern id="svg-pattern-squares-2" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                            </pattern>
                        </defs>
                        <rect width="784" height="404" fill="url(#svg-pattern-squares-2)"></rect>
                    </svg>
                    <img class="relative mx-auto px-4 sm:px-6" width="350" src="{{ asset('images/client-dashboard-your-clients-see.png') }}" alt="trainerize app screenshot">
                </div>
            </div>

            <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="svg-pattern-squares-3" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#svg-pattern-squares-3)"></rect>
            </svg>

            <div class="relative mt-12 sm:mt-16 lg:mt-24">
                <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-start">
                    <div class="lg:col-start-2">
                        <h4 class="text-2xl leading-8 font-extrabold text-gray-900 tracking-tight sm:text-3xl sm:leading-9">
                            Expertise at your fingertips
                        </h4>
                        <p class="mt-3 text-lg leading-7 text-gray-500">
                            With libraries of professionally created custom and pre-built exercises, workouts, and programs on offer.
                        </p>

                        <ul class="mt-10">
                            <li>
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-pink-200 text-pink-500">
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h5 class="text-lg leading-6 font-medium text-gray-900">Professional Videos</h5>
                                        <p class="mt-2 text-base leading-6 text-gray-500">
                                            Watch video demonstrations of your exercises in a clear and easy to understand format.
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-10">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-pink-200 text-pink-500">
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h5 class="text-lg leading-6 font-medium text-gray-900">Print Workouts</h5>
                                        <p class="mt-2 text-base leading-6 text-gray-500">
                                            All workouts can be saved and printed out in PDF format </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
                        <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404">
                            <defs>
                                <pattern id="svg-pattern-squares-4" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor"></rect>
                                </pattern>
                            </defs>
                            <rect width="784" height="404" fill="url(#svg-pattern-squares-4)"></rect>
                        </svg>
                        <img class="relative mx-auto px-4 sm:px-6" width="350" src="{{ asset('images/mobile-workout.png') }}" alt="trainerize app workout screenshot">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- info -->
<section>
    <div style="background:linear-gradient(rgba(0, 0,0, 0.60),rgba(0, 0, 0, 0.60)), url(https://images.unsplash.com/photo-1539867462940-bc733134d96e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1568&q=80);background-position:center;background-size:cover;" ;>
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-white sm:text-4xl sm:leading-10">
                Training all over Perth,
                <br />I can come to you.
            </h2>
        </div>
    </div>
</section>
<!-- testimonial -->
<section>
    <div class="pt-0 pb-16 bg-gray-50 overflow-hidden lg:pt-12 lg:py-24">
        <div class="relative max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
            <svg class="absolute top-full right-full transform translate-x-1/3 -translate-y-1/4 lg:translate-x-1/2 xl:-translate-y-1/2" width="400" height="400" fill="none" viewBox="0 0 400 400">
                <defs>
                    <pattern id="svg-pattern-squares-2" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="300" height="300" fill="url(#svg-pattern-squares-2)" />
            </svg>

            <div class="relative">
                <blockquote class="mt-8">
                    <div class="max-w-3xl mx-auto text-center text-xl leading-8 font-medium text-gray-900">
                        <p>
                            <span class="text-pink-500">“</span>Karlie has helped me in more ways than one and I'm so thankful to have her in my life, I feel more confident in myself and my everyday life. If you are looking for a personal trainer, I highly recommend Karlie.<span class="text-pink-500">”</span>
                        </p>
                    </div>
                    <footer class="mt-8">
                        <div class="md:flex md:items-center md:justify-center">
                            <div class="md:flex-shrink-0">
                                <img class="mx-auto h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1535953472862-9cc610a70f8a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&h=256&w=256" alt="client portrait" />
                            </div>
                            <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                                <div class="text-base leading-6 font-medium text-gray-900">Tiana C</div>

                                <svg class="hidden md:block mx-1 h-5 w-5 text-pink-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M11 0h3L9 20H6l5-20z" />
                                </svg>

                                <div class="text-base leading-6 font-medium text-gray-500">Champion Client</div>
                            </div>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>
<!-- recent posts -->
<section>
    <div class="relative bg-gray-50 py-16 px-4 sm:px-6 lg-:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-screen-xl mx-auto">
            <div class="text-center">
                <h2 class="text-4xl leading-10 tracking-tight font-extrabold text-gray-900">From the blog</h2>
                <!-- <p class="mt-5 text-xl max-w-2-xl leading-7 text-gray-500"></p> -->
            </div>
            <div class="mt-12 grid gap-5 max-w-lg mx-auto lg:grid-cols-3 lg:max-w-none">


                <!-- posts -->
                @foreach($posts as $post)
                <div class="bg-white flex flex-col rounded-lg shadow-lg overflow-hidden">
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="{{ $post->imageUrl }}" alt="{{ $post->title }}">
                    </div>
                    <div class="flex-1 p-6 flex flex-col justify-between">
                        <div>
                            <p class="text-sm leading-5 font-medium text-pink-600">Blog</p>
                            <a href="blog/{{ $post->id }}">
                                <h3 class="mt-2 text-xl leading-7 font-semibold text-gray-900">{{ $post->title }}</h3>
                            </a>
                            <p class="mt-3 text-base leading-6 text-gray-600">{{ $post->excerpt }}</p>
                            <div class="mt-6 items-center flex">
                                <div class="flex-shrink-0">

                                    <img class="h-10 w-10 rounded-full" src=" {{ asset('images/karlie_profile.jpg') }}" alt="karlie profile">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm leading-5 font-medium text-gray-900">Karlie</p>
                                    <div class="text-sm leading-5 text-gray-500">
                                        <time datetime="">{{ $post->simpleTime() }}</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- cta -->
<section>
    <div class="bg-gray-50">
        <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                Ready to dive in?
                <br />
                <span class="text-pink-600">Start your free trial today.</span>
            </h2>
            <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
                <div class="inline-flex rounded-md shadow">
                    <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">Get started</a>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection