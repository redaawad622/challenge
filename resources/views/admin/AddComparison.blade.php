@extends('master')
@section('content')

    <div class="container">
        <!-- start Comparison of the sale by sector -->

        <div class="statistic  align-items-center bg-white has-shadow">
            <h3>Comparison of the sale by sector</h3>

            <form method="post" action="/Comparison" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleFormControlFile1">choose picture</label>
                    <input type="file" class="form-control-file  <?php if ($errors->has('url')){echo 'is-invalid';} ?>" name="url" id="exampleFormControlFile1" required>
                    <div class="invalid-feedback">
                        @foreach ($errors->get('url') as $message)
                            {{$message}}
                        @endforeach
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
            </form>

        </div>
        <!-- end Comparison of the sale by sector -->
    </div>

@stop
