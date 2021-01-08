
public abstract class Shape {

    protected String shapeName;
        
    public Shape (String shapeName) {
        this.shapeName = shapeName;
    }
    
    abstract double area();
    
    //?
    public String toString() {
        this.shapeName = shapeName;
        return shapeName;
    }

	public double area() {
		return 0;
	}
    
}