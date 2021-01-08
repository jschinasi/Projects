import java.util.Scanner;

/** Jake Schinasi
 * Lab5Problem6
 */
public class Lab5Problem6 {

    public static void main(final String[] args) {
        final Scanner input = new Scanner(System.in);
        double mean = 0;
        System.out.println("Enter the Number of Rows: ");
        final int rows = input.nextInt();

        System.out.println("Enter the Number of Columns: ");
        final int columns = input.nextInt();

        final double[][] matrix = new double[rows][columns];

        for (int i = 0; i < rows; i++) {
            for (int j = 0; j < columns; j++) {
                System.out.println("Enter a Number: ");
                final int num = input.nextInt();
                matrix[i][j] = num;
            }
        }

        for (int i = 0; i < rows; i++) {
            for (int j = 0; j < columns; j++) {
                if (j < columns - 1)
                    System.out.print(matrix[i][j] + " ");
                else
                    System.out.println(matrix[i][j]);
            }
        }

        System.out.println("Enter the Column You Want to Average: ");
        final int colNum = input.nextInt();
        mean = averageRow(matrix, colNum - 1);
        System.out.println("The Average is: " + mean);

    }

    public static double averageRow(final double[][] array, final int row) {
		double total = 0;
		double count = 0;
		double avg = 0;
		
		for (int i = 0; i < array[row].length; i++) {
			total = total + array[row][i];
			count++;
		}
		
		avg = total/count;
		return avg;
    }
}