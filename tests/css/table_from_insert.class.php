<?php

class table_from_insert
    {
    function create($sql_insert)
        {
        $array_1=explode("VALUES", $sql_insert);
        $array_2=explode("INTO ", $array_1[0]);
        $array_3=explode("(", $array_2[1]);
        echo "Tabla name: " . $array_3[0];
        $table  =$array_3[0];
        $array_4=explode(",", substr($array_3[1], 0, strlen($array_3[1]) - 2));
        echo "Fields: ";
        print_r ($array_4);

        foreach ($array_4 as $colunm)
            {
            $value.=" $colunm varchar(255) default NULL,";
            }

        $value=substr($value, 0, strlen($value) - 1);
        $query=" \n CREATE TABLE $table (";
        $query.="$value );";
        return $query;
        }
    }

?>
