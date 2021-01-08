# Jake Schinasi
# Chapter 7 Lab

# This program inputs the numbers of hours worked
# and the hourly rate and calculates the total wages for the week

def main():
    print('This program calculates the wage')
    hours = eval(input('Enter the amount of hours worked: '))
    rate = eval(input('Enter the hourly pay'))

 if hours > 40:
    wage = 40 * rate + (hours - 40) * 1.5 * rate
        print('Becuase you worked overtime, you earned $'(wage))
else:
    wage = hours * rate
         print(' You earned $'(wage))


main()
