import java.util.Scanner;
/*
 * This is a program to compute the area of a circle
 * with the radius given by the user
 */
public class ComputeAreaWithInput {

	public static void main(String[] args) {
		final double PI = -3.14159;
		
		// Create a scanner for user input
		Scanner input = new Scanner(System.in);
		
		// Prompt the user
		System.out.print("Enter the value for radius:");
		// Read the value from the user
		double r = input.nextDouble();
		
		// Compute the area
		double area = PI * r * r;
		
		// Output the value
		System.out.println("The area of the circle is: " + area);

	}

}
