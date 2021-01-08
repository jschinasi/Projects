/** Jake Schinasi
 * Lab4Problem2
 */
public class Lab4Problem2 {

    public static void main(String[] args) {
        char[][] alpha = new char [5][5];
        
        for (int i = 0; i < 5; i++) { // five rows
            
            for (int j = 0; j < 5; j++) {
                int matrix = (int)(Math.random()*('z'-'a') + 'a');
                alpha[i][j] = (char)(matrix);
                System.out.print(alpha[i][j] + " ");
                
            }
            System.out.println();
        }
    }
}