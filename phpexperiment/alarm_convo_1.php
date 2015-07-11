<?php 
$K=["FAKE"
,"52c5a97a3363311403000c14"
,"52c5a96d3363311403000c15"
,"52c5a9723363311403000c16"
,"52c5a9773363311403000c17"
,"52c5a97a3363311403000c18"
];
for($I=1;$I<6;$I++) { ?>
  branches {
    responseText: ""
    conditions {
      ops {
        functionName: "Comparison (int)"
        args {
          int_value: <?php print $I; ?>
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "Comparison Ops"
            }
            args {
              int_value: 0
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Alarm_Panel_ID"
            }
          }
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Alarm_Panel_Disabled_<?php print $I; ?>"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "bool"
            }
            args {
              int_value: 1
            }
          }
        }
      }
      ops {
        functionName: "Enable/Disable Interactable Object"
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "EnableOrDisable"
            }
            args {
              int_value: 1
            }
          }
        }
        args {
          call_value {
            functionName: "Get Map Item (InteractableObject)"
            args {
              string_value: "<?php print $K[$I]; ?>"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
    comment: "<?php print $I; ?>"
  }
<?php } ?>
