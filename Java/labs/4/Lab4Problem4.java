import java.util.Scanner;

/** Jake Schinasi
 * Lab4Problem4
 */
public class Lab4Problem4 {

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in); //gets input
        System.out.println("Enter a string:");
        int count[] = new int[26]; // creates space for all the letters
        String str = input.nextLine(); // Reads the string

        // initializes the array       
        for (int i = 0; i < 26; i++)
            count[i]=0;
    int len = str.length();
    for (int i = 0; i < len; i++) {
        if (str.charAt(i) == ' ') continue;
    count[str.toLowerCase().charAt(i) - 'a']++;

    }
    for (int i = 0; i < count.length; i++) {
        
    }
    for (int i = 0; i < 26; i++) {
        if (count[i] > 0)
        // outputs the number of occurrences per letter in the string
    System.out.println("Number of Occurrence of " + (char)(i + 'a') + " is:" + count[i]);
    
            
        }

    }
}