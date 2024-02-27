<div class="flex justify-center items-center">
    <div class="max-w-[536px]">
        <div class="pt-6 flex justify-center">
            <a href="/">
                <img src="{{ asset('frontend/assets/images/logo/auth-logo.png') }}" alt="">
            </a>
        </div>
        <form wire:submit.prevent="resetPassword" class="py-[200px] flex flex-col gap-6">
            <h2 class="heading-02 text-gray-900 text-center">{{__('reset_password') }}</h2>
            <p class="body-base-400 text-gray-700 text-center">{{__('reset_password_instructions') }}</p>
            <div class="flex flex-col gap-4">
                <div>
                    <x-frontend.forms.label for='password' name='Password' />
                    <x-frontend.forms.password wire:model="password" id='password' placeholder='Enter password' />
                </div>
                <div>
                    <x-frontend.forms.label for='cpassword' name='Confirm Password' />
                    <x-frontend.forms.password  wire:model="cpassword"  id='cpassword' placeholder='Enter password again' />
                </div>
                <div>
                    <button wire:click.prevent="resetPassword" type="submit" class="btn-primary w-full">
                        <span>{{__('reset_password') }}</span>
                        <span wire:loading wire:target="resetPassword" class="animate-spin rtl:rotate-180">
                            <x-svg.loading/>
                        </span>
                        <span wire:loading.remove wire:target="resetPassword" class="rtl:rotate-180">
                            <x-svg.arrow-circle-right />
                        </span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
