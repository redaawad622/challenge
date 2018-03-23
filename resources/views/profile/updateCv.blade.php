@extends('profile.profileLayout')
@section('profile')
    <!--form cv-->
    <section id="store-cv">
        <h2 style="text-align: center; font-family: 'Arimo', sans-serif;padding-top: 10px;">Update Your Cv </h2>

        <form class="container" id="perd" action="/profile/storeCv" method="post">
            {{csrf_field()}}
            <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}">

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label class="col-form-label"> Job Title</label>

                    <input type="text" name="job_title" value="{{old('job_title')}}" id="job_title" class="form-control"  placeholder="your job title" required>
                </div>

            </div>
            <h4>Personal Data</h4>
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label class="col-form-label">Email </label>

                    <input type="email" name="" value="{{old('pr_email')}}" id="pr_email" class="form-control"  placeholder="like example@gmail.com">
                </div>
                <div class="form-group col-md-6">
                    <label class="col-form-label"> Address </label>

                    <input type="text" name="pr_adress" value="{{old('pr_adress')}}" id="pr_adress" class="form-control"  placeholder="">
                </div>

                <div class="form-group col-md-6">
                    <label class="col-form-label">Contact number </label>

                    <input type="text" name="pr_contact" value="{{old('pr_contact')}}" id="pr_contact" class="form-control"  placeholder="">
                </div>
                <div class="form-group col-md-6">
                    <label class="col-form-label">Date of birth </label>

                    <input type="date" name="pr_date_birth" value="{{old('pr_date_birth')}}" id="pr_date_birth" class="form-control"  placeholder="other">
                </div>

                <div class="form-group col-md-6">
                    <label class="col-form-label">Marital Status </label>

                    <input type="text" name="pr_marital_status" value="{{old('pr_marital_status')}}" id="pr_marital_status" class="form-control"  placeholder="">
                </div>

                <div class="form-group col-md-6">
                    <label class="col-form-label">File Number </label>

                    <input type="text" name="pr_file_number" value="{{old('pr_file_number')}}" id="pr_file_number" class="form-control"  placeholder="">
                </div>


            </div>
            <hr>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Career Objective </label>
                <textarea class="form-control <?php if ($errors->has('summary')){echo 'is-invalid';} ?>" name="summary" id="summary" rows="4" placeholder="I aspire to work in the position of a sales specialist with a reputed organization doing business in ________________ [type of industry] where I can apply my knowledge in the field of sales and make best use of my marketing skills" required></textarea>


            </div>
            <button id="addprson" style="float: left;margin-bottom: 10px; position: relative;" type="submit" class="btn btn-primary">add</button><br><br>
            <div class="alert alert-success" style="display: none;" id="alert_person" role="alert">


            </div>
            <div class="alert alert-danger" style="display: none;" id="alert_person_f" role="alert">
                <ul style="list-style-type: none;">

                </ul>

            </div>
        </form>
        <form class="container" id="sandSkill" action="/profile/storeCv" method="post">
            {{csrf_field()}}
            <hr>
            <h4>Professional Skills</h4>
            <div id="allSkills">

                <div class="form-row" id="skillDiv">


                    <div class="form-group col-md-6">
                        <label class="col-form-label">name of skill </label>

                        <input id="sk_name" type="text" name="sk_name" value="{{old('sk_name')}}" class="form-control"  placeholder="like course" required>
                    </div>

                </div>


            </div>
            <button id="addSkill" style="float: left;margin-bottom: 10px; position: relative;" type="submit" class="btn btn-primary">add anther skill</button><br><br>
            <div class="alert alert-success" style="display: none;" id="alert_skill" role="alert">

            </div>
            <div class="alert alert-danger" style="display: none;" id="alert_skill_f" role="alert">
                <ul style="list-style-type: none;">

                </ul>

            </div>
        </form>
        <hr>
        <form class="container" id="sandExperience" action="/profile/storeCv" method="post">
            {{csrf_field()}}
            <h4>Work Experience and career pathway</h4>
            <div id="allSExperience">

                <div class="form-row" id="ExperienceDiv">


                    <div class="form-group col-md-6">
                        <label class="col-form-label">name of Experience </label>

                        <input type="text" name="ex_name" value="{{old('ex_name')}}" id="ex_name" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">From </label>

                        <input type="text" name="ex_place" value="{{old('ex_place')}}" id="ex_place" class="form-control" placeholder="place" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">start date </label>

                        <input type="date" name="ex_date" value="{{old('date')}}" id="ex_date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">end date </label>

                        <input type="date" name="ex_end" value="{{old('ex_end')}}"id="ex_end" class="form-control" required>
                    </div>

                </div>


            </div>
            <button id="addSExperience" style="float: left;margin-bottom: 10px; position: relative;" type="submit" class="btn btn-primary">add anther Experience</button><br><br>
            <div class="alert alert-success" style="display: none;" id="alert_Experience" role="alert">

            </div>
            <div class="alert alert-danger" style="display: none;" id="alert_Experience_f" role="alert">
                <ul style="list-style-type: none;">

                </ul>

            </div>
        </form>
        <hr>
        <form class="container" id="sendResponsibilities" action="/profile/storeCv" method="post">
            {{csrf_field()}}
            <h4>Responsibilities</h4>
            <div id="allResponsibilities">

                <div class="form-row" id="ResponsibilitiesDiv">


                    <div class="form-group col-md-12">
                        <label class="col-form-label">Responsibilities </label>

                        <input type="text" name="respons" value="{{old('respons')}}"id="respons" class="form-control"  placeholder="Example:Trained 3 interns on customer service and office procedures" required>
                    </div>

                </div>


            </div>
            <button id="addResponsibilities" style="float: left;margin-bottom: 10px; position: relative;" type="submit" class="btn btn-primary">add anther Responsibilities</button><br><br>
            <div class="alert alert-success" style="display: none;" id="alert_Responsibilities" role="alert">

            </div>
            <div class="alert alert-danger" style="display: none;" id="alert_Responsibilities_f" role="alert">
                <ul style="list-style-type: none;">

                </ul>

            </div>
        </form>
        <hr>

        <form class="container" id="sandEducation" action="/profile/storeCv" method="post">
            {{csrf_field()}}

            <h4>Educational QUALIFICATIONS and courses</h4>
            <div id="allEducation">

                <div class="form-row" id="EducationDiv">


                    <div class="form-group col-md-6">
                        <label class="col-form-label">Course name of certificate name  </label>

                        <input type="text" class="form-control" name="ed_name" value="{{old('ed_name')}}"id="ed_name"  placeholder="Example:start  University of Mansoura at Computer & Information (IT)" required>

                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">The center name  </label>

                        <input type="text" name="ed_place"value="{{old('ed_place')}}" id="ed_place" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">start date </label>

                        <input type="date" name="ed_date" value="{{old('ed_date')}}"id="ed_date" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-form-label">end date </label>

                        <input type="date" name="ed_end"value="{{old('ed_end')}}" id="ed_end" class="form-control" required>
                    </div>

                </div>


            </div>
            <button id="addEducation" style="float: left;margin-bottom: 10px; position: relative;" type="submit" class="btn btn-primary">add anther Education</button><br><br>
            <div class="alert alert-success" style="display: none;" id="alert_Education" role="alert">

            </div>
            <div class="alert alert-danger" style="display: none;" id="alert_Education_f" role="alert">
                <ul style="list-style-type: none;">

                </ul>

            </div>
        </form>
        <hr>


    </section>

    <!--cv-->
