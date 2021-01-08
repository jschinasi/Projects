def main():
    # Question 4B
    for i in range(1, 11):
        print(i * i)

    # Question 4B
    for i in [1, 3, 5, 7, 9]:
        print(i, ":", i ** 3)
        print(i)

    # Question 4C
    x = 2
    y = 10
    for j in range(0, y, x):
        print(j, end="")
        print(x + y)
        print("done")

    # Question 4D

    ans = 0
    for i in range(1, 11):
        ans = ans + i * i
        print(i)
        print(ans)


main()
