@extends('layouts.admin.admin')

@section('content')
<div class="row pt-4">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Lets add some of youre projects</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">add project</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- ============================================================== -->
    <!-- validation form -->
    <!-- ============================================================== -->
    @if (session('success'))
    <div class="col-sm-12">
        <div class="alert  alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    @endif
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Fill The basic information about you</h5>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{route('experience.store')}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <label for="company_name">Name of the Company</label>
                        <input type="text" name="company_name" class="form-control" id="company_name" placeholder="Enter Company name">
                    </div>
                    <div class="form-group">
                        <label for="my_post">My Post on this company</label>
                        <input type="text" name="my_post" class="form-control" id="my_post" placeholder="Your Post in the company">
                    </div>
                    <div class="form-group">
                        <label for="description">Job Discription</label>
                        <textarea name="description" id="editor1" class="form-control" cols="30" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="join_date">Date</label>
                            <input class="form-control" type="date" value="2011-08-19" id="join_date" name="join_date">
                    </div>
                    <div class="form-group">
                        <label for="end_date">Date</label>
                            <input class="form-control" type="date" value="2011-08-19" id="end_date" name="end_date">
                    </div>
                    <div class="form-group">
                        <label for="tech_used">Skill Used ctrl + clicl for miltiple select</label>
                        <select multiple class="form-control" name="tech_used[]" id="sel2">
                            @foreach($skills as $skill)
                            <option>{{$skill->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>


                </form>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end validation form -->
    <!-- ============================================================== -->
</div>
@endsection