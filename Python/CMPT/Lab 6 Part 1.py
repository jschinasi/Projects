# Lab on Functions
# Jake Schinasi
# 10/25/19

def main():
    #Get user's first and last names
    first = input("Enter your first name: ")
    last = input("Enter your last name: ")

    # Create a username using the first and last names
    uname = first + "." + last

    # Ask the user to create a new password
    passwd = input ("Create a new password: ")

    # make sure the password has at least 8 characters
    while len(passwd)<8:
        print("Fool of a Took! That password is feeble!")
        passwd = input ("Create a new password: ")
    print("The force is strong on this one...")
    print("Account configured. Your new email address is:", uname + "@marist.edu")

main()