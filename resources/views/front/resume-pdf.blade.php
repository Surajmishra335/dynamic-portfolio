@extends('layouts.front.resume-front')

@php use Carbon\Carbon; @endphp
@section('content')

<style>
    @page {
        margin: 0;
    }

    .mywrapper::after {
        content: "";
        display: table;
        clear: both;
    }

    .theLeft {
        width: 70%;
        float: left;
    }

    .theRight {
        width: 25%;
        float: right;
    }

    .timeline_parent {
        border-left: 2px solid #58677c;
    }

    .timeline_child {
        position: absolute;
        width: 16px;
        height: 16px;
        background: #F7F8FA;
        border-radius: 50%;
        border: 4px solid #333;
        margin-top: 10px;
        margin-left: -13px;
        z-index: 500;
    }

    .resume-body {
        padding: 50px 50px;
    }

    .text-align-justify {
        font-family: DejaVu Sans, sans-serif;
        text-align: justify;
        font-size: 18px;
        line-height: 1.3;
        color: #333333;

    }
</style>


{{-- header --}}
<table class="head">
    <tr>
        <td class="head-img">
            <img src="{{$user->profile->photo}}" alt="">
        </td>
        <td class="head-intro">
            <div class="primary-info">
                <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">{{$user->name}}</h1>
                <div class="title mb-3 text-capitalize" style="font-size: 24px">{{$user->profile->title}}</div>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="#">
                            <img src="assets/images/email.png" alt="email" style="width: 25px; height: 25px;" />
                            <span>{{ $user->email }}</span>
                        </a>

                    </li>
                    <li><a href="#"><img src="assets/images/phone.png" alt="email"
                                style="width: 25px; height: 25px;" />&nbsp;{{$user->profile->phone}}</a></li>
                </ul>
            </div>
        </td>
        <td class="head-social-links">
            <div class="secondary-info ml-md-auto mt-2">
                <ul class="resume-social list-unstyled">
                    @if(!empty($social->linkedin))
                    <li class="mb-3">
                        <a href="{{$social->linkedin}}">
                            <img src="assets/images/linkedin.png" alt="email"
                                style="width: 25px; height: 25px; padding: 13px 10px 0px 0px" />
                            Linkedin
                        </a>
                    </li>
                    @endif

                    @if(!empty($social->github))
                    <li class="mb-3"><a href="{{$social->github}}"><img src="assets/images/github.png" alt="email"
                                style="width: 25px; height: 25px; padding: 13px 10px 0px 0px" /> Github</a></li>
                    @endif

                    @if(!empty($social->stackoverflow))
                    <li class="mb-3"><a href="{{$social->stackoverflow}}">Stackoverflow</a></li>
                    @endif

                    @if(!empty($social->angellist))
                    <li class="mb-3"><a href="{{$social->angellist}}">Angellist</a></li>
                    @endif
                </ul>
            </div>
        </td>
    </tr>
