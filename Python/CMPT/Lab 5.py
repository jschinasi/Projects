def main():
    print('This program calculates the wage')
    hours = eval(input('Enter the amount of hours worked: '))
    rate = eval(input('Enter the hourly pay: '))

    if hours > 40:
        wage = 40 * rate + (hours - 40) * 1.5 * rate
        print('Becuase you worked overtime, you earned ${}.'.format(wage))
    else:
        wage = hours * rate
        print(' You earned ${}.'.format(wage))


main()

