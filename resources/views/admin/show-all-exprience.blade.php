@extends('layouts.admin.admin')

@section('content')
<div class="row pt-4">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Your Experice</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Experience</a></li>
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
    
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        @foreach ($experience as $key => $exp)
            <h2>company-name: {{$exp->company_name}}</h2>
            <h2>Post: {{$exp->my_post}}</h2>
            <p>Description : {!! $exp->description !!}</p>
            <p>join-date: {{$exp->join_date}}</p>
            <p>End-date: {{$exp->end_date}}</p>
            <p>Tech Used: {{$exp->tech_used}}</p>
            <br>
            <br>
            <form action="{{route('experience-edit')}}"  method="post" >
                <input type="hidden" value="{{$exp->id}}" name="expId">
                @csrf
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Edit This</button>
                </div>
            </form>
            <hr>
            <hr>
            <br>
            <br>
        @endforeach
        <div>
            
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end validation form -->
    <!-- ============================================================== -->
</div>
@endsection