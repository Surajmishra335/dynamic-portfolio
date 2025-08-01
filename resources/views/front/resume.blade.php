@extends('layouts.front.front')

@section('header-intro')
<div class="header-intro header-intro-resume theme-bg-primary text-white py-5">
    <div class="container position-relative">
        <h2 class="page-heading mb-3">Resume</h2>
        <a class="btn theme-btn-on-bg download-resume position-absolute font-weight-bold mx-auto" href="{{route('resume-download')}}" target="_blank"><i class="fas fa-download mr-2"></i>Download PDF Version</a>
    </div>
    <!--//container-->
</div>
<!-- <p>{{$user->profile->phone}}</p> -->
<!--//header-intro-->
@endsection

@section('content')

<article class="resume-wrapper text-center position-relative">
    <div class="resume-wrapper-inner mx-auto text-left bg-white shadow-lg">
        <header class="resume-header pt-4 pt-md-0">
            <div class="media flex-column flex-md-row">
                <img class="mr-3 img-fluid picture mx-auto" src="{{$user->profile->photo}}" alt="">
                <div class="media-body p-4 d-flex flex-column flex-md-row mx-auto mx-lg-0">
                    <div class="primary-info">
                        <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">{{$user->name}}</h1>
                        <div class="title mb-3 text-capitalize ">{{$user->profile->title}}</div>
                        <ul class="list-unstyled">
                            <li class="mb-2"><a href="#"><i class="far fa-envelope fa-fw mr-2" data-fa-transform="grow-3"></i>{{$user->email}}</a></li>
                            <li><a href="#"><i class="fas fa-mobile-alt fa-fw mr-2" data-fa-transform="grow-6"></i>{{$user->profile->phone}}</a></li>
                        </ul>
                    </div>
                    <!--//primary-info-->
                    <div class="secondary-info ml-md-auto mt-2">
                        <ul class="resume-social list-unstyled">   
                            @if(!empty($social->linkedin))
                            <li class="mb-3"><a href="{{$social->linkedin}}"><span class="fa-container text-center mr-2"><i class="fab fa-linkedin-in fa-fw"></i></span>linkedin</a></li>
                            @endif
                            
                            @if(!empty($social->github))
                            <li class="mb-3"><a href="{{$social->github}}"><span class="fa-container text-center mr-2"><i class="fab fa-github-alt fa-fw"></i></span>Github</a></li>
                            @endif

                            @if(!empty($social->stackoverflow))
                            <li class="mb-3"><a href="{{$social->stackoverflow}}"><span class="fa-container text-center mr-2"><i class="fab fa-stack-overflow fa-fw"></i></span>Stackoverflow</a></li>
                            @endif

                            @if(!empty($social->angellist))
                            <li class="mb-3"><a href="{{$social->angellist}}"><span class="fa-container text-center mr-2"><i class="fab fa-angellist fa-fw"></i></span>Angellist</a></li>
                            @endif  
                        </ul>
                    </div>
                    <!--//secondary-info-->

                </div>
                <!--//media-body-->
            </div>
            <!--//media-->
        </header>

        <div class="resume-body p-5">
            <section class="resume-section summary-section mb-5">
                <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Career Summary</h2>
                <div class="resume-section-content">
                    @if(!empty($user->profile->carrer_summery))
                    <p class="mb-0">{{$user->profile->carrer_summery}}</p>
                    @endif
                </div>
            </section>
            <!--//summary-section-->
            <div class="row">
                <div class="col-lg-9">
                    <section class="resume-section experience-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Work Experience</h2>
                        <div class="resume-section-content">
                            <div class="resume-timeline position-relative">

                                @if($works->count() > 0)
                                @foreach($works as $company)
                                <article class="resume-timeline-item position-relative pb-5">

                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1 text-capitalize">{{$company->my_post}}</h3>
                                            <div class="resume-company-name ml-auto">{{$company->company_name}}</div>
                                        </div>
                                        <!--//row-->
                                        <div class="resume-position-time">{{$company->join_date}} - Present</div>
                                    </div>
                                    <!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc">
                                        <p>{{{$company->description}}}</p>

                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            @foreach(explode(',', $company->tech_used) as $skill)
                                            <li class="list-inline-item"><span class="badge badge-secondary badge-pill">{{$skill}}</span></li>
                                            @endforeach
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
                    <!--//experience-section-->

                    <!-- //Project section started -->
                    <section class="resume-section experience-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">My Projects</h2>
                        <div class="resume-section-content">
                            <div class="resume-timeline position-relative">

                                @if($projects->count() > 0)
                                @foreach($projects as $project)
                                <article class="resume-timeline-item position-relative pb-5">

                                    <div class="resume-timeline-item-header mb-2">
                                        <div class="d-flex flex-column flex-md-row">
                                            <h3 class="resume-position-title font-weight-bold mb-1 text-capitalize">{{$project->name}}</h3>
                                        </div>
                                        <!--//row-->
                                    </div>
                                    <!--//resume-timeline-item-header-->
                                    <div class="resume-timeline-item-desc">
                                        <p>{{{$project->description}}}</p>

                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Technologies used:</h4>
                                        <ul class="list-inline">
                                            @foreach(explode(',', $project->skills) as $skill)
                                            <li class="list-inline-item"><span class="badge badge-secondary badge-pill">{{$skill}}</span></li>
                                            @endforeach
                                        </ul>
                                        
                                        <h4 class="resume-timeline-item-desc-heading font-weight-bold">Project Links:</h4>
                                        <ul class="list-inline">
                                        @if(!empty($project->live))
                                            <a href="{{$project->live}}"><li class="list-inline-item"><span class="badge badge-secondary badge-pill">Live Demo</span></li></a>
                                        @endif  
                                        @if(!empty($project->github))
                                            <a href="{{$project->github}}"><li class="list-inline-item"><span class="badge badge-secondary badge-pill">Github</span></li></a>
                                        @endif  
                                        @if(!empty($project->youtube))
                                            <a href="{{$project->youtube}}"><li class="list-inline-item"><span class="badge badge-secondary badge-pill">Youtube</span></li></a>
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
                    <!-- //project section end -->
                </div>
                <div class="col-lg-3">
                    <section class="resume-section skills-section mb-5">
                        <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Skills &amp; Tools</h2>
                        <div class="resume-section-content">
                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold">Frontend</h4>
                                <ul class="list-unstyled mb-4">
                                    @foreach($frontends as $frontend)
                                    <li class="mb-2">
                                       <div class="resume-skill-name font-weight-bold"><i class="fas fa-check mr-2"></i>{{$frontend->name}}</div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--//resume-skill-item-->

                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold">Backend</h4>
                                <ul class="list-unstyled">
                                    @foreach($backends as $backend)
                                    <li class="mb-2">
                                       <div class="resume-skill-name font-weight-bold"><i class="fas fa-check mr-2"></i>{{$backend->name}}</div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <!--//resume-skill-item-->

                            <div class="resume-skill-item">
                                <h4 class="resume-skills-cat font-weight-bold">Others</h4>
                                <ul class="list-inline">
                                @foreach($others as $other)
                                    <li class="mb-2">
                                       <div class="resume-skill-name font-weight-bold"><i class="fas fa-check mr-2"></i>{{$other->name}}</div>
                                    </li>
                                @endforeach
                                </ul>
                            </div>
                            <!--//resume-skill-item-->
                        </div>
                        <!--resume-section-content-->
                    </section>
                   

                </div>
            </div>
            <!--//row-->
        </div>
        <!--//resume-body-->


    </div>
</article>
@endsection