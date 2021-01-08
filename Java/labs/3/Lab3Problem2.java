/** Jake Schinasi
 * Lab3Problem2
 */
public class Lab3Problem2 {

    public static void main(String[] args) {

        final int numbersperline = 10; // amount of numbers per line
        int count = 0; // counts the number divisible by 5 or 6

        for (int i = 100; i <= 500 ; i++) { // Tests all numbers 100 to 500

            if (i % 5 == 0 ^ i % 7 == 0) { // Tets if divisible by 5 and 7

                count++;

                if ( count % numbersperline == 0) 

                    System.out.println(i);

                else 

                    System.out.print(i + " ");

                }
        }
    }

}

            



