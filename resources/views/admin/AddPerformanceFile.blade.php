@extends('master')
@section('content')

    <div class="container">
        <!-- start Performance form -->

        <div class="statistic  align-items-center bg-white has-shadow">
            <h3>Performance</h3>
            <form method="post" action="/performance" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">performance date</label>
                    <input type="date" class="form-control <?php if ($errors->has('pdate')){echo 'is-invalid';} ?>" name="pdate" >
                    <div class="invalid-feedback">
                        @foreach ($errors->get('pdate') as $message)
                            {{$message}}
                        @endforeach
                    </div>

                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">performance file</label>
                    <input type="file" class="form-control-file <?php if ($errors->has('url')){echo 'is-invalid';} ?>" name="url" id="exampleFormControlFile1" required>
                    <div class="invalid-feedback">
                        @foreach ($errors->get('url') as $message)
                            {{$message}}
                        @endforeach
                    </div>

                </div>

                <label class="mr-sm-2" for="inlineFormCustomSelectPref">Member</label>

                <select name='select_name' class="custom-select mb-2 mr-sm-2 mb-sm-0 " id="inlineFormCustomSelectPref">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach

                </select>
                <br>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
            <br>

        </div>
        <!-- end Performance form -->


    </div>

@stop
