import java.util.Scanner;

/** Jake Schinasi
 * Lab4Problem8
 */
public class Lab4Problem8 {

    public static void main(String[] args) {
        double[] numbers; // Creates array
          int numCount; // Amount of numbers saved in the array
          double num;  // One of the numbers inputed
        
          numbers = new double[100]; 
          numCount = 0; // Initial count.
          System.out.println("Enter up to 100 positive numbers; Enter 0 to end");
        
          while (true) {   // Puts numbers in array
             System.out.println("?");
             Scanner input = new Scanner(System.in);
             num = input.nextDouble();
             if (num <= 0)
                break;
             numbers[numCount] = num;
             numCount++;
          }
          // Sorts the numbers
          selectionSort(numbers, numCount);  
          System.out.println(" Your numbers in sorted order are: ");
        
          for (int i = 0; i < numCount; i++) {
              System.out.println( numbers[i] );
          }
        
       }
       static void selectionSort(double[] A, int count) {
          for ( int lastPlace = count - 1; lastPlace > 0; lastPlace-- ) {
             int maxLocation = 0;
             for (int j = 1; j <= lastPlace; j++) {
                if (A[j] > A[maxLocation]) {
                   maxLocation = j;
                }
             }
             double temp = A[maxLocation];
             A[maxLocation] = A[lastPlace];
             A[lastPlace] = temp;
          
       }
        
    }
}