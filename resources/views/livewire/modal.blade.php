<div>
    @if ($show)
        <div class="fixed inset-0 z-40 overflow-y-auto px-4 py-6 sm:px-0 md:py-24">
            <div class="fixed inset-0 transform">
                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
            </div>

            <div class="max-w-lg transform overflow-hidden rounded-lg bg-slate-100 dark:bg-slate-800 sm:mx-auto sm:w-full">
                <livewire:is :component="$component"
                    :params="$params" />
            </div>
        </div>
    @endif
</div>
