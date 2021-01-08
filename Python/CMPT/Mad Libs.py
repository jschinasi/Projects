# Jake Schinasi Chapter 2 Assignment 9/6/19 This source code is a program where one may input a series of nouns,
# adjectives, verbs, ans places. After imputing the words, a sentence will form, and you WILL laugh at the discretion
# of your humor. Please follow the prompts below.

def main():
    print("Welcome to Mad Libs!")
    print("Please input the correct type of word when prompted. For example, type a noun when it says, please type a "
          "person or object.")
    noun = input("Please enter a noun:")
    verb = input("PLease enter a verb:")
    adjective = input("Please enter an adjective:")
    place = input("Please enter an place:")

    print("The Marist student was very", verb, "when he found out that he couldn't get any more", noun,
          "at Starbucks. He", verb, "all his", verb, "on Hot Pockets at the", place, "instead. His parents were", verb,
          "at him. He then hopped in his", noun, ".", adjective,
          "he started a fight at Dunkin Donuts because they had no", noun, "and was arrested shortly after.")
    print("Thanks for playing!")

main()

input("Press the <Enter> key to quit.")