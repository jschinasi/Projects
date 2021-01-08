# Jake Schinasi
# Lab 4 Q3
def main():
    # 3A
    for ch in "aardvark":
        print(ch)
    # 3B
    for w in "Now is the winter of our discontent...".split():
        print(w)
    # 3C
    for w in "Now is the winter of our discontent...".split():
        print(w)
    # 3D
    msg = ""
    for s in "secret".split("e"):
        msg = msg + s
    print(msg)
    #3E
    msg = ""
    for ch in "secret":
        msg = msg + chr(ord(ch) + 1)
    print(msg)
main()
