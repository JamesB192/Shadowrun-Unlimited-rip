#!/usr/bin/python
import math
import polib
import xml.etree.ElementTree as ET


def prestringfragment(node, string):
    if (string.find("{{") is -1) and (string.find("$(") is -1):
        node.text = string
        return
    print string


po = polib.pofile('/home/jamesb/Desktop/SrU/SR-Unlimited/resources/locale/Strings.pot')

doc = ET.Element('html')
body = ET.SubElement(doc, 'body')

cap = len(po)
count = 0
for entry in po:
#    print type(entry)
    pot = ET.SubElement(body, 'pre')
    pot.set('id', 'i_%d' % count);
    count += 1
    pot.tail = '\n'
#    prestringfragment(pot, entry.msgid)
    pot.text = entry.msgid

print ET.tostring(doc, encoding='utf-8')
