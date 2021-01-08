/**
 * TriangleException 
 * Jake Schinasi Lab 9
 */
public class TriangleException {
    private double side1 = 1.0; 
	private double side2 = 2.0; 
	private double side3 = 3.0; 
	private double perimeter = side1 + side2 + side3;
	 
	
	public TriangleException()
			throws IllegalTriangleException  {
		this(1.0, 1.0, 1.0);
	}
			
	public TriangleException (double nside1, double nside2, double nside3)
			throws IllegalTriangleException{
		setPerimeter(nside1, nside2, nside3);
	
	}
	public double get1() {
		return side1;
	}
	public double get2() {
		return side2;
	}
	public double get3() {
		return side3;
	}
	public double getPerimeter() {
		return perimeter;
	}
	public void setPerimeter(double nside1, double nside2, double nside3)
			throws IllegalTriangleException {
		if (nside1 <= 0 || nside2 <= 0|| nside3 <= 0||(nside1 + nside2) <  nside3 || (nside1 + nside3) < nside2 || (nside2 + nside3) <  nside1)
			throw new IllegalTriangleException (nside1, nside2, nside3);
		else 
			side1 = nside1;
			side2 = nside2;
			side3 = nside3;		
	}
    
}