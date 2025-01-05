<div class="w-screen h-auto bg-white relative">

    {{-- Background Image --}}
    <img src="{{ asset('src/images/FooterBg.png') }}" class="absolute inset-0 w-full h-full object-cover z-0"
        alt="Background Image">

    {{-- Content Wrapper --}}
    <div
        class="relative flex  lg:flex-row justify-center  items-center gap-x-20 px-10 lg:px-36 py-10 lg:py-24 text-black z-10">
        <div class="w-1/2 flex flex-col text-white">
            <div class=" text-28 font-bold my-10">PT. Helios Informatika Nusantara</div>
            <div class="">Centennial Tower, 12th Floor,<br>
                Jl. Jendral Gatot Subroto<br>
                No. Kav 24-25, Jakarta<br>
                12930 Indonesia</div>
            <div class=" mt-10">
                <span class="font-bold">Phone:</span> +62 21 8062 2220 <br>
                <span class="font-bold">Email:</span>  Tencent@helios.id
            </div>
            <div class="grid grid-cols-5 sm:grid-cols-3 lg:flex lg:flex-wrap gap-4 justify-center md:justify-normal mt-10">
                <div class="col-span-2 sm:col-span-1 bg-white rounded-full p-3 flex items-center justify-center w-16 h-16 transition hover:scale-105">
                    <img src="{{ asset('src/images/facebook.png') }}" alt="Facebook" class="w-full h-full object-contain">
                </div>
                <div class="col-span-2 sm:col-span-1 bg-white rounded-full p-3 flex items-center justify-center w-16 h-16 transition hover:scale-105">
                    <img src="{{ asset('src/images/instagram.png') }}" alt="Instagram" class="w-full h-full object-contain">
                </div>
                <div class="col-span-2 sm:col-span-1 bg-white rounded-full p-3 flex items-center justify-center w-16 h-16 transition hover:scale-105">
                    <img src="{{ asset('src/images/twitter.png') }}" alt="Twitter" class="w-full h-full object-contain">
                </div>
                <div class="col-span-2 sm:col-span-1 bg-white rounded-full p-3 flex items-center justify-center w-16 h-16 transition hover:scale-105">
                    <img src="{{ asset('src/images/youtube.png') }}" alt="YouTube" class="w-full h-full object-contain">
                </div>
                <div class="col-start-2 sm:col-span-1 bg-white rounded-full p-3 flex items-center justify-center w-16 h-16 transition hover:scale-105">
                    <img src="{{ asset('src/images/linkedin.png') }}" alt="LinkedIn" class="w-full h-full object-contain">
                </div>
            </div>
            
            

        </div>

        <img src="{{ asset('src/images/worldmap.png') }}" alt="" class="w-1/2 hidden md:block">


    </div>



</div>

<div class=" w-screen flex bg-nav items-center px-4 py-3 sm:px-8 sm:py-5">
    <div class="mx-auto flex gap-3 items-center">
        <img src="{{ asset('src/images/copyright.png') }}" alt="" class="w-6 h-full">
        <div class=" text-white text-sm sm:text-xl">2023 - PT. Helios Informatika Nusantara - All Right Reserved
        </div>
    </div>
</div>
