{{-- Green Button --}}

<a {{ $attributes->merge(['class' => 'h-9 sm:h-14 px-5 py-2.5 bg-button cursor-pointer hover:bg-button-dark hover:scale-105 justify-center items-center gap-1.5 inline-flex transition-all duration-300']) }}>
    <div class="text-white text-base sm:text-20 font-semibold">
        {{ $slot }}
    </div>
</a>
