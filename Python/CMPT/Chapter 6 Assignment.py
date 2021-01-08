# Jake Schinasi
# Chapter 6 Assignment
# 10/28/19

def createUsername():
    first = input("Enter your first name: ")
    last = input("Enter your last name: ")
    uname = first[0] + last
    return uname.lower()


def createPassword():
    passwd = input("Create a password with at least 1 capital letter and a number")
    return passwd


def checkFirstCharacter(fchar):
    fchar = passwd[0]
    if fchar.isupper():
        return True
    elif fchar.islower():
        return False

def checkRemainingChars(passwd):
    remainingchars = passwd[1:]
    if remainingchars.isalpha():
        return True
    elif remainingchars.isdigit():
        return True
    else:
        return False


def main():
    # Intro
    print("Username and password generator")
    # Creates username
    uname = createUsername()
    print("Your username is", uname)
    passwd = createPassword()
    if checkFirstCharacter(fchar):
        if checkRemainingChars(passwd[1:]):
            else:
            checkRemainingChars(passwd)

    print("Password Accepted")


main()
