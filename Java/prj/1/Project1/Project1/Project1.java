package Project1;

import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;

/**
 * Jake Schinasi Project 1
 */ 2/27/20


public class Project1 {

    static class person implements Comparable<person> {

        public String name;
        public ArrayList<Integer> rank;

        public person(String name, String title) {
            this.name = name;
            this.rank = new ArrayList<>();
            String[] ranking = title.split("-"); 
            for (int i = ranking.length - 1; i >= 0; i--) { //reverses the order
                if (ranking[i].equals("upper")) {
                    rank.add(3); // adds 3 to the rank
                } else if (ranking[i].equals("middle")) {
                    rank.add(2);
                } else {
                    rank.add(1);
                }
            }
            for (int i = 0; i < 10; i++) {
                rank.add(2);
            }
        }

        //Compares two strings lexicographically
        public int compareTo(person a) {
            person p = a;
            for (int i = 0; i < 10; i++) {
                if (this.rank.get(i) == p.rank.get(i)) { 
                    continue;
                }
                if (this.rank.get(i) > p.rank.get(i)) {
                    return -1;
                }
                if (this.rank.get(i) < p.rank.get(i)) {
                    return 1;
                }
            }
            return this.name.compareTo(p.name); 
        }
    }

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        int c = Integer.parseInt(input.nextLine());  // converts string to an integer
        
        for (int i = 0; i < c; i++) {
            int n = Integer.parseInt(input.nextLine());
            ArrayList<person> list = new ArrayList<>();
            
            for (int j = 0; j < n; j++) {
                String[] s = input.nextLine().split(" ");
                String word = s[0].replace(":", "");
                list.add(new person(word, s[1]));
            }
            Collections.sort(list);
            
            for (person p : list) {
                System.out.println(p.name);
            }
            System.out.println("=============================="); // outputs 30 equal signs
        }
    }
}
