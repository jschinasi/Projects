# Jake Schinasi
# Chapter 7 Assignment 5 Question Quiz

def main():
    score_start = 0
    print("Welcome to Jake's 5 question quiz!")

    question1 = input("What is 20 + 5? Enter A for 23, B for 25, C for 32, and D for 21 :")
    if question1 == "B":
        score1 = score_start + 1
        print("Correct!")
        print("Your current score is:", score1)

    else:
        print("Incorrect :(")

    question2 = input(
        "Who is the current President of the US? Enter A) Donald Trump B) Jeff Bezos   C) Zion Williams    D) James Charles")
    if question2 == "A":
        score2 = score1 + 1
        print("Correct!")
        print("Your current score is", score2)

    else:
        print("Incorrect :(")

    question3 = input("What is the best class at Marist? Enter A) Physics  B) History    C) Comp Sci    D) English")
    if question3 == "C":

        score3 = score2 + 1
        print("Correct!")
        print("Your current score is:", score3)
    else:
        print("Incorrect :( ")

    question4 = input("Which freshman dorm is the largest at Marist? Enter A Leo  B) Marian   C) Champ    D) Shehan")
    if question4 == "C":
        score4 = score3 + 1
        print("Correct!")
        print("Your current score is:", score4)

    else:
        print("Incorrect :( ")

    question5 = input("What is 20 + 20? (A 22  B) 2323    C) 40    D) 7")
    if question5 == "C":
        score5 = score4 + 1
        print("Correct!")

        print("Your current score is:", score5)
        score_final = score5
    else:
        print("Incorrect :( ")

    if score_final < 3:
        print("Better luck next time.")

    elif score_final == 5:
        print("Awesome! You rock!")

    else:
        print("Not bad. Try again soon!")

main()
