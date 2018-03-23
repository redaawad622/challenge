@extends('profile.profileLayout')
@section('profile')

    <section id="cv">
        <div>
            <div class="row">


                <div class="col-sm-4">
                    <div class="pref">
                        <div class="content">
                            <div class="name">

                                <h1>{{Auth::user()->name}}</h1>
                                @foreach($cvs as $cv)
                                    @if(!empty($cv->job_title))
                                        <h2> {{$cv->job_title}}</h2>
                                    @endif
                                @endforeach
                            </div>

                        </div>
                        <div class="info">
                            <div class="info-h">
                                <h2>Personal Data</h2>

                            </div>
                            <div class="email">
                                <h4>E-mail</h4>
                                @foreach($cvs as $cv)
                                    @if(!empty($cv->pr_email))
                                        <p>{{$cv->pr_email}}</p>
                                    @endif
                                @endforeach
                                <h4>Adress</h4>
                                @foreach($cvs as $cv)
                                    @if(!empty($cv->pr_adress))
                                        <p>{{$cv->pr_adress}}</p>
                                    @endif
                                @endforeach

                                <h4>Contact</h4>
                                @foreach($cvs as $cv)
                                    @if(!empty($cv->pr_contact))
                                        <p>{{$cv->pr_contact}}</p>
                                    @endif
                                @endforeach

                                <h4>Date Of Birth</h4>
                                @foreach($cvs as $cv)
                                    @if(!empty($cv->pr_date_birth))
                                        <p>{{$cv->pr_date_birth}}</p>
                                    @endif
                                @endforeach
                                <h4>Marital Status</h4>
                                @foreach($cvs as $cv)
                                    @if(!empty($cv->pr_marital_status))
                                        <p>{{$cv->pr_marital_status}}</p>
                                    @endif
                                @endforeach
                                <h4>File Num</h4>
                                @foreach($cvs as $cv)
                                    @if(!empty($cv->pr_file_number))
                                        <p>{{$cv->pr_file_number}}</p>
                                    @endif
                                @endforeach

                            </div>

                        </div>


                        <div class="skill">

                            <div class="skill-h">
                                <h2>Professional Skills</h2>

                            </div>
                            <div class="skill-o">
                                @foreach($cvs as $i=>$cv)
                                    @if(!empty($cv->sk_name))
                                        <h4>{{$cv->sk_name}}</h4>

                                    @endif
                                @endforeach

                            </div>

                        </div>

                    </div>

                </div>
                <div class="col-sm-8">
                    <div class="content-2">
                        <div class="prg">
                            <h2> Career Objective</h2>

                            @foreach($cvs as $i=>$cv)
                                @if(!empty($cv->summary))

                                    <p class="p">
                                        {{$cv->summary}}

                                    </p>
                                @endif
                            @endforeach


                        </div>
                        <div class="prg">
                            <h2>
                                Work Experience and career pathway
                            </h2>
                        </div>
                        <div class="experience">
                            @foreach($cvs as $i=>$cv)
                                @if(!empty($cv->ex_name))
                                    <div class="expr">
                                    <span>
                                       from {{date('m-Y',strtotime($cv->ex_date))}}  &nbsp; &nbsp; &nbsp; &nbsp; to {{date('m-Y',strtotime($cv->ex_end))}}
                                    </span>
                                        <p class="p1">{{$cv->ex_name}} <br> from {{$cv->ex_place}} </p>

                                    </div>

                                @endif
                            @endforeach

                            <div class="expr-s">

                                <p style="font-weight: bold;">Responsibilities:</p>
                                <ul style="list-style-type: circle;">
                                    @foreach($cvs as $i=>$cv)
                                        @if(!empty($cv->respons))

                                            <li>{{$cv->respons}}</li>

                                        @endif
                                    @endforeach
                                </ul>

                            </div>
                        </div>


                        <div class="prg">
                            <h2>
                                Educational QUALIFICATIONS  And Courses
                            </h2>
                        </div>
                        <div class="education">
                            @foreach($cvs as $i=>$cv)
                                @if(!empty($cv->ed_name))
                                    <div class="expr">
                                    <span>
                                        from {{date('m-Y',strtotime($cv->ed_date))}} &nbsp; &nbsp; &nbsp; &nbsp; to {{date('m-Y',strtotime($cv->ed_end))}}
                                    </span>
                                        <p class="p1">{{$cv->ed_name}}<br> from {{$cv->ed_place}} </p>

                                    </div>

                                @endif
                            @endforeach


                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>

@endsection
@push('styles')
    <link rel="stylesheet" href="{{asset('css/cv.css')}}">

@endpush