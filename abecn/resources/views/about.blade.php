<x-layout>
    <x-slot name="title"><?php echo $title; ?></x-slot>
    <main>
        <section class="about-banner w-full mb-9" style="height:17rem;">
            <div class="about-banner bg-cover bg-center flex items-center text-center justify-center align-middle h-full w-full">
            <div class="banner-text inner-container">
                <h2>About Us</h2>
            </div>
        </section>
        <section>
            <div class="about inner-container">
                <div class="about-text lg:basis-1/2">
                    <div class="about-abecn">
                        <h3>About ABECN</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, quibusdam cumque. Ex quia soluta commodi vero laudantium sit. Possimus maxime molestias, provident saepe nihil incidunt rerum consequatur voluptatem suscipit natus aliquam fuga facilis minus blanditiis accusamus expedita optio, quo facere totam dolore. Assumenda quasi quas iure amet voluptas sequi corporis fugiat itaque aspernatur odit explicabo, iusto unde repellendus magni iste illo praesentium!</p>
                    </div>
                    <div class="history">
                        <h4>Our History</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, quibusdam cumque. Ex quia soluta commodi vero laudantium sit. Possimus maxime molestias, provident saepe nihil incidunt rerum consequatur voluptatem suscipit natus aliquam fuga facilis minus blanditiis accusamus expedita optio, quo facere totam dolore. Corrupti ab, soluta dolore recusandae harum, eius nobis natus architecto quae impedit saepe veritatis ipsum, quibusdam repellat aliquid.</p>
                    </div>
                </div>
                <div class="about-img lg:basis-[40%]">
                    <div class="about-img-top">
                        <img src="{{ asset('img/blue-city.webp') }}" alt="Silhouette of a singer performing with a blue background">
                    </div>
                    <div class="about-img-bottom">
                        <img src="{{ asset('img/venue.webp') }}" alt="Interior view of a venue occupied with people">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="our-vision inner-container flex flex-wrap">
                <section class="vision-bg w-full m-0 md:basis-1/2">
                    <div class="vision-bg bg-cover bg-center flex items-center text-center justify-center align-middle h-full w-full">
                        <div class="banner-text inner-container">
                            <h3 class="text-white">Our Vision</h3>
                        </div>
                    </div>
                </section>
                <div class="vision-statement inner-container md:basis-1/2">
                    <p class="m-0 text-white">ABECN is a non-profit society dedicated to encouraging the pursuit of excellence in the design, construction, and performance of building enclosures and to advancing educational and technical standards within the Building Envelope industry.</p>
                </div>
            </div>
        </section>

        <!-- <section class="code-of-ethics">
            <h3>Code of Ethics</h3>
            <div class="ethics-text">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores, quibusdam cumque. Ex quia soluta commodi vero laudantium sit. Possimus maxime molestias, provident saepe nihil incidunt rerum consequatur voluptatem suscipit natus aliquam fuga facilis minus blanditiis accusamus expedita optio, quo facere totam dolore. Assumenda quasi quas iure amet voluptas sequi corporis fugiat itaque aspernatur odit explicabo, iusto unde repellendus magni iste illo praesentium!</p>

                <p>Corrupti ab, soluta dolore recusandae harum, eius nobis natus architecto quae impedit saepe veritatis ipsum, quibusdam repellat aliquid? Reprehenderit neque facere voluptate at culpa earum. Voluptas, consequatur. Distinctio voluptate reprehenderit culpa, dolores veritatis, modi laborum quos aliquid harum quo magnam, quibusdam facilis minus molestias vitae nemo ipsum vel consequuntur illo necessitatibus voluptates recusandae. Eaque nam error recusandae enim aliquid explicabo doloribus possimus ex in quod officia laboriosam ipsum expedita maxime voluptatibus voluptates sequi temporibus iure laudantium quas corporis, molestiae harum architecto inventore!</p>
            </div>
            <div class="pdf">
                <button>Download Code of Ethics PDF</button>
            </div>
        </section> -->
    </main>
</x-layout>
