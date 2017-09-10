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
        // To include the Student Class file with all its variables and functions.
        include('Student.php');

        $students = array(); // An array of objects of Student class.
        // Adding the details for the first student
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        // Adding the details for the second student
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;

        // Adding the details for the third student
        $third = new Student();
        $third->surname = "Sharma";
        $third->first_name = "Harshita";
        $third->add_email('work', 'hsharma15@my.bcit.ca');
        $third->add_grade(90);
        $third->add_grade(93);
        $third->add_grade(96);
        $students['a242'] = $third;

        // Sorting the students array in key sequence.
        ksort($students);

        // Calling the toString method of Students class to print all the Student objects.
        foreach ($students as $student)
            echo $student->toString();
        ?>
    </body>
</html>
