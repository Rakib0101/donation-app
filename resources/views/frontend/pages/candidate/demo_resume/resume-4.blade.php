<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Resume Template 4</title>
    <link rel="stylesheet" href="{{ mix('frontend/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ mix('frontend/app.min.css') }}">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        body,
        html {
            height: 100%;
            margin: 0;
        }

        * {
            margin: 0;
            padding: 0;
            border: none;
            outline: none;
        }

        .template-box {
            max-width: 1320px;
            margin: 0px auto;
            position: relative;
        }

        @page {
            size: a3;
            margin: 0;
        }

        table {
            border: 0;
            margin: 0;
            padding: 0;
            border-spacing: 0px;
        }

        table.main-table {
            width: 100%;
            margin: 0 auto;
        }

        td {
            /* vertical-align: top; */
            margin: 0;
            border: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            margin: 0;
        }

        h3 {
            font-size: 24px;
            font-weight: bold;
        }

        p {
            color: #000000;
        }

        /* top area */
        .top-area-tr {
            background-color: #8D4B55;
            min-height: 88px;
            color: #fff;
            text-align: left;
            padding: 58px 0px;
        }

        .top-area-tr .right-td {
            padding: 58px 0px;
            margin-bottom: 0px;
        }

        .top-area h1 {
            font-size: 37px;
            font-weight: 800;
            color: white;
        }

        .top-area p {
            font-size: 24px;
            color: #fff;
        }

        /* top area */

        /* left side */
        .left-td {
            /* width: 358px; */
            width: 30%;
            float: left;
            margin-bottom: 40px;
        }

        .left-side-inner {
            padding: 0 30px;
        }

        .left-box {
            margin-top: 20px;
        }

        .candidate-photo {
            margin-top: -150px;
            width: 224px;
            height: 224px;
            border-radius: 50%;
            background-color: gray;
        }

        .candidate-photo img {
            width: 224px;
            height: 224px;
            object-fit: cover;
            border-radius: 50%;
        }

        .page-title {
            font-size: 21px;
            font-weight: bold;
            color: #942637;
        }

        .title-border {
            height: 2px;
            background-color: #8D4B55;
            margin: 13px 0;
            width: 122px;
        }

        .my-contact.left-box p {
            margin-bottom: 7px;
        }

        .my-contact p img {
            height: 24px;
            position: relative;
            top: 2px;
            margin-right: 7px;
            width: 24px;
        }

        .my-contact p {
            font-size: 16px;
            line-height: 20px;
        }

        .expertise-list p,
        .expertise-item {
            margin-bottom: 2px;
            font-size: 16px;
        }

        .list-dot {
            height: 4px;
            width: 4px;
            background-color: #000000;
            display: inline-block;
            border-radius: 50% !important;
            margin-right: 8px;
            margin-bottom: 2px;
        }

        .expertise-item .list-dot {
            float: left;
            top: 6px;
            position: relative;
        }

        .education-inner-box {
            font-size: 16px;
        }

        .education-inner-box {
            font-size: 16px;
            position: relative;
            margin-left: 17px;
            margin-bottom: 20px;
        }

        .degree-name {
            font-style: italic;
        }

        .education-inner-box:before {
            height: 8px;
            width: 8px;
            border-radius: 50%;
            background-color: #000;
            content: "";
            position: absolute;
            left: -17px;
            top: 6px;
        }

        /* left side */

        /* Right side */
        .right-td {
            width: 70%;
            float: right;
            margin-bottom: 40px;
            vertical-align: top;
        }

        .right-side {
            /* padding-right: 60px; */
        }

        .right-side-inner {
            padding-right: 60px;
        }

        .right-box {
            margin-top: 20px;
        }

        .about-me p {
            font-size: 16px;
        }

        .key-responsibility {
            font-size: 16px;
        }

        .company-name {
            font-size: 18px;
        }

        .work-duration {
            font-size: 14px;
        }

        .work-duration {
            font-style: italic;
            margin-bottom: 8px;
        }

        .professional-experience-inner {
            margin-bottom: 30px;
        }

        .acheivement-box {
            font-size: 16px;
            /* float: left; */
            margin-bottom: 5px;
        }

        .acheivement-box table td {
            vertical-align: top;
            /* margin-bottom: 20px; */
        }

        .acheivement-box tr td {
            padding-bottom: 10px;
        }

        .acheivement-box .acheivement-left-td {
            /* float: left; */
            width: 28%;
        }

        .acheivement-box span {
            padding-right: 10px;
        }

        /* .acheivement-box p { */
        .acheivement-box p.acheivement-right-td {
            /* float: right; */
            width: 72%;
        }

        /* Right side */

        /* bottom area */
        .content-inner {
            position: relative;
        }

        .bottom-area-td {
            height: 22px;
            background-color: #8D4B55;
            width: 100%;
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
        }

        /* bottom area */
    </style>
</head>

