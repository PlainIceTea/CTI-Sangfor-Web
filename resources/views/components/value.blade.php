<div class="w-screen bg-white relative">

    {{-- Background Image --}}
    <img src="{{ asset('src/images/valueBg.png') }}" class="absolute inset-0 w-full h-full object-cover"
        alt="Background Image">

    {{-- Content Wrapper --}}
    <div class="relative justify-center  items-center  gap-x-20 px-10 lg:px-36 py-5 lg:py-24 text-black ">

        <div class=" text-textBlue text-3xl lg:text-46 font-bold text-center leading-normal">Sangfor Cyber Command's <br> Value to Customers</div>

        @php
            $features = [
                'Detect known dan unknown threats',
                'Much better visibility of security posture of the entire infrastructure',
                'Business Impact Analysis helps IT to understand what is already compromised and what needs to be prioritized',
                'Faster Response to improve overall security control',
                'Much more cost effective than other solutions such as SIEM',
            ];
        @endphp

        <div class="mt-10 lg:ml-32 mx-5">
            @foreach ($features as $feature)
                <div class="flex items-center gap-3  mt-5 text-left">
                    <div>
                        <img src="{{ asset('src/images/checkmark.svg') }}" alt="Checkmark">
                    </div>

                    <div class="text-[#6C646A] text-normal lg:text-28">
                        {{ $feature }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
</div>

{{-- Cyber Command Section --}}
<div class="  w-screen relative flex justify-center items-center z-10">
    <div class="lg:absolute lg:-top-14 w-full">
        <div class="bg-textBlue text-3xl mb-10 lg:block  py-5 px-10 text-center text-46 font-bold text-white lg:mx-56">
            Cyber Command Customers Reference
        </div>

        
    </div>
    
    

    <div class=" justify-between  my-36 lg:block hidden">
        <div class="flex gap-x-20">
            <img src="{{ asset('src/images/brand_1.png') }}" alt="">
            <img src="{{ asset('src/images/brand_2.png') }}" alt="">
            <img src="{{ asset('src/images/brand_3.png') }}" alt="">
            <img src="{{ asset('src/images/brand_4.png') }}" alt="">
        </div>
    </div>
    
</div>

<div class="lg:hidden w-full my-5">
    <div class="glide">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides flex justify-center gap-4">
                <li class="glide__slide"><img src="{{ asset('src/images/brand_1.png') }}" alt=""></li>
                <li class="glide__slide"><img src="{{ asset('src/images/brand_2.png') }}" alt=""></li>
                <li class="glide__slide"><img src="{{ asset('src/images/brand_3.png') }}" alt=""></li>
                <li class="glide__slide"><img src="{{ asset('src/images/brand_4.png') }}" alt=""></li>
            </ul>
        </div>
    </div>
</div>


