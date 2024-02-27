<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Modern Resume</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ $setting->favicon_image_url }}">
    <link rel="stylesheet" href="{{ mix('frontend/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ mix('frontend/app.min.css') }}">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans';
        }

        .template-box {
            max-width: 990px;
            margin: 0px auto;
            overflow: hidden;
            background: #0F172A;
            font-family: 'Plus Jakarta Sans';
        }

        .content {
            width: 936px;
        }

        .skill-table:not([cellpadding]) td,
        .projects-table:not([cellpadding]) td {
            padding: 28px 0px;
        }

        @media print {
            @page {
                size: A3;
            }

            a::after {
                content: " ("attr(data-print-text) ")";
            }

            a[href^="tel:"]::after {
                content: " ("attr(href) ")";
            }

            a[href^="http"]::after {
                content: "";
            }
            header,
            footer,
            .no-print {
                display: none;
            }

            .template-box {
                background: #0F172A !important;
            }
        }
    </style>
    <style>
        body {
            font-family: 'Plus Jakarta Sans';
            background: #0F172A;
        }

        @page {
            size: A3;
            margin: 0px;
        }

        .template-box {
            background: #0F172A;
            max-width: 1320px;
            margin: 0px auto;
        }

        .header {
            padding-top: 48px;
            padding-bottom: 48px;
            text-align: center;
        }

        .resume-1-title {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 800;
            font-size: 56px;
            line-height: 71px;
            color: #E2E8F0;
            margin-top: 0px;
            margin-bottom: 8px;
        }

        .resume-position {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 25px;
            color: #CBD5E1;
            margin-top: 0px;
            margin-bottom: 40px;
        }

        .cta-info-wrap {
            margin-bottom: 10px;
        }

        .cta-info-wrap a {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-size: 14px;
            line-height: 18px;
            color: #E2E8F0;
            display: inline-block;
            text-decoration: none;
            vertical-align: middle;
        }
        .cta-info-wrap a img{
            margin-right: 8px;
        }
        .cta-info-wrap a img,
        .cta-info-wrap a span,
        .social-media a img,
        .social-media a span{
         display: inline-block;
         vertical-align: middle;
         margin-right: 4px;
        }

        .social-media a {
            display: inline-block;
            font-size: 14px;
            line-height: 18px;
            text-decoration: none;
            padding: 8px 16px 6px;
            background: #F6F3FF;
            border-radius: 20px;
            vertical-align: middle;
        }

        .cta-info-wrap a.location,
        .social-media a {
            margin-right: 8px;
            display: inline-block;
        }

        .social-media a img{
         margin-right: 4px;
        }

        .content {
            padding: 0px 72px;
        }

        .skill-table {
            color: #E2E8F0;
            width: 100%;
        }

        .skill-table tr td:first-child {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-size: 18px;
            line-height: 23px;
            color: #E2E8F0;
        }

        .skill-table tr td {
            padding: 28px 0px;
            border-bottom: 1px solid #334155;
            vertical-align: top;
        }
        .skill-table tr:last-child td{
         border-bottom: none;
        }

        .skill-table tr td:first-child {
            width: 25%;
        }

        .skill-table tr .date {
            font-family: 'Inconsolata';
            font-style: normal;
            font-size: 16px;
            line-height: 17px;
            letter-spacing: -0.05em;
            color: #E2E8F0;
            vertical-align: middle;
        }

        .experience-item {
            display: block;
            overflow: auto;
        }
        .date img,
        .date span{
         margin-right: 4px;
         display: inline-block;
         vertical-align: middle;
        }

        .experience-item .left {
            float: left;
            width: 80%;
        }

        .experience-item .date {
            display: inline-block;
            width: 20%;
            text-align: right;
        }

        .experience-item .desc {
            width: 100%;
        }

        .education-table {
            display: table;
            width: 100%;
            table-layout: fixed;
        }

        .table {
            display: table-row-group;
        }

        .table-row {
            display: table-row;
        }

        .table-cell {
            display: table-cell;
            vertical-align: middle;
        }

        .left {
            width: 60%;
        }

        .date {
            width: 40%;
            text-align: right;
            font-family: 'Inconsolata';
            font-style: normal;
            font-size: 16px;
            line-height: 17px;
            letter-spacing: -0.05em;
            color: #E2E8F0;
        }

        .title {
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-size: 18px;
            line-height: 23px;
            color: #E2E8F0;
            margin-top: 0px;
            margin-bottom: 18px;
        }

        .list-item {
            background: #334155;
            display: inline-block;
            border-radius: 6px;
            margin-right: 8px;
            margin-bottom: 8px;
            padding: 2px 6px;
            font-family: 'Plus Jakarta Sans';
            font-style: normal;
            font-size: 14px;
            line-height: 18px;
            color: #CBD5E1;
        }
        .desc{
         font-family: 'Plus Jakarta Sans';
         font-style: normal;
         font-weight: 400;
         font-size: 14px;
         line-height: 22px;
         color: #E2E8F0;
         margin-top: 0px;
         margin-bottom: 20px;
        }
        .link{
         font-family: 'Plus Jakarta Sans';
         font-style: normal;
         font-weight: 400;
         font-size: 14px;
         line-height: 20px;
         color: #E2E8F0;
         text-decoration: none;
         display: inline-block;
        }
        .skill-lists:not(:last-child){
         margin-bottom: 12px;
        }
        .inner-table{
            margin-left: auto;
        }
        .inner-table tr td{
            padding: 0px !important;
            width: auto;
            vertical-align: middle;
        }
    </style>
</head>

