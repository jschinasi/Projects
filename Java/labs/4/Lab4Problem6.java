/** Jake Schinasi
 * Lab4Problem6
 */
public class Lab4Problem6 {
    public static void main(String[] args) {
        // creates and pre fills the integer list
        int[] holder = new int[100];
        fill(holder, 9);
        // show the value of index 3 & 7 before edited values
        System.out.println("values in their indexes before the listEdit function:");
		System.out.println(holder[3] + " "+ 3);
		System.out.println(holder[7] + " "+ 7);
		// modifies array
		listEdit(holder, 3, 10);
		listEdit(holder, 7, 100);
		// outputs the changed values
		System.out.println("values in their indexes after the listEdit function:");
		System.out.println(holder[3] + " "+ 3);
		System.out.println(holder[7] + " "+ 7);
        System.out.println("");
        
        for (int i : holder) {
            System.out.println(i);

        }
        
    }
    // fills integer list and puts a -1 at the end
	public static void fill(int[] list, int range) {
		int indCount = -1;
		for(int i = 0; i <= range; i++) {
			list[i] = i+1;
			indCount++;
		}
		list[range+1] = -1; 
    }
    // inserts a value into a designated index and shifts all values down
	public static void listEdit(int[] list,int pos, int x) {
		int n = 0;
		while(list[n] != -1) {
			n++;
		}
		n ++;
		for(int i = (n-1); i >= (pos-1); i--) {
	            list[i+1] = list[i];
	    }
	    list[pos] = x;
	}

}