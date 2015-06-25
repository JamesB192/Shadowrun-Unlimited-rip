  branches {
    responseText: "{{GM}}<?php printf("DELETE %s - %sMP", $item_title, $item_size); ?>{{/GM}}"
    conditions {
      ops {
        functionName: "Evaluate If Actor Has Item"
        args {
          call_value {
            functionName: "Specific Actor"
            args {
              call_value {
                functionName: "Triggering Actor"
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
              string_value: "Pay Data <?php echo $item_id; ?>"
            }
          }
        }
      }
    }
    actions {
      ops {
        functionName: "Remove Item from Actor"
        args {
          call_value {
            functionName: "Get Map Item (Item)"
            args {
              string_value: "Pay Data <?php echo $item_id; ?>"
            }
          }
        }
        args {
          call_value {
            functionName: "Specific Actor"
            args {
              call_value {
                functionName: "Triggering Actor"
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
              string_value: "WithOrWithout"
            }
            args {
              int_value: 1
            }
          }
        }
      }
      ops {
        functionName: "Add To Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Deck_Storage_FileCount"
            }
          }
        }
        args {
          int_value: -1
        }
      }
      ops {
        functionName: "Add To Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Deck_Storage_Used"
            }
          }
        }
        args {
          int_value: <?php echo -($item_size); ?>
        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "<?php echo $item_id; ?>"
  }

