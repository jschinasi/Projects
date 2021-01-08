def main():
    s1 = "spam"
    s2 = "ni!"

    # 2a) "NI"
    print(s2.upper())

    # 2b) "ni!spamni!"
    print(s2 + s1 + s2)

    # 2c) "Spam Ni! Spam Ni! Spam Ni!"
    s3 = s1[0].upper() + s1[1:]
    s4 = s2[0].upper() + s2[1:]

    print((s3 + ' ' + s4) * 3)

    # 2D) Spam
    print(s1)

    # 2E) [“sp”, “m”]
    print([s1[0:2], s1[3]])

    # 2F) “spm”
    print(s1[0:2] + s1[3])


main()
