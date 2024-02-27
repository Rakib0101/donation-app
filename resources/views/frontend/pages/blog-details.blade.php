@extends('frontend.layouts.app')
@section('title', __('blog_details'))
@section('description')
    @php
        $data = metaData('home');
    @endphp
    {{ $data->description }}
@endsection
@section('og:image')
    {{ asset($data->image) }}
@endsection
@section('title')
    {{ $data->title }}
@endsection

@section('main')
    <main>
        <x-frontend.app-breadcumb />
        <section>
            <div class="max-w-[1096px]  mx-auto px-4 lg:px-0 space-y-8 pb-8 border-b border-b-gray-100">
                <div class="space-y-4">
                    <h1 class="heading-02 text-gray-900">What We’re Reading: What are you waiting for?</h1>
                    <div class="flex flex-wrap items-center gap-[18px]">
                        <div class="flex items-center gap-3">
                            <div class="h-8 w-8 rounded-full overflow-hidden">
                                <img src="{{ asset('frontend/assets/images/Avatar.png') }}" alt="author avatar"
                                    class="w-full object-cover">
                            </div>
                            <div>
                                <h6 class="body-large-600 text-gray-900">Kevin Gilbert</h6>
                            </div>
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <span class="text-secondary-500">
                                <x-svg.message-text-circle-01 />
                            </span>
                            579 Comments
                        </div>
                        <div class="flex items-center gap-[6px]">
                            <span class="text-secondary-500">
                                <x-svg.calender />
                            </span>
                            17 Jan, 2023
                        </div>
                    </div>
                </div>
                <div class="space-y-8">
                    <div class="w-full">
                        <img src="{{ asset('frontend/assets/images/blog-details.png') }}" alt="blog details image">
                    </div>
                    <div class="space-y-4 body-large-400 text-gray-800">
                        <div>
                            Hi everybody,
                        </div>
                        <div>
                            I recently read about a psychological phenomenon called “specialness spirals” in which a person
                            is unable to use an item because it’s too, well, special to use on a mundane day. University
                            professor Jacqueline Rifkin researches consumption, and her article for Medium publication The
                            Conversation addressed why some people are unable to convince themselves to use new items.
                        </div>
                        <div>
                            I recently read about a psychological phenomenon called “specialness spirals” in which a person
                            is unable to use an item because it’s too, well, special to use on a mundane day. University
                            professor Jacqueline Rifkin researches consumption, and her article for Medium publication The
                            Conversation addressed why some people are unable to convince themselves to use new items.
                        </div>
                        <div>
                            I recently read about a psychological phenomenon called “specialness spirals” in which a person
                            is unable to use an item because it’s too, well, special to use on a mundane day. University
                            professor Jacqueline Rifkin researches consumption, and her article for Medium publication The
                            Conversation addressed why some people are unable to convince themselves to use new items.
                        </div>
                    </div>
                    <div class="space-y-4 body-large-400 text-gray-800">
                        <div class="text-gray-900 font-bold text-[20px]">
                            “We Just Witnessed the Deadliest Shipwreck in Years” by Melissa Fleming, Chief Communicator
                        </div>
                        <div class="bg-secondary-50 border-l-2 border-l-secondary-500 p-6">
                            It’s a date that should go down in history — a stain on our collective conscience. On June 14th,
                            2023, the Adriana, a fishing boat carrying 750 people, capsized in the Mediterranean. The more
                            than 600 deaths were entirely preventable. And yet the world barely flinched.
                        </div>
                        <div>
                            <img src="{{ asset('frontend/assets/images/blog-image-2.png') }}" alt="blog image 2">
                        </div>
                        <div>
                            From Avi Loeb in Summary of the Successful Interstellar Expedition: The magnetic sled (right)
                            was connected by a cable to a winch on Silver Star’s deck. Every morning at sunrise, I jogged on
                            the deck. Initially I was surprised at the jogging speed measured by the workout app on my Apple
                            watch, but then I realized that the GPS system and the Starlink-WiFi baseline are affected by
                            the motion of the platform on which I jog. A filming crew recorded one of my morning jogs
                            (bottom left).
                        </div>
                    </div>

                    <div class="space-y-4 body-large-400 text-gray-800">
                        From Avi Loeb in Summary of the Successful Interstellar Expedition: The magnetic sled (right) was
                        connected by a cable to a winch on Silver Star’s deck. Every morning at sunrise, I jogged on the
                        deck. Initially I was surprised at the jogging speed measured by the workout app on my Apple watch,
                        but then I realized that the GPS system and the Starlink-WiFi baseline are affected by the motion of
                        the platform on which I jog. A filming crew recorded one of my morning jogs (bottom left).
                    </div>
                </div>
                <div class="space-y-2">
                    <span class="body-small-400">Share</span>
                    <div class="flex items-center gap-2 flex-wrap">
                        <button type="button" class="icon-btn-white ">
                            <x-svg.link-01 />
                            Copy Link
                        </button>
                        <a href="#" target="_blank" class="icon-btn-white ">
                            <x-svg.mail-02 />
                        </a>
                        <a href="#" target="_blank" class="icon-btn-white ">
                            <x-svg.mail-02 />
                        </a>
                        <a href="#" target="_blank" class="icon-btn-white ">
                            <x-svg.linkedin />
                        </a>
                        <a href="#" target="_blank" class="icon-btn-white ">
                            <x-svg.facebook />
                        </a>
                        <a href="#" target="_blank" class="icon-btn-white ">
                            <x-svg.twitter />
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-8">
            <div class="max-w-[872px] mx-auto space-y-4">
                <div class="flex items-center gap-1">
                    <h5 class="heading-05 text-gray-900">Comments</h5>
                    <span class="badge-sm-gray-transparent">5,948</span>
                </div>
                <div class="bg-primary-50 rounded-[9px] space-y-3 p-4">
                    <p class="body-large-600 text-gray-900">Write a comment</p>
                    <div class="flex flex-wrap items-center gap-3">
                        <div class="h-[44px] w-[44px] rounded-full overflow-hidden shrink-0">
                            <img src="{{ asset('frontend/assets/images/Avatar.png') }}" alt="user"
                                class="w-full object-cover">
                        </div>
                        <input type="text" placeholder="Share your thoughts on this blog!"
                            class="w-full flex-1 min-w-[290px] border border-gray-100 rounded-lg shadow-gray-base-1 hover:border-primary-500 focus:border-primary-500 focus:ring-0 px-[18px] py-[10px]">
                        <button type="button" class="btn-label-primary">
                            Comment <x-svg.send-01 />
                        </button>
                    </div>
                </div>
                <div class="rounded-[9px] border border-gray-100 bg-gray-white p-4 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="h-[48px] w-[48px] rounded-full overflow-hidden shrink-0">
                            <img src="{{ asset('frontend/assets/images/Avatar.png') }}" alt="user"
                                class="w-full object-cover">
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-[6px]">
                                <h6 class="body-base-600 text-gray-900">Cameron Williamson</h6>
                                <small class="h-2 w-2 bg-gray-400 rounded-full"></small>
                                <span class="body-small-400 text-gray-600">19 sec ago</span>
                            </div>
                            <div class="body-base-400 text-gray-700">
                                Amet minim mollit non deserunt
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-[6px] px-3">
                        <div class="flex items-center gap-2 text-primary-500 pt-2">
                            <x-svg.message-square-02 />
                            Write Reply
                        </div>
                        <div class="flex flex-wrap items-center gap-3 py-3">
                            <div class="h-[44px] w-[44px] rounded-full overflow-hidden  shrink-0">
                                <img src="{{ asset('frontend/assets/images/Avatar.png') }}" alt="user"
                                    class="w-full object-cover">
                            </div>
                            <input type="text" placeholder="Share your thoughts on this blog!"
                                class="w-full border min-w-[250px] flex-1 border-gray-100 rounded-lg shadow-gray-base-1 hover:border-primary-500 focus:border-primary-500 focus:ring-0 px-[18px] py-[10px]">
                            <button type="button" class="btn-label-primary">
                                <x-svg.send-01 />
                            </button>
                        </div>
                    </div>
                </div>
                <div class="rounded-[9px] border border-gray-100 bg-gray-white p-4 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="h-[48px] w-[48px] rounded-full overflow-hidden shrink-0">
                            <img src="{{ asset('frontend/assets/images/Avatar.png') }}" alt="user"
                                class="w-full object-cover">
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-[6px]">
                                <h6 class="body-base-600 text-gray-900">Cameron Williamson</h6>
                                <small class="h-2 w-2 bg-gray-400 rounded-full"></small>
                                <span class="body-small-400 text-gray-600">19 sec ago</span>
                            </div>
                            <div class="body-base-400 text-gray-700">
                                Amet minim mollit non deserunt
                            </div>
                        </div>
                        <div class="ml-auto relative" x-data="{ showMenu: false }">
                            <button class="btn-text-dark " @click="showMenu=!showMenu">
                                <x-svg.dots-horizontal />
                            </button>
                            <ul class="rounded-lg border border-gray-100 shadow-gray-base-3 bg-gray-white absolute top-5 right-0 min-w-max md:min-w-[156px]"
                                x-cloak x-show="showMenu" @click.outside="showMenu=false">
                                <li class="py-2 px-[18px] hover:bg-gray-50  transiton duration-200 ease-linear group">
                                    <a href="#"
                                        class="flex items-center gap-3 body-base-400 text-gray-600 group-hover:text-gray-900">
                                        <x-svg.edit-05 />
                                        Edit
                                    </a>
                                </li>
                                <li class="py-2 px-[18px] hover:bg-gray-50  transiton duration-200 ease-linear group">
                                    <a href="#"
                                        class="flex items-center gap-3 body-base-400 text-gray-600 group-hover:text-gray-900">
                                        <x-svg.trash-03 />
                                        Delete
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div class="bg-gray-50 rounded-[6px] p-4 ">
                        <div class="flex items-center gap-2 text-primary-500 pt-2">
                            3 Replies
                        </div>
                        <div class=" py-3 divide-y divide-gray-100">
                            <div class="flex items-start gap-3 py-4">
                                <div class="h-[48px] w-[48px] rounded-full overflow-hidden shrink-0">
                                    <img src="{{ asset('frontend/assets/images/Avatar.png') }}" alt="user"
                                        class="w-full object-cover">
                                </div>
                                <div class="space-y-1">
                                    <div class="flex items-center gap-[6px]">
                                        <h6 class="body-base-600 text-gray-900">Cameron Williamson</h6>
                                        <small class="h-2 w-2 bg-gray-400 rounded-full"></small>
                                        <span class="body-small-400 text-gray-600">19 sec ago</span>
                                    </div>
                                    <div class="body-base-400 text-gray-700">
                                        As a recent graduate, I found this blog extremely helpful in navigating the job
                                        market. The interview tips were spot-on, and I feel more confident now
                                    </div>
                                </div>

                            </div>
                            <div class="flex flex-wrap items-start gap-3 py-4">
                                <div class="h-[48px] w-[48px] rounded-full overflow-hidden shrink-0">
                                    <img src="{{ asset('frontend/assets/images/Avatar.png') }}" alt="user"
                                        class="w-full object-cover">
                                </div>
                                <div class="space-y-1">
                                    <div class="flex items-center gap-[6px]">
                                        <h6 class="body-base-600 text-gray-900">Cameron Williamson</h6>
                                        <small class="h-2 w-2 bg-gray-400 rounded-full"></small>
                                        <span class="body-small-400 text-gray-600">19 sec ago</span>
                                    </div>
                                    <div class="body-base-400 text-gray-700">
                                        Thanks for this.
                                    </div>
                                </div>

                            </div>
                            <div class="flex flex-wrap items-start gap-3 py-4">
                                <div class="h-[48px] w-[48px] rounded-full overflow-hidden shrink-0">
                                    <img src="{{ asset('frontend/assets/images/Avatar.png') }}" alt="user"
                                        class="w-full object-cover">
                                </div>
                                <div class="space-y-1">
                                    <div class="flex items-center gap-[6px]">
                                        <h6 class="body-base-600 text-gray-900">Cameron Williamson</h6>
                                        <small class="h-2 w-2 bg-gray-400 rounded-full"></small>
                                        <span class="body-small-400 text-gray-600">3 hours ago</span>
                                    </div>
                                    <div class="body-base-400 text-gray-700">
                                        Thanks for this.
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div x-data="{ writeReply: false }">
                            <button type="button" class="btn-white-primary" @click="writeReply=!writeReply">
                                <x-svg.message-square-02 />
                                Write Reply
                            </button>
                            <div class="flex flex-wrap items-center gap-3 py-3" x-cloak x-transition x-show="writeReply">
                                <div class="h-[44px] w-[44px] rounded-full overflow-hidden  shrink-0">
                                    <img src="{{ asset('frontend/assets/images/Avatar.png') }}" alt="user"
                                        class="w-full object-cover">
                                </div>
                                <input type="text" placeholder="Share your thoughts on this blog!"
                                    class="w-full flex-1 min-w-[250px] border border-gray-100 rounded-lg shadow-gray-base-1 hover:border-primary-500 focus:border-primary-500 focus:ring-0 px-[18px] py-[10px]">
                                <button type="button" class="btn-label-primary">
                                    <x-svg.send-01 />
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-[9px] border border-gray-100 bg-gray-white p-4 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="h-[48px] w-[48px] rounded-full overflow-hidden shrink-0">
                            <img src="{{ asset('frontend/assets/images/Avatar.png') }}" alt="user"
                                class="w-full object-cover">
                        </div>
                        <div class="space-y-1">
                            <div class="flex items-center gap-[6px]">
                                <h6 class="body-base-600 text-gray-900">Cameron Williamson</h6>
                                <small class="h-2 w-2 bg-gray-400 rounded-full"></small>
                                <span class="body-small-400 text-gray-600">19 sec ago</span>
                            </div>
                            <div class="body-base-400 text-gray-700">
                                Amet minim mollit non deserunt
                            </div>
                        </div>
                    </div>
                    <div x-data="{ writeReply: false }">
                        <button type="button" class="btn-white-primary" @click="writeReply=!writeReply">
                            <x-svg.message-square-02 />
                            Write Reply
                        </button>
                        <div class="flex flex-wrap items-center gap-3 py-3" x-cloak x-transition x-show="writeReply">
                            <div class="h-[44px] w-[44px] rounded-full overflow-hidden  shrink-0">
                                <img src="{{ asset('frontend/assets/images/Avatar.png') }}" alt="user"
                                    class="w-full object-cover">
                            </div>
                            <input type="text" placeholder="Share your thoughts on this blog!"
                                class="flex-1 min-w-[290px] w-full border border-gray-100 rounded-lg shadow-gray-base-1 hover:border-primary-500 focus:border-primary-500 focus:ring-0 px-[18px] py-[10px]">
                            <button type="button" class="btn-label-primary">
                                <x-svg.send-01 />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-[80px] bg-gray-50">
            <div class="container py-[80px] space-y-[48px]">
                <div class="text-center">
                    <h2 class="heading-01 text-gray-900">Related Blogs</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" x-init>
                    <template x-for="n in 6" :key="n">
                        <x-frontend.blog-card />
                    </template>
                </div>
                <div class="flex items-center justify-center">
                    <a href="#" class="btn-white-dark">
                        <x-svg.search-md stroke="currentColor gap-2" />
                        View All
                    </a>
                </div>
            </div>
        </section>
        <section class="py-[80px]">
            <div class="container py-[40px] rounded-[16px] border border-gray-100 shadow-gray-base-2 text-center space-y-4"
                style="background: linear-gradient(180deg, rgba(255, 240, 230, 0.50) 0%, rgba(230, 240, 250, 0.00) 70.04%);">
                <h3 class="heading-03 text-gray-900">Subscribe to our Blogs</h3>
                <p class="max-w-[652px] mx-auto body-base-400 text-gray-600">Join our growing community by subscribing to
                    our insightful and informative blogs. Get access to valuable career advice, job search tips, industry
                    insights, and much more.</p>

                <form class="flex items-center justify-center gap-4 flex-wrap pt-2">
                    <div
                        class="flex items-center gap-3 px-[18px] rounded-lg border border-gray-100 shadow-gray-base-1 hover:border-secondary-500 focus-within:border-secondary-500 transition duration-200 ease-linear min-w-full lg:min-w-[424px]">
                        <span class="text-secondary-500">
                            <x-svg.mail-05 />
                        </span>
                        <input type="email" placeholder="Email address"
                            class="w-full border-0 outline-none focus:ring-0 py-[10px]">
                    </div>
                    <div>
                        <button type="submit" class="btn-secondary">Subscribe</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
@endsection
