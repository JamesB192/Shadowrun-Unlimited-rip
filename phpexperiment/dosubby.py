#!/usr/bin/python
"""substitute top level protobuf blocks in say one or more scenes."""
import os
from dosubby2 import original_text_fragments, replacement_text_fragments

MASTER_ENCODING = "latin-1"


common = min(
    len(original_text_fragments), len(replacement_text_fragments)
)


def descend(file_name):
    """Given a pathname recursively process .txt files."""
    if os.path.isdir(file_name):
        for directory_entry in os.listdir(file_name):
            descend(os.path.join(file_name, directory_entry))
    elif os.path.isfile(file_name) and file_name.endswith(".txt"):
        file_edit(file_name)


def file_edit(fname):
    """Given a filename for a <4MB file replace protobuf blocks."""
    lenny = 0
    result = []
    count = 0
    uncount = 0

    with open(fname, "r", encoding=MASTER_ENCODING) as file_handle:
        blob = file_handle.read()

    for line_end in ["\n", "\r\n", "\r"]:
        splitter = line_end + "}" + line_end
        chunks = blob.split(splitter)
        lenny = len(chunks)
        if lenny > 1:
            break

    for chunk in chunks:
        swapped_out = False
        for matcher in range(common):
            if original_text_fragments[matcher] in chunk:
                count += 1
                result += [replacement_text_fragments[matcher]]
                swapped_out = True
        if not swapped_out:
            result += [chunk]
            uncount += 1
    print(
        "%4d\t%4d\t%4d\t%s"
        % (count, uncount, (len(chunks) - count - uncount), fname)
    )
    with open(fname, "w", encoding=MASTER_ENCODING) as file_handle:
        file_handle.write(splitter.join(result))


if __name__ == "__main__":
    from sys import argv, stderr

    if len(argv) < 2:
        print(
            "%s: substitue (a) new protobuf fragment(s)"
            " for those matching old fragments" % argv[0],
            file=stderr,
        )
    else:
        for file in argv[1:]:
            descend(file)
