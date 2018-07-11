#!/usr/bin/python3
import random

def fakediv(num, den):
    if den == 0:
        return num
    return num / den


skies = ['clear', 'cloudy', 'rainy', 'thundery']
dHg = 0
trend = 0
Hg = 1000
sky = 0

print("x\ttrend\tdHg\tHg")
print("============================")
for I in range(600):
    trend = fakediv((Hg - 985), abs(Hg - 985))
    trend *= -2

    dHg += trend * random.randint(1, 4)
    dHg += random.randint(1, 6) - random.randint(1, 6)
    dHg += random.randint(1, 6) - random.randint(1, 6)

    dHg = (12 + dHg - abs(12 - dHg)) / 2
    dHg = (-12 + dHg + abs(-12 - dHg)) / 2

    Hg += dHg

    Hg = (960 + Hg + abs(960 - Hg)) / 2
    Hg = (1040 + Hg - abs(1040 - Hg)) / 2
# ====================================================
    if (sky == 0):
        if ((990 > Hg) or ((1010 > Hg) and (random.randint(1,4) == 1))):
            sky = 1
    elif (sky == 1):
        if (False or ((1030 < Hg) and (random.randint(1,4) == 1))):
            sky = 0
        elif ((970 > Hg) or ((990 > Hg) and (random.randint(1,4) == 1))):
            sky = 2
    elif (sky == 2):
        if ((1030 < Hg) or ((1010 < Hg) and (random.randint(1,4) == 1))):
            sky = 1
        elif (False or ((970 > Hg) and (random.randint(1,4) == 1))):
            sky = 3
    elif (sky == 3):
        if ((1010 < Hg) or ((990 < Hg) and (random.randint(1,4) == 1))):
            sky = 2
# ====================================================
    print("%4d\t%4d\t%4d\t%4d\t%s" % (I, trend, dHg, Hg, skies[sky]))
print("============================")
print("")

