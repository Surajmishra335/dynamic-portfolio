@extends('layouts.front.front')

@section('header-intro')
<div class="header-intro theme-bg-primary text-white py-5">
    <div class="container position-relative">
        <h2 class="page-heading mb-2">Web App Development</h2>
        <div class="page-heading-tagline">Project tagline goes here lorem ipsum dolor sit amet.</div>
        <div class="page-heading-logo font-weight-bold position-absolute mt-4 mt-md-0"><img class="client-logo" src="{{asset('')}}user/assets/images/logos/logo-2-inverse.svg"></div>
    </div>
    <!--//container-->
</div>
<!--//header-intro-->
@endsection

@section('content')
<section class="project-wrapper single-col-max-width py-5 px-4 mx-auto">
    <div class="section-row">
        <div class="mb-5"><img class="img-fluid" src="{{asset('user/assets/images/projects/project-figure-main.jpg')}}" alt=""></div>
        <h3 class="section-title">Project Background</h3>

        <p>Project summary goes here. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, quis gravida magna mi a libero. Fusce vulputate eleifend sapien. Vestibulum purus quam, scelerisque ut, mollis sed, nonummy id, metus.</p>

        <div class="mb-5"><a class="btn btn-primary" href="https://themes.3rdwavemedia.com/" target="_blank"><i class="fas fa-external-link-alt mr-2"></i> View Live Site</a></div>


        <div class="alert alert-dark">
            This template <strong>includes the original Sketch source file</strong> for making the browser window in the carousel. The screenshots were taken from the <a href="https://themes.3rdwavemedia.com/bootstrap-templates/product/appify-bootstrap-4-admin-template-for-app-developers/" target="_blank">Bootstrap 4 admin template Appify</a>.
        </div>

        <div id="project-carousel" class="theme-carousel carousel slide mb-5" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#project-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#project-carousel" data-slide-to="1"></li>
                <li data-target="#project-carousel" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset('user/assets/images/projects/project-slide-1.png')}}" alt="">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('user/assets/images/projects/project-slide-2.png')}}" alt="">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{asset('user/assets/images/projects/project-slide-3.png')}}" alt="">
                </div>
            </div>

            <a class="carousel-control-prev" href="#project-carousel" role="button" data-slide="prev">
                <svg width="40px" height="40px" viewBox="0 0 150 258" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="arrow-left" fill="#FFFFFF" fill-rule="nonzero">
                            <path d="M4.1,120.5 L121.9,4.5 C126.6,-0.2 134.2,-0.2 138.9,4.5 L146,11.6 C150.7,16.3 150.7,23.9 146,28.6 L43.7,129 L145.9,229.4 C150.6,234.1 150.6,241.7 145.9,246.4 L138.8,253.5 C134.1,258.2 126.5,258.2 121.8,253.5 L4,137.5 C-0.6,132.8 -0.6,125.2 4.1,120.5 Z" id="Shape"></path>
                        </g>
                    </g>
                </svg>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#project-carousel" role="button" data-slide="next">
                <svg width="40px" height="40px" viewBox="0 0 150 258" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="arrow-right" fill="#FFFFFF" fill-rule="nonzero">
                            <path d="M145.9,137.5 L28.1,253.5 C23.4,258.2 15.8,258.2 11.1,253.5 L4,246.4 C-0.7,241.7 -0.7,234.1 4,229.4 L106.3,129 L4.1,28.6 C-0.6,23.9 -0.6,16.3 4.1,11.6 L11.2,4.5 C15.9,-0.2 23.5,-0.2 28.2,4.5 L146,120.5 C150.6,125.2 150.6,132.8 145.9,137.5 Z" id="Shape"></path>
                        </g>
                    </g>
                </svg>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--//theme-carousel-->


    </div>
    <!--//section-row-->


    <div class="section-row">
        <h3 class="section-title">Challenges &amp; Requirements</h3>
        <p>Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci. Phasellus consectetuer vestibulum elit. Aenean tellus metus, bibendum sed, posuere ac, mattis non, nunc. Vestibulum fringilla pede sit amet augue. In turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc, eu sollicitudin urna dolor sagittis lacus. </p>

        <ul class="mb-5 ml-md-5">
            <li class="mb-3">Lorem ipsum dolor sit amet consectetuer.</li>
            <li class="mb-3">Aenean commodo ligula eget dolor.</li>
            <li class="mb-3">Aenean massa cum sociis natoque penatibus.</li>
            <li>Pellentesque auctor neque nec urna.</li>
        </ul>

        <p>Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Nullam sagittis. Suspendisse pulvinar, augue ac venenatis condimentum, sem libero volutpat nibh, nec pellentesque velit pede quis nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce id purus. Ut varius tincidunt libero. Phasellus dolor. Maecenas vestibulum mollis diam. Pellentesque ut neque. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In dui magna, posuere eget, vestibulum et, tempor auctor, justo. In ac felis quis tortor malesuada pretium. Pellentesque auctor neque nec urna.</p>
        <div class="row">
            <div class="figure col-lg-4 mb-3"><a href="{{asset('user/assets/images/projects/project-figure-1.1.jpg')}}" data-toggle="lightbox" data-gallery="gallery"><img class="img-fluid" src="{{asset('user/assets/images/projects/project-figure-1.1.jpg')}}" alt=""></a></div>
            <div class="figure col-lg-4 mb-3"><a href="{{asset('user/assets/images/projects/project-figure-1.2.jpg')}}" data-toggle="lightbox" data-gallery="gallery"><img class="img-fluid" src="{{asset('user/assets/images/projects/project-figure-1.2.jpg')}}" alt=""></a></div>
            <div class="figure col-lg-4 mb-3"><a href="{{asset('user/assets/images/projects/project-figure-1.3.jpg')}}" data-toggle="lightbox" data-gallery="gallery"><img class="img-fluid" src="{{asset('user/assets/images/projects/project-figure-1.3.jpg')}}" alt=""></a></div>
        </div>
        <div class="row">
            <div class="figure col-lg-3 mb-3"><a href="{{asset('user/assets/images/projects/project-figure-2.1.png')}}" data-toggle="lightbox" data-gallery="gallery"><img class="img-fluid" src="{{asset('user/assets/images/projects/project-figure-2.1.png')}}" alt=""></a></div>
            <div class="figure col-lg-3 mb-3"><a href="{{asset('user/assets/images/projects/project-figure-2.2.png')}}" data-toggle="lightbox" data-gallery="gallery"><img class="img-fluid" src="{{asset('user/assets/images/projects/project-figure-2.2.png')}}" alt=""></a></div>
            <div class="figure col-lg-3 mb-3"><a href="{{asset('user/assets/images/projects/project-figure-2.3.png')}}" data-toggle="lightbox" data-gallery="gallery"><img class="img-fluid" src="{{asset('user/assets/images/projects/project-figure-2.3.png')}}" alt=""></a></div>
            <div class="figure col-lg-3 mb-3"><a href="{{asset('user/assets/images/projects/project-figure-2.4.png')}}" data-toggle="lightbox" data-gallery="gallery"><img class="img-fluid" src="{{asset('user/assets/images/projects/project-figure-2.4.png')}}" alt=""></a></div>
        </div>
    </div>
    <!--//section-row-->
    <div class="section-row">
        <h3 class="section-title">Actions &amp; Outcomes</h3>
        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
        <ul class="list-unstyled pl-4 mb-5 ml-md-5">
            <li class="mb-4"><i class="fas fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet consectetuer.</li>
            <li class="mb-4"><i class="fas fa-check text-primary mr-3"></i>Aenean commodo ligula eget dolor.</li>
            <li class="mb-4"><i class="fas fa-check text-primary mr-3"></i>Aenean massa cum sociis natoque penatibus.</li>
            <li class="mb-4"><i class="fas fa-check text-primary mr-3"></i>Pellentesque auctor neque nec urna.</li>
            <li class="mb-4"><i class="fas fa-check text-primary mr-3"></i>Aenean tellus metus, bibendum sed.</li>
        </ul>

        <p>Phasellus accumsan cursus velit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed aliquam, nisi quis porttitor congue, elit erat euismod orci, ac placerat dolor lectus quis orci.</p>

        <div class="testimonial bg-white my-5">
            <div class="position-relative p-5 shadow-sm">
                <blockquote class="blockquote pl-4">
                    <p class="mb-4">Steve is a great developer! Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto.</p>
                    <i class="quote-icon fas fa-quote-left fa-lg position-absolute text-primary"></i>
                    <footer class="blockquote-footer presudo-hidden">
                        <div class="media client-profile flex-column flex-md-row">
                            <img class="mr-md-3" src="{{asset('user/assets/images/clients/profile-2.jpg')}}" alt="">
                            <cite title="Source" class="quote-source d-inline-block font-style-normal pt-3">
                                <span class="d-block">Cheryl Bell</span>
                                <span class="d-block">Product Manager, Dropbox</span>
                                <span class="d-block position-absolute source-link"><i class="fab fa-linkedin fa-2x mr-1" data-fa-transform="down-3"></i> <a class="text-secondary" href="#" target="_blank">View on Linkedin <i class="fas fa-external-link-alt ml-1" data-fa-transform="up-1"></i></a></span>
                            </cite>
                        </div>
                        <!--//media-->
                    </footer>
                </blockquote>
            </div>
        </div>
        <!--//testimonial-->
    </div>
    <!--//section-row-->
    <div class="section-row">
        <h3 class="section-title">Technologies Used</h3>
        <p class="mb-4">This template <strong>includes majority of the web development icons</strong> you can use in your case studies. If you can't find the icon in the template package you can always download the ones you want from <a href="https://worldvectorlogo.com/" target="_blank">worldvectorlogo.com</a>. Below are some examples:</p>

        <div class="webdev-icons row mb-5 align-items-center">

            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/angular.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/react.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/nodejs.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/javascript.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/jquery-alt.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/html5.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/css3.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/sass.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/less.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/python.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/ruby.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/php.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/postgresql.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/mysql-alt.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/mongodb-alt.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/grunt.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/webpack.svg')}}"></div>
            <div class="webdev-icon col-4 col-md-2 mr-0 mb-4 px-4"><img class="img-fluid svg-ie-fix" src="{{asset('user/assets/images/webdev-icons/bootstrap4.svg')}}"></div>

        </div>

    </div>
    <!--//section-row-->

    <div class="section-row">
        <h3 class="section-title">Conclusions</h3>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. </p>
    </div>
    <!--//section-row-->

