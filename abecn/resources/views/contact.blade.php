<x-layout>
    <x-slot name="title"><?php echo $title; ?></x-slot>
    <main>
        <section class="contact-banner w-full" style="height:17rem;">
            <div class="contact-banner bg-cover bg-center flex items-center text-center justify-center align-middle h-full w-full">
            <div class="banner-text inner-container">
                <h2>Contact</h2>
            </div>
        </section>
        <section class="get-in-touch">
            <div class="mb-6 inner-container">
                <h3 class="text-white">Get in Touch</h3>
                <hr class="text-border w-[5%] mb-6">
            </div>
            <div class="inner-container md:flex justify-between">
                <div class="phone">
                    <div class="icon flex justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9rem" height="155" viewBox="0 0 155.001 155">
                            <path id="phone-circle-fill-svgrepo-com" d="M81.594,159.094c42.321,0,77.5-35.179,77.5-77.5,0-42.4-35.255-77.5-77.576-77.5-42.4,0-77.424,35.1-77.424,77.5C4.094,123.915,39.2,159.094,81.594,159.094ZM61.763,100.513C42.92,81.746,30.915,57.812,45.123,43.6c.836-.836,1.748-1.672,2.583-2.508,4.331-4.1,8.51-3.875,12.233,1.368L69.817,56.52c3.343,4.863,2.507,7.6-1.064,11.4l-3.115,3.419a2.655,2.655,0,0,0-.152,3.419c1.444,2.735,5.546,7.6,9.953,12.005C80,91.319,84.633,95.194,87.52,96.79a3.084,3.084,0,0,0,3.571-.152l3.267-3.115c3.647-3.571,6.61-4.483,11.321-1.14,6.534,4.635,10.485,7.37,14.36,10.03,4.787,3.5,5.926,7.826,1.064,12.233-.836.836-1.6,1.748-2.431,2.583C104.464,131.361,80.606,119.356,61.763,100.513Z" transform="translate(-4.094 -4.094)" fill="#1d2d52"/>
                        </svg>
                    </div>
                    <h4 class="text-center">Phone</h4>
                    <p class="text-center text-white">(780) 952-5807</p>
                </div>
                <div class="address">
                    <div class="icon flex justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9rem" height="155" viewBox="0 0 155.001 155">
                            <path id="location-circle-fill-svgrepo-com" d="M81.594,159.094c42.321,0,77.5-35.179,77.5-77.5,0-42.4-35.255-77.5-77.576-77.5-42.4,0-77.424,35.1-77.424,77.5C4.094,123.915,39.2,159.094,81.594,159.094ZM51.429,120.5a3.83,3.83,0,0,1-3.951-4.1,7.561,7.561,0,0,1,.608-2.887L76.2,41.7c1.216-2.963,2.963-4.407,5.471-4.407,2.355,0,4.179,1.444,5.242,4.407l28.189,71.8a7.65,7.65,0,0,1,.684,2.887,3.849,3.849,0,0,1-4.027,4.1,4.564,4.564,0,0,1-3.115-1.216l-25.225-25.3c-.684-.684-1.216-1.064-1.747-1.064a2.879,2.879,0,0,0-1.9,1.064l-25.3,25.3A4.376,4.376,0,0,1,51.429,120.5Z" transform="translate(-4.094 -4.094)" fill="#1d2d52"/>
                        </svg>
                    </div>
                    <h4 class="text-center">Address</h4>
                    <p class="text-center text-white mb-2">Box 71</p>
                    <p class="text-center text-white mb-2">Enoch, AB</p>
                    <p class="text-center text-white mb-2">T7X 3Y3</p>
                </div>
                <div class="email">
                    <div class="icon flex justify-center mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="9rem" height="155" viewBox="0 0 155 155">
                            <path id="email-circle-fill-svgrepo-com" d="M157,79.5A77.5,77.5,0,1,1,79.5,2,77.5,77.5,0,0,1,157,79.5ZM40.789,56.25A7.74,7.74,0,0,1,48.5,48.5h62a7.773,7.773,0,0,1,7.75,7.75v46.5a7.773,7.773,0,0,1-7.75,7.75h-62a7.773,7.773,0,0,1-7.75-7.75ZM79.5,83.375,48.5,64v38.75h62V64Zm0-7.75L48.5,56.25h62Z" transform="translate(-2 -2)" fill="#1d2d52" fill-rule="evenodd"/>
                        </svg>
                    </div>
                    <h4 class="text-center">Email</h4>
                    <p class="text-center text-white">info@abecnnorth.org</p>
                </div>
            </div>
        </section>
        <form action="#" method="post" class="mb-24 contact-form py-12">
            <div class="inner-container">
                <h3 class="text-white">Send us a Message</h3>
                <div class="name-subject md:flex justify-between">
                    <div class="text-white basis-[49%] mb-6">
                        <label class="block" for="yourname">Your Name</label>
                        <input class="w-full text-black" type="text" name="name" id="name">
                    </div>
                    <div class="text-white basis-[49%] mb-6">
                        <label class="block" for="subject">Subject</label>
                        <input class="w-full text-black" type="text" name="subject" id="subject">
                    </div>
                </div>
                <div class="text-white mb-6">
                    <label class="block" for="message">Your Message</label>
                    <textarea class="w-full text-black" name="message" id="message" rows="8" class="block"></textarea>
                </div>
                <div class="flex justify-center">
                    <input class="light-btn text-white" type="submit" value="Send Message">
                </div>
            </div>
        </form>
    </main>
</x-layout>
