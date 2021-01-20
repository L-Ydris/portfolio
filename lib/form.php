<?php
    function input($id){
        $value = isset($_POST[$id]) ? $_POST['id'] : '';
        return  "<input type='text' class ='form-control'  name ='username' id='$id' placeholder='Username'
         value='$value' >";
    }