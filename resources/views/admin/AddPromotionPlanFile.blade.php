@extends('master')
@section('content')

    <div class="container">
        <!-- Start Promotion Plan form-->

        <div class="statistic  align-items-center bg-white has-shadow" id="promotion">
            <h3>Promotion Plan</h3> <i></i>

            <form method="post" action="/promotionPlan" enctype="multipart/form-data">

                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlFile1">Date</label>
                    <input type="date" class="form-control <?php if ($errors->has('date')){echo 'is-invalid';} ?>" name="date" value="{{old('date')}}" id="exampleFormControlFile1">
                    <div class="invalid-feedback">
                        @foreach ($errors->get('date') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">choose file</label>
                    <input type="file" class="form-control-file <?php if ($errors->has('url')){echo 'is-invalid';} ?>" name="url" id="exampleFormControlFile1" required>
                    <div class="invalid-feedback">
                        @foreach ($errors->get('url') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <!-- end Promotion Plan form-->
    </div>

@stop
