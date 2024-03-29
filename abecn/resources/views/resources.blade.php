<x-layout>
    <x-slot name="title"><?php echo $title; ?></x-slot>
    <main>
        <section class="resources-banner w-full" style="height:17rem;">
            <div class="resources-banner bg-cover bg-center flex items-center text-center justify-center align-middle h-full w-full">
            <div class="banner-text inner-container">
                <h2>Resources</h2>
            </div>
        </section>

        <section>
            <div class="inner-container">
                <h3>Links</h3>
                <hr class="text-border w-[5%] mb-6">
                <div class="links md:flex">
                    <div class="links-text basis-1/2">
                        <section>
                            <ul class="category">
                                <h4 class="mb-6">Technical Resources</h4>
                                <li><a class="underline mb-6" href="https://nrc.canada.ca/en/" target="_blank">National Research Council Canada </a></li>
                                <li><a class="underline mb-6" href="https://www.alberta.ca/building-fire-codes.aspx" target="_blank">Alberta Building and Fire Codes</a></li>
                                <li><a class="underline mb-6" href="https://www.nrcan.gc.ca/energy-efficiency/products-services/canadian-construction-materials-centre-ccmc/18643" target="_blank">Canadian Construction Materials Centre</a></li>
                            </ul>
                        </section>
                        <section>
                            <ul class="category">
                                <h4 class="mb-6">Industry News and Updates</h4>
                                <li><a class="underline mb-6" href="https://www.constructioncanada.net/" target="_blank">Construction Canada</a></li>
                                <li><a class="underline mb-6" href="https://canada.constructconnect.com/dcn" target="_blank">Daily Commercial News</a></li>
                                <li><a class="underline mb-6" href="https://www.cisc-icca.ca/" target="_blank">Canadian Institute of Steel Construction</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="resources-img basis-1/2">
                        <div class="resources-img-top">
                            <img class="w-3/4" src="{{ asset('img/pair-working.webp') }}" alt="View of construction cranes with the sky in the background">
                        </div>
                        <div class="resources-img-bottom">
                            <img src="{{ asset('img/construction.webp') }}" alt="View of construction cranes with the sky in the background">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="inner-container">
                <h3>Latest Publications</h3>
                <hr class="text-border w-[10%] mb-6">
                <div class="flex justify-between flex-wrap latest-publications mb-6">
                    <div class="mb-6">
                        <h4>Spring 2021</h4>
                        <img src="{{ asset('img/abec-spring2021.webp') }}" alt="Cover of the Spring 2021 Building Science Perspective publication">
                    </div>
                    <div class="mb-6">
                        <h4>Fall 2021</h4>
                        <img src="{{ asset('img/abec-fall2021.webp') }}" alt="Cover of the Spring 2021 Building Science Perspective publication">
                    </div>
                    <div class="mb-6">
                        <h4>Spring 2022</h4>
                        <img src="{{ asset('img/abec-spring2022.webp') }}" alt="Cover of the Spring 2021 Building Science Perspective publication">
                    </div>
                    <div class="mb-6">
                        <h4>Fall 2022</h4>
                        <img src="{{ asset('img/abec-fall2022.webp') }}" alt="Cover of the Spring 2021 Building Science Perspective publication">
                    </div>
                </div>
                <div class="button flex flex-col items-center justify-center">
                    <a class="dark-btn text-center" href="#">Read More</a>
                </div>
            </div>
        </section>

        <section>
            <div class="events inner-container">
                <h3>Latest Events</h3>
                <hr class="text-border w-[5%] mb-6">
                <article>
                    <div class="event items-center align-middle mb-6">
                        <div class="event-img">
                            <img src="{{ asset('img/group-work-laptops.webp') }}" alt="Top view of a group working on a table">
                        </div>
                        <div class="event-text">
                            <h4>Casual Night</h4>
                            <p class="mb-3">05/23/2023 | By Tanner Clark</p>
                            <p>Come out for a casual night to meet the board of ABECN and also other individuals in the building envelope industry...</p>
                            <a class="dark-btn" href="#">Read More</a>
                        </div>
                    </div>
                    <hr class="my-6">
                </article>
                <article>
                    <div class="event items-center align-middle mb-6">
                        <div class="event-img">
                            <img src="{{ asset('img/lecture.webp') }}" alt="Side view of a lecture">
                        </div>
                        <div class="event-text">
                            <h4>Roof Code Updates and Procedures</h4>
                            <p class="mb-3">05/05/2023 | By Jeff Low</p>
                            <p>Jeff Low talks about the updates to roof codes and also the new procedures to follow so that you can have the latest...</p>
                            <a class="dark-btn" href="#">Read More</a>
                        </div>
                    </div>
                    <hr class="my-6">
                </article>
                <article>
                    <div class="event items-center align-middle mb-6">
                        <div class="event-img">
                            <img src="{{ asset('img/men-discussing.webp') }}" alt="Four men discussing">
                        </div>
                        <div class="event-text">
                            <h4>The Importance Of A Strong Foundation</h4>
                            <p class="mb-3">02/05/2023 | By Taylor West</p>
                            <p>Taylor West will be talking about the importance of building a strong foundation and the different prouducts in...</p>
                            <a class="dark-btn" href="#">Read More</a>
                        </div>
                    </div>
                    <hr class="my-9">
                </article>
            </div>
        </section>
    </main>
</x-layout>
