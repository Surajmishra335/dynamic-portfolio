@extends('layouts.front.front')

@section('header-intro')
<div class="header-intro theme-bg-primary text-white py-5">
    <div class="container">
        <div class="profile-teaser media flex-column flex-md-row">
            <img class="profile-image mb-3 mb-md-0 mr-md-5 ml-md-0 rounded mx-auto" src="{{$profile->photo}}" alt=""><!-- //TODO add default image if used didn't upload anything -->
            <div class="media-body text-center text-md-left">
                <div class="lead">Hello, my name is</div>
                <h2 class="mt-0 display-4 font-weight-bold">{{$name->name}}</h2>
                <div class="bio mb-3">
                    {{$profile->description}}
                </div>
                <!--//bio-->
                <!-- //TODO need to make it functional -->
                <a class="theme-btn-on-bg btn font-weight-bold theme-btn-cta" href="contact.html">Hire Me</a>

            </div>
            <!--//media-body-->
        </div>
        <!--//profile-teaser-->

    </div>
    <!--//container-->
</div>
@endsection

@section('content')

<!-- skills section -->
<section class="skills-section section py-5">
    <div class="container">
        <h3 class="section-title font-weight-bold text-center mb-3">Skills Overview</h3>
        <!-- //TODO make it dynamimc -->
        <div class="section-intro mx-auto text-center mb-5 text-secondary">I have more than 8 years' experience building rich web applications for clients all over the world. Below is a quick overview of my main technical skill sets and tools I use. Want to find out more about my experience? <a href="resume.html">Check out my online resume</a>.</div>

        <div class="skills-blocks mx-auto pt-5">
            <div class="row">
                <div class="skills-block col-12 col-lg-4 mb-5 mb-3 mb-lg-0">
                    <div class="skills-block-inner bg-white shadow-sm py-4 px-5 position-relative">
                        <h4 class="skills-cat text-center mb-3 mt-5">Frontend</h4>
                        <div class="skills-icon-holder position-absolute d-inline-block rounded-circle text-center">
                            <img class="skills-icon" src="user/assets/images/frontend-icon.svg">
                        </div>
                        <ul class="skills-list list-unstyled text-secondary">
                            <!--  //TODO add if else condition if user didn't fill anytjing -->
                            @foreach($frontend as $skill)
                            <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>{{$skill->name}}</li>

                            @endforeach
                        </ul>
                    </div>
                    <!--//skills-block-inner-->
                </div>
                <!--//skills-block-->

                <div class="skills-block col-12 col-lg-4 mb-5 mb-3 mb-lg-0">
                    <div class="skills-block-inner bg-white shadow-sm py-4 px-5 position-relative">
                        <h4 class="skills-cat text-center mb-3 mt-5">Backend</h4>
                        <div class="skills-icon-holder position-absolute d-inline-block rounded-circle text-center">
                            <img class="skills-icon" src="user/assets/images/backend-icon.svg">
                        </div>
                        <ul class="skills-list list-unstyled text-secondary">
                            <!--  //TODO add if else condition if user didn't fill anytjing -->
                            @foreach($backend as $skill)
                            <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>{{$skill->name}}</li>

                            @endforeach
                        </ul>
                    </div>
                    <!--//skills-block-inner-->
                </div>
                <!--//skills-block-->

                <div class="skills-block col-12 col-lg-4">
                    <div class="skills-block-inner bg-white shadow-sm py-4 px-5 position-relative">
                        <h4 class="skills-cat text-center mb-3 mt-5">Others</h4>
                        <div class="skills-icon-holder position-absolute d-inline-block rounded-circle text-center">
                            <img class="skills-icon" src="user/assets/images/other-skills-icon.svg">
                        </div>
                        <ul class="skills-list list-unstyled text-secondary">
                            <!--  //TODO add if else condition if user didn't fill anytjing -->
                            @foreach($other as $skill)
                            <li class="mb-2"><i class="fas fa-check mr-2 text-primary"></i>{{$skill->name}}</li>

                            @endforeach
                        </ul>
                    </div>
                    <!--//skills-block-inner-->
                </div>
                <!--//skills-block-->

            </div>
            <!--//row-->
        </div>
    </div>
    <!--//container-->
</section>
<!--//skills-section-->


<section class="section-featured-projects py-5">
    <div class="container">
        <h3 class="section-title font-weight-bold text-center mb-5">Featured Projects</h3>

        <div class="project-cards row mb-5">
            @foreach($projects as $project)
            <div class="col-12 col-lg-4">
                <div class="card rounded-0 border-0 shadow-sm mb-5 mb-lg-0">
                    <div class="card-img-container position-relative">
                        <img class="card-img-top rounded-0" src="{{$project->photo}}" alt="">
                        <a class="card-img-overlay overlay-content text-left p-lg-4" href="project.html"><!-- //TODO link to full page project -->
                            <h5 class="card-title font-weight-bold">{{$project->name}}</h5>
                            <p class="card-text">{{$project->description}}</p>
                        </a>
                    </div>
                    <div class="card-body pb-0">
                        <h4 class="card-title text-truncate text-center mb-0"><a href="project.html" class="text-capitalize">{{$project->name}}</a></h4>
                    </div>

                    <div class="card-footer border-0 text-center bg-white pb-4">
                        <ul class="list-inline mb-0 mx-auto">
                            @foreach(explode(',', $project->skills) as $skill)
                            <li class="list-inline-item"><span class="badge badge-secondary badge-pill">{{$skill}}</span></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!--//card-->
            </div>
            @endforeach
        </div>
        <!--//row-->
        <div class="text-center">
            <a class="btn btn-primary" href="projects.html">View all projects</a><!-- //TODO link to project page -->
        </div>
    </div>
    <!--///container-->

</section>

@endsection