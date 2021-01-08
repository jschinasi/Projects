public class Lab2problem6 {

    public static void main(final String[] args) {

        // List of integers for the phone number

        final int num1 = (int) (Math.random() * (8)) + 2;
        final int num2 = (int) (Math.random() * 10);
        final int num3 = (int) (Math.random() * 10);
        final int num4 = (int) (Math.random() * 10);
        final int num5 = (int) (Math.random() * 10);
        final int num6 = (int) (Math.random() * 10);
        final int num7 = (int) (Math.random() * 10);
        final int num8 = (int) (Math.random() * 10);
        final int num9 = (int) (Math.random() * 10);
        final int num10 = (int) (Math.random() * 10);
	// Outputs the integers
	System.out.print(" Random Phone number = (" + num1 + num2 + num3 +")-" 
	+ num4 + num5 + num6 + "-" + num7 + num8 + num9 + num10);
        
    }
}