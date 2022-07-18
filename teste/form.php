<?php
function form_open_widget($action="", $method="post", $fileUpload=false, $attributes=array()){
    $o = "<form ";
    $o .= "action='".$action."' ";
    $o .= "method='".$method."' ";
    if($fileUpload){
        $o .= "enctype='multipart/form-data' ";
    }
    if(!empty($attributes)){
        foreach($attributes as $key =>$value){
            $o .= "$key='".$value."' ";
        }
    }
    $o .= '>';
    echo $o;
}

function form_close_widget(){
    echo "</form>";
}

function form_input( $name="", $type="text", $value="", $attributes=array()){
    $o = "<input ";
    $o .= "name='".$name."' ";
    $o .= "type='".$type."' ";
    $o .= "value='".$value."' ";
    if(!empty($attributes)){
        foreach($attributes as $key =>$value){
            $o .= "$key='".$value."' ";
        }
    }
    $o .= '>';
    return $o;
}

function form_textarea( $name="", $text, $attributes=array()){
    $o = "<textarea ";
    $o .= "name='".$name."' ";
    if(!empty($attributes)){
        foreach($attributes as $key =>$value){
            $o .= "$key='".$value."' ";
        }
    }
    $o .= '>';
    $o .= $text;
    $o .= '</textarea>';
    return $o;
}

function form_list( $name="", $select, $data, $attributes=array()){
    $o = "<select ";
    $o .= "name='".$name."' ";
    if(!empty($attributes)){
        foreach($attributes as $key =>$value){
            $o .= "$key='".$value."' ";
        }
    }
    $o .= '>';
    foreach( $data as $item=>$value){
        if($select == $item){
            $o.='<option value="'.$item.'" selected="selected">'.$value.'</option>';
        }else{
            $o.='<option value="'.$item.'">'.$value.'</option>';
        }
    }
    $o.= '</select>';
    return $o;
}
