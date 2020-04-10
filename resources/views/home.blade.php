@extends('layouts.app')

@section('content')
  
<div class="animated fadeIn">
    @include('coreui-templates::common.errors')
    <div class="row" style="margin:20px">
        <div class="col-sm-8">
            <div class="col-sm-12 col-xl-12">
                <div class="card">
                <div class="card-header"> 
                    <strong>My Profile</strong>

                @if ($count ==0)
                    <a class="btn btn-success" href="{{route('profiles.create')}}" style="float:right; font-family:Verdana, Geneva, Tahoma, sans-serif"> <i class="fa fa-plus"> Profile</i></a>
                @else
                  <a class="btn btn-success" href="{{ route('profiles.edit', [$profile->id]) }}" style="float:right; font-family:Verdana, Geneva, Tahoma, sans-serif"> <i class="fa fa-edit"> Edit Profile</i></a>
                @endif
                
                </div>
                
                
                
               {{-- body content comes here --}}

               @if ($count ==0)
               <div class="card-body">
                            <a class="btn btn-success" href="{{route('profiles.create')}}" style="float:right; font-family:Verdana, Geneva, Tahoma, sans-serif"> <i class="fa fa-plus"> Profile</i></a>
                 </div>
                @else
                <div class="card-body"> 
                           <strong>{{ $profile->title }} {{ $profile->first_name}} {{ $profile->last_name}}</strong>
                        <p>{{ $profile->career_description }}</p>
                        <p>{{ $profile->address }}</p>
                        <p>{{ $profile->email }}</p>
                        
                </div> 
                <div class="card-footer">
                        <i class="fa fa-calendar"></i> {{ $profile->date_of_birth->format('d-m-Y ') }} | <i class="fa fa-phone"></i> {{ $profile->phone_number }} 
                </div>           
                @endif   
            

                


                </div>
                </div>
                


            <div class="col-sm-12 col-xl-12">
                <div class="card">
                <div class="card-header">  Work Experience
                    <a class="btn btn-success" href="{{route('workExperiences.create')}}" 
                    style="float:right; font: sans-serif">
                     <i class="fa fa-plus"> Work Experience</i></a></div>
                <div class="card-body">
                   

                    @if ($cwork==0)
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">   <a class="btn btn-success" href="{{route('workExperiences.create')}}"> Add work Experiences</a> </h5>
                        </div>
                    @else
                         @foreach ($works as $work)
                         {{--  --}}
                        <a class="list-group-item list-group-item-action flex-column align-items-start" href="{{ route('workExperiences.edit', [$work->id]) }}">
                        <h5 class="mb-1">{{$work->job_title}} </h5>
                        <div class="d-flex w-100 justify-content-between">
                        
                        <p class="mb-1">{{$work->Name_of_employer}}</p><small class="text-muted">{{$work->year_in->format('d m Y ')}}-{{$work->year_out->format('d m Y ')}}</small>
                        </div>
                        <p class="mb-1">{{$work->job_description}}</p><small class="text-muted">Donec id elit non mi porta.</small>
                        
                        </a>
                    @endforeach
                    @endif

                   
                    
                
                </div>
                </div>
                </div>
                <div class="col-lg-12">
        <div class="card">
                <div class="card-header">  Education
                    <a class="btn btn-success" href="{{route('education.create')}}" 
                    style="float:right; font: sans-serif">
                     <i class="fa fa-plus"> Education</i></a></div>
                <div class="card-body">
                   

                    @if ($ceducate==0)
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">   <a class="btn btn-success" href="{{route('education.create')}}"> Add Education</a> </h5>
                        </div>
                    @else
                         @foreach ($educates as $educate)
                         {{--  --}}
                        <a class="list-group-item list-group-item-action flex-column align-items-start" href="{{ route('education.edit', [$educate->id]) }}">
                        <h5 class="mb-1">{{$educate->school_web}} </h5>
                        <div class="d-flex w-100 justify-content-between">
                            <p class="mb-1">{{$educate->school_name}}</p><small class="text-muted">{{$educate->year_in->format('d m Y ')}}-{{$educate->year_out->format('d m Y ')}}</small>
                        </div>
                            <p class="mb-1">{{$educate->degree_name}}</p>
                        </a>
                    @endforeach
                    @endif

                   
                    
                </div>
                </div>
                </div>
        </div>
           {{-- this is the second column --}}
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-plus-square-o fa-lg"></i>
                    <strong>Create Profile</strong>
                </div>
                <div class="card-body">

                </div>
            </div>
        </div>


        

</div>
</div>
@endsection
