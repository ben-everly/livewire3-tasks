@props(['showProfile' => false])
<div>
    <div class="flex h-16 shrink-0 items-center">
        <img class="h-8 w-auto"
            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
            alt="Your Company">
    </div>
    <nav class="flex flex-1 flex-col">
        <div class="text-xs font-semibold leading-6 text-slate-400">Your teams</div>
        <ul class="space-y-1"
            role="list">
            @foreach (auth()->user()->teams as $team)
                <li>
                    <a href="/team/{{ $team->id }}"
                        @class([
                            'group flex gap-x-3 items-center rounded-md p-2 font-semibold',
                            'text-indigo-600' =>
                                request()->route()->parameter('team_id') == $team->id, //current
                            'hover:text-indigo-600' =>
                                request()->route()->parameter('team_id') != $team->id,
                        ])>
                        <x-icons.folder @class([
                            'h-6 w-6 shrink-0',
                            'text-slate-400 group-hover:text-indigo-600' =>
                                request()->route()->parameter('team_id') != $team->id,
                        ]) />
                        {{ $team->name }}
                    </a>
                </li>
            @endforeach
            @if ($showProfile)
                <li class="absolute bottom-2">
                    <a class="flex items-center gap-x-3 rounded-md p-2 font-semibold leading-6 hover:bg-slate-200"
                        href="{{ route('profile') }}">
                        <img class="h-8 w-8 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="">
                        <span class="sr-only">Your profile</span>
                        <span aria-hidden="true">{{ auth()->user()->name }}</span>
                    </a>
                </li>
            @endif
        </ul>
    </nav>
</div>
