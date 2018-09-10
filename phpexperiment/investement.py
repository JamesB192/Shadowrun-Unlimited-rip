#!/usr/bin/python3
from random import randrange


def grow(capital, rateDip, rateRise):
    rate = randrange(rateDip, rateRise, 1)
    rate += randrange(rateDip, rateRise, 1)
    intrest = int((capital * rate) / (3642475 * 2))
    print("%4.1f\t%4d" % (rate/100, intrest))
    return (rate, int(intrest))


invested = 10 ** 4
r = i = []
print("rate\tintrest")
for I in range(365):
    (a, b) = grow(invested, -400, 800)
    r.append(a)
    i.append(b)

print("=======================")
print("%5.2f\t%5.2f" % (min(r)/100, min(i)))
print("%5.2f\t%5.2f" % (max(r)/100, max(i)))
print("=======================")
print("%5.2f\t%5.2f" % (sum(r)/100, sum(i)))
print("")
print("%5.2f%%" % (100 * sum(i) / invested))
