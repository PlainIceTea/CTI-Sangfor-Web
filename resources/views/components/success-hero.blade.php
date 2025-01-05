{{-- Hero Landing Page --}}
<div class="w-screen h-screen bg-white relative">

    {{-- Background --}}
    <img src="{{ asset('src/images/sucessHeroBg.png') }}" class="inset-0 absolute h-full w-full object-cover z-0" alt="">

    {{-- Context --}}
    <div class="absolute inset-0 flex flex-col justify-center items-center text-left sm:w-10/12  px-10 sm:mx-36">
        <img src="{{ asset('src/images/successDecor.png') }}" alt="success Decoration" class="w-96 h-auto object-cover">

        <div class="mt-20 text-46 font-bold text-textBlue">Thank You for Your Interest </div>
        <div class="mt-3 text-[#6D6D6D] text-22">Our team will contact you within 5 working days</div>

        <x-button href='/' class="mt-10">BACK TO HOMEPAGE</x-button>
     </div>
</div>
