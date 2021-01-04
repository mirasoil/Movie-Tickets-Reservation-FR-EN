<?php
    if(isset($_POST['submit'])){
    if(!empty($_POST['movies'])) {
        $selected = $_POST['movies'];
        echo 'You have chosen: ' . $selected;
    } else {
        echo 'Please select the value.';
    }
    }
?>