@endsection
@push('styles')
    <link href="{{asset('css/profile.css')}}" rel="stylesheet">

@endpush
@push('scripts')
    <script>
        $(document).ready(function () {

            $('#perd').on('submit',function(e){
                $('#alert_person').hide();
                $('#alert_person_f').hide();

                e.preventDefault(e);



                var job_title = $('#job_title').val();
                var pr_email = $('#pr_email').val();
                var pr_adress = $('#pr_adress').val();
                var pr_contact = $('#pr_contact').val();
                var pr_date_birth = $('#pr_date_birth').val();
                var pr_marital_status = $('#pr_marital_status').val();
                var pr_file_number = $('#pr_file_number').val();
                var summary = $('#summary').val();
                var user_id = $('#user_id').val();

                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                    type:'POST',
                    url:'/profile/storeCv',

                    dataType:'json',
                    data: {job_title:job_title, pr_email:pr_email, pr_adress:pr_adress,pr_contact:pr_contact, pr_date_birth:pr_date_birth,  pr_marital_status:pr_marital_status, pr_file_number:pr_file_number, summary:summary,user_id:user_id},
                    success:function (data) {

                        if(data.success==true)
                        {
                            $('#alert_person').show();
                            $('#alert_person').html('success!');
                            $('#job_title').val('');
                            $('#pr_email').val('');
                            $('#pr_adress').val('');
                            $('#pr_contact').val('');
                            $('#pr_date_birth').val('');
                            $('#pr_marital_status').val('');
                            $('#pr_file_number').val('');
                            $('#summary').val('');
                            $('#user_id').val('');
                        }
                        if(!data.success)
                        {
                            $('#alert_person_f').find('li').hide();
                            $('#alert_person_f').show();

                            $.each(data.errors,function (index,error) {
                                $('#alert_person_f').find('ul').append('<li>'+error+'</li>');


                            });

                        }
                    }



                });


                return false;
            });

            $('#sandSkill').on('submit',function(e){
                $('#alert_skill').hide();
                $('#alert_skill_f').hide();

                e.preventDefault(e);



                var sk_name = $('#sk_name').val();

                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                    type:'POST',
                    url:'/profile/storeCv',

                    dataType:'json',
                    data: {sk_name:sk_name},
                    success:function (data) {

                        if(data.success==true)
                        {
                            $('#alert_skill').show();
                            $('#alert_skill').html('success!');
                            $('#sk_name').val('');

                        }
                        if(!data.success)
                        {
                            $('#alert_skill_f').find('li').hide();
                            $('#alert_skill_f').show();

                            $.each(data.errors,function (index,error) {
                                $('#alert_skill_f').find('ul').append('<li>'+error+'</li>');


                            });

                        }
                    }

                });
                return false;
            });

            $('#sandExperience').on('submit',function(e){
                $('#alert_Experience').hide();
                $('#alert_Experience_f').hide();

                e.preventDefault(e);



                var ex_name = $('#ex_name').val();
                var ex_date = $('#ex_date').val();
                var ex_end = $('#ex_end').val();
                var ex_place = $('#ex_place').val();

                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                    type:'POST',
                    url:'/profile/storeCv',

                    dataType:'json',
                    data: {ex_name:ex_name, ex_date:ex_date, ex_end:ex_end, ex_place:ex_place},

                    success:function (data) {

                        if(data.success==true)
                        {
                            $('#alert_Experience').show();
                            $('#alert_Experience').html('success!');
                            $('#ex_name').val('');
                            $('#ex_date').val('');
                            $('#ex_end').val('');
                            $('#ex_place').val('');

                        }
                        if(!data.success)
                        {
                            $('#alert_Experience_f').find('li').hide();
                            $('#alert_Experience_f').show();

                            $.each(data.errors,function (index,error) {
                                $('#alert_Experience_f').find('ul').append('<li>'+error+'</li>');


                            });

                        }
                    }
                });
                return false;
            });

            $('#sendResponsibilities').on('submit',function(e){
                $('#alert_Responsibilities').hide();
                $('#alert_Responsibilities_f').hide();

                e.preventDefault(e);



                var respons = $('#respons').val();


                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                    type:'POST',
                    url:'/profile/storeCv',

                    dataType:'json',
                    data: {respons:respons},

                    success:function (data) {

                        if(data.success==true)
                        {
                            $('#alert_Responsibilities').show();
                            $('#alert_Responsibilities').html('success!');
                            $('#respons').val('');
                        }
                        if(!data.success)
                        {
                            $('#alert_Responsibilities_f').find('li').hide();
                            $('#alert_Responsibilities_f').show();

                            $.each(data.errors,function (index,error) {
                                $('#alert_Responsibilities_f').find('ul').append('<li>'+error+'</li>');


                            });

                        }
                    }
                });
                return false;
            });

            $('#sandEducation').on('submit',function(e){
                $('#alert_Education').hide();
                $('#alert_Education_f').hide();

                e.preventDefault(e);



                var ed_name = $('#ed_name').val();
                var ed_date = $('#ed_date').val();
                var ed_end = $('#ed_end').val();
                var ed_place = $('#ed_place').val();

                $.ajax({
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },

                    type:'POST',
                    url:'/profile/storeCv',

                    dataType:'json',
                    data: {ed_name:ed_name, ed_date:ed_date, ed_end:ed_end, ed_place:ed_place},

                    success:function (data) {

                        if(data.success==true)
                        {
                            $('#alert_Education').show();
                            $('#alert_Education').html('success!');
                            $('#ed_name').val('');
                            $('#ed_date').val('');
                            $('#ed_end').val('');
                            $('#ed_place').val('');
                        }
                        if(!data.success)
                        {
                            $('#alert_Education_f').find('li').hide();
                            $('#alert_Education_f').show();

                            $.each(data.errors,function (index,error) {
                                $('#alert_Education_f').find('ul').append('<li>'+error+'</li>');


                            });

                        }
                    }
                });
                return false;
            });
        });


    </script>
@endpush