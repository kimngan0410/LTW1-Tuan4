<?php
    if($_POST == NULL)
    {}
    else
    {
        echo "Name: ".$_POST['Name']."<br>";
        echo "E-mail: ".$_POST['Email']."<br>";
        echo "Website: ".$_POST['Website']."<br>";
        echo "Comment: ".$_POST['Comment']."<br>";
        echo "Gender: ".$_POST['check_box']."<br>";
    }
?>

