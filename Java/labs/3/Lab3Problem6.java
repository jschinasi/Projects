import java.util.Scanner;

/** Jake Schinasi
 * Lab3Problem6
 */
public class Lab3Problem6 {

    public static void main(String[] args) {

        Scanner in = new Scanner(System.in); // get input from user
        System.out.print("Enter a string : "); 
        String str = in.nextLine(); 

        System.out.print("The number of vowels in the string: " + countVowels(str)); // prints number of vowels
        }
    public static int countVowels(String str) {
        
        int count = 0;
        for (int i = 0; i < str.length(); i++) {
            // checks for vowels
            if (str.charAt(i) == 'a' || str.charAt(i) == 'e' || str.charAt(i) == 'i'
                || str.charAt(i) == 'o' || str.charAt(i) == 'u') {
                
                count++;
            }
        }
        return count++;
        }
        
}
