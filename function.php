<?php
    function getGrade($marks)
    {
        if($marks>69)
        {
            echo "A+";
        }
        else if($marks>29)
        {
            echo "A";
        }
        else
        {
            echo "F";
        }
        return;
    }
    echo "The Grade is = ".getGrade(78);