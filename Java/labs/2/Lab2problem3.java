// Jake Schinasi Lab2 Problem3
import java.util.Scanner;

public class Lab2problem3 {
    public static void main(String[] args) {
        // Create scanner to get input
        Scanner input = new Scanner(System.in);
        System.out.print( "Enter a low limit integer: " );

        int lowerbound = input.nextInt();

        System.out.print ("Enter an upper bound :"); 

        int upperbound = input.nextInt();

        int random = (int)(Math.random() * (upperbound - lowerbound )) + lowerbound;
        int random2 = (int)(Math.random() * (upperbound - lowerbound )) + lowerbound;
        int random3 = (int)(Math.random() * (upperbound - lowerbound )) + lowerbound;

        // Outputs the three random numbers between the upperbound and lowerbound
        System.out.println("Three random numbers between " + upperbound + " and " 
        + lowerbound + ":" + "  " + random + "  " + random2 + "  " + random3 );

        
    }

}

