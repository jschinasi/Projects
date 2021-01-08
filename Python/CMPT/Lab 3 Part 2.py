# Jake Schinasi Lab 3 part 2 question 2

import math


def main():
    # receive inputs of diameter and price from the user
    diameter = int(input('Please enter the diameter of pizza:'))
    cost = float(input('Enter how much the pizza costs: $'))

    # formula for radius

    radius = diameter / 2
    area = math.pi * radius ** 2
    cost_per_sqin = cost / area

    # show the cost of the pizza per sq in --> nearest 2 decimal place

    print('The cost is $', round(cost_per_sqin, 2), ' per square inch.')


main()
