#!/usr/bin/python3

# Reactions
# -21,-11 Awful
# -10,  0 Bad
#   1,  7 Mediocre
#   8, 14 Good
#  15, 21 Excellent


class reaction:
    the_reaction = 0

    def update_reaction(self, mod):
        self.the_reaction = int(self.the_reaction * 19 / 20) + mod
        print(self.the_reaction)


foo = reaction()

for I in range(30):
    foo.update_reaction(-2)
for I in range(30):
    foo.update_reaction(2)
for I in range(30):
    foo.update_reaction(-2)
