<x-layout>
    <main>
        <section>
            <div class="membership">
                <div class="membership w-full mb-9 inner-container">
                    <div class="membership-text mb-6">
                        <h2>ABECN Membership</h2>
                        <hr class="text-border w-[25%] mb-6">
                        <p class="text-white">Becoming a member gives you full access to all events that occur throughout the year, including conferences, workshops, casual nights, and more. Expand your education and knowledge through the sharing of latest news, innovations, and ideas, while also voicing your opinion and networking with industry leaders!</p>
                        <a href="/register" class="dark-btn">Become a Member</a>
                    </div>
                    <div class="membership-img">
                        <div class="membership-img-top">
                            <img class="w-3/4" src="{{ asset('img/meeting.webp') }}" alt="Group Discussion">
                        </div>
                        <div class="membership-img-bottom">
                            <img src="{{ asset('img/buildings-sky.webp') }}" alt="Buildings against the sky">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="plans">
            <div class="inner-container">
                <h3>Our Plans</h3>
                <section class="individual md:flex justify-between gap-6">
                    <div class="individual-text basis-[50%]">
                        <h4>Individual</h4>
                        <hr class="text-border w-[10%] mb-6">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam minus labore optio aliquid repudiandae vitae, doloremque corporis sed nobis repellendus?</p>
                    </div>
                    <div class="individual-img">
                        <img src="{{ asset('img/individual-working.webp') }}" alt="Group of students collaborating">
                    </div>
                </section>
                <section class="student md:flex justify-between gap-6 flex-row-reverse">
                    <div class="student-text basis-[50%]">
                        <h4>Student</h4>
                        <hr class="text-border w-[10%] mb-6">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam minus labore optio aliquid repudiandae vitae, doloremque corporis sed nobis repellendus?</p>
                    </div>
                    <div class="student-img">
                        <img src="{{ asset('img/students.webp') }}" alt="Group of students collaborating">
                    </div>
                </section>
            </div>
        </section>
    </main>
</x-layout>