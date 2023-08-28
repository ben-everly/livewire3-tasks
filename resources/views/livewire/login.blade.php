<div>
    <form class="mt-8 m-auto flex max-w-sm flex-col gap-6 rounded-xl bg-white p-8 shadow-lg"
        wire:submit.prevent="login">
        <h2>Login</h2>
        <input id="email"
            type="text"
            wire:model.defer="email"
            autocomplete="email"
            placeholder="email">
        @error('email')
            <span class="text-red-500">{{ $message }}</span>
        @enderror
        <input id="password"
            type="password"
            wire:model.defer="password"
            autocomplete="current-password"
            placeholder="password">
        <input class="bg-indigo-600 text-slate-50 hover:bg-indigo-700"
            type="submit"
            value="Login">
    </form>
</div>
