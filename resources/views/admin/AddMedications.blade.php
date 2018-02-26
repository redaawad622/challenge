@extends('master')
@section('content')

    <div class="container">
        <!-- Add A New Medications form   -->
        <!-- Medication -->
        <div class="statistic  align-items-center bg-white has-shadow" id="med">
            <h3>Add A New Medications</h3>
            <form method="post" action="/medecin" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="formGroupExampleInput">Title</label>
                    <input class="form-control <?php if ($errors->has('MTitle')){echo 'is-invalid';} ?>" type="text" name="MTitle" value="{{old('MTitle')}}" placeholder="title input">
                    <div class="invalid-feedback">
                        @foreach ($errors->get('MTitle') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">description</label>
                    <textarea class="form-control <?php if ($errors->has('MDesc')){echo 'is-invalid';} ?>" name="MDesc" value="{{old('MDesc')}}" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <div class="invalid-feedback">
                        @foreach ($errors->get('MDesc') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Medication picture</label>
                    <input type="file" accept="image/*" class="form-control-file <?php if ($errors->has('MUrl')){echo 'is-invalid';} ?>" name="MUrl" id="exampleFormControlFile1" required>
                    <div class="invalid-feedback">
                        @foreach ($errors->get('MUrl') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>

        <!-- end  Medication -->
    </div>

@stop
