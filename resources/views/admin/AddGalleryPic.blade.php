@extends('master')
@section('content')

    <div class="container">
        <!-- Add Gallery Picture form -->

        <div class="statistic  align-items-center bg-white has-shadow" id="gallery">
            <h3>Add Gallery Picture</h3>
            <form method="post" action="/img" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlFile1">choose picture</label>
                    <input type="file" class="form-control-file <?php if ($errors->has('MUrl')){echo 'is-invalid';} ?>" name="MUrl" id="exampleFormControlFile1" required>
                    <div class="invalid-feedback">
                        @foreach ($errors->get('MUrl') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
        <!--end  Add Gallery Picture form -->
    </div>

@stop
