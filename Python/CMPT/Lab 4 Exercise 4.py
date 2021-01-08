# Jake Schinasi
# Lab 4 Exercise 4

def main():
    # prompt the user
    phrase = input("Please enter the phrase:")
    words = phrase.split()
    # Convert to an acronym
    acronym = ""
    for word in words:
        acronym += word[0].upper()
    # Output the acronym of the phrase
    print(acronym)


main()
