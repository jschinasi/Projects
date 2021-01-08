import java.util.Scanner;

/** Jake Schinasi
 * Lab5Problem1
 */
public class Lab5Problem1 {

    public static void main(String[] args) {
		Scanner input = new Scanner(System.in);
		
		System.out.println("Enter 10 numbers: ");
		double[] list = new double[10];
		for (int i = 0; i < 10; i++)
			list[i] = input.nextDouble();
		
		double maximum = max(list);
		System.out.println(maximum);
	}

	private static double max(double[] array) {
		double newMax = Double.NEGATIVE_INFINITY;
		for (int i = 0; i < 10; i++) {
			if (array[i] >= newMax)
				newMax = array[i];
		}
		return newMax;
    }
}