<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include('students.php');

        $students = array();

        $first = new students();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        $second = new students();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $students['a456'] = $second;

        //myself
        $third = new students();
        $third->surname = "Rattan";
        $third->first_name = "Ishpreet";
        $third->add_email('all', 'ishpreet_Rattan@hotmail.com');
        $third->add_grade(100);
        $third->add_grade(100);
        $students['a008'] = $third;

        ksort($students); // one of the many sort functions

        foreach ($students as $student) {
            echo $student->toString();
        }
        ?>




    </body>
</html>
