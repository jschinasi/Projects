/** Jake Schinasi
 * Lab3Problem7
 */
public class Lab3Problem7 {

    public static void main(String[] args) {
        int count = 1;
        
        for (int i = 1; i <= 50; i++){ // checks if i is less than or = to 50
            
            System.out.printf("%-6d",getPentagonalNumber(i));

			if (count % 10 == 0) System.out.println(); //outputs 10 numbers per line
			count++;
		}
    }
  public static int getPentagonalNumber(int i) {
		return (i * (3 * i - 1))/2; // formula for the nth pentagonal number
        
    }
}