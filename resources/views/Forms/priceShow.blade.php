<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1200">


    <title>Price Show</title>
    <link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/forms.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/form/blackStyle-them.css">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <style>
        .invalid-feedback
        {
            display: inline;
        }
    </style>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!--section setting option-->
    <section class="option-box">
        <div class="color-option">
            <h4>Color option</h4>
            <ul class="list-unstyled">
                <li style="background:#000" data-value="../css/form/blackStyle-them.css"></li>
                <li data-value="../css/form/pinkStyle-them.css"></li>
                <li data-value="../css/form/blueStyle-them.css"></li>
                <li data-value="../css/form/seaStyle-them.css"></li>
                <li data-value="../css/form/greenStyle-them.css"></li>
                <li data-value="../css/form/violetStyle-them.css"></li>
            </ul>

        </div>
        <i class="fa fa-gear fa-3x gear-ch"></i>
    </section>

    <section class="bod">
        <form action="/priceShow" method="post">
        {{csrf_field()}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2">
                        <img src="../image/LogoImageMasterPage.jpg">
                    </div>
                    <div class="col-md-10">
                        <h4 >الشركة المصرية الدولية للصناعات الدوائية (ايبكو) </h4>
                        <h4>القطاع التجاري-المكتب العلمي</h4>
                    </div>

                </div>

                <br>

                <div class="form-inline">
                    <div class="form-group">
                        <label class="bold p">التاريخ</label>
                        <input type="date" name="date" value="{{old('date')}}" class="form-control mx-sm-3   <?php if ($errors->has('date')) {echo 'is-invalid';} ?>">
                        <div style="padding-right: 40px;" class="invalid-feedback">
                            @foreach ($errors->get('date') as $message)
                                {{$message}}
                            @endforeach
                        </div>


                    </div>
                </div>
                <hr>

                <div class="row">
                    <div class="col-md-1">
                        <h4 class="center padding-lg"> م </h4>
                        <h4 class="center padding-md"> 1 </h4>                        
                    </div>
                    <div class="col-md-3">
                        <h4 class="center padding-lg">اسم الصنف</h4>

                        <div class="form-group">
                            <input type="text" name="categoryName" value="{{old('categoryName')}}" class="form-control  <?php if ($errors->has('categoryName')) {echo 'is-invalid';} ?>" required>
                            <div class="invalid-feedback">
                                @foreach ($errors->get('categoryName') as $message)
                                    {{$message}}
                                @endforeach
                            </div>

                        </div>
                    </div>

                    <div class="col-md-2">
                        <h4 class="center padding-lg"> مستحضر الشركة</h4>
                        <div class="form-group">
                            <input type="text" name="companyMedecin"value="{{old('companyMedecin')}}" class="form-control <?php if ($errors->has('companyMedecin')) {echo 'is-invalid';} ?>" required>
                            <div class="invalid-feedback">
                                @foreach ($errors->get('companyMedecin') as $message)
                                    {{$message}}
                                @endforeach
                            </div>

                        </div>
                    </div>

                    <div class="col-md-1">
                        <h4 class="center padding-lg">العبوة</h4>
                        <div class="form-group">
                            <input type="text" name="refill" value="{{old('refill')}}" class="form-control  <?php if ($errors->has('refill')) {echo 'is-invalid';} ?>" required>
                            <div class="invalid-feedback">
                                @foreach ($errors->get('refill') as $message)
                                    {{$message}}
                                @endforeach
                            </div>

                        </div>
                    </div>

                    <div class="col-md-1">
                        <h4 class="center padding-lg one">سعر الوحدة</h4>
                        <div class="form-group">
                            <input type="text" name="unitPrice" value="{{old('unitPrice')}}" class="form-control  <?php if ($errors->has('unitPrice')) {echo 'is-invalid';} ?>">
                            <div class="invalid-feedback">
                                @foreach ($errors->get('unitPrice') as $message)
                                    {{$message}}
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div class="col-md-1">
                        <h4 class="center padding-lg">الكمية</h4>
                        <div class="form-group">
                            <input type="text" name="" class="form-control  <?php if ($errors->has('quantity')) {echo 'is-invalid';} ?>">
                            <div class="invalid-feedback">
                                @foreach ($errors->get('quantity') as $message)
                                    {{$message}}
                                @endforeach
                            </div>

                        </div>
                    </div>
                    <div class="col-md-1">
                        <h4 class="center padding-lg total">اجمالي السعر</h4>
                        <div class="form-group">
                            <input type="text" name="total" value="{{old('total')}}" class="form-control  <?php if ($errors->has('total')) {echo 'is-invalid';} ?>" required>
                            <div class="invalid-feedback">
                                @foreach ($errors->get('total') as $message)
                                    {{$message}}
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col-md-2">
                        <h4 class="center padding-lg">ملاحظات</h4>
                        <div class="form-group">
                            <input type="text" name="" value="{{old('note')}}" class="form-control  <?php if ($errors->has('note')) {echo 'is-invalid';} ?>">
                            <div class="invalid-feedback">
                                @foreach ($errors->get('note') as $message)
                                    {{$message}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <hr>
                <h4 class="padding-r-md"> 1) الشركة هي المنتجة الوحيدة للأصناف داخل جمهورية مصر العربية </h4>
                <h4 class="padding-r-md"> 2) الشركة معفاة من الضريبة النسبية علي الصرفيات الحكومية طبقا لنص المادة 81 من قانون التمغة النسبية حيث ان الاسعار  جبرية</h4>
                <h4 class="padding-r-md"> 3) العرض ساري حتي شهر من تاريخه </h4>
                <h4 class="padding-r-md">4) التوريد خلال شهر من استلام أمر التوريد</h4>
                <hr>




            </div>
            <input type="submit"  class="btn btn-primary mr-3" value="ارسال">
        </form>
        <br>
        @if (!$errors->any())
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    <strong>{{ Session::get('type') }} </strong> {{ Session::get('message') }}
                </div>
            @endif
        @else
            <div class="alert alert-danger" role="alert">
                <strong> Warning! </strong> please Check the error and  try submitting again.
            </div>
        @endif

    </section>

    <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="{{asset('js/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src='{{asset('js/jquery-2.2.2.min.js')}}'></script>
    <script src="{{asset('js/bootstrap.min.js')}}" integrity="" crossorigin="anonymous"></script>
    <script src="../js/jquery.nicescroll.min.js"></script>
    <script  src="../js/myjs.js" type="text/javascript">  </script>

</body>

</html>