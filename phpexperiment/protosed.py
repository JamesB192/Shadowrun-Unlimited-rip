#!/usr/bin/env python3
"""Try to shim all characters to awareness 15 which is still not good."""
import df_pb2

scene = df_pb2.SceneDef()
with open('Desktop/a1_intro_s1.srt.bytes', 'rb') as frp:
    scene.ParseFromString(frp.read())

for character in scene.characters:
    try:
        character.character_instance.character_mod.stats.awareness = 15
    except Exception as e:
        point = character.gridPoint
        name = character.displayName
        aware = character.character_instance.character_mod.stats.awareness
        print("FAILED:  %7.1f %7.1f %7.1f %7d %s" % (
              point.x, point.y, point.z,
              aware, name))

with open('Desktop/a1_intro_s1.srt.bytes.2', 'wb') as fwp:
    fwp.write(scene.SerializeToString())
