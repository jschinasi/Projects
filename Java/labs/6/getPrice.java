// Jake Schinasi
// Lab 6
public class getPrice {
    public static void main(String[] args) {
        Bond b = new Bond(500, 100, 0.05, 10000);
        System.out.printf("\n Price: $%.2f \n", b.getPrice());
    }
  
}