@extends('master')
@section('content')

    <div class="container">
        <!-- Start private instruction form-->


        <div class="statistic  align-items-center bg-white has-shadow">
            <h3>private instruction</h3>
            <form method="post" action="/inst" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Message content</label>
                    <textarea class="form-control <?php if ($errors->has('body')){echo 'is-invalid';} ?>" name="body" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <div class="invalid-feedback">
                        @foreach ($errors->get('body') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Medication picture</label>
                    <input type="file" class="form-control-file <?php if ($errors->has('url')){echo 'is-invalid';} ?>" name="url" id="exampleFormControlFile1">
                    <div class="invalid-feedback">
                        @foreach ($errors->get('url') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>

                <label class="mr-sm-2" for="inlineFormCustomSelectPref">Member</label>

                <select name='select_name' class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelectPref">
                    @foreach($users as $user)
                        <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach

                </select>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <!-- end private instruction form-->
    </div>

@stop
