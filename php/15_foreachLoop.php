<pre>

<?php   


$array = ['john doe','jack sparrow','mohan murliwala','girdhar gopal'];


foreach ($array as $name) {
    echo $name. "<br/>";

}


$names = array('Harshit' => "Kumar",'Arjun'=> 'Malviya','Govardhan'=>"Prajapati",'Rahul'=> "Soni");

foreach ($names as $name => $sirName) {
    echo $name." ". $sirName."<br/>";
}

$subjectMarks = array("Maths"=> "50","Chemistry"=> "49","Physics"=> "99","Hindi"=>"99.9","English"=>"92","Bio"=>"85");


foreach ($subjectMarks as $subject => $mark) {
    echo "Rohan achieved marks in ".$subject." ". $mark." ";
}



?>


</pre>