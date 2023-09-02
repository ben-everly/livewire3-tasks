<button type="button"
    role="switch"
    aria-checked="false"
    :class="{
        'bg-gray-300': !value,
        'bg-indigo-600': value,
        'align-middle p-0 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2': true
    }"
    x-data="{
        value: @entangle($attributes->wire('model')->value()),
    }"
    x-on:click="value = !value">
    <span class="sr-only">Use setting</span>
    <span aria-hidden="true"
        :class="{
            'translate-x-0': !value,
            'translate-x-5': value,
            'pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out': true
        }"></span>
</button>
