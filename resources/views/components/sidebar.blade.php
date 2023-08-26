@props(['showProfile' => false])
<div>
    <div class="flex h-16 shrink-0 items-center">
        <img class="h-8 w-auto"
            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
            alt="Your Company">
    </div>
    <nav class="flex flex-1 flex-col">
        <ul class="flex flex-1 flex-col gap-y-6"
            role="list">
            <li>
                <div class="text-xs font-semibold leading-6 text-gray-400">Your teams</div>
                <ul class="-mx-2 space-y-1"
                    role="list">
                    @foreach (\App\Models\Team::all() as $team)
                        <li>
                            <a href="/team/{{ $team->id }}"
                                @class([
                                    'group flex gap-x-3 rounded-md p-2 text-sm font-semibold leading-6',
                                    'bg-gray-50 text-indigo-600' => request()->route()->parameter('team_id') == $team->id, //current
                                    'text-gray-700 hover:text-indigo-600 hover:bg-gray-50' => request()->route()->parameter('team_id') != $team->id,
                                ])>
                                <x-icons.folder @class([
                                    'h-6 w-6 shrink-0',
                                    'text-gray-400' => request()->route()->parameter('team_id') != $team->id,
                                ]) />
                                {{ $team->name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            @if ($showProfile)
                <li class="absolute bottom-0 -mx-6 mt-auto">
                    <a class="flex items-center gap-x-4 px-6 py-3 text-sm font-semibold leading-6 text-gray-900 hover:bg-gray-50"
                        href="#">
                        <img class="h-8 w-8 rounded-full bg-gray-50"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <span class="sr-only">Your profile</span>
                        <span aria-hidden="true">Tom Cook</span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>
