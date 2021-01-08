/** Jake Schinasi
 * Lab4Problem5
 */
public class Lab4Problem5 {
    public static void main(String[] args) {
        int[] num = new int[1000];
        int sum = 0;
        for(int i= 0; i < 1000; i++) {
            num[i] = 1+(int) (Math.random()*((1000-1)+1)); 
            sum += num[i]; // Keeps track of sum
        }
        double average = sum / 1000.; // Calculates the average
        int upper = 0; // Keeps track of upper numbers
        int lower = 0; // Keeps track of lower numbers
        for(int i = 0; i < 1000; i ++) {

            if(num[i] > average) {
                upper++;
            }
            else
                lower++;
        }
        System.out.println("The average is: " + average);
        System.out.println("The upper count is: " + upper);
        System.out.println("The lower count is: " + lower);
        
    }
}