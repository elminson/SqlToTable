<?php

class sqltotable
    {
    function form($sql_insert=""){
        $pos = strpos(strtolower($sql_insert), "values");
        if($pos===false) return "Invalid query";
        $array_1=explode("VALUES", $sql_insert);
        if($array_1[0]=="") return "Invalid query";
        $array_2=explode("INTO ", $array_1[0]);
        $array_3=explode("(", $array_2[1]);
        $table  =$array_3[0];
        if($table==null) return "Invalid query";
        $array_3[1]=str_replace(")","",$array_3[1]);
        $array_4=explode(",", substr($array_3[1], 0, strlen($array_3[1]) - 2));
        $valuex="";
        
        foreach ($array_4 as $colunm)
            {
            $valuex.='<div class="form-group col-lg-4">';
            $valuex.='  <label for="'.$colunm.'">'.$colunm.':</label>'.$this->drop_down($colunm);
            $valuex.='</div>';
            }
            $valuex.='<input type="hidden" id="table" name="table" value="'.$table.'">';
        return $valuex;

    }
    function drop_down($id){
    $drop_down_values=array("TINYINT", "SMALLINT", "MEDIUMINT","INT","BIGINT","FLOAT","DOUBLE","REAL","DECIMAL","CHAR", "BINARY", "TEXT", "VARCHAR(255)", "TINYTEXT", "MEDIUMTEXT", "LONGTEXT","TINYBLOB", "BLOB", "MEDIUMBLOB", "LONGBLOB","DATETIME", "DATE", "TIMESTAMP", "YEAR","BOOLEAN");
    $data= "<select class=\"form-control\" name=\"$id\">"; 
    foreach ($drop_down_values as $key => $value) {
        $data.="<option value='" . $value . "'>" . $value . "</option>";
    }
    $data.="</select>";
    return $data;
    }
    function create($data)
        {

       // print_r($data);
        $table  =$data['table'];
        $sql="";
        unset($data['table']);
        foreach ($data as $key=>$value)
            {
            $sql.=" $key $value ,";
            }
        $sql=substr($sql, 0, strlen($sql) - 1);
        $query=" \n CREATE TABLE $table (";
        $query.="$sql );";
        return $query;
        }
    function create_backup($sql_insert)
        {
        $array_1=explode("VALUES", $sql_insert);
        $array_2=explode("INTO ", $array_1[0]);
        $array_3=explode("(", $array_2[1]);
        echo "Tabla name: " . $array_3[0];
        $table  =$array_3[0];
        if($table==null) return "Invalid query";
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