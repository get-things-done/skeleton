<div class="p-1 {{ $size }}">
    <div class="bg-white shadow sm:rounded-lg">
        <div class="container flex flex-col h-full p-5 mx-auto">
            <h1 class="mb-3 text-xl border-b">{{ $title }}</h1>
            {{ $slot }}
        </div>
    </div>
</div>
