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
                <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div class="form-group">
                        <label for="name">Name of the project</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="description">Project Description</label>
                        <textarea name="description" id="editor1" class="form-control" cols="30" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Skill Used ctrl + clicl for miltiple select</label>
                        <select multiple class="form-control" name="skills[]" id="sel2">
                            @foreach($skills as $skill)
                            <option>{{$skill->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="file">Photo of project</label>
                        <input type="file" name="photo" class="form-control-file" id="photo" placeholder="">
                    </div>
                    {{-- <div class="form-group">
                        <label for="challeng">Requirements</label>
                        <textarea name="challenges" id="editor2" class="form-control" cols="30" rows="3"></textarea>
                    </div> --}}
                    <div class="form-group">
                        <label for="github">Github</label>
                        <input type="text" name="github" class="form-control" id="github" placeholder="Enter Github Profile Url">
                    </div>
                    <div class="form-group">
                        <label for="live">Live Link</label>
                        <input type="text" name="live" class="form-control" id="live" placeholder="Enter Github Profile Url">
                    </div>
                    <div class="form-group">
                        <label for="youtube">Youtube Link</label>
                        <input type="text" name="youtube" class="form-control" id="youtube" placeholder="Enter Github Profile Url">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="feture">
                        <label class="form-check-label" for="feture" name="feture">Make This as a feture project</label>
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