</section>
<!--//project-wrapper-->

<section class="section pt-5 related-projects-section bg-white">
    <div class="container">
        <h3 class="section-title font-weight-bold text-center mb-4">Other Project Case Studies</h3>
        <div class="project-cards row">

            <div class="col-12 col-lg-4">
                <div class="card rounded-0 border-0 shadow-sm mb-5 mb-lg-0">
                    <div class="card-img-container position-relative">
                        <img class="card-img-top rounded-0" src="{{asset('user/assets/images/projects/project-3-thumb.jpg')}}" alt="">
                        <div class="card-img-overlay overlay-logo text-center">
                            <div class="project-logo"><img class="img-fluid w-50" src="{{asset('user/assets/images/logos/logo-3-inverse.svg')}}"></div>
                        </div>
                        <a class="card-img-overlay overlay-content text-left p-lg-4" href="project.html">
                            <h5 class="card-title font-weight-bold">Client: Airbnb</h5>
                            <p class="card-text">Project summary goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel sapien quis nulla dictum euismod...</p>
                        </a>
                    </div>
                    <div class="card-body pb-0">
                        <h4 class="card-title text-truncate text-center mb-0"><a href="project.html">Mobile app development</a></h4>
                    </div>

                    <div class="card-footer border-0 text-center bg-white pb-4">
                        <ul class="list-inline mb-0 mx-auto">
                            <li class="list-inline-item"><span class="badge badge-secondary badge-pill">React</span></li>
                            <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Python</span></li>
                            <li class="list-inline-item"><span class="badge badge-secondary badge-pill">MySQL</span></li>
                            <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Webpack</span></li>
                        </ul>
                    </div>
                </div>
                <!--//card-->
            </div>
            <div class="col-12 col-lg-4">
                <div class="card rounded-0 border-0 shadow-sm mb-5">
                    <div class="card-img-container position-relative">
                        <img class="card-img-top rounded-0" src="{{asset('user/assets/images/projects/project-7-thumb.jpg')}}" alt="">
                        <div class="card-img-overlay overlay-logo text-center">
                            <div class="project-logo"><img class="img-fluid w-50" src="{{asset('user/assets/images/logos/logo-7-inverse.svg')}}"></div>
                        </div>
                        <a class="card-img-overlay overlay-content text-left p-lg-4" href="project.html">
                            <h5 class="card-title font-weight-bold">Client: Facebook</h5>
                            <p class="card-text">Project summary goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel sapien quis nulla dictum euismod...</p>
                        </a>
                    </div>
                    <div class="card-body pb-0">
                        <h4 class="card-title text-truncate text-center mb-0"><a href="project.html">Facebook Ads Manager</a></h4>
                    </div>

                    <div class="card-footer border-0 text-center bg-white pb-4">
                        <ul class="list-inline mb-0 mx-auto">
                            <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Angular</span></li>
                            <li class="list-inline-item"><span class="badge badge-secondary badge-pill">PHP</span></li>
                            <li class="list-inline-item"><span class="badge badge-secondary badge-pill">HTML/SaSS</span></li>
                        </ul>
                    </div>
                </div>
                <!--//card-->
            </div>
            <div class="col-12 col-lg-4">
                <div class="card rounded-0 border-0 shadow-sm mb-5">
                    <div class="card-img-container position-relative">
                        <img class="card-img-top rounded-0" src="{{asset('')}}user/assets/images/projects/project-9-thumb.jpg" alt="">
                        <div class="card-img-overlay overlay-logo text-center">
                            <div class="project-logo"><img class="img-fluid w-50" src="{{asset('user/assets/images/logos/logo-9-inverse.svg')}}"></div>
                        </div>
                        <a class="card-img-overlay overlay-content text-left p-lg-4" href="project.html">
                            <h5 class="card-title font-weight-bold">Client: Coinbase</h5>
                            <p class="card-text">Project summary goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel sapien quis nulla dictum euismod...</p>
                        </a>
                    </div>
                    <div class="card-body pb-0">
                        <h4 class="card-title text-truncate text-center mb-0"><a href="project.html">App Development</a></h4>
                    </div>

                    <div class="card-footer border-0 text-center bg-white pb-4">
                        <ul class="list-inline mb-0 mx-auto">
                            <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Angular</span></li>
                            <li class="list-inline-item"><span class="badge badge-secondary badge-pill">Python</span></li>
                            <li class="list-inline-item"><span class="badge badge-secondary badge-pill">HTML/SaSS</span></li>
                        </ul>
                    </div>
                </div>
                <!--//card-->
            </div>


        </div>
        <!--//row-->
    </div>
    <!--//container-->
</section>


@endsection