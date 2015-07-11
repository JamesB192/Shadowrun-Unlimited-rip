<?php 
$K=[
 ["520d1cf53363310828002728", "52c98244336331280d007842"]
,["520d1da53363310828002766", "52c98244336331280d007843"]
,["520d230a3363310828002795", "52c98244336331280d007844"]
,["52c5a2f43363311403000bf3", "52c98244336331280d007845"]
,["52c5a2f43363311403000bf1", "52c98244336331280d007846"]
,["52c5a2f43363311403000bef", "52c98244336331280d007847"]
,["52c5a2f43363311403000bed", "52c98244336331280d007848"]
,["52c5a3033363311403000bf7", "52c98244336331280d007849"]
,["52c5a3083363311403000bf9", "52c98244336331280d00784a"]
,["52c5a3473363311403000bfb", "52c98244336331280d00784b"]
];
for($I=1;$I<11;$I++) { ?>
  branches {
    responseText: ""
    conditions {
      ops {
        functionName: "Comparison (bool)"
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "bool"
            }
            args {
              int_value: 0
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "IsOrIsNot"
            }
            args {
              int_value: 1
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
        functionName: "OR"
        args {
          call_value {
            functionName: "Comparison (Prop)"
            args {
              call_value {
                functionName: "Get Map Item (Prop)"
                args {
                  string_value: "<?php printf("%s", $K[$I-1][0]); ?>"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "IsOrIsNot"
                }
                args {
                  int_value: 1
                }
              }
            }
            args {
              call_value {
                functionName: "Triggering Prop"
              }
            }
          }
        }
        args {
          call_value {
            functionName: "Comparison (Prop)"
            args {
              call_value {
                functionName: "Get Map Item (Prop)"
                args {
                  string_value: "<?php printf("%s", $K[$I-1][1]); ?>"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "IsOrIsNot"
                }
                args {
                  int_value: 1
                }
              }
            }
            args {
              call_value {
                functionName: "Triggering Prop"
              }
            }
          }
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (int)"
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
          int_value: <?php printf("%u", $I); ?>
        }
      }
    }
    nextNodeIndex: -1
    comment: "<?php printf("%u", $I); ?>"
  }
<?php } ?>
