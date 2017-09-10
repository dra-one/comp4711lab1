<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author Harshita Sharma, A00954584.
 */
class Student {
    
    // Constructor for the Student Class.
    function _construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    /*
     *  Function to add an email.
     *  $which - the type of email to be added. For ex- work, home etc.
     *  $address - the actual email address to be added.
     */
    function add_email($which,$address){
        $this->emails[$which] = $address;
    }
    
    /*
     *  Function to add grades for a student.
     *  $grade - the grades a student got
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    /*
     * To calculate the average of the grades of the student.
     * returning the average of a student's grade
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count ($this->grades);
    }
    
    /*
     * Function to return the information of a student in a desired format.
     */
    function toString() {
        $result = 'Student Name: ';
        $result.= $this->first_name . ' ' . $this->surname;
        $result.= "\nAverage grades: " . $this->average() . "\n";
        $result.= "Contact Emails below:\n";
        foreach ($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}