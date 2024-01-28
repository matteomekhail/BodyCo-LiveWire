<section class="gradient-form h-full bg-[#EFE9E4] lg:pt-40">
    <div class="container h-full p-10">
        <div class="g-6 flex h-full flex-wrap items-center justify-center text-neutral-800">
            <div class="w-full">
                <div class="block rounded-lg bg-[#a17764] shadow-lg">
                    <div class="g-0 lg:flex lg:flex-wrap">
                        <!-- Left column container-->
                        <div class="px-4 md:px-0 lg:w-6/12">
                            <div class="md:mx-6 md:p-12">
                                <!--Logo-->
                                <div class="text-center">
                                    <img class="mx-auto w-48" src="/images/logo-removed.png" alt="logo" />
                                    <h4 class="mb-12 mt-1 pb-1 text-xl font-semibold">
                                        @if ($showRegisterForm)
                                            Registration Form
                                        @else
                                            Login Form
                                        @endif
                                    </h4>
                                </div>

                                <form wire:submit.prevent="{{ $showRegisterForm ? 'register' : 'login' }}">
                                    @if ($showRegisterForm)
                                        <p class="mb-4">Please register for a new account</p>
                                        <!--Username input-->
                                        <div class="relative mb-4">
                                            <input type="text"
                                                class="block placeholder-[#EFE9E4] min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:ring-2 focus:ring-offset-2 focus:ring-[#201F1F] border-dashed"
                                                id="registerName" placeholder="Name" wire:model="name" />
                                        </div>
                                        <div class="relative mb-4">
                                            <input type="text"
                                                class="block placeholder-[#EFE9E4] min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:ring-2 focus:ring-offset-2 focus:ring-[#201F1F] border-dashed"
                                                id="registerSurname" placeholder="Surname" wire:model="surname"/>
                                        </div>

                                        <!--Email input-->
                                        <div class="relative mb-4">
                                            <input type="email"
                                                class="block placeholder-[#EFE9E4] min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:ring-2 focus:ring-offset-2 focus:ring-[#201F1F] border-dashed"
                                                id="registerEmail" placeholder="Email" wire:model="email" />
                                        </div>

                                        <!--Password input-->
                                        <div class="relative mb-4">
                                            <input type="password"
                                                class="block placeholder-[#EFE9E4] min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:ring-2 focus:ring-offset-2 focus:ring-[#201F1F] border-dashed"
                                                id="registerPassword" placeholder="Password" wire:model="password" />
                                        </div>

                                        <!--Confirm Password input-->
                                        <div class="relative mb-4">
                                            <input type="password"
                                            class="block placeholder-[#EFE9E4] min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:ring-2 focus:ring-offset-2 focus:ring-[#201F1F] border-dashed"
                                            id="registerConfirmPassword" placeholder="Confirm Password" wire:model="password_confirmation"/>
                                        </div>

                                        <!--Submit button-->
                                        <div class="mb-12 pb-1 pt-1 text-center">
                                            <button
                                                class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-black active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                                                wire:submit.prevent="register"
                                                type="submit" data-te-ripple-init data-te-ripple-color="light"
                                                style="background: linear-gradient(to right, #a17764, #EFE9E4);">
                                                Register
                                            </button>
                                        </div>
                                    @else
                                        <p class="mb-4">Please login to your account</p>
                                        <!--Username input-->
                                        <div class="relative mb-4">
                                            <input type="text"
                                                class="block placeholder-[#EFE9E4] min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:ring-2 focus:ring-offset-2 focus:ring-[#201F1F] border-dashed"
                                                id="loginEmail" placeholder="email" wire:model="email" />
                                        </div>

                                        <div class="relative mb-4">
                                            <input type="password"
                                                class="block placeholder-[#EFE9E4] min-h-[auto] w-full rounded border-0 bg-transparent px-3 py-[0.32rem] leading-[1.6] outline-none transition-all duration-200 ease-linear focus:ring-2 focus:ring-offset-2 focus:ring-[#201F1F] border-dashed"
                                                id="loginPassword" placeholder="Password" wire:model="password" />
                                        </div>

                                        <!--Submit button-->
                                        <div class="mb-12 pb-1 pt-1 text-center">
                                            <button
                                            wire:click="login"
                                            class="mb-3 inline-block w-full rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] focus:outline-none focus:ring-black active:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)]"
                                            type="button" data-te-ripple-init data-te-ripple-color="light"
                                            style="background: linear-gradient(to right, #a17764, #EFE9E4);">
                                            Log in
                                        </button>

                                            <!--Forgot password link-->
                                            <a href="#!">Forgot password?</a>
                                        </div>
                                    @endif

                                    <!--Register button-->
                                    <div class="flex items-center justify-between pb-6">
                                        <p class="mb-0 mr-2">
                                            @if ($showRegisterForm)
                                                Already have an account?
                                            @else
                                                Don't have an account?
                                            @endif
                                        </p>
                                        <button type="button" wire:click="toggleRegisterForm"
                                            class="inline-block rounded  border-1 border-danger px-6 pb-[6px] pt-2 text-xs font-medium uppercase leading-normal text-danger shadow-[0_4px_9px_-4px_rgba(0,0,0,0.2)] transition duration-150 ease-in-out hover:border-danger-600 hover:shadow-[0_8px_9px_-4px_rgba(0,0,0,0.1),0_4px_18px_0_rgba(0,0,0,0.2)] hover:bg-neutral-500 hover:bg-opacity-10 hover:text-danger-600 focus:border-danger-600 focus:text-danger-600 focus:outline-none focus:ring-0 active:border-danger-700 active:text-danger-700"
                                            data-te-ripple-init data-te-ripple-color="light"
                                            style="background: linear-gradient(to right, #a17764, #EFE9E4);">
                                            @if ($showRegisterForm)
                                                Log in
                                            @else
                                                Register
                                            @endif
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>

                        <!-- Right column container with background and description-->
                        <div class="flex items-center rounded-b-lg lg:w-6/12 lg:rounded-r-lg lg:rounded-bl-none"
                            style="background: linear-gradient(to right, #a17764, #EFE9E4);">
                            <div class="px-4 py-6 text-white md:mx-6 md:p-12">
                                <h4 class="mb-6 text-xl font-semibold">
                                    @if ($showRegisterForm)
                                        Register to get access to your membership benefits
                                    @else
                                        Login to get access to your membership benefits
                                    @endif
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
