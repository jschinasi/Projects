# Lab on Functions
# Jake Schinasi
# 10/25/19

def get_first_and_last_names():
    first = input("Enter your first name: ")
    last = input("Enter your last name: ")
    return (first, last)


def create_username(name_list):
    uname = name_list[0] + "." + name_list[1]
    return uname


def create_password():
    passwd = input("Create a new password: ")

    # make sure the password has at least 8 characters
    while len(passwd) < 8:
        print("Fool of a Took! That password is feeble!")
        passwd = input("Create a new password: ")
    print("The force is strong on this one...")
    print("Your password has been accepted.")
    return passwd


def main():
    # Get user's first and last names
    first_last_name_list = get_first_and_last_names()

    # Create a username using the first and last names
    username = create_username(first_last_name_list)

    # Ask the user to create a new password
    password = create_password()

    print("Account configured. Your new email address is: ", username + "@marist.edu")


main()
