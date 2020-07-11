#!/usr/bin/env python3
"""Try to shim all characters to awareness 15 which is still not good."""
import df_pb2
import google.protobuf.text_format as tf

file = '''Desktop/SrU/SR-Unlimited/data/maps/The Docks3.srm.txt'''
_map = df_pb2.MapDef()
with open(file, 'r') as frp:
    #_map.text_format.Parse(frp.read())
    tf.Parse(frp.read(), _map)

for prop in _map.props:
    pass

with open(file+'.2', 'w') as fwp:
    tf.PrintMessage(out=fwp, message=_map, float_format='.3g')
