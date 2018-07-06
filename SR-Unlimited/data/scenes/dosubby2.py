import re

original = re.compile('Access Node-Spoof_Pass \(A\)', re.M)
substitute = """triggers {
  is_oneshot: false"""
