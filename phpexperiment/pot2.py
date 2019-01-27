#!/usr/bin/python
from google.cloud import translate
import math
import polib
import re


def cook_string1(strung, id):
    tmp = strung
    tmp = re.sub(r'\{{2}(.*?)\}{2}', r'<span translate="no">{{\1}}</span>', tmp)
    tmp = re.sub(r'\$\((.*?)\)', r'<span translate="no">$(\1)</span>', tmp)
    tmp = '<html><body><code id="i_%04d">%s</code></body></html>' % (id, tmp)
    return tmp

def cook_string2(strung):
    tmp = re.sub(r'\<[^\>]*\>', r'', strung)
    return tmp


def to_lang(lang):
    po = polib.pofile('fake.pot' % lang)
    client = translate.Client()

    do = polib.POFile()
    do.metadata = po.metadata

    count = 1
    for entry in po:
        tout = client.translate(cook_string1(entry.msgid, count),
                                source_language='en',
                                target_language=lang)
        print(tout)
        entry.msgstr = cook_string2(tout)
        to.append(tentry)
        count += 1
        to.save('%s.po' % lang)


to_lang('de')
