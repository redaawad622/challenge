<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=650">
    <title>Anther file</title>
    <link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/forms.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/form/blackStyle-them.css">
    <link href="../css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <style>
        @media print {
            .option-box,.pri,#printPage {
                display:none
            }

        }
    </style>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body style="padding-top: 70px">
<section class="option-box" style="top: 0">
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
    <i class="fa fa-gear fa-3x gear-ch" style="padding: 6px"></i>
</section>
<section class="pri">

    <form id="h" style="margin-bottom: 30px;" class="container" action="/searchAn" method="post">
        {{csrf_field()}}
        <div class="row">

            <div class="col-sm-2">

                <button style="float: left;position: relative;" type="submit" class="btn btn-primary">Get All</button>
            </div>

        </div>

    </form>

</section>


<section>

    <table class="table text-center table-striped ">
        @if(isset($reports))

            <thead class="tab">
            <tr>

                <th>date</th>
                <th colspan="">File</th>



            </tr>
            </thead>

            <tbody class=" table-nb table-bd">
            @foreach($reports as $i=>$report)
                <tr>

                    <td><?php echo date('Y-m-d',strtotime($report->created_at)); ?></td>


                    <td colspan="">

                        <div class="row">

                            <div class="col-sm-6">


                                <small style=" color: #90949c;"><?php $extin=explode('.',$report->url);echo $extin[1];?></small><br>

                                <a style="position: relative;" href="image/{{$report->url}}"><button class="btn-primary" style="background: #6495d7; ">Download</button></a>

                            </div>
                            <div class="col-sm-6">
                                <i class="fa <?php $extin=explode('.',$report->url);
                                if($extin[1]=='pdf' ||$extin[1]=='PDF'){echo' fa-file-pdf-o';}
                                elseif ($extin[1]=='doc' ||$extin[1]=='DOC'||$extin[1]=='DOCX'||$extin[1]=='docx'){echo' fa-file-word-o';}
                                elseif ($extin[1]=='xls' ||$extin[1]=='XLS'||$extin[1]=='XLSX'||$extin[1]=='xlsx'){echo' fa-file-excel-o';}
                                elseif ($extin[1]=='ppt' ||$extin[1]=='PPT'){echo' fa-file-powerpoint-o';}
                                else {echo ' fa-file-text-o';}
                                ?>" style="
                                          padding-top: 13px;
                                           font-size: 80px;

                                           position: relative;
                                           bottom: inherit;

                                  "></i>

                            </div>


                        </div>

                    </td>


                </tr>

            @endforeach

            </tbody>
        @else
            <div class="alert alert-warning" style="text-align: center;" role="alert">
                No Result
            </div>

        @endif
    </table>

</section>


<script src="{{asset('js/jquery-3.2.1.slim.min.js')}}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="{{asset('js/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src='{{asset('js/jquery-2.2.2.min.js')}}'></script>
<script src="{{asset('js/bootstrap.min.js')}}" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="../js/jquery.nicescroll.min.js"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script>
    new WOW().init();
</script>
<script  src="../js/myjs.js" type="text/javascript">  </script>

<script>

    $('#sear').click(function () {
        $('#h').slideToggle();
        $('#form-sear').slideToggle();

    });
    $('#sear-up').click(function () {
        $('#form-sear').slideToggle();
        $('#h').slideToggle();

    });
    $(document).ready(function () {
        $('.table-nh,.table-nb').fadeOut();
    });
    $('.tab').click(function () {
        $('.table-nh,.table-nb').slideToggle();
    });

    $("#printPage").click(function () {
        print()
    });


</script>
</body>
</html>