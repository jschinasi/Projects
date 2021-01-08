import java.util.Scanner;
/** Jake Schinasi
 * Lab3Problem5
 */
public class Lab3Problem5 {

    public static void main(String[] args) {
        // get input from the user
        Scanner in = new Scanner(System.in);
        System.out.print("Input the first number : "); 
        double a = in.nextDouble();
        System.out.print("Input the second number : ");
        double b = in.nextDouble();
        System.out.print("Input the third number : ");
        double c = in.nextDouble();
        System.out.println("The average is: " + average (a, b, c)); // Prints the average
        
        }

    public static double average(double a, double b, double c) // formaula for input

        {

        return (a + b + c) / 3;
    }

}





