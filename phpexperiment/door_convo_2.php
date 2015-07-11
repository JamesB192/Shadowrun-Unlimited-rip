<?php for($I=1;$I<12;$I++) { ?>
  branches {
    responseText: ""
    conditions {
      ops {
        functionName: "Comparison (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Door_ID"
            }
          }
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
          int_value: <?php printf("%u", $I); ?>
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
              string_value: "Door_<?php printf("%u", $I); ?>_Open"
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
        functionName: "Suspend Team\'s Turn"
        args {
          call_value {
            functionName: "Get Preset Value (string)"
            args {
              string_value: "FactionList"
            }
            args {
              int_value: 0
            }
          }
        }
        args {
          int_value: 1
        }
        args {
          call_value {
            functionName: "Get Map Item (SceneDimension)"
            args {
              string_value: "Default"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
    comment: "<?php printf("%u", $I); ?>"
  }
<?php } ?>
