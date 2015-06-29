nodes {
  idRef {
    id: "537d7687303266d80e004bff"
  }
  index: <?php echo $a[0]."\n"; ?>
  text: "<?php echo $a[4]."\"\n";
	foreach($a[5] as $b) {
		printf("  branches {\n    responseText: \"%s\"\n    nextNodeIndex: %u\n  }\n", $b, ($a[0]+2));
	  }
?>
  branches {
    responseText: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
    nextNodeIndex: <?php printf("%u", ($a[0]+1)); ?>
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: <?php printf("%u", $exit); ?>
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
  actions {
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Pay"
          }
        }
      }
      args {
        int_value: <?php echo $a[1],"\n"; ?>
      }
    }
  }
}
<?php

/* 0 Nodenumber
 * 1 pay (in nuyen)
 * 2 elevator pitch
 * 3 short tag
 * 4 description
 * 5 responses
 * 6 mission type extra
 */
?>
