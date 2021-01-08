import java.util.Scanner;

/**
 * Lab5Problem7
 */
public class Lab5Problem7 {

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
		
		boolean isIt = false;
		
		System.out.println("Enter the Number of Rows: ");
		int rows = input.nextInt();
		
		System.out.println("Enter the Number of Columns: ");
		int cols = input.nextInt();
		
		double[][] matrix = new double[rows][cols];
		
		for (int i = 0; i < rows; i++ ) {
			for ( int j = 0; j < cols; j++) {
				System.out.println("Enter a Number: ");
				int num = input.nextInt();
				matrix[i][j] = num;
			}
		}
		
		for (int i = 0; i < rows; i++ ) {
			for ( int j = 0; j < cols; j++) {
				if (j < cols - 1 )
					System.out.print(matrix[i][j] + " ");
				else 
					System.out.println(matrix[i][j]);
					
				}	
			}
			
			isIt = isUpperTriangle(matrix, rows, cols);
			
			if (isIt == true) {
				System.out.println("The Matrix is an Upper Triangle Matrix.");
			}
			
			else {
				System.out.println("The Matrix is not an Upper Triangle Matrix.");
			}
	}


	private static boolean isUpperTriangle(double[][] array, int rows, int cols) {
		
		double count = 0;
		boolean triangle = true;
		
		for (int i = 0; i < rows; i++) {
			for (int j = 0; j < cols; j++) {
				if (j < i) { 
					if (array[i][j] == 0) {
				}
					else {
						triangle = false;
				}
			}
		}
	}
		
		return triangle;
    }
}