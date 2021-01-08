// Jake Schinasi Lab 10
// 4/27/20
import java.util.*;
import java.io.*;

public class Exercise10_1 {

	public static void main(String[] args) throws Exception {
		// Checks if the file exists
		File file = new File("Exercise10_1.txt");
		
		if (file.exists()) {
			System.out.println("This file already exists");
			System.exit(0);
		}
		
		try (PrintWriter output = new PrintWriter(file);) {
			for (int i = 0; i < 100; i++) {
				
				output.print(((int)(Math.random() * 500) + 1 ));
				output.print(" ");
			
			}
			
		}
	
	
		// Create ArrayList
		ArrayList<Integer> list = new ArrayList<>();
		
		try (Scanner input = new Scanner(file);) {
			
			while (input.hasNext()) {
				list.add(input.nextInt());
			}
			
		}
	
		// Sort ArrayList and display in increasing order
		Collections.sort(list);
		System.out.println(list.toString());
		System.out.println();
			
	}

}
