import java.util.Scanner;

public class TempConverter {

	public static void main(String[] args) {
		// Create a scanner for user input
		Scanner input = new Scanner(System.in);
		
		// Prompt the user
		System.out.print("Enter the value for the temperature in Fahrenheit:");
		// Read the value from the user
		double f = input.nextDouble();		
		
		double c = 5/9. * (f - 32);
		
		System.out.print("The temperature in Celsius is:" + c);
	}

}
