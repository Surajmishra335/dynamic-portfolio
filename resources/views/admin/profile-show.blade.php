@extends('layouts.admin.admin')

@section('content')
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Profile Form</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Profile</a></li>
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
                <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">

                    @csrf
                    <div>
                        <input type="hidden", name="updateFlag" value="1">
                        <input type="hidden", name="profileId" value="{{$profile->id}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title" value="{{$profile->title}}">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" class="form-control" cols="30" rows="3">{{{$profile->description}}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="phone">phone</label>
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Title" value="{{$profile->phone}}">
                    </div>
                    <div class="form-group">
                        <label for="file"></label>
                        <input type="file" name="photo" class="form-control-file" id="photo" placeholder="" value="{{$profile->photo}}">
                    </div>
                    <div class="form-group">
                        <label for="education">education</label>
                        <input type="text" name="education" class="form-control" id="education" placeholder="Enter Title" value="{{$profile->education}}">
                    </div>
                    <div class="form-group">
                        <textarea name="carrer_summery" id="carrer_summery" class="form-control" cols="30" rows="3">{{$profile->carrer_summery}}</textarea>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit">Edit</button>
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