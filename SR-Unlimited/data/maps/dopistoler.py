#!/usr/bin/python3
from random import randint
from json import dumps

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

arr = [ "sleekOffice_furniture_overturnedTable02",
  "sleekOffice_furniture_overturnedTable01",
  "sleekOffice_furniture_glowingTable05",
  "sleekOffice_furniture_glowingTable04",
  "sleekOffice_furniture_glowingTable03",
  "sleekOffice_furniture_glowingTable02",
  "sleekOffice_furniture_glowingTable01"]

dir = ["N", "E", "S", "W"]

array = []
passes = 0
yettodo = 25

while yettodo > 0:
    passes += 1
    randT = randint(0, 6)
    if(randT<2):
        randO = randint(0, 3)
    else:
        randO = 2
#       change these to be wright
    if((randT<2) & (randO & 1)):
        randX = randint(0, 6)
        randZ = randint(0, 6)
        node = "%u,%u" % (randX, randZ)
        if node in array:
#            print ("collision")
             passes += 0
        else:
            array+=[node]
            print (node)
            yettodo -= 1;
#            print (strung % (arr[randT], randX, randZ, dir[randO]))
    else:
        randX = randint(0, 6)
        randZ = randint(0, 6)
        node = "%u,%u" % (randX, randZ)
        if node in array:
#            print ("collision")
             passes += 0
        else:
            array+=[node]
            print (node)
            yettodo -= 1;
#            print (strung % (arr[randT], randX, randZ, dir[randO]))

#print (dumps(array))
#print (passes)
