<form action="" class="flex flex-col gap-6">
    <div>
        <x-frontend.forms.label name="Location" required="false" />
        <x-frontend.forms.input icon="true" placeholder="Company website link/url...">
            <x-svg.map-01 />
        </x-frontend.forms.input>
    </div>
    <div class="h-[1px] bg-gray-100"></div>
    <div class="flex flex-col gap-4">
        <div>
            <x-frontend.forms.label name="Primary Contact Mail" required="false" />
            <x-frontend.forms.input icon="true" placeholder="Company website link/url...">
                <x-svg.mail-02 />
            </x-frontend.forms.input>
        </div>
        <div>
            <x-frontend.forms.label name="Phone Number" required="false" />
            <x-frontend.forms.input icon="true" placeholder="Company website link/url...">
                <x-svg.phone-call-01 />
            </x-frontend.forms.input>
        </div>
    </div>
</form>
