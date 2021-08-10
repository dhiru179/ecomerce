<?php

namespace App\Http\Controllers\PracticeProject;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChallengeController extends Controller
{

    public function phpChallenge()
    {

        function higherindex()
        {
            //input "Dhiraj" ->r18
            $alphabate = str_split('abcdefghijklmnopqrstuvwxyz');
            $getString = str_split(strtolower("DhiraJ")); // $request->input();
            return ["hi", sort($getString), max($getString), max($alphabate), ord(max($alphabate)) - 96];
        }

        function factorial($n)
        {

            if ($n == 1) {
                return 1;
            }
            return $n * factorial($n - 1);
        }


        function maxBinaryNumbers($n)
        {

            $str = "";
            $x = $n;
            while ($x > 0) {
                $str .= $x % 2;
                // echo $str."<br>".$x."<br>";
                $x = (int)($x - $x % 2) / 2;
            }
            return strlen(max(explode("0", (strrev($str)))));
        }

        function median()
        {
            $arr = [0, 1, 2, 4, 6, 5, 3];
            sort($arr); //sort array in $arr
            foreach ($arr as $key => $value) {
                echo $arr[$key];
            }
        }
        function pair()
        {
            $skillLevel = [3, 4, 5, 2, 1, 1];
            $minDiff = 3;
            $a = "";
            for ($i = 0; $i < count($skillLevel); $i++) {
                for ($x = 0; $x < count($skillLevel); $x++) {
                    if (abs(($skillLevel[$i] - $skillLevel[$x])) == $minDiff) {
                        $a .= abs((int)$skillLevel[$i] - $skillLevel[$x]);
                    } else {
                        echo "no pair";
                    }
                }
            }
            return strlen($a);
            // return $a;
        }

        function hourglass()
        {
            $arr = [
                [1, 2, 3, 0, 0],
                [0, 0, 0, 0, 0],
                [2, 1, 4, 0, 0],
                [0, 0, 0, 0, 0],
                [1, 1, 0, 1, 0]
            ];
            for ($col=0; $col <3 ; $col++) { 
                for ($row=0; $row <3 ; $row++) { 
                   $sum = ($arr[$col][$row]+$arr[$col][$row+1]+$arr[$col][$row+2]);
                   return $sum;
                }
            }
           
            // return $arr;
        }

        function stringOpration()
        {
            $str = "Using the Hello World guide, you’ll create a repository.";
            echo addcslashes($str,'a...d'),"<br>";
            print_r($str);

        }



        /*CALL FUNCTION HERE */
        // return [factorial(5),higherindex()];
        // echo "Factorial ".factorial(5);
        //  print_r(maxBinaryNumbers(6));
        // print_r(median());
        // echo pair();
        // print_r(hourglass());
        stringOpration();
    }
}
