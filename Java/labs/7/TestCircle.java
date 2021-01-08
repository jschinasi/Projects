// Jake Schinasi Lab 7
public class TestCircle {
	
	public static void main(String[] args) {
		
            Circle c1 = new Circle(2,2,5.5);
            
            System.out.println(c1.getArea());
            System.out.println(c1.getPerimeter());
            System.out.println(c1.contains(3,3));
            System.out.println(c1.contains(new Circle(4, 5, 10.5)));
            System.out.println(c1.overlaps(new Circle(3, 5, 2.3)));
	    }
}