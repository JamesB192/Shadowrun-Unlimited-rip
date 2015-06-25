<?php

/* 0 Nodenumber
 * 1 pay (in nuyen)
 * 2 elevator pitch
 * 3 short tag
 * 4 description
 * 5 responses
 * 6 mission type extra
 */
$a=$missions[$that[0]];
$b=$missions[$that[1]];
$c=$missions[$that[2]];
?>nodes {
  idRef {
    id: "537d0e16303266d80e0027ac"
  }
  index: 306
  text: "I\'ve got <?php /* a digital smash and grab, a suit that wants an escort home, and an elf who needs a package picked up */
printf("%s, %s and %s.", $a[2], $b[2], $c[2])
?>."
  branches {
    responseText: "Tell me about <?php print $a[3]; ?>"
    nextNodeIndex: <?php print $a[0]; ?>
  }
  branches {
    responseText: "Tell me about <?php print $c[3]; ?>"
    nextNodeIndex: <?php print $b[0]; ?>
    auxiliaryLink: true
  }
  branches {
    responseText: "Tell me about <?php print $c[3]; ?>"
    nextNodeIndex: <?php print $c[0]; ?>
    auxiliaryLink: true
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: 314
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}

