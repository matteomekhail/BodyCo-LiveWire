<section class=" bg-[#EFE9E4] shadow-sm">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-[#a17764] text-center">
            Contact Us
        </h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-gray-600 sm:text-xl">
            Any issue?
        </p>
        <form wire:submit.prevent="submit" class="space-y-4">
            <div>
                <label for="email" class="block mb-2 text-lg font-medium text-[#a17764] text-center">Your email</label>
                <input wire:model="contactEmail" type="email" id="email"
                    class="shadow-sm bg-gray-100 text-lg rounded-lg w-full p-2.5 focus:outline-none text-center"
                    placeholder="name@gmail.com" required />
            </div>
            <div>
                <label for="subject" class="block mb-2 text-lg font-medium text-[#a17764] text-center">Subject</label>
                <input wire:model="contactSubject" type="text" id="subject"
                    class="shadow-sm bg-gray-100 text-lg rounded-lg w-full p-2.5 focus:outline-none text-center"
                    placeholder="Let us know how we can help you" required />
            </div>
            <div class="sm:col-span-2">
                <label for="message" class="block mb-2 text-lg font-medium text-[#a17764] text-center">Your
                    message</label>
                <textarea wire:model="contactMessage" id="message" rows="6"
                    class="shadow-sm  text-center bg-gray-100 text-lg rounded-lg w-full resize-none p-6 focus:outline-none"
                    placeholder="Leave a comment..."></textarea>

            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="py-5 px-9 hover:scale-105 transition bg-[#a17764] text-lg font-medium text-center text-[#F5F5F5] accordion bg-primary-700 sm:w-fit hover:bg-primary-800 focus:outline-none">
                    Send message
                </button>
            </div>
        </form>
    </div>
</section>