# Jake Schinasi
# Chapter 3 Assignment Distance Formula

import math


def main():
    print("This program will calculate the distance between two points")

# Get the coordinates from the user
    x1, y1 = eval(input('Type the coordinates for the first point: '))
    x2, y2 = eval(input('Enter the coordinates for the second point: '))

# Calculate the length of each leg by taking the difference between the two x and y coordinates
    leg1 = (x2 - x1)
    leg2 = (y2 - y1)

# Calculate the distance between the two points using the Pythagorean Theorem
    hypotenuse = math.sqrt((leg1**2 + leg2**2))
# Output the hypotenuse of the two legs
    print('The hypotenuse is: ')
    print(float(round(hypotenuse)))

main()