// Jake Schinasi Lab 2 Problem 4
import java.util.Scanner;

public class Lab2problem4 {
    public static void main(String[] args) {
        
        Scanner input = new Scanner(System.in);
        // Create scanner to get input
        char character1;
        char character2;
        
        // input of the first character
        
        System.out.print( " Enter the first character: " );
        character1 = input.next().charAt(0);
       
        // input of the second character
       
        System.out.print( " Enter the second character: " );
        character2 = input.next().charAt(0);

        int sum = character1 + character2;

        // Output of the sum of the two characters

        System.out.print("The sum is: " + sum);
        





        
    }

}