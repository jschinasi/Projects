def main():
    # Get the user's first and last name
    first = input("Enter your first name:")
    last = input("Enter your last name:")
    # Makes the output print the first letter of first and 7 letters of the last name
    username = first.lower()[0] + last.lower()[:7]
    # outputs the username
    print("Your username is:", username)


main()
