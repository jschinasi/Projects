import java.util.Scanner;
/**
 * Jake Schinasi
 * Lab 9 Problem 3
 */
public class Problem3 {

    public static int bin2Dec(final String binaryString) throws NumberFormatException {
        // set the decimal equal to 0
        int decimal = 0;
       
        for (int i = 0, j = binaryString.length() - 1;
            i < binaryString.length(); i++, j--) {
            
            if (binaryString.charAt(i) < '0' || binaryString.charAt(i) > '1')
                throw new NumberFormatException("The string isn't a binary string");
            
            // convert the binary to a decimal
            decimal += (Integer.parseInt(String.valueOf(binaryString.charAt(i))))
                * Math.pow(2,j);   
        }
        // return the new number from the binary
        return decimal;
}
    public static void main(String[] args) {
        try {
        // prompt the user to enter a binary string
        Scanner input = new Scanner(System.in);
        System.out.println("Enter your binary string: ");
        // make the next input set to the variable binary
        String binary = input.nextLine();
        // print out the binary input from the bin2Dec function
    System.out.println(bin2Dec(binary));
    input.close();
        }
    // try the prior code and catch the NumberFormatException and print it out instead of throwing an error
    catch (NumberFormatException ex) {
            System.out.println(ex.getMessage());
        }
    }

}
