  branches {
    responseText: ""
    conditions {
      ops {
        functionName: "Comparison (int)"
        args {
          int_value: <?php /* 6 */ ?>
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
            functionName: "Get Variable (int)"
            args {
              string_value: "PayData"
            }
          }
        }
      }
      ops {
        functionName: "Evaluate If Actor Has Item"
        args {
          call_value {
            functionName: "Specific Actor"
            args {
              call_value {
                functionName: "Get Map Item (Player)"
                args {
                  int_value: 0
                }
              }
            }
            args {
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "HasOrHasNot"
            }
            args {
              int_value: 1
            }
          }
        }
        args {
          call_value {
            functionName: "Get Map Item (Item)"
            args {
              string_value: "Pay Data <?php /* 24 */ ?>"
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
            functionName: "Get Variable (int)"
            args {
              string_value: "PayData"
            }
          }
        }
        args {
          int_value: <?php /* 7 */ ?>
        }
      }
    }
    nextNodeIndex: 2
    auxiliaryLink: true
    comment: "<?php /* 67 */ ?>"
  }

