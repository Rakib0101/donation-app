<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Creative Resume</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ $setting->favicon_image_url }}">
    <link rel="stylesheet" href="{{ mix('frontend/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ mix('frontend/app.min.css') }}">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
     <style>
        body {
            font-family: 'Lato', sans-serif;
        }
        @page{
            size: a3;
            margin: 0px;
            padding: 0px;
        }
        .content-wrap{
            margin: 0;
            padding: 0;
        }
        table {
            border: 0;
            margin: 0;
            padding:0;
            width: 100%;
            border-spacing: 0px;
        }
        td {
            vertical-align: top;
            margin: 0;
            border: 0;
        }
        h1,h2,h3,h4,h5,h6, p {
            margin: 0;
        }
        h3 {
            font-size: 24px;
            font-weight: bold;
        }

        .left-td {
            background-color: #323B4C;
            width: 30%;
        }
        .left-side{
            height: 1585px;
        }
        .candidate-photo {
            text-align: center;
            padding: 42px 52px;
        }
        .candidate-photo img {
            width: 167px;
            height: 167px;
            object-fit: cover;
            border-radius: 50%;
        }
        .left-cotnent {
            padding-left: 52px;
        }
        .left-side h3, .left-side h4, .left-side h5 {
            color: #fff;
        }
        .left-side h4 {
            font-size: 15px;
            margin-bottom: 4px;
        }
        .left-side left-inner-big-p {
            font-size: 14px;
            font-weight: 400;
        }
        .left-side p {
            color: #fff;
            font-size: 12px;
            line-height: 16px;
        }
        .left-inner {
            margin-bottom: 26px;
        }

        .left-content-title {
            margin-bottom: 6px;
        }
        .left-border {
            height: 1px;
            background-color: #fff;
            margin-bottom: 20px;
        }
        .expertise-list p {
            margin-bottom: 8px;
        }
        .list-dot {
            height: 4px;
            width: 4px;
            background-color: #fff;
            display: inline-block;
            border-radius: 50%;
            margin-right: 10px;
            margin-bottom: 2px;
        }

        .language-p {
            margin-bottom: 9px;
        }

        /* Right side css */
        .right-inner-wrap {
            padding: 50px 30px;
        }
        .right-side h2, .right-side p {
            color: #323B4C;
        }
        .right-side p {
            font-size: 14px;
            color: #737373;
            line-height: 20px;
        }
        .main-title {
            font-size: 38px;
            letter-spacing: 2px;
        }
        .main-title span {
            font-weight: 400!important;
        }

        /* top part */
        .top-part h3 {
            font-size: 21px;
            font-weight: 400;
            letter-spacing: 3px;
        }
        .top-part p {
            margin-top: 10px;
        }
        /* top part */

        /* Middle part */
        .right-border {
            height: 2px;
            background-color: #323B4C;
        }
        .right-content-box-title {
            margin-top: 40px;
            margin-bottom: 5px;
        }

        .experience-box-wrap {
            border-left: 1px solid #323B4C;
            padding-left: 22px;
            margin-left: 6px;
        }
        .experience-box {
            margin-top: 20px;
            position: relative;
        }
        .experience-box:before {
            content: "";
            height: 10px;
            width: 10px;
            background-color: #fff;
            border: 2px solid #323B4C;
            border-radius: 50%;
            z-index: 9;
            left: -29px;
            position: absolute;
        }
        .experience-box h4, .experience-box h3, .experience-box p, .experience-box span {
           color: #737373;
        }
        .experience-box h4 {
            line-height: 12px;
            margin-bottom: 5px;
        }
        .job-title {
            font-size: 18px;
            margin: 7px 0 10px;
        }
        /* Middle part */

        /* bottom part */

        .reference-box-wrap {
            width: 100%;
            min-height: 144px;
            height: auto;
        }
        .reference-box {
            margin-top: 20px;
            margin-right: 25px;
            float: left;
        }
        .reference-box h4 {
            font-size: 18px;
            color: #323B4C;
        }
        .job-position {
            color: #737373;
        }
        .reference-box p > strong {
            color: #323B4C;
        }

        .phone-email-list {
            margin-top: 12px;
        }

        .phone-email-list p {
            margin-top: 3px;
        }
        /* bottom part */

        /* Right side css */

        .template-box {
            max-width: 1320px;
            margin: 0px auto;
            overflow: hidden;
            /* background: #0F172A; */
            font-family: 'Plus Jakarta Sans';
        }
    </style>
