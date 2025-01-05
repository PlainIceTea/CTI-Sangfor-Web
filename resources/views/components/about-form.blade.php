<div class="w-screen bg-white relative">

    {{-- Background Image --}}
    <img src="{{ asset('src/images/formBg.png') }}" class="absolute inset-0 w-full h-full object-cover z-0"
        alt="Background Image">

    {{-- Content Wrapper --}}
    <div
        class="relative flex flex-col lg:flex-row justify-center  items-center gap-x-20 px-10 lg:px-36 py-10 lg:py-24 text-black z-10">

        {{-- About Us Section --}}
        <div class="lg:w-4/12">
            <div class="text-3xl font-bold leading-normal lg:text-46 mb-6">
                About Sangfor<br>Cyber Command
            </div>
            <div class="grid gap-y-6 md:gap-y-8">
                <div>
                    Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a
                    comprehensive security management platform designed to protect businesses from cyber threats.
                </div>
                <div>
                    It provides a range of security solutions such as threat detection, incident response, and
                    compliance
                    management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze
                    security events, and respond to incidents quickly and efficiently.
                </div>
                <div>
                    The platform uses advanced machine learning algorithms and big data analytics to identify and
                    prevent cyber-attacks before they cause damage. It also offers a user-friendly dashboard that
                    enables
                    businesses to track their security posture in real-time and make informed decisions based on the
                    insights provided.
                </div>
                <div>
                    Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their
                    cybersecurity defenses and safeguard their assets from modern-day threats.
                </div>
            </div>
        </div>

        {{-- Form Section --}}
        <div class="lg:w-5/12 bg-white mt-20 sm:mt-0 p-8 rounded-lg ">
            <div class="text-lg font-semibold mb-4">
                Dapatkan Free Trial selama 1 bulan
            </div>
            <div class="text-base mb-6">
                Analisa keamanan network Anda dan lihat hasilnya!
            </div>
            <form action="#" method="POST" class="grid gap-y-5">

                <div class="flex max-lg:flex-col gap-x-4">

                    {{-- Input First Name --}}
                    <label class="form-control lg:w-7/12 ">
                        <div class="label">
                            <span class="label-text sm:text-18 ">First Name <span class=" text-red-600">*</span></span>
                        </div>
                        <input type="text" placeholder="First Name" class="input input-bordered w-full" />
                    </label>

                    {{-- Input Last Name --}}
                    <label class="form-control lg:w-5/12 ">
                        <div class="label">
                            <span class="label-text sm:text-18 ">Last Name <span class=" text-red-600">*</span></span>
                        </div>
                        <input type="text" placeholder="Last Name" class="input input-bordered w-full" />
                    </label>
                </div>


                {{-- Corporate Email --}}
                <label class="form-control w-full ">
                    <div class="label">
                        <span class="label-text sm:text-18 ">Corporate Email<span class=" text-red-600">*</span></span>
                    </div>
                    <input type="text" placeholder="email@mail.com" class="input input-bordered w-full" />
                </label>


                {{-- Job Title  --}}
                <label class="form-control w-full ">
                    <div class="label">
                        <span class="label-text sm:text-18 ">Job Title <span class=" text-red-600">*</span></span>
                    </div>
                    <input type="text" placeholder="Your job" class="input input-bordered w-full" />
                </label>


                {{-- Company Name  --}}
                <label class="form-control w-full ">
                    <div class="label">
                        <span class="label-text sm:text-18 ">Company Name <span class=" text-red-600">*</span></span>
                    </div>
                    <input type="text" placeholder="Your company" class="input input-bordered w-full" />
                </label>



                {{-- Industry --}}
                <label class="form-control w-full ">
                    <div class="label">
                        <span class="label-text sm:text-18 ">Industry<span class=" text-red-600">*</span></span>
                    </div>
                    <input type="text" placeholder="Select Industry" class="input input-bordered w-full" />
                </label>


                {{-- Phone Number --}}
                <label class="form-control w-full ">
                    <div class="label">
                        <span class="label-text sm:text-18 ">Job Title <span class=" text-red-600">*</span></span>
                    </div>
                    <input type="text" placeholder="Your number" class="input input-bordered w-full" />
                </label>





                
                <x-button href="/success" type="submit" class="w-56 mx-auto mt-10">
                    SEND
                </x-button>
           
            </form>
        </div>
    </div>
</div>
