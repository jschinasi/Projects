// Jake Schinasi Project 2
// 5/11/2020

import java.util.Scanner;


public class PriorityPoints {
        int priorityPoints = 0;

    public void gpa(double GPA)
    {

    if (GPA > 4.0) {
      System.out.println("invalid, please try again");
    }
    else if (GPA >= 3.85) {
      System.out.println(12 +" points");
      priorityPoints += 12;
    }
    else if (GPA >= 3.60) {
      System.out.println(11 +" points");
      priorityPoints += 11;
    }
    else if (GPA >= 3.25) {
      System.out.println(10 +" points");
      priorityPoints += 10;
    }
    else if (GPA >= 3.00) {
      System.out.println(9 +" points");
      priorityPoints += 9;
    }
    else if (GPA >= 2.75) {
      System.out.println(7 +" points");
      priorityPoints += 7;
    }
    else if (GPA >= 2.50) {
      System.out.println(6 +" points");
      priorityPoints += 6;
    }
    else if (GPA >= 2.25) {
      System.out.println(5 +" points");
      priorityPoints += 5;
    }
    else if (GPA >= 2.00) {
      System.out.println(4 +" points");
      priorityPoints += 4;
    }
    else if (GPA >= .50) {
      System.out.println(1 +" point");
      priorityPoints += 1;
    }
    else if (GPA >= 0) {
      System.out.println(0 +" points");
      priorityPoints += 0;
    }
    else {
      System.out.println("invalid, please try again");
    }
    }
}
