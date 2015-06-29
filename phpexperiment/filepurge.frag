idRef {
  id: "54a75c74646632f817006099"
}
ui_name: "deck storage purge - filled"
nodes {
  idRef {
    id: "54a771a36466324026002c4d"
  }
  index: 0
  text: "cyberdeck file cull v0.1-alpha1\nMMLIII Micodeck Inc.\nRedmond, UCAS"
  branches {
    responseText: "{{GM}}Cancel{{/GM}}"
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}DELETE Local Survey Datafile - 10MP{{/GM}}"
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
              string_value: "Pay Data 1"
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
              string_value: "Pay Data 1"
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
          int_value: -10        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "1"
  }

  branches {
    responseText: "{{GM}}DELETE Local Survey Datafile - 10MP{{/GM}}"
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
              string_value: "Pay Data 1a"
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
              string_value: "Pay Data 1a"
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
          int_value: -10        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "1a"
  }

  branches {
    responseText: "{{GM}}DELETE Local Survey Datafile - 10MP{{/GM}}"
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
              string_value: "Pay Data 1b"
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
              string_value: "Pay Data 1b"
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
          int_value: -10        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "1b"
  }

  branches {
    responseText: "{{GM}}DELETE Employee Scheduling Datafile - 10MP{{/GM}}"
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
              string_value: "Pay Data 2"
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
              string_value: "Pay Data 2"
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
          int_value: -10        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "2"
  }

  branches {
    responseText: "{{GM}}DELETE Employee Scheduling Datafile - 10MP{{/GM}}"
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
              string_value: "Pay Data 2a"
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
              string_value: "Pay Data 2a"
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
          int_value: -10        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "2a"
  }

  branches {
    responseText: "{{GM}}DELETE Employee Scheduling Datafile - 10MP{{/GM}}"
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
              string_value: "Pay Data 2b"
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
              string_value: "Pay Data 2b"
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
          int_value: -10        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "2b"
  }

  branches {
    responseText: "{{GM}}DELETE Email Data - 10MP{{/GM}}"
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
              string_value: "Pay Data 3"
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
              string_value: "Pay Data 3"
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
          int_value: -10        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "3"
  }

  branches {
    responseText: "{{GM}}DELETE Email Data - 10MP{{/GM}}"
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
              string_value: "Pay Data 3a"
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
              string_value: "Pay Data 3a"
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
          int_value: -10        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "3a"
  }

  branches {
    responseText: "{{GM}}DELETE Email Data - 10MP{{/GM}}"
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
              string_value: "Pay Data 3b"
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
              string_value: "Pay Data 3b"
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
          int_value: -10        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "3b"
  }

  branches {
    responseText: "{{GM}}DELETE Security Procedures - 20MP{{/GM}}"
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
              string_value: "Pay Data 4"
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
              string_value: "Pay Data 4"
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
          int_value: -20        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "4"
  }

  branches {
    responseText: "{{GM}}DELETE Security Procedures - 20MP{{/GM}}"
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
              string_value: "Pay Data 4a"
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
              string_value: "Pay Data 4a"
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
          int_value: -20        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "4a"
  }

  branches {
    responseText: "{{GM}}DELETE Security Procedures - 20MP{{/GM}}"
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
              string_value: "Pay Data 4b"
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
              string_value: "Pay Data 4b"
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
          int_value: -20        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "4b"
  }

  branches {
    responseText: "{{GM}}DELETE Email Data - 20MP{{/GM}}"
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
              string_value: "Pay Data 5"
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
              string_value: "Pay Data 5"
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
          int_value: -20        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "5"
  }

  branches {
    responseText: "{{GM}}DELETE Email Data - 20MP{{/GM}}"
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
              string_value: "Pay Data 5a"
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
              string_value: "Pay Data 5a"
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
          int_value: -20        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "5a"
  }

  branches {
    responseText: "{{GM}}DELETE Email Data - 20MP{{/GM}}"
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
              string_value: "Pay Data 5b"
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
              string_value: "Pay Data 5b"
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
          int_value: -20        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "5b"
  }

  branches {
    responseText: "{{GM}}DELETE System Activity - 20MP{{/GM}}"
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
              string_value: "Pay Data 6"
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
              string_value: "Pay Data 6"
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
          int_value: -20        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "6"
  }

  branches {
    responseText: "{{GM}}DELETE System Activity - 20MP{{/GM}}"
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
              string_value: "Pay Data 6a"
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
              string_value: "Pay Data 6a"
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
          int_value: -20        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "6a"
  }

  branches {
    responseText: "{{GM}}DELETE System Activity - 20MP{{/GM}}"
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
              string_value: "Pay Data 6b"
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
              string_value: "Pay Data 6b"
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
          int_value: -20        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "6b"
  }

  branches {
    responseText: "{{GM}}DELETE Corporate Profile - 30MP{{/GM}}"
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
              string_value: "Pay Data 7"
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
              string_value: "Pay Data 7"
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
          int_value: -30        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "7"
  }

  branches {
    responseText: "{{GM}}DELETE Corporate Profile - 30MP{{/GM}}"
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
              string_value: "Pay Data 7a"
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
              string_value: "Pay Data 7a"
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
          int_value: -30        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "7a"
  }

  branches {
    responseText: "{{GM}}DELETE Corporate Profile - 30MP{{/GM}}"
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
              string_value: "Pay Data 8a"
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
              string_value: "Pay Data 8a"
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
          int_value: -30        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "8a"
  }

  branches {
    responseText: "{{GM}}DELETE Corporate Profile - 30MP{{/GM}}"
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
              string_value: "Pay Data 8a"
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
              string_value: "Pay Data 8a"
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
          int_value: -30        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "8a"
  }

  branches {
    responseText: "{{GM}}DELETE Long Range Goals - 30MP{{/GM}}"
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
              string_value: "Pay Data 9"
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
              string_value: "Pay Data 9"
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
          int_value: -30        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "9"
  }

  branches {
    responseText: "{{GM}}DELETE Long Range Goals - 30MP{{/GM}}"
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
              string_value: "Pay Data 9a"
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
              string_value: "Pay Data 9a"
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
          int_value: -30        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "9a"
  }

  branches {
    responseText: "{{GM}}DELETE Long Range Goals - 30MP{{/GM}}"
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
              string_value: "Pay Data 10"
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
              string_value: "Pay Data 10"
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
          int_value: -30        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "10"
  }

  branches {
    responseText: "{{GM}}DELETE Long Range Goals - 30MP{{/GM}}"
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
              string_value: "Pay Data 10a"
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
              string_value: "Pay Data 10a"
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
          int_value: -30        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "10a"
  }

  branches {
    responseText: "{{GM}}DELETE Capital Expenditure - 30MP{{/GM}}"
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
              string_value: "Pay Data 11"
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
              string_value: "Pay Data 11"
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
          int_value: -30        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "11"
  }

  branches {
    responseText: "{{GM}}DELETE Capital Expenditure - 50MP{{/GM}}"
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
              string_value: "Pay Data 12"
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
              string_value: "Pay Data 12"
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
          int_value: -50        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "12"
  }

  branches {
    responseText: "{{GM}}DELETE Capital Expenditure - 50MP{{/GM}}"
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
              string_value: "Pay Data 12a"
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
              string_value: "Pay Data 12a"
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
          int_value: -50        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "12a"
  }

  branches {
    responseText: "{{GM}}DELETE Capital Expenditure - 50MP{{/GM}}"
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
              string_value: "Pay Data 12b"
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
              string_value: "Pay Data 12b"
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
          int_value: -50        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "12b"
  }

  branches {
    responseText: "{{GM}}DELETE Security Expenses - 50MP{{/GM}}"
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
              string_value: "Pay Data 13"
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
              string_value: "Pay Data 13"
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
          int_value: -50        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "13"
  }

  branches {
    responseText: "{{GM}}DELETE Security Expenses - 50MP{{/GM}}"
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
              string_value: "Pay Data 13a"
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
              string_value: "Pay Data 13a"
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
          int_value: -50        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "13a"
  }

  branches {
    responseText: "{{GM}}DELETE Security Expenses - 50MP{{/GM}}"
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
              string_value: "Pay Data 14"
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
              string_value: "Pay Data 14"
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
          int_value: -50        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "14"
  }

  branches {
    responseText: "{{GM}}DELETE Security Expenses - 50MP{{/GM}}"
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
              string_value: "Pay Data 14a"
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
              string_value: "Pay Data 14a"
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
          int_value: -50        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "14a"
  }

  branches {
    responseText: "{{GM}}DELETE Local Accounts - 50MP{{/GM}}"
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
              string_value: "Pay Data 15"
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
              string_value: "Pay Data 15"
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
          int_value: -50        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "15"
  }

  branches {
    responseText: "{{GM}}DELETE Local Accounts - 50MP{{/GM}}"
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
              string_value: "Pay Data 15a"
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
              string_value: "Pay Data 15a"
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
          int_value: -50        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "15a"
  }

  branches {
    responseText: "{{GM}}DELETE Local Accounts - 75MP{{/GM}}"
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
              string_value: "Pay Data 16"
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
              string_value: "Pay Data 16"
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
          int_value: -75        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "16"
  }

  branches {
    responseText: "{{GM}}DELETE Local Accounts - 75MP{{/GM}}"
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
              string_value: "Pay Data 16a"
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
              string_value: "Pay Data 16a"
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
          int_value: -75        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "16a"
  }

  branches {
    responseText: "{{GM}}DELETE Local Accounts - 75MP{{/GM}}"
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
              string_value: "Pay Data 16b"
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
              string_value: "Pay Data 16b"
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
          int_value: -75        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "16b"
  }

  branches {
    responseText: "{{GM}}DELETE Corporate Accounts - 75MP{{/GM}}"
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
              string_value: "Pay Data 17"
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
              string_value: "Pay Data 17"
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
          int_value: -75        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "17"
  }

  branches {
    responseText: "{{GM}}DELETE Corporate Accounts - 75MP{{/GM}}"
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
              string_value: "Pay Data 17a"
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
              string_value: "Pay Data 17a"
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
          int_value: -75        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "17a"
  }

  branches {
    responseText: "{{GM}}DELETE Corporate Accounts - 75MP{{/GM}}"
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
              string_value: "Pay Data 17b"
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
              string_value: "Pay Data 17b"
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
          int_value: -75        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "17b"
  }

  branches {
    responseText: "{{GM}}DELETE Bank Account Numbers - 75MP{{/GM}}"
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
              string_value: "Pay Data 18"
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
              string_value: "Pay Data 18"
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
          int_value: -75        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "18"
  }

  branches {
    responseText: "{{GM}}DELETE Bank Account Numbers - 75MP{{/GM}}"
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
              string_value: "Pay Data 18a"
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
              string_value: "Pay Data 18a"
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
          int_value: -75        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "18a"
  }

  branches {
    responseText: "{{GM}}DELETE Bank Account Numbers - 75MP{{/GM}}"
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
              string_value: "Pay Data 18b"
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
              string_value: "Pay Data 18b"
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
          int_value: -75        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "18b"
  }

  branches {
    responseText: "{{GM}}DELETE Bank Account Numbers - 100MP{{/GM}}"
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
              string_value: "Pay Data 19"
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
              string_value: "Pay Data 19"
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
          int_value: -100        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "19"
  }

  branches {
    responseText: "{{GM}}DELETE Bank Account Numbers - 100MP{{/GM}}"
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
              string_value: "Pay Data 19a"
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
              string_value: "Pay Data 19a"
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
          int_value: -100        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "19a"
  }

  branches {
    responseText: "{{GM}}DELETE Prototype Blueprints - 100MP{{/GM}}"
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
              string_value: "Pay Data 20"
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
              string_value: "Pay Data 20"
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
          int_value: -100        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "20"
  }

  branches {
    responseText: "{{GM}}DELETE Prototype Blueprints - 100MP{{/GM}}"
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
              string_value: "Pay Data 20a"
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
              string_value: "Pay Data 20a"
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
          int_value: -100        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "20a"
  }

  branches {
    responseText: "{{GM}}DELETE Classified Corporate Files - 100MP{{/GM}}"
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
              string_value: "Pay Data 21"
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
              string_value: "Pay Data 21"
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
          int_value: -100        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "21"
  }

  branches {
    responseText: "{{GM}}DELETE Open Projects Data - 100MP{{/GM}}"
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
              string_value: "Pay Data 22"
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
              string_value: "Pay Data 22"
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
          int_value: -100        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "22"
  }

  branches {
    responseText: "{{GM}}DELETE Prototype Blueprints - 100MP{{/GM}}"
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
              string_value: "Pay Data 23 "
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
              string_value: "Pay Data 23 "
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
          int_value: -100        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "23 "
  }

  branches {
    responseText: "{{GM}}DELETE Prototype Blueprints - 100MP{{/GM}}"
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
              string_value: "Pay Data 24"
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
              string_value: "Pay Data 24"
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
          int_value: -100        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "24"
  }

  branches {
    responseText: "{{GM}}DELETE Classified Corporate Files - 100MP{{/GM}}"
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
              string_value: "Pay Data 25"
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
              string_value: "Pay Data 25"
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
          int_value: -100        }
      }
    }
    nextNodeIndex: 0
    hideIfUnavailable: true
    onlyOnce: false
    idRef {
      id: "54a775ae6466324026002c72"
    }
    auxiliaryLink: true
    comment: "25"
  }

  nodeType: ConversationNodeType_Simple
}
roots {
  responseText: ""
  nextNodeIndex: 0
}

