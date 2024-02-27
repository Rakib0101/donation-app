<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Classic Resume</title>
    <link rel="icon" type="image/png" sizes="32x32" href="{{ $setting->favicon_image_url }}">
    <link rel="stylesheet" href="{{ mix('frontend/vendor.min.css') }}">
    <link rel="stylesheet" href="{{ mix('frontend/app.min.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>

        .template-box {
            max-width: 1320px;
            margin: 0px auto;
            overflow: hidden;
            background: white;
        }

        .skill-table:not([cellpadding]) td,
        .projects-table:not([cellpadding]) td {
            padding: 0px;
        }

        .ll-title-bg {
            background-color: #FFEDCC !important;
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
            .ll-title-bg {
                background-color: #FFEDCC !important;
            }
            body{
                background: transparent !important;
            }
        }
    </style>

    <style>
        ul {
            list-style: none;
            padding: 0px;
            margin: 0px;
        }

        .template-box {}

        .resume-1-title {
            font-family: 'Inter';
            font-style: normal !important;
            font-weight: 700 !important;
            font-size: 32px !important;
            line-height: 40px !important;
            color: #18191C  !important;
            margin-top: 0px !important;
            margin-bottom: 4px !important;
        }

        .resume-position {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 32px;
            color: #18191C;
            margin-top: 0px;
            margin-bottom: 24px;
        }

        .resume-section {
            padding-bottom: 32px;
        }

        .resume-section-title {
            background-color: #FFEDCC;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 24px;
            line-height: 32px;
            color: #18191C;
            padding: 8px 16px;
            border-radius: 3px;
            margin-bottom: 16px;
        }

        .cta-info-table tr td img {
            display: inline-block;
            padding: 0px;
            max-width: 32px;
            max-height: 32px;
            object-fit: cover;
            vertical-align: middle;
        }

        .cta-info-table tr td a {
            text-decoration: none;
            display: inline-block;
            padding: 0px;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 32px;
            vertical-align: middle;
            padding-left: 8px;
            text-align: left;
        }

        .skill-table,
        .cta-info-table {
            width: 100%;
            margin-bottom: 32px;
        }

        .skill-table tr td {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 20px;
            line-height: 32px;
            color: #18191C;
            vertical-align: middle;
        }

        .skill-table tr td:first-child {
            width: 30% !important;
        }

        .cta-info-table tr td {
            width: 30%;
            vertical-align: top;
        }

        .sub-title {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 16px;
            line-height: 24px;
            color: #767F8C;
            margin-top: 0px;
            margin-bottom: 4px;
        }

        .title {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 600;
            font-size: 20px;
            line-height: 28px;
            color: #000000;
            margin-top: 0px;
            margin-bottom: 8px;
        }

        .desc {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            line-height: 24px;
            color: #000000;
            margin-top: 0px;
            margin-bottom: 8px;
        }

        .desc li:not(:last-child) {
            margin-bottom: 8px;
        }

        .hobbies-list li {
            display: inline-block;
            width: 25%;
            float: left;
            font-family: 'Inter';
            font-style: normal;
            font-weight: 500;
            font-size: 20px;
            line-height: 32px;
            color: #18191C;
        }

        .project-link {
            font-family: 'Inter';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 24px;
            text-decoration-line: underline;
            color: #0D2A92;
        }

        .inner-table tr td {
            width: auto;
        }

        @page {
            size: A3;
            margin: 56px;
        }
    </style>
</head>

