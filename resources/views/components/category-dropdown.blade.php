<x-dropdown>
    <x-slot name="trigger">
        <button class="py-2 pl-3 pr-9 text-sm font-semibold w-full lg:w-32 text-left flex lg:inline-flex">
            {{ isset($currentCategory) ? ucwords($currentCategory->name) : 'Categories' }}

            {{-- Chamando o componente do svg e passando atributos extras e style --}}
            <x-icon name="down-arrow" class="absolute pointer-events-none" style="right: 12px;" />
        </button>
    </x-slot>

    {{-- Outro jeito de colorir o dropdown que estamos, usando o helper routeIs com o nome da rota--}}
    {{-- Setamos o nome da rota com o ->name('nome') no web.php --}}
    <x-dropdown-item href="/" :active="request()->routeIs('home')">All</x-dropdown-item>

    @foreach($categories as $category)
        <x-dropdown-item
            href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category')) }}"
            :active='request()->is("categories;{$category->slug}")'
            {{-- Também pode ser escrito como: isset($currentCategory) && $currentCategory->is($category) --}}
        >{{ ucwords($category->name) }}</x-dropdown-item>
    @endforeach
</x-dropdown>