<body class="!tw-bg-[#E4E5E8]">
    <header class="tw-max-w-[990px] tw-mx-auto">
        <div class="tw-py-4 tw-flex tw-justify-center">
            <a href="{{ route('website.home') }}" class="brand-logo">
                <img src="{{ $setting->dark_logo_url }}" alt="">
            </a>
        </div>
    </header>

    {{-- template-box Start --}}
    <div class="template-box-wrap tw-overflow-hidden">
        <div class="template-box !tw-min-w-[1320px] !tw-overflow-x-auto" id="download_section">
            <div class="template-box">
                <div class="header">
                    <div>
                        <h2 class="resume-1-title">Enji Kusnadi</h2>
                        <h3 class="resume-position">Front-End Developer · UI/UX Designer</h3>
                        <div class="cta-info-wrap">
                            <a href="" class="location">
                                <img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/location-2.svg'))); ?>">
                                <span>Bandung</span>
                            </a>
                            <a href="" class="email">
                                <img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/email-2.svg'))); ?>">
                                <span>me@enji.dev</span>
                            </a>
                        </div>
                        <div class="social-media">
                            <a href="" style="color: #7C3AED; border: 1px solid #7C3AED">
                                <img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/website-2.svg'))); ?>">
                                <span>enji.dev</span>
                            </a>
                            <a href="" style="color: #0A66C2; border: 1px solid #0A66C2">
                                <img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/linkedin-2.svg'))); ?>">
                                <span>enji.dev</span>
                            </a>
                            <a href="" style="color:  #F24E1E; border: 1px solid  #F24E1E">
                                <img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/facebook-2.svg'))); ?>">
                                <span>enji.dev</span>
                            </a>
                            <a href="" style="color: #222222; border: 1px solid #222222">
                                <img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/github-2.svg'))); ?>">
                                <span>enji.dev</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="content">
                    <table class="skill-table">
                        <tr>
                            <td>Education</td>
                            <td>
                                <div class="education-table">
                                    <div class="table">
                                        <div class="table-row">
                                            <div class="table-cell left title">
                                                <span>SSC</span>
                                                <span> — Secondary</span>
                                            </div>
                                            <div class="table-cell date">
                                                <img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/calendar-2.svg'))); ?>">
                                                <span>2018 - 2020</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="education-table">
                                    <div class="table">
                                        <div class="table-row">
                                            <div class="table-cell left title">
                                                <span>HSC</span>
                                                <span> — Higher Secondary</span>
                                            </div>
                                            <div class="table-cell date">
                                                <img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/calendar-2.svg'))); ?>">
                                                <span>2020 - 2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="education-table">
                                    <div class="table">
                                        <div class="table-row">
                                            <div class="table-cell left title">
                                                <span>Honor's</span>
                                                <span> — LLB</span>
                                            </div>
                                            <div class="table-cell date">
                                                <img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/calendar-2.svg'))); ?>">
                                                <span>2022 - present</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Experience</td>
                            <td>
                                <div>
                                    <div class="education-table">
                                        <div class="table">
                                            <div class="table-row">
                                                <div class="table-cell left title">
                                                    <span>Google</span>
                                                    <span> — Software Engineer</span>
                                                </div>
                                                <div class="table-cell date">
                                                    <img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/calendar-2.svg'))); ?>">
                                                    <span>2023 - present</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="desc">Vivamus a massa tincidunt, lacinia mi sed, condimentum magna.
                                        Aliquam varius, nisi tristique vulputate feugiat, ante massa pretium est, at finibus
                                        lacus velit eu lacus. Ut molestie venenatis odio eget efficitur.</p>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Featured Project</td>
                            <td>
                                <div>
                                    <h2 class="title">Project Name</h2>
                                    <p class="desc">Project Description Lorem ipsum dolor sit amet consectetur adipisicing
                                        elit. Cum, amet.</p>
                                    <a href="#" class="link">
                                        <img src="data:image/svg+xml;base64,<?php echo base64_encode(file_get_contents(base_path('public/frontend/assets/pdf/link-2.svg'))); ?>">
                                        <span>Project Link</span>
                                        <span class="underscore"></span>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>Skills & Tools</td>
                            <td>
                                <div class="skill-lists">
                                    <h2 class="title">Skill</h2>
                                    <div>
                                        <span class="list-item">React</span>
                                        <span class="list-item">Next.js</span>
                                        <span class="list-item">Framer</span>
                                    </div>
                                </div>
                                <div class="skill-lists">
                                    <h2 class="title">Languages</h2>
                                    <div>
                                        <span class="list-item">React</span>
                                        <span class="list-item">Next.js</span>
                                        <span class="list-item">Framer</span>
                                    </div>
                                </div>
                                <div class="skill-lists">
                                    <h2 class="title">Tools & Software</h2>
                                    <div>
                                        <span class="list-item">Backbone.js</span>
                                        <span class="list-item">Marionette.js</span>
                                        <span class="list-item">WordPress</span>
                                    </div>
                                </div>
                                <div class="skill-lists">
                                    <h2 class="title"> Technologies</h2>
                                    <div>
                                        <span class="list-item">React</span>
                                        <span class="list-item">Next.js</span>
                                        <span class="list-item">Framer</span>
                                        <span class="list-item">Storybook</span>
                                        <span class="list-item">Framework7</span>
                                        <span class="list-item">Redux</span>
                                        <span class="list-item">Webpack</span>
                                        <span class="list-item">Gulp</span>
                                        <span class="list-item">Backbone.js</span>
                                        <span class="list-item">Marionette.js</span>
                                        <span class="list-item">WordPress</span>
                                    </div>
                                </div>

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
