#!/usr/bin/python3
from random import randint
from json import dumps
from sys import stderr

strung = """props {
  name: "%s"
  gridPoint {
    x: %u
    y: 0
    z: %u
  }
  orientation: ORIENTATION_%s
  lod: 0
}"""

arr = [["sleekOffice_furniture_overturnedTable02", 1, 1],
       ["sleekOffice_furniture_overturnedTable01", 1, 1],
       ["sleekOffice_furniture_glowingTable05", 1, 1],
       ["sleekOffice_furniture_glowingTable04", 1, 1],
       ["sleekOffice_furniture_glowingTable03", 1, 1],
       ["sleekOffice_furniture_glowingTable02", 2, 1],
       ["sleekOffice_furniture_glowingTable01", 2, 1]]

dir = ["N", "E", "S", "W"]

array = []
passes = 0
yettodo = 30
rend = len(arr) - 1
# print(rend)

while yettodo > 0:
    passes += 1
    randT = randint(0, rend)
#    if((arr[randT][1]+arr[randT][2]) != 2):
    randO = randint(0, 3)
#    else:
#        randO = 2


#       change these to be wright
    clear = True
    if((randO & 1)):
        randX = randint(3, 20-arr[randT][1])
        randZ = randint(3, 20-arr[randT][2])
        for tX in range(randX, (randX+arr[randT][1])):
            for tZ in range(randZ, (randZ+arr[randT][2])):
                node = "%u,%u" % (tX, tZ)
                if node in array:
                    print("collision: ", node, file=stderr)
                    clear = False
        if clear:
            for tX in range(randX, (randX+arr[randT][2])):
                for tZ in range(randZ, (randZ+arr[randT][1])):
                    node = "%u,%u" % (tX, tZ)
                    array += [node]
            yettodo -= 1
            print(strung % (arr[randT][0], randX, randZ, dir[randO]))
    else:
        randX = randint(3, 20-arr[randT][2])
        randZ = randint(3, 20-arr[randT][1])
        for tX in range(randX, (randX+arr[randT][2])):
            for tZ in range(randZ, (randZ+arr[randT][1])):
                node = "%u,%u" % (tX, tZ)
                if node in array:
                    print("collision: ", node, file=stderr)
                    clear = False
        if clear:
            for tX in range(randX, (randX+arr[randT][2])):
                for tZ in range(randZ, (randZ+arr[randT][1])):
                    node = "%u,%u" % (tX, tZ)
                    array += [node]
            yettodo -= 1
            print(strung % (arr[randT][0], randX, randZ, dir[randO]))

print(dumps(array), file=stderr)
print("passes: ", passes, file=stderr)