<body class="tw-bg-[#E4E5E8]">
    <header class="tw-max-w-[1320px] tw-mx-auto">
        <div class="tw-py-4 tw-flex tw-justify-center">
            <a href="{{ route('website.home') }}" class="brand-logo">
                <img src="{{ $setting->dark_logo_url }}" alt="">
            </a>
        </div>
    </header>
    <main>
        <div class="template-bow-wrap tw-overflow-hidden">
            <div class="template-box !tw-bg-white tw-p-14 tw-min-w-[990px] tw-overflow-x-auto" id="download_section">
                <div class="template-box">
                    <div>
                        <h2 class="resume-1-title">Your Name</h2>
                        <h3 class="resume-position">Front-End Developer</h3>
                        <table class="cta-info-table">
                            <tr>
                                <td>
                                    <img src="{{ asset('pdf/phone.png') }}">
                                    <a href="#" style="color: #18191C;">+91 1234567890</a>
                                </td>
                                <td>
                                    <img src="{{ asset('pdf/email.png') }}">
                                    <a href="#" style="color: #18191C;">yourmailid@gmail.com</a>
                                </td>
                                <td>
                                    <img src="{{ asset('pdf/location.png') }}">
                                    <a href="#" style="color: #18191C;">city name, state, pincode</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img src="{{ asset('pdf/github.png') }}">
                                    <a href="#" style="color: #0D2A92; text-decoration: underline;">github_username</a>
                                </td>
                                <td>
                                    <img src="{{ asset('pdf/website.png') }}">
                                    <a href="#" style="color: #0D2A92; text-decoration: underline;">yourportfolio.com</a>
                                </td>
                                <td>
                                    <img src="{{ asset('pdf/linkedin.png') }}">
                                    <a href="#" style="color: #0D2A92; text-decoration: underline;">LinkedIn_username</a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="resume-section-title">Technical Skills</div>
                    <div>
                        <table class="skill-table ">
                            <tr>
                                <td>Skill</td>
                                <td>JHTML, CSS, React Js, Redux Toolkit, React Query, Next Js, PostgreSQL, MySQL, FireStore, MongoDB, C, C++, Java, Dart, PHP</td>
                            </tr>
                            <tr>
                                <td>Language</td>
                                <td>Bangla, English, Hindi</td>
                            </tr>
                            <tr>
                                <td>Tools</td>
                                <td>Figma, Gmetri, Vyond, Articulate 360, Photoshop, Lightroom</td>
                            </tr>
                        </table>
                    </div>
                    <div class="resume-section">
                        <div class="resume-section-title">Featured Project</div>
                        <div>
                            <p class="sub-title">Month Year - Month Year</p>
                            <h3 class="title">Software Engineer | <span>Your Company Name</span></h3>
                            <ul class="desc" style="list-style-type:disc; list-style-position: inside;">
                                <li>Designing and building UI and immersive AR/VR experiences.</li>
                                <li>Collaborating with cross-functional teams, including designers, developers,
                                    and project managers, to ensure the quality and success of projects.</li>
                                <li>Solving complex technical challenges and debugging issues to ensure smooth
                                    and seamless experiences for users.</li>
                            </ul>
                            <a href="#" class="project-link">Project Live Demo Link</a>
                        </div>
                    </div>
                    <div class="resume-section">
                        <div class="resume-section-title">Work Experience</div>
                        <div>
                            <ul>
                                <li>
                                    <p class="sub-title">
                                        <span>Jan 2021 to Mar 2023</span>
                                        <span>•</span>
                                        <span>Google LLC</span>
                                    </p>
                                    <h3 class="title">User Experience Design Team Manager</h3>
                                    <p class="desc">Vivamus a massa tincidunt, lacinia mi sed, condimentum magna.
                                        Aliquam varius, nisi tristique vulputate feugiat, ante massa pretium est, at finibus lacus
                                        velit eu lacus. Ut molestie venenatis odio eget efficitur. </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="resume-section">
                        <div class="resume-section-title">Education</div>
                        <div>
                            <ul>
                                <li>
                                    <p class="sub-title">
                                        <span>Jan 2021 to Mar 2023</span>
                                        <span>•</span>
                                        <span>Collage/University Name</span>
                                    </p>
                                    <h4 class="title">Degree Name</h4>
                                </li>
                                <li>
                                    <p class="sub-title">
                                        <span>Jan 2021 to Mar 2023</span>
                                        <span>•</span>
                                        <span>Collage/University Name</span>
                                    </p>
                                    <h3 class="title">Degree Name</h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="resume-section">
                        <div class="resume-section-title">Hobbies</div>
                        <ul class="hobbies-list">
                            <li> <span style="margin-right: 4px;">•</span> Photography</li>
                            <li> <span style="margin-right: 4px;">•</span> Videography </li>
                            <li> <span style="margin-right: 4px;">•</span> Painting</li>
                            <li> <span style="margin-right: 4px;">•</span> Travel</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="tw-max-w-[1190px] tw-mx-auto">
        <div class="tw-py-4 tw-flex tw-justify-center">
            <p class="tw-text-[#2F3338] tw-text-sm">
                &copy; {{ config('app.name') }} {{ date('Y') }} | {{ __('all_rights_reserved') }}
            </p>
        </div>
    </footer>

    <script src="https://unpkg.com/phosphor-icons"></script>
</body>

</html>
