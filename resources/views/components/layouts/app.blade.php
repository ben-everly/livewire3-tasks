<!DOCTYPE html>
<html class="h-full"
    lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <title>Livewire</title>
        <meta charset="utf-8">
        <meta name="viewport"
            content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
    </head>

    <body class="h-full antialiased">
        <div x-data="{ menuExpanded: false }">
            <div class="relative z-50 lg:hidden"
                role="dialog"
                aria-modal="true"
                x-show="menuExpanded"
                x-cloak>
                <div class="fixed inset-0 bg-slate-900/80"
                    x-show="menuExpanded"
                    x-transition:enter="transition-opacity ease-linear duration-300"
                    x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100"
                    x-transition:leave="transition-opacity ease-linear duration-300"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"></div>
                <div class="fixed inset-0 flex">
                    <div class="relative mr-16 flex w-full max-w-xs flex-1"
                        x-show="menuExpanded"
                        x-transition:enter="transition ease-in-out duration-300 transform"
                        x-transition:enter-start="-translate-x-full"
                        x-transition:enter-end="translate-x-0"
                        x-transition:leave="transition ease-in-out duration-300 transform"
                        x-transition:leave-start="translate-x-0"
                        x-transition:leave-end="-translate-x-full">
                        <div class="absolute left-full top-0 flex w-16 justify-center pt-5"
                            x-show="menuExpanded"
                            x-transition:enter="ease-in-out duration-300"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in-out duration-300"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0">
                            <button class="-m-2.5"
                                type="button"
                                x-on:click="menuExpanded = false">
                                <span class="sr-only">Close sidebar</span>
                                <svg class="h-6 w-6 text-slate-50"
                                    aria-hidden="true"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke-width="1.5"
                                    stroke="currentColor">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Dynamic sidebar for mobile -->
                        <div class="flex grow flex-col gap-y-5 overflow-y-auto bg-white px-6 pb-2">
                            <x-sidebar />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Static sidebar for desktop -->
            <div class="hidden lg:fixed lg:inset-y-0 lg:z-50 lg:flex lg:w-64 lg:flex-col">
                <div class="flex grow flex-col gap-y-5 overflow-y-auto border-r border-slate-300 bg-white px-6">
                    <x-sidebar showProfile="true" />
                </div>
            </div>

            <div class="sticky top-0 z-40 flex items-center gap-x-6 bg-white border-b border-slate-200 px-4 py-4 sm:px-6 lg:hidden">
                <button class="-m-2.5 lg:hidden text-slate-700"
                    type="button"
                    x-on:click="menuExpanded = true">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6"
                        aria-hidden="true"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
                <div class="flex-1 font-semibold leading-6">Dashboard</div>
                <a href="#" class="rounded-full">
                    <span class="sr-only">Your profile</span>
                    <img class="h-8 w-8 rounded-full bg-slate-50"
                        src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                        alt="">
                </a>
            </div>

            <main class="lg:pl-64">
                <div class="px-4">
                    {{ $slot }}
                </div>
            </main>
        </div>
    </body>

</html>
