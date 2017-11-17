#!/usr/bin/python
from sys import argv, stderr

globby = ["regions {",
          "patrolRoutes {",
          "characters {",
          "variables {"
          ]


def inner_thing(fbase):
    terminate = "\n"
    splitter = terminate + "}" + terminate
    result = []
    try:
        fp = open(fbase, "r")
        blob = fp.read(4000000)
    finally:
        fp.close

    chunks = blob.split(splitter)
    for chunk in chunks:
        for thing in globby:
            if chunk.find(thing) == 0:
                result += [chunk]

    result += []
    print(splitter.join(result))


fname = argv[1]
inner_thing(fname)
