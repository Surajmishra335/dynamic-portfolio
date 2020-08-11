@extends('layouts.front.front')

@section('header-intro')
<div class="header-intro theme-bg-primary text-white py-5">
    <div class="container">
        <h2 class="page-heading mb-3">Projects</h2>
        <div class="page-heading-tagline">In-depth Case Studies to show you what I can offer and how I work</div>

    </div>
    <!--//container-->
</div>
<!--//header-intro-->
@endsection

@section('content')

<section class="section pt-5">
    <div class="container">
        <div class="text-center">
            <ul id="filters" class="filters mb-5 mx-auto pl-0">
                <li class="type active" data-filter="*">All</li>
                <li class="type" data-filter=".angular">Angular</li>
                <li class="type" data-filter=".react">React</li>
                <li class="type" data-filter=".python-django">Python/Django</li>
                <li class="type" data-filter=".ruby-rails">Ruby/Rails</li>
                <li class="type" data-filter=".php">PHP</li>
            </ul>
            <!--//filters-->
        </div>

        <div class="project-cards row mb-5 isotope">
            @foreach($projects as $project)
            <!-- //TODO change class name according to technology -->
            <div class="isotope-item col-12 col-lg-4 angular python-django">
                <div class="card rounded-0 border-0 shadow-sm mb-5">
                    <div class="card-img-container position-relative">
                        <img class="card-img-top rounded-0" src="{{$project->photo}}" alt="">
                        <!-- //TODO add respective project link -->
                        <a class="card-img-overlay overlay-content text-left p-lg-4" href="project.html">
                            <h5 class="card-title font-weight-bold">{{$project->name}}</h5>
                            <p class="card-text">{{$project->description}}</p>
                        </a>
                    </div>
                    <div class="card-body pb-0">
                        <h4 class="card-title text-truncate text-center mb-0"><a href="project.html">{{$project->name}}</a></h4>
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
    </div>
    <!--//container-->
</section>
<!--//section-->
@endsection

@section('script')
<script type="text/javascript" src="{{asset('user/assets/plugins/imagesloaded.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('user/assets/plugins/isotope.pkgd.min.js')}}"></script>
<script type="text/javascript" src="{{asset('user/assets/js/isotope-custom.js')}}"></script>
@endsection