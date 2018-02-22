<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Cairo" rel="stylesheet">

    <title>Checks</title>

    <link href="../css/bootstrap.css" rel="stylesheet">

    <link href="../css/forms.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/form/blackStyle-them.css">

    <link href="../css/font-awesome.css" rel="stylesheet">
    <style>
        body{
            font-family: 'Cairo', sans-serif;
        }
        @media print {
            .option-box{
                display:none
            }
            input[type='date'], input[type='text']
            {
                border: none;
            }



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

            <div class="container">

                <div class="form-inline">
                    <div class="form-group">
                        <label class="bold p">التاريخ</label>
                        <input type="date" class="form-control mx-sm-3">

                    </div>
                </div>
                <hr>

                <h3 class="center">تفويض</h3>
                <p class="p">
                                    فوضت الشركة المصــرية الدولية للصنــاعات الدوائيــــة ( ايبيــــكو )

                </p>
                <div class="form-inline padding">
                    <div class="form-group">
                        <label class="bold " for="inputPassword6">السيد الدكتور</label>
                        <input type="text" id="inputPassword6" class="form-control mx-sm-3">
                        <label class="bold  padding-r" for="inputPassword6">رقم قومي</label>
                        <input type="text" id="inputPassword6" class="form-control mx-sm-3">

                    </div>
                </div>
                <p class="p">
                    في استــلام مستحقـات الشركة من القطـاع العام والخاص والجهـات الحكوميـة والمستشفيــات الجامعية

                </p>

                <div class="form-inline padding">
                    <div class="form-group">
                        <label class="bold " for="inputPassword6"> وذلك ابتداء من</label>
                        <input type="date" id="inputPassword6" class="form-control mx-sm-3">
                        <label class="bold  padding-r" for="inputPassword6"> الي</label>
                        <input type="date" id="inputPassword6" class="form-control mx-sm-3">

                    </div>
                </div>
                <p class="center p">وهذا تفــويض منا بذلك ،،</p>

                <br>

                <hr>

            </div>



    </section>

     <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="{{asset('js/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
      <script src='{{asset('js/jquery-2.2.2.min.js')}}'></script>
      <script src="{{asset('js/bootstrap.min.js')}}" integrity="" crossorigin="anonymous"></script>
    <script src="../js/jquery.nicescroll.min.js"></script>
    <script src="../js/myjs.js" type="text/javascript">
    </script>

</body>

</html>