@props(['company' => 'active', 'detail_info' => 'inactive', 'social_media' => 'inactive', 'contact' => 'inactive'])

<div class="py-6 max-w-[654px] mx-auto">
    <ul class="step-wrap relative grid grid-cols-4 gap-0">
        <li class="post-step">
            <a href="" class="flex flex-col gap-3 items-center">
                <p class="rounded-full">
                    @if ($company === 'active')
                        <x-svg.step-active />
                    @endif
                    @if ($company === 'inactive')
                        <x-svg.step-inactive />
                    @endif
                    @if ($company === 'complete')
                        <x-svg.step-complete />
                    @endif
                </p>
                <p class="sm:body-small-600 text-xs text-gray-900">
                    Company
                </p>
            </a>
        </li>
        <li class="post-step {{ $company === 'complete' ? 'passed':'' }}">
            <a href="" class="flex flex-col gap-3 items-center">
                <p class="rounded-full">
                    @if ($detail_info === 'active')
                        <x-svg.step-active />
                    @endif
                    @if ($detail_info === 'inactive')
                        <x-svg.step-inactive />
                    @endif
                    @if ($detail_info === 'complete')
                        <x-svg.step-complete />
                    @endif
                </p>
                <p class="sm:body-small-600 text-xs text-gray-900">
                    Detailed Info
                </p>
            </a>
        </li>
        <li class="post-step {{ $detail_info === 'complete' ? 'passed':'' }}">
            <a href="" class="flex flex-col gap-3 items-center">
                <p class="rounded-full">
                    @if ($social_media === 'active')
                        <x-svg.step-active />
                    @endif
                    @if ($social_media === 'inactive')
                        <x-svg.step-inactive />
                    @endif
                    @if ($social_media === 'complete')
                        <x-svg.step-complete />
                    @endif
                </p>
                <p class="sm:body-small-600 text-xs text-gray-900">
                    Social Media
                </p>
            </a>
        </li>
        <li class="post-step {{ $social_media === 'complete' ? 'passed':'' }}">
            <a href="" class="flex flex-col gap-3 items-center">
                <p class="rounded-full">
                    @if ($contact === 'active')
                        <x-svg.step-active />
                    @endif
                    @if ($contact === 'inactive')
                        <x-svg.step-inactive />
                    @endif
                    @if ($contact === 'complete')
                        <x-svg.step-complete />
                    @endif
                </p>
                <p class="sm:body-small-600 text-xs text-gray-900">
                    Contact
                </p>
            </a>
        </li>
    </ul>
</div>

<style>
    .post-step {
        position: relative;
        z-index: 100;
        text-align: center;
    }

    .post-step::before {
        content: '';
        display: block;
        position: absolute;
        top: 11px;
        right: calc(50% + 12px);
        height: 3px;
        width: calc(100% - 24px);
        background: var(--gray-100);
        z-index: -1;
    }

    .post-step:first-child::before {
        display: none;
    }

    .post-step.passed::before,
    .post-step.active::before {
        background: var(--primary-500);
    }
</style>
