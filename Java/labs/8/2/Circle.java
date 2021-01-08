
public class Circle {
    private double radius = 1.0;
    private String color = "Black";

    public Circle() {
    }

    public Circle(double radius) {
        this.radius = radius;
    }
    public Circle(double radius , String color) {
        this.radius = radius;
        this.color = color ;
    }

    public void setRadius(double radius) {
        this.radius = radius;
    }

    public void setColor(String color) {
        this.color = color;
    }

    public double getRadius() {
        return radius;
    }

    public String getColor() {
        return color;
    }

    public double getArea() {
        return radius*radius*Math.PI;
    }

    public double getPerimeter() {
        return (radius*2)*Math.PI;
    }

    @Override
    public String toString() {
        return "Circle with radius "+ getRadius() + " and color: "+getColor();
    }
}