</table>
<div class="resume-body">

    {{-- career summery --}}
    <section class="resume-section summary-section mb-5">
        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Career Summary</h2>
        <hr>
        <div class="resume-section-content">
            @if(!empty($user->profile->carrer_summery))
            <p class="mb-0 text-align-justify">{{trim($user->profile->carrer_summery)}}</p>
            @endif
        </div>
    </section>

    <section class="resume-section mywrapper experience-section mb-5">
        <table width="100%">
            <tr valign="top">
                <td width="70%">
                    <div class="work-experience ">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">WORK EXPERIENCE</h2>
                        <hr>
                        <div class="timeline_parent">
                            @foreach($works as $company)

                            <div class="timeline_child"></div>
                            <div style="padding-left: 30px;">

                                <table class="work-exp-single ">
                                    <tr>
                                        <td class="position" style="width: 40%;">
                                            <p class="font-weight-bold ">{{$company->my_post}}</p>
                                        </td>
                                        <td class="company-name" style="width: 60%">
                                            <p class="font-weight-bold">{{$company->company_name}}</p>
                                        </td>
                                    </tr>

                                </table>
                                <p class="join-date">{{$company->join_date}} - @if ($company->end_date != null)
                                    {{$company->end_date}}
                                    @else Present
                                    @endif</p>
                                <p class="pr1 text-align-justify">{!! $company->description !!}
                                </p>

                                <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                <ul class="list-inline">
                                    @foreach(explode(',', $company->tech_used) as $skill)
                                    <li class="list-inline-item"><span
                                            class="badge badge-secondary badge-pill">{{$skill}}</span>
                                    </li>
                                    @endforeach
                                </ul>
                                <br>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </td>
                <td width="5%"></td>
                <td width="25%" style="vertical-align: top">
                    <div class="skills">

                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">SKILLS</h2>
                        <hr>
                        <div class="resume-section-content">
                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold font-30">Frontend</h4>
                                <ul class="list-unstyled mb-4">
                                    @foreach($frontends as $frontend)
                                    <li class="mb-2">
                                        <div class="resume-skill-name font-20 fw-bold">
                                            <img src="assets/images/tick.png" alt="email"
                                                style="width: 13px; height: 13px; margin-top:10px; padding-right: 15px" />{{$frontend->name}}
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--//resume-skill-item-->

                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold font-30">Backend</h4>
                                <ul class="list-unstyled">
                                    @foreach($backends as $backend)
                                    <li class="mb-2">
                                        <div class="resume-skill-name font-20 fw-bold"><img src="assets/images/tick.png"
                                                alt="email"
                                                style="width: 13px; height: 13px; margin-top:10px; padding-right: 15px" />{{$backend->name}}
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--//resume-skill-item-->

                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold font-30">Others</h4>
                                <ul class="list-inline">
                                    @foreach($others as $other)
                                    <li class="mb-2">
                                        <div class="resume-skill-name font-20 fw-bold"><img src="assets/images/tick.png"
                                                alt="email"
                                                style="width: 13px; height: 13px; margin-top:10px; padding-right: 15px" />{{$other->name}}
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--//resume-skill-item-->
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </section>

    <section class="resume-section experience-section pt-5 mt-5 mb-5">
        <h1>MY PROJECTS</h1>
        <hr>
        <div class="resume-section-content">
            <div class="resume-timeline position-relative">

                @if($projects->count() > 0)
                @foreach($projects as $project)
                <article class=" position-relative pb-5">
                    <div class="timeline_child" style="margin-left: -35px; margin-top: 0px"></div>
                    <div class="resume-timeline-item-header mb-2">
                        <div class="d-flex flex-column flex-md-row">
                            <h3 class="resume-position-title font-weight-bold mb-1 text-capitalize">{{$project->name}}
                            </h3>
                        </div>
                        <!--//row-->
                    </div>
                    <!--//resume-timeline-item-header-->
                    <div class="">
                        <p>{!!$project->description!!}</p>

                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                        <ul class="list-inline">
                            @foreach(explode(',', $project->skills) as $skill)
                            <li class="list-inline-item"><span
                                    class="badge badge-secondary badge-pill">{{$skill}}</span>
                            </li>
                            @endforeach
                        </ul>

                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Project Links:</h4>
                        <ul class="list-inline">
                            @if(!empty($project->live))
                            <a href="{{$project->live}}">
                                <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Live
                                        Demo</span>
                                </li>
                            </a>
                            @endif
                            @if(!empty($project->github))
                            <a href="{{$project->github}}">
                                <li class="list-inline-item"><span
                                        class="badge badge-secondary badge-pill">Github</span>
                                </li>
                            </a>
                            @endif
                            @if(!empty($project->youtube))
                            <a href="{{$project->youtube}}">
                                <li class="list-inline-item"><span
                                        class="badge badge-secondary badge-pill">Youtube</span>
                                </li>
                            </a>
                            @endif
                        </ul>
                    </div>
                    <!--//resume-timeline-item-desc-->

                </article>
                @endforeach
                @endif

            </div>
            <!--//resume-timeline-->
        </div>
    </section>
</div>


@endsection