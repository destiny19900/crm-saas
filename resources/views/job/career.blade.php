@php
    $logo=\App\Models\Utility::get_file('uploads/logo/');
@endphp
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        {{ !empty($companySettings['header_text']) ? $companySettings['header_text']->value : config('app.name', 'Buildera ERP SaaS') }}
        - {{ __('Career') }}</title>

    <link rel="icon"
{{--          href="{{ asset(Storage::url('uploads/logo/')) . '/' . (isset($companySettings['company_favicon']) && !empty($companySettings['company_favicon']) ? $companySettings['company_favicon']->value : 'favicon.png') }}"--}}
{{--          type="image" sizes="16x16">--}}
            href="{{$logo . '/' . (isset($companySettings['company_favicon']) && !empty($companySettings['company_favicon']) ?
            $companySettings['company_favicon']->value : 'favicon.png') }}"
            type="image" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/site.css') }}" id="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
<header class="header header-transparent" id="header-main">

    <nav class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light bg-white" id="navbar-main">
        <div class="container px-lg-0">
            <a class="navbar-brand mr-lg-5" href="#">
{{--                <img class="hweb" alt="Image placeholder"--}}
{{--                     src="{{ asset(Storage::url('uploads/logo/')) . '/' . (isset($companySettings['company_logo']) && !empty($companySettings['company_logo']) ? $companySettings['company_logo']->value : 'logo-dark.png') }}"--}}
{{--                     id="navbar-logo" style="height: 50px;">--}}
                <img class="hweb" alt="Image placeholder"
                     src="{{ $logo . '/' . (isset($companySettings['company_logo']) && !empty($companySettings['company_logo']) ? $companySettings['company_logo']->value : 'logo-dark.png') }}"
                     id="navbar-logo" style="height: 50px;">
            </a>
            <button class="navbar-toggler pr-0" type="button" data-toggle="collapse"
                    data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false"
                    aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-main-collapse">

                <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                    <li class="nav-item">
                        <div class="dropdown global-icon" data-toggle="tooltip"
                             data-original-titla="{{ __('Choose Language') }}">
                            <a class="nav-link px-0" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" data-offset="0,10">
                                <i class="ti ti-globe-europe"></i>
                                <span class="d-none d-lg-inline-block">{{ \Str::upper($currantLang) }}</span>
                            </a>

                            <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                @foreach ($languages as $language)
                                    <a class="dropdown-item @if ($language == $currantLang) text-danger @endif"
                                       href="{{ route('career', [$id, $language]) }}">{{ \Str::upper($language) }}</a>
                                @endforeach
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

<div class="main-content">
    <!-- Header (v16) -->
    <section class="slice " data-offset-top="#header-main">
        <div class="container">
            <div class="row row-grid justify-content-center">
                <div class="col-lg-8 text-center">
                    <h6 class="text-sm text-uppercase ls-2 text-muted font-weight-700">{{ __('Careers') }}</h6>
                    <h2 class="h1">{{ __('Job openings') }}</h2>
                    <p class="lead lh-180">{{ __('Work there. Find the dream job you’ve always wanted..') }}</p>

                </div>
            </div>

        </div>
    </section>
    <!-- Table (v1) -->
    <section class="slice slice-lg bg-secondary">
        <span class="tongue tongue-top"><i class="ti ti-angle-up"></i></span>
        <div class="container">
            <div class="mb-4 text-center">
                <h3 class=" mt-3">{{ __('We help businesses grow') }}</h3>
                <div class="fluid-paragraph mt-3">
                    <p class="lead lh-180 ">
                        {{ __('Always looking for better ways to do things, innovate and help people achieve their goals.') }}
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="table-responsive-lg">
                        <table class="table table-hover table-scale--hover table-cards align-items-center">
                            <tbody>
                            @foreach ($jobs as $job)
                                <tr>
                                    <th scope="row">
                                        <div class="media align-items-center">
                                            <div>
                                                <span class="avatar bg-primary text-white mr-4"
                                                              title="{{ __('Job Position') }}">{{ $job->position }}</span>
                                            </div>
                                            <div class="media-body media-body-custom">
                                                <a href="{{ route('job.requirement', [$job->code, !empty($job) ? (!empty($job->createdBy->lang) ? $job->createdBy->lang : 'en') : 'en']) }}"
                                                   class="h6 mb-0">{{ $job->title }}</a>
                                            </div>
                                        </div>
                                    </th>
                                    <td>

                                        @foreach (explode(',', $job->skill) as $skill)
                                            <span class="badge bg-primary p-2 px-3 rounded text-white">{{ $skill }}</span>
                                        @endforeach
                                    </td>

                                    <td><i class="ti ti-map-pin mr-3"></i><span
                                            class="h6">{{!empty($job->branches)?$job->branches->name:'-'}}</span>
                                    </td>
                                </tr>
                                <tr class="table-divider"></tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </section>
</div>

<footer id="footer-main">
    <div class="footer-dark">

        <div class="container">
            <div class="row align-items-center justify-content-md-between py-4 mt-4 delimiter-top">
                <div class="col-md-6">
                    <div class="copyright text-sm font-weight-bold text-center text-md-left">
                        {{ !empty($companySettings['footer_text']) ? $companySettings['footer_text']->value : 'Buildera ERP SaaS' }}
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav justify-content-center justify-content-md-end mt-3 mt-md-0">
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <i class="ti ti-brand-dribbble"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <i class="ti ti-brand-instagram"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <i class="ti ti-brand-github"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <i class="ti ti-brand-facebook"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="{{ asset('js/site.core.js') }}"></script>
<script src="{{ asset('js/autosize/dist/autosize.min.js') }}"></script>
<script src="{{ asset('js/site.js') }}"></script>
<script src="{{ asset('js/demo.js') }} "></script>
</body>

</html>
