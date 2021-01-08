import java.util.Scanner;

/** Jake Schinasi
 * Lab4Problem3
 */
public class Lab4Problem3 {
    public static void main(String[] args) {
        String str, reverse = "";
        Scanner sc = new Scanner(System.in);

        System.out.println("Enter a string:");
        str = sc.nextLine();
        // int length = str.length
            if (isPalindrome(str))
                System.out.println("The word is a palindrome");
            else
                System.out.println("The word is not a palindrome");
    }
    public static String reverse(String str) {
        String rev = "";
    for ( int i = str.length() - 1; i >=0; i--)
            rev = rev + str.charAt(i);
            return rev;
        
    }
    public static boolean isPalindrome(String str) {
        if(str.equals(reverse(str))) {
            return true; // output if string is a palindrome

        } else {
            return false; // output if string isn't a palindrome

        }
    }
}


