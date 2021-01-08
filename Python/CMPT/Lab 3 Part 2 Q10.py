# Jake Schinasi Lab 3 Part 2 Question 10

import math


def main():
    # Name of the program
    print('This program will tell you how tall your ladder you need!')

    # Get the height and angle input
    height = float(input('How tall does the ladder need to reach in feet?'))
    angle_deg = float(input('What angle does the ladder need to be in degrees?'))

    # Solve the length of the ladder
    radians = angle_deg * math.pi / 180
    ladder_length = height / math.sin(radians)

    # Output the length of the ladder
    print('The length of the letter is:', round(ladder_length, 2))


main()
