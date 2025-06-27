@extends($layout)
@section('content')
{{--
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" />
--}}
<div class="container py-5" style="margin-top:55px">
    <div class="row justify-content-md-center">

        <div class="col-md-12">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="mb-0"><b>{{$jobs_details->option_name ?? 'N/A'}}</b></h3>
                            {{-- <p><strong><em>{{$jobs_details->company_name}}</em></strong></p> --}}
                            <div class="row">
                                <div class="col-md-4">
                                    <p class="mb-0"><i class="mr-3 fa fa-map-marker"
                                            aria-hidden="true"></i>{{$jobs_details->city_name ?? 'N/A'}},
                                        {{$jobs_details->state_name ?? 'N/A'}}</p>


                                    @auth
                                    <p class="mb-0"><i class="mr-2 fa fa-money"
                                            aria-hidden="true"></i>{{$jobs_details->salary_offer_currency}}
                                        {{$jobs_details->salary_offer}}</p>
                                    @endauth
                                    @guest
                                    <p class="my-0">
                                        <a href="/login"
                                            style="color: #E05024; text-decoration: none; display: flex; align-items: center;">
                                            <i class="material-icons"
                                                style="font-size: 32px; color: red; margin-right: 8px;">link</i>
                                            <strong>Login to view Salary</strong>
                                        </a>
                                    </p>

                                    @endguest

                                </div>
                                <div class="col-md-4">
                                    <p class="mb-0"><i class="mr-2 fa fa-phone" aria-hidden="true"></i>Phone:
                                        {{$jobs_details->telephone_number??'N/A'}}</p>
                                    <p class="mb-0"><i class="mr-2 fa fa-envelope-o"
                                            aria-hidden="true"></i>Email:{{$jobs_details->email??'N/A'}}</p>
                                </div>
                                <div class="col-md-4">
                                    Closing date
                                    <p class="mb-0 bg-light text-center rounded text-uppercase text-primary">
                                        {{$jobs_details->closing_date??'N/A'}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-body">
                    <div>
                        <h3><b>Job Vacancy Details</b></h3>
                        <!-- <h3><i class="fa fa-briefcase" aria-hidden="true"></i> Experience Required
                        </h3>
                        <p>{{$jobs_details->related_experience_year??'N/A'}} years</p> -->

                        <div class="row mb-3">
                            <div class="col-md-9">

                                <table class="table table-borderless table-sm">
                                    <tr>
                                        <th class="pl-0" width="25%">Experience Required</th>
                                        <td width="5%">:</td>
                                        <td width="70%">{{$jobs_details->related_experience_year??'N/A'}} years</td>
                                    </tr>
                                    <tr>
                                        <th class="pl-0" width="25%">Total Number of Vacancies</th>
                                        <td width="5%">:</td>
                                        <td width="70%">{{$jobs_details->total_number_of_vacancies??'N/A'}}</td>
                                    </tr>
                                    <tr>
                                        <th class="pl-0" width="25%">Job Vacancies Type</th>
                                        <td width="5%">:</td>
                                        <td width="70%">{{$jobs_details->job_vacancies_type??'N/A'}}</td>
                                    </tr>
                                    <tr>
                                        <th class="pl-0" width="25%">Age Eligibility</th>
                                        <td width="5%">:</td>
                                        <td width="70%">{{$jobs_details->age_eligibillity??'N/A'}}</td>
                                    </tr>
                                    <tr>
                                        <th class="pl-0" width="25%">Working Hour</th>
                                        <td width="5%">:</td>
                                        <td width="70%">{{$jobs_details->working_hours??'N/A'}}</td>
                                    </tr>
                                    <tr>
                                        <th class="pl-0" width="25%">Vacancies Description</th>
                                        <td width="5%">:</td>
                                        <td width="70%">{{$jobs_details->vacancies_description ?? 'N/A'}}</td>
                                    </tr>
                                    <tr>
                                        <th class="pl-0" width="25%">Scope Of Duties</th>
                                        <td width="5%">:</td>
                                        <td width="70%">{{$jobs_details->scope_of_duties ?? 'N/A'}}</td>
                                    </tr>
                                    <tr>
                                        <th class="pl-0" width="25%">Other Requirements</th>
                                        <td width="5%">:</td>
                                        <td width="70%">{{$jobs_details->other_requirements ?? 'N/A'}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h3><i class="fa fa-graduation-cap" aria-hidden="true"></i> Education
                        </h3>

                        <div class="row mb-3">
                            <div class="col-md-9">
                                <table class="table table-borderless table-sm">
                                    <tr>
                                        <th class="pl-0" width="25%">Minimum Academic Qualification</th>
                                        <td width="5%">:</td>
                                        <td width="70%">{{$jobs_details->minimum_academic_qualification ?? 'N/A'}}</td>
                                    </tr>
                                    <tr>
                                        <th class="pl-0" width="25%">Academic Field</th>
                                        <td width="5%">:</td>
                                        <td width="70%">{{$jobs_details->academic_field ?? 'N/A'}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="mt-5">
                        <h3><i class="fa fa-tasks" aria-hidden="true"></i> Skills Required
                        </h3>
                        <span
                            class="d-inline-block pl-2 pr-2 pt-1 pb-1 mr-2 mb-2 border border-secondary">{{$jobs_details->skills
                            ?? 'N/A'}}</span>
                    </div>
                    <div class="mt-5">
                        <h3><i class="fa fa-th-list" aria-hidden="true"></i> Other Skill</h3>
                        <span
                            class="d-inline-block pl-2 pr-2 pt-1 pb-1 mr-2 mb-2 border border-secondary">{{$jobs_details->other_skills
                            ?? 'N/A'}}</span>
                    </div>
                    <div class="mt-5">
                        <h3><i class="fa fa-bars" aria-hidden="true"></i> Facilities
                        </h3>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <p class="mb-0">Facilities</p>
                            </div>
                            <div class="col-md-9">
                                <p class="mb-0">{{$jobs_details->facilities ?? 'N/A'}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h3><i class="fa fa-bars" aria-hidden="true"></i> Other Facilities
                        </h3>
                        <div class="row mb-3">
                            <div class="col-md-3">
                                <p class="mb-0">Other Facilities</p>
                            </div>
                            <div class="col-md-9">
                                <p class="mb-0">{{$jobs_details->other_facilities ?? 'N/A'}}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @guest
    <!-- <a href="{{route('login')}}" style="background-color: #E05024 !important; border: none !important;" type="button" class="btn btn-primary">Apply Now</a> -->
    <p class="text-center"><a class="btn btn-success" href="{{route('login')}}">Apply Online</a></p>
    @endguest
    @auth
    @if(Auth::user()->hasRole('professional'))
    <!-- <a href="{{route('applyOnline',$jobs_details->job_id)}}" style="background-color: #E05024 !important; border: none !important;" type="button" class="btn btn-primary">Apply Now</a> -->
    <p class="text-center"><a class="btn btn-success" href="{{route('applyOnline',$jobs_details->job_id)}}">Apply
            Online</a></p>
    @endif
    @endauth

</div>


@endsection