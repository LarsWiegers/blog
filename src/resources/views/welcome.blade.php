<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        @production
            <!-- Google tag (gtag.js) -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=G-9ZN819RWGW"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', 'G-9ZN819RWGW');
            </script>
        @endproduction
    </head>
    <body>
        <div class="relative bg-white py-16 sm:py-24">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-2 lg:gap-24 lg:items-start">
                <div class="relative sm:py-16 lg:py-0">
                    <div aria-hidden="true" class="hidden sm:block lg:absolute lg:inset-y-0 lg:right-0 lg:w-screen">
                        <div class="absolute inset-y-0 right-1/2 w-full bg-gray-50 rounded-r-3xl lg:right-72"></div>
                        <svg class="absolute top-8 left-1/2 -ml-3 lg:-right-8 lg:left-auto lg:top-12" width="404" height="392" fill="none" viewBox="0 0 404 392">
                            <defs>
                                <pattern id="02f20b47-fd69-4224-a62a-4c9de5c763f7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="392" fill="url(#02f20b47-fd69-4224-a62a-4c9de5c763f7)" />
                        </svg>
                    </div>
                    <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0 lg:max-w-none lg:py-20">
                        <!-- Testimonial card-->
                        <div class="relative pt-64 pb-64 rounded-2xl shadow-xl overflow-hidden">
                            <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('images/pf-pic.jpg') }}" alt="">
                        </div>
                    </div>
                </div>

                <div class="relative mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:px-0">
                    <!-- Content area -->
                    <div class="pt-12 sm:pt-16 lg:pt-20">
                        <h2 class="text-3xl text-gray-900 font-extrabold tracking-tight sm:text-4xl">
                            On a mission to create awesome software
                        </h2>
                        <div class="mt-6 text-gray-500 space-y-6">
                            <p class="text-lg">
                                Hi! My name is Lars Wiegers and im {{  \Carbon\Carbon::now()->diffInYears(\Carbon\Carbon::parse('1998-08-28')) }} years old.
                                And im a enthusiastic programmer that loves making software.
                            </p>
                            <p class="text-base leading-7">
                                Mostly active in websites and webapps and love making SaaS applications.
                            </p>
                            <p class="text-base leading-7">
                                Actively working on open source which can be found on my github here:
                                <a href="https://github.com/LarsWiegers" class="underline">LarsWiegers</a>
                            </p>
                        </div>
                    </div>

                    <!-- Stats section -->
                    <div class="mt-10">
                        <dl class="grid grid-cols-2 gap-x-4 gap-y-8">
                            <div class="border-t-2 border-gray-100 pt-6">
                                <dt class="text-base font-medium text-gray-500">Years of experience</dt>
                                <dd class="text-3xl font-extrabold tracking-tight text-gray-900">{{  \Carbon\Carbon::now()->diffInYears(\Carbon\Carbon::parse('2017-01-01')) }}</dd>
                            </div>

                            <div class="border-t-2 border-gray-100 pt-6">
                                <dt class="text-base font-medium text-gray-500">Awesome projects</dt>
                                <dd class="text-3xl font-extrabold tracking-tight text-gray-900">6+</dd>
                            </div>
                        </dl>
                        <div class="mt-10">
                            <a href="/blog" class="text-base font-medium text-indigo-600">Read my blog here <span aria-hidden="true">&rarr;</span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
