@extends('layouts.admin.admin')

@section('content')
<div class="row pt-4">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Lets Add all the skills</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Admin</a></li>
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">All Skills</a></li>
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
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Frontend Skills</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table no-wrap p-table">
                            <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">Sl No</th>
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_skills as $skill)
                                @if ($skill->category_id == 1) <!-- Assuming 1 is the ID for Frontend Skills -->
                                    
                                <tr>
                                    <td>{{$skill->id}}</td>
                                    <td>{{$skill->name}}</td>
                                    <td>
                                        <a href="{{route('skill.delete', $skill->id)}}">
                                            <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-warning-light">
                                                <i class="fa fa-fw fa-trash"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endif    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Backend Skills</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table no-wrap p-table">
                            <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">Sl No</th>
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_skills as $skill)
                                @if ($skill->category_id == 2) <!-- Assuming 1 is the ID for Frontend Skills -->
                                    
                                <tr>
                                    <td>{{$skill->id}}</td>
                                    <td>{{$skill->name}}</td>
                                    <td>
                                        <a href="{{route('skill.delete', $skill->id)}}">
                                            <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-warning-light">
                                                <i class="fa fa-fw fa-trash"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endif    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Others Skills</h5>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table no-wrap p-table">
                            <thead class="bg-light">
                                <tr class="border-0">
                                    <th class="border-0">Sl No</th>
                                    <th class="border-0">Name</th>
                                    <th class="border-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($all_skills as $skill)
                                @if ($skill->category_id == 3) <!-- Assuming 1 is the ID for Frontend Skills -->
                                    
                                <tr>
                                    <td>{{$skill->id}}</td>
                                    <td>{{$skill->name}}</td>
                                    <td>
                                        <a href="{{route('skill.delete', $skill->id)}}">
                                            <span class="icon-circle-small icon-box-xs text-danger ml-4 bg-warning-light">
                                                <i class="fa fa-fw fa-trash"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                                @endif    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection