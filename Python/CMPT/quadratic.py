# quadratic.py
#    A program that computes the real roots of a quadratic equation.
#    Illustrates use of the math library.
#    Note: this program crashes if the equation has no real roots.
# If the discriminant is negative, print out "There are no real roots".
# If the discriminant is zero, print out only the one root--not the same value twice.
# If the discriminant is positive, print out both roots.
# Jake Schinasi Extra Credit
import math  # Makes the math library available.


def main():
    print("This program finds the real solutions to a quadratic")

    a = float(input("Enter coefficient a: "))
    b = float(input("Enter coefficient b: "))
    c = float(input("Enter coefficient c: "))

    discRoot = b ** 2 - 4 * a * c

    if discRoot == 0:
        root1 = (-b + math.sqrt(b ** 2 - 4 * a * c)) / 2 * a
        print("This equation has one solution: ", root1)
    elif discRoot < 0:
        print("The solutions for this equation are not real.")
    else:
        root1 = (-b + discRoot) / (2 * a)
        root2 = (-b - discRoot) / (2 * a)
        print("The solutions are: ", root1, root2)


main()
