// Jake Schinasi Project 2
// 5/11/20

import java.util.Scanner;

public class HousingChoices {

	public void ClassAnswer (String ClassAnswer) {
	
		if (ClassAnswer.equals("Sophmore")) {
			System.out.println("Your housing options for Sophmore year are:");
		    System.out.println("Midrise");
		    System.out.println("Foy Townhouses ");
		    System.out.println("New Townhouses");
		    System.out.println("Lower West Cedar Townhouses");
		    System.out.println("Upper West Cedar Townhouses");
		}
			
		    else if (ClassAnswer.equals("Junior")) {
				
				System.out.println("Your housing options for Junior year are:");
			    System.out.println("Building A");
			    System.out.println("New Fulton Townhouses");
			    System.out.println("Fulton Street Townhouses");
			    System.out.println("Talmadge Court");
				
			}
		
			else if (ClassAnswer.equals("Senior")) {
				System.out.println("Your housing options for Senior year are:");
				System.out.println("Fulton Street");
				System.out.println("McCormik Hall");
				System.out.println("O'Shea Hall");
				System.out.println("New Fulton Townhouses");
				System.out.println("Lavelle Hall");
				System.out.println("Ward Hall");
			}	

				
				System.out.println("Please enter 'yes' or 'no' to"
						+ " the following question");
				System.out.println("Would you like to calulate your"
						+ " group's priority point average?");
					 
			
	}
	
	public void AvgAnswer(String AvgAnswer) {
		
		Scanner input = new Scanner(System.in);
		
		if (AvgAnswer.equals("yes")) {
			System.out.println("Please enter the priority points for 8 members");
			double avg = input.nextDouble();
			double avg2 = input.nextDouble();
			double avg3 = input.nextDouble();
			double avg4 = input.nextDouble();
			double avg5 = input.nextDouble();
			double avg6 = input.nextDouble();
			double avg7 = input.nextDouble();
			double avg8 = input.nextDouble();
			
			// Calculation to find average of 8 members
			
			double AvgAverage = ((avg + avg2 + avg3 + avg4 + avg5
					+ avg6 + avg7 + avg8) / 8);
			// Prints the average
			System.out.println("Your group's average is: " + AvgAverage);
			System.out.println("Thank you for using my application!");
		}
		
		else {
			System.out.println ("Okay! Thanks for using my application! ");
		}
				
	}
	
}


