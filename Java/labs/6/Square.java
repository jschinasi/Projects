// Jake Schinasi
public class Square {
    private double width;
    public Square() {
        width = 1;
    }
    public Square(double w) {
        width = w;
    }
    public double getArea() {
        return width*width;
    }
    public double getPerimeter() {
        return 4*width;
    }
    public String toString() {
        return "Length : " + width + "\nWidth : " + width + "\nArea : "+getArea()+"\nPerimeter : "+getPerimeter();
    }
    public double getWidth() {
        return width;
    }
}

