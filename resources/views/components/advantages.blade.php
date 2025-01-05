{{--  Landing Page --}}
<div class="w-screen relative">

    {{-- Background --}}
    <img src="{{ asset('src/images/advantagesBg.png') }}" 
         class="absolute inset-0 w-full h-full object-cover z-0" 
         alt="Background Image">

    {{-- Context --}}
    <div class="relative inset-0 flex flex-col my-10 text-white px-6 sm:px-10 lg:px-56 z-0">
        
        <!-- Title -->
        <div class="font-bold sm:text-46 text-2xl text-center py-10 mt-10">
            Sangfor Cyber Command Advantages
        </div>

        <!-- Grid Container -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 py-8">
            <!-- Card 1 -->
            <div class="w-full h-auto bg-white shadow-lg  px-10 pt-10 pb-16 flex flex-col items-center">
                <img src="{{ asset('src/images/adv_1.png') }}" alt="Advanced Threat Detection" class="w-36 h-36 mb-4">
                <div class="text-textBlue text-xl font-extrabold font-['Rubik'] text-center mb-2">
                    Advanced Threat Detection
                </div>
                <div class="text-[#382933] text-sm font-normal font-['Rubik'] text-center">
                    Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.
                </div>
            </div>

            <!-- Card 2 -->
            <div class="w-full h-auto bg-white shadow-lg  px-10 pt-10 pb-16 flex flex-col items-center">
                <img src="{{ asset('src/images/adv_2.png') }}" alt="Network Traffic Analysis" class="w-36 h-36 mb-4">
                <div class="text-textBlue text-xl font-extrabold font-['Rubik'] text-center mb-2">
                    Network Traffic Analysis
                </div>
                <div class="text-[#382933] text-sm font-normal font-['Rubik'] text-center">
                    The platform provides in-depth network traffic analysis to detect unusual patterns, ensuring a proactive approach to cybersecurity threats.
                </div>
            </div>

            <!-- Card 3 -->
            <div class="w-full h-auto bg-white shadow-lg  px-10 pt-10 pb-16 flex flex-col items-center">
                <img src="{{ asset('src/images/adv_3.png') }}" alt="Machine Learning Insights" class="w-36 h-36 mb-4">
                <div class="text-textBlue text-xl font-extrabold font-['Rubik'] text-center mb-2">
                    Machine Learning Insights
                </div>
                <div class="text-[#382933] text-sm font-normal font-['Rubik'] text-center">
                    Leveraging machine learning algorithms, the platform identifies potential threats more effectively and adapts to evolving cybersecurity challenges.
                </div>
            </div>

            <!-- Card 4 -->
            <div class="w-full h-auto bg-white shadow-lg  px-10 pt-10 pb-16 flex flex-col items-center">
                <img src="{{ asset('src/images/adv_4.png') }}" alt="Threat Intelligence" class="w-36 h-36 mb-4">
                <div class="text-textBlue text-xl font-extrabold font-['Rubik'] text-center mb-2">
                    Threat Intelligence
                </div>
                <div class="text-[#382933] text-sm font-normal font-['Rubik'] text-center">
                    Stay ahead with actionable threat intelligence, providing critical insights into emerging threats and enhancing organizational defenses.
                </div>
            </div>
        </div>
    </div>
</div>