<body class="!tw-bg-[#E4E5E8]">
    <header class="!tw-max-w-[1320px] !tw-mx-auto">
        <div class="!tw-py-4 !tw-flex !tw-justify-center">
            <a href="{{ route('website.home') }}" class="brand-logo">
                <img src="{{ $setting->dark_logo_url }}" alt="">
            </a>
        </div>
    </header>

    <div class="!tw-relative" id="download_section">
        <div class="content-wrap template-box">
            <div class="content-inner">
                <table class="main-table">
                    <tr class="top-area-tr">
                        <td class="left-td"></td>
                        <td class="right-td">
                            <div class="top-area">
                                <h1>Mariana Anderson</h1>
                                <p>Markting manager</p>
                            </div>
                        </td>
                    </tr>
                    <tr style="background: white;">
                        <td class="left-td">
                            {{-- Left Side Start --}}
                            <div class="left-side">
                                <div class="left-side-inner">
                                    <div class="candidate-photo">
                                        <img
                                            src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60">
                                    </div>
                                    <div class="my-contact left-box">
                                        <div>
                                            <h4 class="page-title">My Contact</h4>
                                            <div class="title-border"></div>
                                        </div>
                                        <p class="">
                                            <img
                                                src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/phone.svg'))); ?>">
                                            <span class="">012-4568-7879</span>
                                        </p>
                                        <p class="">
                                            <img
                                                src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/email.svg'))); ?>">
                                            <span class="">info@mail.com</span>
                                        </p>
                                        <p class="">
                                            <img
                                                src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/location.svg'))); ?>">
                                            <span class="">123 Anywhere St... Any City</span>
                                        </p>
                                        <p class="">
                                            <img
                                                src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/website.svg'))); ?>">
                                            <span class="">www.demoresume.com</span>
                                        </p>

                                        <p class="">
                                            <img
                                                src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/linkedin.svg'))); ?>">
                                            <span class="">www.linkedin.com/in/yourname</span>
                                        </p>
                                        <p class="">
                                            <img
                                                src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/facebook.svg'))); ?>">
                                            <span class="">www.facebook.com/yourname</span>
                                        </p>
                                        <p class="">
                                            <img
                                                src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/github.svg'))); ?>">
                                            <span class="">www.github.com/yourname</span>
                                        </p>

                                        <p class="">
                                            <img
                                                src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/twitter.svg'))); ?>">
                                            <span class="">www.twitter.com/yourname</span>
                                        </p>
                                    </div>

                                    <div class="left-box">
                                        <div>
                                            <h4 class="page-title">Skill</h4>
                                            <div class="title-border"></div>
                                        </div>
                                        <div class="expertise-list">
                                            <p class=""><span class="list-dot"></span>
                                                PHP
                                            </p>
                                            <p class=""><span class="list-dot"></span>
                                                Laravel
                                            </p>
                                            <p class=""><span class="list-dot"></span>
                                                Vue Js
                                            </p>
                                            <p class=""><span class="list-dot"></span>
                                                React Js
                                            </p>
                                        </div>
                                    </div>

                                    <div class="left-box">
                                        <div>
                                            <h4 class="page-title">Language</h4>
                                            <div class="title-border"></div>
                                        </div>
                                        <div class="expertise-list">
                                            <p class=""><span class="list-dot"></span>
                                                English
                                            </p>
                                            <p class=""><span class="list-dot"></span>
                                                Spanish
                                            </p>
                                            </ul>
                                        </div>
                                        <div class="left-box">
                                            <div>
                                                <h4 class="page-title">Tools</h4>
                                                <div class="title-border"></div>
                                            </div>
                                            <div class="expertise-list">
                                                <p class=""><span class="list-dot"></span>
                                                    Google Chrome
                                                </p>
                                                <p class=""><span class="list-dot"></span>
                                                    Firefox
                                                </p>
                                                <p class=""><span class="list-dot"></span>
                                                    VS Code
                                                </p>
                                                </ul>
                                            </div>
                                            <div class="left-box">
                                                <h4 class="page-title">Education</h4>
                                                <div class="title-border"></div>
                                                <div class="education-inner-box">
                                                    <p class="school-name">univarsity/collage</p>
                                                    <p class="degree-name">Enter Your Degree</p>
                                                    <p class="degree-name">
                                                        2008 - 2012
                                                    </p>
                                                </div>
                                                <div class="education-inner-box">
                                                    <p class="school-name">univarsity/collage</p>
                                                    <p class="degree-name">Enter Your Degree</p>
                                                    <p class="degree-name">
                                                        2008 - 2012
                                                    </p>
                                                </div>
                                                <div class="education-inner-box">
                                                    <p class="school-name">univarsity/collage</p>
                                                    <p class="degree-name">Enter Your Degree</p>
                                                    <p class="degree-name">
                                                        2008 - 2012
                                                    </p>
                                                </div>
                                                <div class="education-inner-box">
                                                    <p class="school-name">univarsity/collage</p>
                                                    <p class="degree-name">Enter Your Degree</p>
                                                    <p class="degree-name">
                                                        2008 - 2012
                                                    </p>
                                                </div>
                                                <div class="education-inner-box">
                                                    <p class="school-name">univarsity/collage</p>
                                                    <p class="degree-name">Enter Your Degree</p>
                                                    <p class="degree-name">
                                                        2008 - 2012
                                                    </p>
                                                </div>
                                            </div>

                                            <div class="left-box">
                                                <div>
                                                    <h4 class="page-title">Hobbies</h4>
                                                    <div class="title-border"></div>
                                                </div>
                                                <div class="expertise-list">
                                                    <p class=""><span class="list-dot"></span>
                                                        Reading
                                                    </p>
                                                    <p class=""><span class="list-dot"></span>
                                                        Traveling
                                                    </p>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="right-td">
                            {{-- Right Side Start --}}
                            <div class="right-side">
                                <div class="right-side-inner">
                                    <div class="right-box about-me">
                                        <div>
                                            <h4 class="page-title">About Me</h4>
                                            <div class="title-border"></div>
                                        </div>
                                        <p class="">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio voluptatum
                                            est
                                            suscipit, reprehenderit voluptatibus,
                                            deleniti aut harum facilis quod commodi eaque dignissimos magni veniam
                                            culpa! Iusto
                                            doloremque nulla neque autem.
                                        </p>
                                    </div>

                                    <div class="right-box">
                                        <div>
                                            <h4 class="page-title">Professional Experience</h4>
                                            <div class="title-border"></div>
                                        </div>

                                        <div class="professional-experience-inner">
                                            <p class="company-name">
                                                Company Name |
                                                123 Any wherewSt...,Any City
                                            </p>
                                            <p class="work-duration">
                                                2019-2022
                                            </p>

                                            <div class="expertise-list">
                                                <p class="">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio
                                                    voluptatum est
                                                    suscipit, reprehenderit voluptatibus,
                                                    deleniti aut harum facilis quod commodi eaque dignissimos magni
                                                    veniam culpa! Iusto
                                                    doloremque nulla neque autem.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="professional-experience-inner">
                                            <p class="company-name">
                                                Company Name |
                                                123 Any wherewSt...,Any City
                                            </p>
                                            <p class="work-duration">
                                                2019-2022
                                            </p>

                                            <div class="expertise-list">
                                                <p class="">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio
                                                    voluptatum est
                                                    suscipit, reprehenderit voluptatibus,
                                                    deleniti aut harum facilis quod commodi eaque dignissimos magni
                                                    veniam culpa! Iusto
                                                    doloremque nulla neque autem.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="professional-experience-inner">
                                            <p class="company-name">
                                                Company Name |
                                                123 Any wherewSt...,Any City
                                            </p>
                                            <p class="work-duration">
                                                2019-2022
                                            </p>

                                            <div class="expertise-list">
                                                <p class="">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio
                                                    voluptatum est
                                                    suscipit, reprehenderit voluptatibus,
                                                    deleniti aut harum facilis quod commodi eaque dignissimos magni
                                                    veniam culpa! Iusto
                                                    doloremque nulla neque autem.
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="right-box">
                                        <div>
                                            <h4 class="page-title">Fetured Projects</h4>
                                            <div class="title-border"></div>
                                        </div>

                                        <div>
                                            <div class="acheivement-box">
                                                <table>
                                                    <tr>
                                                        <td class="acheivement-left-td">
                                                            <div class="acheivement-left">
                                                                <span>Project (<a href="www.demo.com"
                                                                        class="project-link">
                                                                        www.demo.com
                                                                    </a>)</span></div>
                                                        </td>
                                                        <td class="acheivement-right-td">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                elit. Odio voluptatum est
                                                                suscipit, reprehenderit voluptatibus,
                                                                deleniti aut harum facilis quod commodi eaque
                                                                dignissimos magni veniam culpa!
                                                                Iusto doloremque nulla neque autem.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="acheivement-box">
                                                <table>
                                                    <tr>
                                                        <td class="acheivement-left-td">
                                                            <div class="acheivement-left">
                                                                <span>Project (<a href="www.demo.com"
                                                                        class="project-link">
                                                                        www.demo.com
                                                                    </a>)</span></div>
                                                        </td>
                                                        <td class="acheivement-right-td">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                elit. Odio voluptatum est
                                                                suscipit, reprehenderit voluptatibus,
                                                                deleniti aut harum facilis quod commodi eaque
                                                                dignissimos magni veniam culpa!
                                                                Iusto doloremque nulla neque autem.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="acheivement-box">
                                                <table>
                                                    <tr>
                                                        <td class="acheivement-left-td">
                                                            <div class="acheivement-left">
                                                                <span>Project (<a href="www.demo.com"
                                                                        class="project-link">
                                                                        www.demo.com
                                                                    </a>)</span></div>
                                                        </td>
                                                        <td class="acheivement-right-td">
                                                            <p>
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                elit. Odio voluptatum est
                                                                suscipit, reprehenderit voluptatibus,
                                                                deleniti aut harum facilis quod commodi eaque
                                                                dignissimos magni veniam culpa!
                                                                Iusto doloremque nulla neque autem.
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </table>

                <div class="bottom-area-td"></div>
            </div>
        </div
    </div>
</body>

</html>
