/** Jake Schinasi
 * Lab3Problem3
 */
public class Lab3Problem3 {

    public static void main(final String[] args) {

        int i;
        final int charsperline = 20; // amount of outputs per line
        int count = 0;
        
        for (i = 1; i <= 100; i++) { // Looks at numbers 1 through 100

            count++;

            if ( count % charsperline == 0) 

                System.out.println(i);

                else 

                    System.out.print(" The ASCII value of " + (char)i + " = " + i); // Prints the ASCII value
            
        }
        

    }
    
    
}