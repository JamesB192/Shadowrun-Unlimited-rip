#!/usr/bin/python
import polib
from re import sub
import sys


def compiler(lang):
    sys.stderr.write("compile")
    po = polib.pofile('%s.po' % lang)
    modata = po.to_binary()
    po.save_as_mofile('%s.mo' % lang)
    sys.stderr.write("d\t")


def strip_string(strung):
    tmp = strung
    for clause in ('CC', 'GM'):
        tmp = sub('\{\{%s\}\} ' % clause, '{{%s}}' % clause, tmp)
        tmp = sub(' \{\{\/ %s\}\}' % clause, '{{\/%s}}' % clause, tmp)
    return tmp


def strip_po(lang):
    sys.stderr.write("strip")
    po = polib.pofile('%s.po' % lang)
    for entry in po.translated_entries():
        entry.msgstr = strip_string(entry.msgstr)
    po.save('%s.po' % lang)
    sys.stderr.write("ped\t")


if __name__ == "__main__":
    for lang in ('de', 'es', 'fr', 'ru'):
        sys.stderr.write("%s\t" % lang)
#        strip_po(lang)
        compiler(lang)
        sys.stderr.write("\n")
