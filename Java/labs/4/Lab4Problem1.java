/** Jake Schinasi
 * Lab4Problem1
 */
public class Lab4Problem1 {

    public static void main(String[] args) {
        System.out.println(" " + "in" + " " + "cm" + " " + "|" + " " + "cm" + " " + "in"); // format of table
        System.out.println("-----------------------");
        for (int in = 1, cent = 1; in < 51; in++, cent += 5) { // sets the maximum
            double cm = in * 2.54;
            double inch = cent/2.54;
            System.out.printf("%3d %5.2f | %3d %5.2f\n", in, cm, cent, inch);

        }   

    }
}