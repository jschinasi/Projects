// Jake Schinasi Lab 7
public class MyLong {
    // define long value
    private long value;
    // initialize the value
    public MyLong(long value) {
        this.value = value;

    }
    // getter method GetLong that returns value
    public long getLong() {
        return value;
    }
    // method isEven() that checks if value is even
    public boolean isEven() {
        return (value % 2) ==1;    
    }
    // method isOdd that checks if value is odd
	public boolean isOdd() {
		return (value % 2) == 1;
	}
	// method isPrime that checks if value is prime
	public boolean isPrime() {
		// for loop that iterates while long i is greater than i, i decreases each time
		for (long i = value - 1; i > 1; i--) {
			// if value divided by i doesn't return a remainder, return false
			if (value % i == 0) {
				return false;
			}
		// else return true
		}
		return true;	
	}
	// method isEven with parameter value
	public static boolean isEven(long value) {
		return (value % 2) == 0;
		
	}
	// method isOdd with parameter value
	public static boolean isOdd(long value ) {
		return (value % 2) == 1;
	}
	// method isPrime with parameter long
	public static boolean isPrime(long value) {
		for (long i = value - 1; i > 1; i--) {
			if (value % i == 0) {
				return false;
			}	
		}
		return true;
	}
	// method accesses the class's value and returns if even
	public static boolean isEven(MyLong value) {
		return value.isEven();	
	}
	// method isOdd returns if value is odd
	public static boolean isOdd(MyLong value ) {
		return value.isOdd();
	}
	// method isPrime returns if value is Prime
	public static boolean isPrime(MyLong value) {
		return value.isPrime();
	}
	// method equals returns if value defined equals the parameter value
	public boolean equals(long value) {
		return this.value == value;
	}
	// method equals that returns if value defined equals the class's long value
	public boolean equals(MyLong value) {
		return this.value == value.getLong();
	}
	// static parse method that parses through the character array to a long value
	public static long parseLong(char[] value) {
		long out = 0;
		// iterates through as many times as i is less than the parameter
		for (int i = 0; i < value.length; i++) {
			// makes a long called temp that is the value of i at that moment casted to be a long and a 0 right after
			long temp = (long)(value[i] + '0');
			// makes a out that is the value of 0 times 10 and then temp is added
			out = (out * 10) + temp;
		}
		// returns out which is temp
			return out;
	}
	// make a static parse method that parses through the String array
	public static long parseLong(String value) {
		// make a character array from before of length value.length
		char[] temp = new char[value.length()];
		// iterates through as many times as i is less than the temp length
		for(int i=0;i<temp.length;i++) {
			// makes i value of temp array the same value that i has in char array
			temp[i] = value.charAt(i);
		}
		// returns parseLong that parses through temp value i
		return parseLong(temp);
		
	}
}