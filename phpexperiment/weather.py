#!/usr/bin/python3
import random


def fakediv(num, den):
    if den == 0:
        return num
    return num / den


fmt = "%4s %4s %5s %4s %4s %8s"
rule = tuple("=== ==== ===== === == =======".split())
hfoot = tuple("Day Hour Trend dHg Hg SkyView".split())
skies = ['clear', 'cloudy', 'rainy', 'thundery']
dHg = 0
trend = 0
Hg = 50
sky = 0

print(fmt % hfoot)
print(fmt % rule)
for Day in range(7):
    for hour in range(24):
        trend = int(fakediv((Hg - 35), abs(Hg - 35)))
        trend *= -2

        dHg += int(trend / random.randint(1, 4))
        dHg += random.randint(1, 6) - random.randint(1, 6)
        dHg += random.randint(1, 6) - random.randint(1, 6)

        dHg = int((12 + dHg - abs(12 - dHg)) / 2)  # clamp between -12,12
        dHg = int((-12 + dHg + abs(-12 - dHg)) / 2)

        Hg += dHg

        Hg = int((10 + Hg + abs(10 - Hg)) / 2)  # clamp between 10,90
        Hg = int((90 + Hg - abs(90 - Hg)) / 2)
        # ====================================================
        if (sky == 0):
            if ((40 > Hg) or ((60 > Hg) and (random.randint(1, 4) == 1))):
                sky = 1
        elif (sky == 1):
            if (False or ((80 < Hg) and (random.randint(1, 4) == 1))):
                sky = 0
            elif ((20 > Hg) or ((40 > Hg) and (random.randint(1, 4) == 1))):
                sky = 2
        elif (sky == 2):
            if ((80 < Hg) or ((60 < Hg) and (random.randint(1, 4) == 1))):
                sky = 1
            elif (False or ((20 > Hg) and (random.randint(1, 4) == 1))):
                sky = 3
        elif (sky == 3):
            if ((60 < Hg) or ((40 < Hg) and (random.randint(1, 4) == 1))):
                sky = 2
        # ====================================================
        print(fmt % (Day, hour, trend, dHg, Hg, skies[sky]))
    print(fmt % rule)
print(fmt % hfoot)
print("")
