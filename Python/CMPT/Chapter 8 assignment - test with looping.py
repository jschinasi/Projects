# Jake Schinasi Chapter 7 Assignment 5 Question Quiz For each question, instead of keeping score, continue asking the
# same question until the user guesses the correct question or types "skip" (allow both upper and lower case). If the
# user guesses correctly, issue a "correct" message, If the user guesses incorrectly, issue a "sorry, try again"
# message If the user types "skip", print the correct answer and continue to the next question. When all questions
# have been asked/answered/skipped, ask the user if they would like to play again. If so, start the quiz over again
# from the beginning. Otherwise, print out a "Thank you for playing" type of message.

def main():
    print("Welcome to Jake's 5 question quiz!")
    print(
        "Please enter the corresponding letter for the correct answer. If you would like to skip a question, please type skip.")

    while True:

        question1 = input("What is 20 + 5? Enter A for 23, B for 25, C for 32, and D for 21 :")
        if question1.lower() == "b":
            print("Correct!")
            break
        elif question1.lower() == "skip":
            print("The correct answer was B")
        else:
            print("Incorrect :( Please try again!")

    while True:

        question2 = input(
            "Who is the current President of the US? Enter A) Donald Trump B) Jeff Bezos   C) Zion Williams    D) James "
            "Charles")
        if question2.lower() == "a":
            print("Correct!")
            break
        elif question2.lower() == "skip":
            print("The correct answer was A")
        else:
            print("Incorrect :( Please try again!")

    while True:

        question3 = input("What is the best class at Marist? Enter A) Physics  B) History    C) Comp Sci    D) English")
        if question3.lower() == "c":
            print("Correct!")
            break
        elif question3.lower() == "skip":
            print("The correct answer was C")
        else:
            print("Incorrect :( Please try again!")

    while True:

        question4 = input(
            "Which freshman dorm is the largest at Marist? Enter A Leo  B) Marian   C) Champ    D) Shehan")
        if question4.lower() == "c":
            print("Correct!")
            break
        elif question4.lower() == "skip":
            print("The correct answer was C")
        else:
            print("Incorrect :( Please try again!")

    while True:

        question5 = input("What is 20 + 20? (A 22  B) 2323    C) 40    D) 7")
        if question3.lower() == "c":
            print("Correct!")
            break
        elif question3.lower() == "skip":
            print("The correct answer was C")
        else:
            print("Incorrect :( Please try again!")

            print("Thank you for playing!")

main()
