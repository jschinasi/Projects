// Jake Schinasi Lab2 problem1

import java.util.Scanner;
public class Lab2problem1 {
    public static void main(String[] args) 
    {
        // Create scanner to get user input
        Scanner input = new Scanner(System.in);
        int number1; // Number 1
        int number2; // Number 2

        System.out.print ( "Input first integer: " );
        number1 = input.nextInt(); // reads the first number

        System.out.print ( "Input second integer: " );
        number2 = input.nextInt(); // reads the second number 
         
        System.out.println( number1+" is LESS THAN " + number2 + "? " + (number1 < number2 ));
        System.out.println( number1+" is GREATER THAN " + number2 + "? " + (number1 > number2 ));  
        System.out.println( number1+" is LESS THAN or EQUAL TO " + number2 + "? " + (number1 <= number2 ));          
        System.out.println( number1+" is GREATER THAN or EQUAL TO " + number2 + "? " + (number1 >= number2 ));
        System.out.println( number1+" is LESS THAN or EQUAL TO " + number2 + "? " + (number1 <= number2 ));
        System.out.println( number1+" is EQUAL TO " + number2 + "? " + (number1 == number2 ));
        System.out.println( number1+" is NOT EQUAL TO " + number2 + "? " + (number1 != number2 ));
    }




}