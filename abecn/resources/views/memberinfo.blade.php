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
                        <p>Joining as an individual member is the perfect way to stay up-to-date on the latest developments in building envelope design and construction. As a member, you'll have access to a wealth of resources, networking opportunities, and educational materials that can help you grow your skills and knowledge in this important field.</p>

                        <p>We believe that our individual membership package offers an incredible value for anyone who is interested in staying current with building envelope design and construction. In addition to the benefits mentioned above, you'll also receive a yearly newsletter that includes updates on industry news, events, and opportunities.</p>

                        <p>If you have any questions or would like to learn more, please don't hesitate to contact us. We look forward to welcoming you to our community</p>
                    </div>
                    <div class="individual-img">
                        <img src="{{ asset('img/individual-working.webp') }}" alt="Group of students collaborating">
                    </div>
                </section>
                <section class="student md:flex justify-between gap-6 flex-row-reverse">
                    <div class="student-text basis-[50%]">
                        <h4>Student</h4>
                        <hr class="text-border w-[10%] mb-6">
                        <p>We are excited to offer a special membership package for students who are interested in learning more about building envelope design and construction. As a member of our council, you'll have access to a wealth of resources, networking opportunities, and educational materials that can help you develop your skills and knowledge in this important field.</p>

                        <p>Our student membership package is designed to be affordable and accessible, so that you can get the most out of your experience without breaking the bank.</p>

                        <p>We believe that our student membership package offers an incredible value for anyone who is interested in pursuing a career in building envelope design and construction. If you have any questions or would like to learn more, please don't hesitate to contact us. We look forward to welcoming you to our community!</p>
                    </div>
                    <div class="student-img">
                        <img src="{{ asset('img/students.webp') }}" alt="Group of students collaborating">
                    </div>
                </section>
            </div>
        </section>
    </main>
</x-layout>