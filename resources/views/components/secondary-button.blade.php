<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-3 py-1 bg-color-bg border border-color-primary rounded-md font-medium text-color-primary shadow-sm focus:outline-none focus:ring-2 focus:ring-offset-2 hover:shadow-md focus:shadow-md disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
