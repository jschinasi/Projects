
public class Sphere extends Shape {
    private double radius; 
   // Constructor 

   public Sphere(double radius) {
      super("Sphere");
      this.radius = radius;
   }
   // Returns the surface area of the sphere
 
   public double area() {
      return 4*Math.PI*radius*radius;
   }

   // Returns the sphere as a String
 
   public String toString() {
        return super.toString() + " of radius " + radius; 
    }
}

