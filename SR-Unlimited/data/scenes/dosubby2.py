import re
# just as an example

originala = [
    re.compile('Runner-Ricky Payment', re.M),
    re.compile('Runner-Verum Payment', re.M),
    re.compile('Runner-Clockwork Payment', re.M),
    re.compile('Runner-Arglye Payment', re.M),
    re.compile('Runner-Trent Payment', re.M),
    re.compile('Runner-SmashJacker Payment', re.M)
    ]
substitutea = [
"""triggers {
  name: "Runner-Ricky Payment"
  events {
  }
  conditions {
  }
  actions {
  }
  isActive: true
  idRef {
    id: "52c5a9ef3363315c170010d9"
  }
  elseActions {
  }
  is_oneshot: false""",

"""triggers {
  name: "Runner-Verum Payment"
  events {
  }
  conditions {
  }
  actions {
  }
  isActive: true
  idRef {
    id: "52c5a6a73363315c17000e25"
  }
  elseActions {
  }
  is_oneshot: false""",

"""triggers {
  name: "Runner-Clockwork Payment"
  events {
  }
  conditions {
  }
  actions {
  }
  isActive: true
  idRef {
    id: "52c97ee13363318c21000813"
  }
  elseActions {
  }
  is_oneshot: false""",

"""triggers {
  name: "Runner-Arglye Payment"
  events {
  }
  conditions {
  }
  actions {
  }
  isActive: true
  idRef {
    id: "52c97f793363318c21000818"
  }
  elseActions {
  }
  is_oneshot: false""",

"""triggers {
  name: "Runner-Trent Payment"
  events {
  }
  conditions {
  }
  actions {
  }
  isActive: true
  idRef {
    id: "52c984213363318c2100087b"
  }
  elseActions {
  }
  is_oneshot: false""",

"""triggers {
  name: "Runner-SmashJacker Payment"
  events {
  }
  conditions {
  }
  isActive: true
  idRef {
    id: "52c97e0e3363318c21000996"
  }
  elseActions {
  }
  is_oneshot: false"""
]
