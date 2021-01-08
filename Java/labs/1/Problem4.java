import java.util.Scanner;

public class Problem4 {

    public static void main(final String[] args) {
        
        final double c = 299972458;
        
        final double csquared = (c * c);

        // Create a scanner for user input
        Scanner input = new Scanner(System.in);
        
        // Prompt the user
        System.out.print("Enter a value for mass (in kilograms):");

        // Read the value from the user
        double mass = input.nextDouble();

        double energy = (mass * csquared);

        System.out.print("The energy is" + energy);

    }

}
      