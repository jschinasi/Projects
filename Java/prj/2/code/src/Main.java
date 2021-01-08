// Jake Schinasi Project 2
// 5/11/20
import java.util.Scanner;
public class Main {
  public static void main(String args[]){
    Scanner input = new Scanner(System.in);
    int clubPoints = 0;
    int sportsPoints = 0;
    int historyPoints = 0;
    int roomPoints = 0;
    int servicePoints = 0;
    int iSportsPoints = 0;

   
    System.out.print("Welcome to the Housing Calculator");
    System.out.print("Please answer the following");
    System.out.println(" series of questions :");

    // User input for GPA
  
    System.out.print("The scale is from 0.0");
    System.out.print(" to 4.0. ");
    System.out.println("Please enter your current GPA: ");
    

    // User's input for GPA is calculated into points

    PriorityPoints prioritypoints= new PriorityPoints();
    double GPA = input.nextDouble();
    prioritypoints.gpa(GPA);

    // User inputs data about club involvement

    System.out.print("Please enter the number of clubs");
    System.out.print(" you are involved in");
   

    // Club points are calculated based on user input

    double clubs = input.nextDouble();
    Clubs club = new Clubs();
    club.Clubs(clubs);

      // points are calculated when input > 0
     
      String ans = input.next();
      if (ans.equals("yes")){
        System.out.println(clubs * 2 +" points");
        clubPoints += clubs * 2;
      }
      else{
        System.out.println(clubs * 1 +" point");
        clubPoints += clubs * 1;
      }

      // User input for club status

      System.out.println("Please enter 'yes' or 'no' to the "
          + "following question");
      System.out.println("Were you the President/Vice "
          + "President/Secretary or Treasurer?: ");
      
      String PosAnswer = input.next();
      if (PosAnswer.equals("yes")){
        System.out.println(3 +" points");
        clubPoints += 3;
      }
      else{
        System.out.println(0 +" points");
        clubPoints += 0;
      }
    
    // User input based on involvement in D1 sports

    System.out.println("Please enter 'yes' or 'no' to the "
        + "following question");
    System.out.println("Are you part of a D1"
        + " team at Marist?: ");

    // User input is calculated into points

    String SportsAnswer = input.next();
    
    if (SportsAnswer.equals("yes")){
      System.out.println("How many sports?");
      double sports = input.nextDouble();
      System.out.println(sports * 2 +" points");
      sportsPoints += sports * 2;
    }
    else {
      System.out.println(0 +" points");
      sportsPoints += 0;
    }

    // User is asked to input data about Intramural involvement
    
    System.out.println("Please enter 'yes' or 'no' to "
        + "the following question");
    System.out.println("Are you involved in Marist "
        + "College's Intramurals?: ");

    // User input is calculated to points

    String iSportsAnswer = input.next();
    
    if (iSportsAnswer.equals("yes")){
      System.out.println("How many sports?");
      double isports = input.nextDouble();
      System.out.println(isports * 2 +" points");
      iSportsPoints += isports * 2;
    }
    else {
      System.out.println(0 +" points");
      iSportsPoints += 0;
    }

    // User is asked about disciplinary history 

    System.out.println("Please enter 'yes' or 'no'"
        + " to the following question");
    System.out.println("Do you have a Discipline History"
        + " with Marist College this semster?");

    // User input is calculated into points

    String historyAnswer = input.next();
    if (historyAnswer.equals("yes")){
      System.out.println(0 +" points");
      historyPoints += 0;
    }
    else{
      System.out.println(6 +" points");
      historyPoints += 6;
    }

    // User is asked about their room condition 

    System.out.println("Please enter 'good' or 'bad' "
        + "to the following question");
    System.out.println("In what condition was your"
        + " room?");

    // User input is calculated into points

    String roomAnswer = input.next();
    if (roomAnswer.equals("good")){
      System.out.println(4 +" points");
      roomPoints += 4;
    }
    else{
      System.out.println(0 +" points");
      roomPoints += 0;
    }

    // User is asked about community service involvement

    System.out.println("Please enter 'yes' or 'no'"
        + " to the following question");
    System.out.println("Did you participate in any"
        + " Service activities?");

    // User input is calculated into points

    String serviceAnswer = input.next();
    if (serviceAnswer.equals("yes")){
      System.out.println("How many hours?");
      double hours = input.nextDouble();
      System.out.println(hours * 1 +" points");
      servicePoints += hours * 1;
    }
    else{
      System.out.println(0 +" points");
      servicePoints += 0;
    }

    // Total amount of priority points is calculated
    

    double totalAverage = (prioritypoints.priorityPoints + clubPoints 
        +sportsPoints + historyPoints+roomPoints
        +servicePoints+ iSportsPoints); 

    // Output is printed to user

    System.out.println("Your total priority points is:"
        + " " + totalAverage);

    // User inputs their grade

    System.out.println("Please enter your incoming grade "
        + " such as Sophmore");

    // Housing options are printed based off of user input
    HousingChoices HousingChoice= new HousingChoices();
    String ClassAnswer = input.next();
    HousingChoice.ClassAnswer(ClassAnswer);
    
    // User is asked if they want to calculate their average
    String AvgAnswer = input.next();
    // Average is printed to user, and program finishes
    HousingChoice.AvgAnswer(AvgAnswer);
    
  }
}

