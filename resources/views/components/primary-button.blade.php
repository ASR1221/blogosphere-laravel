<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center bg-color-primary text-color-bg font-cairo px-2 py-1 rounded-lg hover:shadow-md focus:shadow-md']) }}>
    {{ $slot }}
</button>
