import java.util.Scanner;
    
public class Lab2problem5 {

        public static void main(String[] args) {

        // creates scanner to get input

        Scanner input = new Scanner(System.in);

        System.out.println("Type a string: " );
        String string1 = input.next();

        System.out.println("Type another string: " );
        String string2 = input.next();
        
        // compares both strings

        int compare = string1.compareTo(string2);

        if (compare < 0)
        {System.out.println(string1 + " " + string2);}

        else {
            if (compare > 0)
            {System.out.println(string2 + " " + string1);}
            }


            
        }

}