</head>

<body class="!tw-bg-[#E4E5E8]">
    <header class="tw-max-w-[1320px] tw-mx-auto">
        <div class="tw-py-4 tw-flex tw-justify-center">
            <a href="{{ route('website.home') }}" class="brand-logo">
                <img src="{{ $setting->dark_logo_url }}" alt="">
            </a>
        </div>
    </header>

    <div class="template-box-wrap tw-overflow-hidden">
        <div class="template-box !tw-min-w-[1320px] !tw-overflow-x-auto" id="download_section">
            <div class="template-box">
                <div class="tw-flex tw-justify-between">
                    <div class="tw-w-1/4 tw-bg-gray-700">
                        <div class="tw-pt-10 tw-pb-5 ">
                            <img class="tw-rounded-full tw-w-[200px] tw-h-[200px] tw-mx-auto tw-block "
                                src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </div>
                        <div class="tw-pl-8">


                            <div class="tw-py-5">
                                <h2 class="tw-text-white tw-text-2xl">Contact</h2>
                                <div class="tw-w-full" style="border:1px solid rgb(192, 191, 191)"></div>

                                <div class="tw-pt-4">
                                    <h4 class="tw-text-base tw-font-medium tw-text-gray-100 tw-mb-1">Phone</h4>
                                    <p class="tw-text-xs tw-text-[#a2a2a3] tw-m-0 tw-p-0">012-4568-7879</p>
                                </div>

                                <div class="tw-pt-4">
                                    <h4 class="tw-text-base tw-font-medium tw-text-gray-100 tw-mb-1 tw-leading-[100%]">Email
                                    </h4>
                                    <p class="tw-text-xs tw-text-[#a2a2a3] tw-m-0 tw-p-0">info@mail.com</p>
                                </div>
                                <div class="tw-pt-4">
                                    <h4 class="tw-text-base tw-font-medium tw-text-gray-100 tw-mb-1 tw-leading-[100%]">Address
                                    </h4>
                                    <p class="tw-text-xs tw-text-[#a2a2a3] tw-m-0 tw-p-0">123 Anywhere St... Any City</p>
                                </div>

                            </div>

                            <div class="tw-py-5 tw-z-10">
                                <h2 class="tw-text-white tw-text-2xl">Education</h2>
                                <div class="tw-w-full" style="border:1px solid rgb(192, 191, 191)"></div>

                                <div class="tw-pt-4">
                                    <h6 class="tw-text-base tw-text-gray-100">2008</h6>
                                    <p class="tw-text-xl tw-capitalize tw-text-[#bfbfc2] tw-m-0 tw-p-0">Enter Your Degree</p>
                                    <p class="tw-text-xl tw-capitalize tw-text-[#bfbfc2] tw-m-0 tw-p-0">univarsity/collage</p>
                                </div>


                            </div>

                            <div class="tw-py-5 tw-z-10">
                                <h2 class="tw-text-white tw-text-2xl">Experties</h2>
                                <div class="tw-w-full" style="border:1px solid rgb(192, 191, 191)"></div>

                                <div class="tw-pt-4">
                                    <ul class="tw-text-white tw-text-base tw-pl-5">
                                        <li class="tw-py-1  tw-text-base tw-text-[#bfbfc2]">UI/UX</li>
                                        <li class="tw-py-1 tw-text-base tw-text-[#bfbfc2]">Visual Design</li>
                                        <li class="tw-py-1 tw-text-base tw-text-[#bfbfc2]">User Floaw</li>
                                        <li class="tw-py-1 tw-text-base tw-text-[#bfbfc2]">sfsgddg</li>
                                    </ul>
                                </div>



                            </div>


                            <div class="tw-pb-[50px] tw-z-10">
                                <h2 class="tw-text-white tw-text-2xl">Language</h2>
                                <div class="tw-w-full" style="border:1px solid rgb(192, 191, 191)"></div>

                                <div class="tw-pt-2">
                                    <p class="tw-text-base tw-text-[#bfbfc2] tw-m-0 tw-pt-1">English</p>
                                    <p class="tw-text-base tw-text-[#bfbfc2] tw-m-0 tw-pt-1">Spanish</p>
                                </div>

                            </div>



                        </div>


                    </div>


                    <div class="tw-w-3/4 tw-px-14  tw-bg-white tw-pb-10">
                        <div class=" tw-pt-14 tw-text-black">
                            <h2 class="tw-text-7xl tw-text-[#575751] "><strong class="tw-text-gray-600">Mariana</strong>
                                Anderson</h2>
                            <h4 class="tw-text-4xl">Markting manager</h4>
                            <p class="tw-pt-2 tw-m-0 tw-pb-4 tw-text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est suscipit,
                                reprehenderit voluptatibus,
                                deleniti aut harum facilis quod commodi eaque dignissimos magni veniam culpa! Iusto doloremque
                                nulla neque autem.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est suscipit,
                                reprehenderit voluptatibus,
                                deleniti aut harum facilis quod commodi eaque dignissimos magni veniam culpa! Iusto doloremque
                                nulla neque autem.
                            </p>
                        </div>

                        <div class="tw-pt-1">
                            <h2 class="tw-text-black tw-font-semibold tw-text-2xl">Experience</h2>
                            <div class="tw-w-full" style="border:1px solid #524f52"></div>

                            <div class="tw-mt-10">
                                <div class="tw-ml-2 tw-pl-5 tw-relative " style="border-left: 3px solid #524f52;">
                                    <span
                                        class="tw-absolute -tw-top-1 -tw-left-[11px] tw-rounded-full tw-w-5 tw-h-5 tw-inline-flex tw-bg-[#524f52]"></span>
                                    <div class="tw-pb-8">
                                        <p class="tw-text-[#61615e] tw-text-xl tw-font-semibold " style="padding-top: 0">
                                            2019-2022</p>
                                        <span class="tw-text-base tw-text-gray-gray-600 tw-pt-4 tw-m-0 tw-p-0">Company Name |
                                            123 Any wherewSt...,Any City</span>
                                        <h4 class="tw-text-2xl tw-text-[#4d4a4d] tw-font-semibold tw-pt-2">Job Position Here
                                        </h4>
                                        <p class="tw-text-[#2e2e2c] tw-p-0 tw-m-0 tw-text-justify tw-pt-5">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est
                                            suscipit, reprehenderit voluptatibus,
                                            deleniti aut harum facilis quod commodi eaque dignissimos magni veniam culpa! Iusto
                                            doloremque nulla neque autem.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est
                                            suscipit, reprehenderit voluptatibus,
                                            deleniti aut harum facilis quod commodi eaque dignissimos magni veniam culpa! Iusto
                                            doloremque nulla neque autem.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est
                                            suscipit, reprehenderit voluptatibus
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est
                                            suscipit, reprehenderit voluptatibus
                                        </p>
                                    </div>
                                </div>

                                <div class="tw-ml-2 tw-pl-5 tw-relative " style="border-left: 3px solid #524f52;">
                                    <span
                                        class="tw-absolute -tw-top-1 -tw-left-[11px] tw-rounded-full tw-w-5 tw-h-5 tw-inline-flex tw-bg-[#524f52]"></span>
                                    <div class="tw-pb-8">
                                        <p class="tw-text-[#61615e] tw-text-xl tw-font-semibold tw-p-0 tw-m-0">2017-2019</p>
                                        <span class="tw-text-base tw-text-gray-gray-600 tw-pt-4 tw-m-0 tw-p-0">Company Name |
                                            123 Any wherewSt...,Any City</span>
                                        <h4 class="tw-text-2xl tw-text-[#4d4a4d] tw-font-semibold tw-pt-2">Job Position Here
                                        </h4>
                                        <p class="tw-text-[#2e2e2c] tw-p-0 tw-m-0 tw-text-justify tw-pt-5">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est
                                            suscipit, reprehenderit voluptatibus,
                                            deleniti aut harum facilis quod commodi eaque dignissimos magni veniam culpa! Iusto
                                            doloremque nulla neque autem.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est
                                            suscipit, reprehenderit voluptatibus,
                                            deleniti aut harum facilis quod commodi eaque dignissimos magni veniam culpa! Iusto
                                            doloremque nulla neque autem.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est
                                            suscipit, reprehenderit voluptatibus
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est
                                            suscipit, reprehenderit voluptatibus
                                        </p>
                                    </div>
                                </div>

                                <div class="tw-ml-2 tw-pl-5 tw-relative " style="border-left: 3px solid #524f52;">
                                    <span
                                        class="tw-absolute -tw-top-1 -tw-left-[11px] tw-rounded-full tw-w-5 tw-h-5 tw-inline-flex tw-bg-[#524f52]"></span>
                                    <div class="">
                                        <p class="tw-text-[#61615e] tw-text-xl tw-font-semibold tw-p-0 tw-mb-0">2015-2017</p>
                                        <span class="tw-text-base tw-text-gray-gray-600 tw-pt-4 tw-m-0 tw-p-0">Company Name |
                                            123 Any wherewSt...,Any City</span>
                                        <h4 class="tw-text-2xl tw-text-[#4d4a4d] tw-font-semibold tw-pt-2">Job Position Here
                                        </h4>
                                        <p class="tw-text-[#2e2e2c] tw-p-0 tw-m-0 tw-text-justify tw-pt-5">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est
                                            suscipit, reprehenderit voluptatibus,
                                            deleniti aut harum facilis quod commodi eaque dignissimos magni veniam culpa! Iusto
                                            doloremque nulla neque autem.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est
                                            suscipit, reprehenderit voluptatibus,
                                            deleniti aut harum facilis quod commodi eaque dignissimos magni veniam culpa! Iusto
                                            doloremque nulla neque autem.
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est
                                            suscipit, reprehenderit voluptatibus
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum est
                                            suscipit, reprehenderit voluptatibus
                                        </p>
                                    </div>
                                </div>


                            </div>




                        </div>
                        <div>
                            <h2 class="tw-text-black tw-font-semibold  tw-text-4xl tw-pt-5">Reference</h2>
                            <div class="tw-w-full" style="border:1px solid #524f52"></div>
                            <div class="tw-flex tw-gap-7 tw-pt-6">
                                <div class="tw-text-start tw-w-1/2 ">
                                    <h4 class="tw-text-2xl tw-text-[#524f52] tw-font-bold tw-m-0 tw-p-0">Name Surname</h4>
                                    <span class="tw-text-[#838183] tw-pt-0">Job Position, Company Name</span>
                                    <div class="tw-pt-3">
                                        <p class="tw-m-0 tw-p-0">
                                            <span class="tw-text-base tw-text-[#4a4a4b] tw-m-0 tw-py-1 tw-font-bold">Phone :
                                            </span><span class="tw-pl-2 tw-text-[#838183]">123-456-789</span>
                                        </p>

                                        <p>
                                            <span class="tw-text-base tw-text-[#4a4a4b] tw-m-0 tw-py-1 tw-font-bold">Email :
                                            </span><span class="tw-pl-4 tw-text-[#838183]">info@mail.com</span>
                                        </p>

                                    </div>
                                </div>
                                <div class="tw-text-start tw-w-1/2 ">
                                    <h4 class="tw-text-2xl tw-text-[#524f52] tw-font-bold tw-m-0 tw-p-0">Name Surname</h4>
                                    <span class="tw-text-[#838183] tw-pt-0">Job Position, Company Name</span>
                                    <div class="tw-pt-3">
                                        <p class="tw-m-0 tw-p-0">
                                            <span class="tw-text-base tw-text-[#4a4a4b] tw-m-0 tw-py-1 tw-font-bold">Phone :
                                            </span><span class="tw-pl-2 tw-text-[#838183]">123-456-789</span>
                                        </p>

                                        <p>
                                            <span class="tw-text-base tw-text-[#4a4a4b] tw-m-0 tw-py-1 tw-font-bold">Email :
                                            </span><span class="tw-pl-4 tw-text-[#838183]">info@mail.com</span>
                                        </p>

                                    </div>
                                </div>
                            </div>

                            </span>


                        </div>
                    </div>

                </div>
              </div>
        </div>
    </div>

    <script src="https://unpkg.com/phosphor-icons"></script>
</body>

</html>
