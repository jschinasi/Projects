import java.util.Arrays;
import java.util.Scanner;

/** Jake Schinasi
 * Lab4Problem7
 */
public class Lab4Problem7 {

    public static void main(String[] args) {
        int[] holder = new int[100];
		Scanner input = new Scanner(System.in);
		System.out.println("How many integers are you inputing?");
		int holdLen = input.nextInt();
		System.out.println("Input the numbers: ");
		// Inputs numbers
		for(int i = 0; i<=holdLen-1;i++) {
			holder[i] = input.nextInt();
		}	
		// Takes out empty indexes
		int[] ending = new int[holdLen];
		int endLen = ending.length;
		int innerInd = 0;
		for(int i=0;i<=99;i++) {
			if(holder[i] != 0) {
				ending[innerInd] = holder[i];
				innerInd++;
			}
		}
        remRepeats(ending);
        
      }   

	public static void remRepeats(int[] list) {
		// Gets length of list
        int len = list.length;
        // Compares each element with all elements
        for (int i = 0; i < len; i++){
            for (int j = i+1; j < len; j++){
                // Tests if elements are the same
                if(list[i] == list[j]){
                    //Replace duplicate element with last unique element
                    list[j] = list[len-1];
                    len--;
                    j--;
                }
            }
        }
        //list of non repeated elements
        int[] array1 = Arrays.copyOf(list, len);
        //prints array1
        for (int i = 0; i < array1.length; i++){
            System.out.println(array1[i]);
        }
        
    }
}