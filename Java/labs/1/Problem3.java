import java.util.Scanner;

public class Problem3 {

    public static void main(final String[] args) {

       final double gramstoounce = 28.3495;

        // Create a scanner for user input
        
        Scanner input = new Scanner(System.in);
        
        // Prompt the user
        
        System.out.print("Enter a value for ounces:");
        
        // Read the value for the user
        
        double o = input.nextDouble();

        double grams = o * gramstoounce;

        System.out.println(o + " ounces is"+ grams + "grams");

    }

}
      