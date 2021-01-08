import java.util.Scanner;

/** Jake Schinasi
 * Lab5Problem3
 */
public class Lab5Problem3 {

    public static void main(final String[] args) {
        final Scanner input = new Scanner(System.in);

        System.out.println("How many students?: ");

        final int students = input.nextInt();
        final String[] studentList = new String[students];
        final double[] scores = new double[students];

        for (int i = 0; i < students; i++) {
            System.out.println("Student name: ");
            studentList[i] = input.next();
            System.out.println("Student score: ");
            scores[i] = input.nextDouble();
        }

        sorting(scores, studentList, students);
        for (int i = 0; i < students; i++) {
            System.out.println(studentList[i] + " " + scores[i]);

        }
    }

    public static void sorting(final double[] scores, final String[] names, final int n) {
		double temp; String tempStr;
		boolean swapped;
		for (int i = 0; i < n - 1; i++) {
			swapped = false;
			for (int j = 0; j < n - i - 1; j++) {
				if (scores[j] > scores [j+1]) {
					temp = scores [j];
					tempStr = names [j];
					scores [j] = scores [j+1];
					names [j] = names [j+1];
					names [j+1] = tempStr;
					scores [j+1] = temp;
					swapped = true;
				}
			}
			if (swapped == false) {
				break;
			}
		}
    }
}