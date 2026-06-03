#!/usr/bin/python
from google.cloud import translate
import math
import polib
import re


def cook_string1(strung, id):
    tmp = strung
    tmp = re.sub(
        r"\{{2}(.*?)\}{2}", r'<span translate="no">{{\1}}</span>', tmp
    )
    tmp = re.sub(
        r"\$\((.*?)\)", r'<span translate="no">$(\1)</span>', tmp
    )
    tmp = '<html><body><code id="i_%04d">%s</code></body></html>' % (
        id,
        tmp,
    )
    return tmp


def cook_string2(strung):
    tmp = re.sub(r"\<[^\>]*\>", r"", strung)
    return tmp


def to_lang(lang):
    pot = polib.pofile('fake.pot' % lang)
    client = translate.Client()

    po = polib.POFile()
    po.metadata = pot.metadata

    for count, entry in enumerate(po, start=1):
        pos = client.translate(
           cook_string1(entry.msgid, count),
           source_language='en',
           target_language=lang)
        print(pos)
        entry.msgstr = cook_string2(pos)
        po.append(pos)
    po.save('%s.po' % lang)


to_lang("de")
