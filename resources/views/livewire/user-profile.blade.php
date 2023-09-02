<form class="m-auto flex max-w-lg flex-col gap-4"
    wire:submit="save">
    <label for="name">
        <div>Name:</div>
        <input id="name"
            type="text"
            wire:model="name" />
    </label>
    @error('name')
        <p class="text-red-500">{{ $message }}</p>
    @enderror
    <label for="email">
        <div>Email:</div>
        <input id="email"
            type="text"
            wire:model="email" />
    </label>
    @error('email')
        <p class="text-red-500">{{ $message }}</p>
    @enderror
    <label for="dark_mode">
        Dark Mode:
        <x-toggle id="dark_mode"
            wire:model="dark_mode" />
    </label>
    @error('dark_mode')
        <p class="text-red-500">{{ $message }}</p>
    @enderror
    <input class="cursor-pointer bg-indigo-600 text-white hover:bg-indigo-700"
        type="submit"
        value="save" />
</form>
