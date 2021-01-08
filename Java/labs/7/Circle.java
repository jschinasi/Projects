// Jake Schinasi Lab 7
public class Circle {
// create two double data fields x and y
	private double x; 
	private double y; 
	private double radius;
	Circle() {
		this(0, 0, 1);
	}
	// Makes Circle with the x, y and radius values
	Circle(double x, double y, double radius) {
		this.x = x;
		this.y = y;
		this.radius = radius;
	}
	// getter method that returns x
	public double getX() {
		return x;
	}
	// getter method that returns y
	public double getY() {
		return y;
	}
	//  getter method that returns radius
	public double getRadius() {
		return radius;
	}
	// returns the area of the circle
	public double getArea() {
		return Math.PI * Math.pow(radius, 2);
	}
	// returns the perimeter of the circle
	public double getPerimeter() {
		return 2 * Math.PI * radius;
	}
	// boolean returns true if spcified x and y values are inside circle
	public boolean contains(double x, double y) {
		return Math.sqrt(Math.pow(x - this.x, 2) + 
				 Math.pow(y - this.y, 2)) 
				 < radius;
	}
	// another boolean Circle circle that returns true if the circle is inside circle
	public boolean contains(Circle circle) {
		return Math.sqrt(Math.pow(circle.getX() - x, 2) + 
				 Math.pow(circle.getY() - y, 2)) 
				 <= radius - circle.getRadius();
	}
	// another boolean overlaps(Circle circle) that returns true if circle overlaps with this circle
	public boolean overlaps(Circle circle) {
		return Math.sqrt(Math.pow(circle.getX() - x, 2) + 
				 Math.pow(circle.getY() - y, 2)) 
				 <= radius + circle.getRadius();
	}
}