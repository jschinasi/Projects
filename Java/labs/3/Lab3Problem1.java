import java.util.Scanner;

/** Jake Schinasi
 * Lab3Problem1
 */
public class Lab3Problem1 {

    public static void main(final String[] args) {
        // Get input from the user
        final Scanner input = new Scanner(System.in);
        System.out.print("Enter a posiitive integer, the input ends with 0: ");
        
        int sum = 0;
        int even = 0;
        double average = 0;
        int[] intArray = new int [50]; // Declares size of array
        int num = input.nextInt();
        int count = 0;
        // Adds the number's current value to array's current position
        while (num!=0) {
            intArray [count] = num;
            count++;
            num = input.nextInt();

        }
        // loop that checks if any int in input is even
        for (int i = 0; i < count; i++) {
            if (intArray[i] % 2 == 0)  {
                even++;
                
            }

            sum = sum + intArray[i]; // calulates the sum
            
        }

            average = sum/count; // Calculates the average

            // Prints the output of the avg, sum, and number of even integers
            System.out.println("The average is : " + average);
            System.out.println("The total sum : " + sum);
            System.out.println("The number of even numbers : " + even);

            
        }
        
        






    

}