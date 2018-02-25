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
    public function human_filesize($size, $precision = 2) {
        $units = array('B','kB','MB','GB','TB','PB','EB','ZB','YB');
        $step = 1024;
        $i = 0;
        while (($size / $step) > 0.9) {
            $size = $size / $step;
            $i++;
        }
        return round($size, $precision).$units[$i];
    }



    function diff_time($start_time, $end_time, $std_format = false)
    {
        $total_time = $end_time - $start_time;
        $days       = floor($total_time /86400);
        $hours      = floor($total_time /3600);
        $minutes    = intval(($total_time/60) % 60);
        $seconds    = intval($total_time % 60);
        $results = "";
        if($std_format == false)
        {
            if($days > 0) $results .= $days . (($days > 1)?" days ":" day ");
            if($hours > 0) $results .= $hours . (($hours > 1)?" hours ":" hour ");
            if($minutes > 0) $results .= $minutes . (($minutes > 1)?" minutes ":" minute ");
            if($seconds > 0) $results .= $seconds . (($seconds > 1)?" seconds ":" second ");
        }
        else
        {
            if($days > 0) $results = $days . (($days > 1)?" days ":" day ");
            $results = sprintf("%s%02d:%02d:%02d",$results,$hours,$minutes,$seconds);
        }
        return $results;
    }



    public static function instance()
    {
        return new AppHelper();
    }




}