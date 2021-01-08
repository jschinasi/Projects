def main():
    # Ask for the day, month, and year
    dateStr = input("Please enter the day, and year in the format (mm/dd/yyyy): ")
    monthStr, dayStr, yearStr = dateStr.split("/")
    # Defines the months
    months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
              "November", "December"]
    monthStr = months[int(monthStr)-1]
    # Outputs the date, month, and year
    print("The date is:", monthStr, dayStr+",", yearStr)



main()
