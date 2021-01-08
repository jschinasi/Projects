// Jake Schinasi Lab 10
// 4/27/20
import java.util.*;
import java.io.*;

public class ReplaceText {

	public static void main(String[] args) throws Exception {
		// TODO Auto-generated method stub
		// Check command-line parameter usage
		if (args.length != 4) {
		 System.out.println(
		 "Usage: java ReplaceText sourceFile targetFile oldStr newStr");
		 System.exit(1);
		 }
		 // Check if source file exists
		 File sourceFile = new File(args[0]);
		 if (!sourceFile.exists()) { 
			 System.out.println("Source file " + args[0] + " does not exist");
			 System.exit(2); 	 
	
		 }
		// Create ArrayList
		 ArrayList<String> list = new ArrayList<>();
		// Check if target file exists
		 File targetFile = new File(args[1]);
		 
		 if (targetFile.exists()) {
		  System.out.println("Target file " + args[1] + " already exists");
		  System.exit(3);
		 }
		 // Create a Scanner for input and a PrintWriter for output
		 Scanner input = new Scanner(sourceFile);
		
		 
		 while (input.hasNext()) {
		  String s1 = input.nextLine();
		  list.add(s1.replaceAll(args[1], args [2]));
		 }
		 input.close();
		
		 // save the changed into the original file
		  PrintWriter output = new PrintWriter(sourceFile);
			 
			 for (int i = 0; i < list.size(); i++) {
				 output.println(list.get(i));
			 }
	}

}
