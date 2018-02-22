<?php
namespace App\Helper;

class AppHelper
{
   public function dayInArbic($day)
    {
        switch ($day){
            case 'Saturday' :
                $result='السبت';
                break;
            case 'Sunday' :
                $result='الأحد';
                break;
            case 'Monday' :
                $result='الاثنين';
                break;
            case 'Tuesday' :
                $result='الثلاثاء';
                break;
            case 'Wednesday' :
                $result='الأربعاء';
                break;
            case 'Thursday' :
                $result='الخميس';
                break;
            case 'Friday' :
                $result='الجمعة';
                break;

        }
        return $result;

    }
 public function MonthInArabic($month)
    {
        $result='no';
        switch ($month){
            case '11' :
                $result='نوفمبر';
                break;
            case 'Sunday' :
                $result='الأحد';
                break;
            case 'Monday' :
                $result='الاثنين';
                break;
            case 'Tuesday' :
                $result='الثلاثاء';
                break;
            case 'Wednesday' :
                $result='الأربعاء';
                break;
            case 'Thursday' :
                $result='الخميس';
                break;
            case 'Friday' :
                $result='الجمعة';
                break;


        }
        return $result;

    }

    public static function instance()
    {
        return new AppHelper();
    }


}