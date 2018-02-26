@extends('master')
@section('content')
        <div class="container">
            <div class="statistic  align-items-center bg-white has-shadow" id="event">
                <h3>Add A New event</h3>
                <form method="post" action="/event" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="formGroupExampleInput">Title</label>
                        <input class="form-control <?php if ($errors->has('title')){echo 'is-invalid';} ?>" type="text" name="title" value="{{old('title')}}" placeholder="title input">
                        <div class="invalid-feedback">
                            @foreach ($errors->get('title') as $message)
                                {{$message}}
                            @endforeach
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Date</label>
                        <input class="form-control <?php if ($errors->has('edate')){echo 'is-invalid';} ?>" name="edate" value="{{old('edate')}}" type="date">
                        <div class="invalid-feedback">
                            @foreach ($errors->get('edate') as $message)
                                {{$message}}
                            @endforeach
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Time</label>
                        <input class="form-control <?php if ($errors->has('time')){echo 'is-invalid';} ?>" type="time" name="time"value="{{old('time')}}" placeholder="title input">
                        <div class="invalid-feedback">
                            @foreach ($errors->get('time') as $message)
                                {{$message}}
                            @endforeach
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">description</label>
                        <textarea class="form-control <?php if ($errors->has('desc')){echo 'is-invalid';} ?>" name="desc" value="{{old('desc')}}" id="exampleFormControlTextarea1" rows="3"></textarea>
                        <div class="invalid-feedback">
                            @foreach ($errors->get('desc') as $message)
                                {{$message}}
                            @endforeach
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Event picture</label>
                        <input type="file" accept="image/*" class="form-control-file <?php if ($errors->has('url')){echo 'is-invalid';} ?>" name="url" id="exampleFormControlFile1" required>
                        <div class="invalid-feedback">
                            @foreach ($errors->get('url') as $message)
                                {{$message}}
                            @endforeach
                        </div>
                    </div>
                    <button type="submit" id="spt" class="btn btn-primary">Add</button>
                </form>
            </div>


            </div>



@stop