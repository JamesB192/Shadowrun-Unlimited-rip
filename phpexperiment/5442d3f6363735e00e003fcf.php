idRef {
  id: "5442d3f6363735e00e003fcf"
}
ui_name: "Run Generator"
nodes {
  idRef {
    id: "541e09a23864610810004e80"
  }
  index: 0
  text: ""
  branches {
    responseText: ""
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
              string_value: "Run_Gen_ID"
            }
          }
        }
        args {
          call_value {
            functionName: "Random (int)"
            args {
              int_value: 1
            }
            args {
              int_value: 8
            }
          }
        }
      }
    }
    nextNodeIndex: 1
    comment: "Sets the random run variable"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "541e088c3864610810004e5e"
  }
  index: 1
  text: "I have a couple contracts available."
  branches {
    responseText: "Corporate Sabotage"
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
              string_value: "Run_Gen_ID"
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
          int_value: 1
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Telestrian RD"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Sabotage"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Northside"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to use the stuff stolen from Generax to sabotage the vats in the Bottling Plant."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I need to break into Telestrian R&D and sabotage their reactor."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 1800
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 3
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "High Security"
        }
      }
    }
    nextNodeIndex: 2
    hideIfUnavailable: true
    comment: "Telestrian R&D"
  }
  branches {
    responseText: "Espionage"
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
              string_value: "Run_Gen_ID"
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
          int_value: 2
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "AG Chemicals"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Espionage"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Johnson Northside"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Redmond"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to deliver these hard-docs to the client in Northside."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I have been hired to break into AG Chemical in Northside, and steal some valuable hard-docs."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 2500
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 3
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "High Security"
        }
      }
    }
    nextNodeIndex: 4
    hideIfUnavailable: true
    comment: "AG Chemicals"
  }
  branches {
    responseText: "Acquisitions"
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
              string_value: "Run_Gen_ID"
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
          int_value: 3
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Generax"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Theft"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Johnson Northside"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Northside"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to deliver this item to the client in Northside."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I have been hired to break into Generax in Northside, and steal some valuable goods."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 2000
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 3
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "High Security"
        }
      }
    }
    nextNodeIndex: 6
    hideIfUnavailable: true
    comment: "Generax Labs"
  }
  branches {
    responseText: "Corporate Sabotage"
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
              string_value: "Run_Gen_ID"
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
          int_value: 4
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Generax"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Pick Up"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Sabotage"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Bottling Plant"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to use the stuff stolen from Generax to sabotage the vats in the Bottling Plant."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I need to steal a chemical from Generax labs in Northside and sabotage the vats in the Bottling Plant."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 3750
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 4
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "High Security"
        }
      }
    }
    nextNodeIndex: 8
    hideIfUnavailable: true
    comment: "Generax/Bottling"
  }
  branches {
    responseText: "Espionage"
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
              string_value: "Run_Gen_ID"
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
          int_value: 5
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Bottling Plant"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Espionage"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Johnson Redmond"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Redmond"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to deliver these hard-docs to the client in the Redmond Barrens."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I have been hired to break into the Bottling Plan at the Docks, and steal some valuable hard-docs."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 1750
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 3
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "High Security"
        }
      }
    }
    nextNodeIndex: 10
    hideIfUnavailable: true
    comment: "Bottling Plant"
  }
  branches {
    responseText: "Theft"
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
              string_value: "Run_Gen_ID"
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
          int_value: 6
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Bottling Plant"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Theft"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Johnson Redmond"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Redmond"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to deliver the goods to the client in the Redmond Barrens."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I have been hired to break into the Bottling Plan at the Docks, and steal an item of an undisclosed nature."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 1750
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 3
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "High Security"
        }
      }
    }
    nextNodeIndex: 12
    hideIfUnavailable: true
    comment: "Bottling Plant"
  }
  branches {
    responseText: "Frame Up"
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
              string_value: "Run_Gen_ID"
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
          int_value: 7
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Bottling Plant"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Theft"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Plant Evidence"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Generax"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to break into Generax Labs, and place this stolen item to complete the frame up."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I have been hired to break into the Bottling Plan at the Docks to steal an item to be used in a frame up."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 3750
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 4
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "High Security"
        }
      }
    }
    nextNodeIndex: 14
    hideIfUnavailable: true
    comment: "Bottling Plant / Generax"
  }
  branches {
    responseText: "Frame Up"
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
              string_value: "Run_Gen_ID"
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
          int_value: 8
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Club Penumbra"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Pick Up"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Sabotage"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Plant Evidence"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Bottling Plant"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
          string_value: "Generax"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to break into the Bottling Plan at the Docks and sabotage their current production."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
          string_value: "I need to break into Generax Labs, and place this forged evidence to complete the frame up."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I need to pick up the supplies from Club Penumbra."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 4100
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 4
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "High Security"
        }
      }
    }
    nextNodeIndex: 16
    hideIfUnavailable: true
    comment: "Bottling Plant / Generax"
  }
  branches {
    responseText: "{{GM}}Decking{{/GM}} A Simple Download Job"
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
              string_value: "Run_Gen_ID"
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
          int_value: 1
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
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          int_value: 500
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Simsense System"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Run_Description"
            }
          }
        }
        args {
          string_value: "Download"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "Matrix"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I need to hack into a Simsense Company and download a program they have been working on."
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "MatrixRunComplete"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Download"
        }
      }
    }
    nextNodeIndex: 18
    hideIfUnavailable: true
    comment: "Simsense System"
  }
  branches {
    responseText: "{{GM}}Decking{{/GM}} A Simple Editing Job"
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
              string_value: "Run_Gen_ID"
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
          int_value: 2
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
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          int_value: 1250
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Simsense System"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Run_Description"
            }
          }
        }
        args {
          string_value: "Editing"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "Matrix"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I need to hack into a Simsense Company and Edit a product they are about to release."
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "MatrixRunComplete"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Edit"
        }
      }
    }
    nextNodeIndex: 20
    hideIfUnavailable: true
    comment: "Simsense System"
  }
  branches {
    responseText: "{{GM}}Decking{{/GM}} A Simple Download Job"
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
              string_value: "Run_Gen_ID"
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
          int_value: 3
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
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          int_value: 500
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "PI System"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "Matrix"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I need to hack into a PI agencty and download the intel they have on a target."
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "MatrixRunComplete"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Download"
        }
      }
    }
    nextNodeIndex: 22
    hideIfUnavailable: true
    comment: "PI System"
  }
  branches {
    responseText: "{{GM}}Decking{{/GM}} A Simple Editing Job"
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
              string_value: "Run_Gen_ID"
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
          int_value: 4
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
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          int_value: 1250
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "PI System"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "Matrix"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I need to hack into a PI agencty and Edit a dissatisfied customers account information."
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "MatrixRunComplete"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Edit"
        }
      }
    }
    nextNodeIndex: 24
    hideIfUnavailable: true
    comment: "PI System"
  }
  branches {
    responseText: "{{GM}}Decking{{/GM}} A Simple Delete Job"
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
              string_value: "Run_Gen_ID"
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
          int_value: 5
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
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          int_value: 1250
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "PI System"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "Matrix"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I need to hack into a PI agencty and Delete the dossier of one of his targets."
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "MatrixRunComplete"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Delete"
        }
      }
    }
    nextNodeIndex: 26
    hideIfUnavailable: true
    comment: "PI System"
  }
  branches {
    responseText: "{{GM}}Decking{{/GM}} A Simple Download Job"
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
              string_value: "Run_Gen_ID"
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
          int_value: 6
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
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          int_value: 500
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Legal Firm System"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "Matrix"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I need to hack into a legal firm and download some incriminating data from the secure management files."
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "MatrixRunComplete"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Download"
        }
      }
    }
    nextNodeIndex: 28
    hideIfUnavailable: true
    comment: "Legal Firm System"
  }
  branches {
    responseText: "{{GM}}Decking{{/GM}} A Simple Editing Job"
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
              string_value: "Run_Gen_ID"
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
          int_value: 7
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
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          int_value: 1250
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Legal Firm System"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "Matrix"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I need to hack into a Legal Firm, and tamper with some evidence in an ongoing case."
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "MatrixRunComplete"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Edit"
        }
      }
    }
    nextNodeIndex: 30
    hideIfUnavailable: true
    comment: "Legal Firm System"
  }
  branches {
    responseText: "{{GM}}Decking{{/GM}} A Simple Delete Job"
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
              string_value: "Run_Gen_ID"
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
          int_value: 8
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
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f169b733633124330018bf"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          int_value: 1250
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Legal Firm System"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "Matrix"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I need to hack into a Legal Firm and delete an entire case file to make a lawyer look bad."
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "MatrixRunComplete"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Delete"
        }
      }
    }
    nextNodeIndex: 32
    hideIfUnavailable: true
    comment: "Legal Firm System"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 2
  text: "I have a job here involving some {{CC}}Sabotage{{/CC}}. Break into Telestrian R&D in Northside, and install this virus into their reactor control console. Within moments the reactor will be put out of commission for a few weeks. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 3
  }
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 3
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 4
  text: "I have a job here involving some corporate {{CC}}Espionage{{/CC}}. It\'s a simple run: break into AG Chemicals in Northside, steal some hard-docs and deliver them to the client. He\'ll be waiting in Northside for you. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 5
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 5
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 6
  text: "I have a job here involving a little {{CC}}Theft{{/CC}}. It\'s a simple run: break into Generax Labs in Northside, steal some goods and deliver them to the client. He\'ll be waiting in Northside for you. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 7
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 7
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 8
  text: "I have a job here involving some {{CC}}Sabotage{{/CC}}. It\'s a simple run: break into Generax Labs in Northside, steal some chemical, then dump it into the vats in the Bottling Plant at the Docks. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 9
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 9
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 10
  text: "I have a job here involving some corporate {{CC}}Espionage{{/CC}}. It\'s a simple run: break into the Bottling Plant down at the docks, steal some hard-docs and deliver them to the client. He\'ll be waiting in Redmond for you. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 11
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 11
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 12
  text: "I have a job here involving some corporate {{CC}}Espionage{{/CC}}. It\'s a simple run: break into the Bottling Plant down at the docks, steal some hard-docs and deliver them to the client. He\'ll be waiting in Redmond for you. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 13
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 13
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 14
  text: "I have a job here involving a {{CC}}Frame Up{{/CC}}. Break into the Bottling Plant down at the docks, and steal a marked item. Next infiltrate Generax Labs, and place the item in the director\'s office. When the job\'s done, I\'ll let the client know. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 15
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 15
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 16
  text: "I have a job here involving a {{CC}}Frame Up{{/CC}}. Break into the Bottling Plant down at the docks, and sabotage their current production using this chemical mix. Next infiltrate Generax Labs, and place some fabricated evidence in the director\'s office. You will need to come see me in person to pick up the Chemical and the Fabricated Evidence. When the job\'s done, I\'ll let the client know. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 17
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 17
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 18
  text: "I have a decking job here. {{CC}}Download{{/CC}} a new program a local simsense company is producing. An interested party is willing to pay for a copy of that program. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 19
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 19
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 20
  text: "I have a decking job here. {{CC}}Edit{{/CC}} some new program a local simsense company is about to launch. Our client wants to damage the release of the product and hurt the company\'s bottom line. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 21
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 21
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 22
  text: "I have a decking job here. One of my clients, another runner, is after the same target as a local investigator and he wants all the intel the investigator has on the target. {{CC}}Download{{/CC}} intel and send it back to me. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 23
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 23
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 24
  text: "I have a decking job here. One of my clients is not very impressed with the PI he hires. He wants you to{{CC}}Edit{{/CC}} his account information, so the PI has no way of extracting payment for his shoddy work. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 25
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 25
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 26
  text: "I have a decking job here. One of my clients is being investigated by a local PI. He wants you to {{CC}}Delete{{/CC}} all the intel the detective has gathered, and all the back-ups. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 27
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 27
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 28
  text: "I have a decking job here. One of my clients would like you to hack the management files of the legal firm he works for and {{CC}}Download{{/CC}} some incriminating. He feels he might be able to leverage his way into a promotion. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 29
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 29
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 30
  text: "I have a decking job here. One of my clients would benefit greatly if the evidence involving a certain case were to be tampered with. Hack into the case files of the legal firm, {{CC}}Edit{{/CC}} and edit the information on the case. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 31
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 31
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 32
  text: "I have a decking job here. One of my clients would love to embarrass a rival co-worker. He wants you to {{CC}}Delete{{/CC}} all information his rival has gathered on the case he is working. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 33
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 33
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
      ops {
        functionName: "Send Event"
        args {
          call_value {
            functionName: "Get Map Item (Event)"
            args {
              string_value: "Spawn Objective Item"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "541e09a23864610810004e80"
  }
  index: 34
  text: ""
  branches {
    responseText: ""
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
              string_value: "Run_Gen_ID"
            }
          }
        }
        args {
          call_value {
            functionName: "Random (int)"
            args {
              int_value: 1
            }
            args {
              int_value: 8
            }
          }
        }
      }
    }
    nextNodeIndex: 35
    comment: "Sets the random run variable"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "541e088c3864610810004e5e"
  }
  index: 35
  text: "I have one contract available."
  branches {
    responseText: "Cleaning"
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
              string_value: "Run_Gen_ID"
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
          int_value: 1
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Puyallup Gang"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Cleaning"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Redmond"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to deliver these hard-docs to the client in the Redmond Barrens."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I have been hired to wipe out some gangers who are refusing to pay their dues in Puyallup."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 3
        }
      }
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
          int_value: 2500
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "Low Security"
        }
      }
    }
    nextNodeIndex: 36
    hideIfUnavailable: true
    comment: "Puyallup Gang"
  }
  branches {
    responseText: "Cleaning"
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
              string_value: "Run_Gen_ID"
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
          int_value: 2
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Private Hanger"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Cleaning"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Redmond"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to deliver these hard-docs to the client in the Redmond Barrens."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I have been hired to wipe out some thugs that are infesting a Private Hanger."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 3
        }
      }
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
          int_value: 2000
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "Low Security"
        }
      }
    }
    nextNodeIndex: 38
    hideIfUnavailable: true
    comment: "Private Hanger"
  }
  branches {
    responseText: "Cleaning"
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
              string_value: "Run_Gen_ID"
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
          int_value: 3
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Private Hanger"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Cleaning B"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Redmond"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to deliver these hard-docs to the client in the Redmond Barrens."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I have been hired to break up a business deal going down at a Private Hanger."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 3
        }
      }
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
          int_value: 2000
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
              int_value: 0
            }
          }
        }
      }
    }
    nextNodeIndex: 40
    hideIfUnavailable: true
    comment: "Private Hanger"
  }
  branches {
    responseText: "Wetwork"
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
              string_value: "Run_Gen_ID"
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
          int_value: 4
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Puyallup Gang"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Assassinate"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Redmond"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to deliver these hard-docs to the client in the Redmond Barrens."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I have been hired to kill a gang leader, running the apartment complex in Puyallup."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 3
        }
      }
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
          int_value: 2500
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "Low Security"
        }
      }
    }
    nextNodeIndex: 42
    hideIfUnavailable: true
    comment: "Puyallup Gang"
  }
  branches {
    responseText: "Wetwork"
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
              string_value: "Run_Gen_ID"
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
          int_value: 5
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Private Hanger"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Assassinate"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Redmond"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to deliver these hard-docs to the client in the Redmond Barrens."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I have been hired to kill my target at a Private Hanger before his helicopter arrives."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 3
        }
      }
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
          int_value: 2000
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
              int_value: 0
            }
          }
        }
      }
    }
    nextNodeIndex: 44
    hideIfUnavailable: true
    comment: "Private Hanger"
  }
  branches {
    responseText: "Cleaning"
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
              string_value: "Run_Gen_ID"
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
          int_value: 6
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Rat\'s Nest"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Cleaning"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Redmond"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to deliver these hard-docs to the client in the Redmond Barrens."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I have been hired to wipe out some vermin that are infesting the Rat\'s Nest."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 3
        }
      }
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
          int_value: 2000
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "Low Security"
        }
      }
    }
    nextNodeIndex: 46
    hideIfUnavailable: true
    comment: "Rat\'s Nest"
  }
  branches {
    responseText: "Recovery"
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
              string_value: "Run_Gen_ID"
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
          int_value: 7
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Puyallup Gang"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Gather Intel"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Rescue"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Escort C"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Rat\'s Nest"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
          string_value: "Private Hanger"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "The target is being held in the Rat\'s Nest. I need to extract him in one piece."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
          string_value: "The target is secured. The client has a chopper waiting in the Private Hanger outside of town."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I need to rescue a target, who\'s whereabouts are unknown. The Gangers in Puyallup will know..."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 4
        }
      }
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
          int_value: 3500
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 6
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 3
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
              int_value: 0
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "Low Security"
        }
      }
    }
    nextNodeIndex: 48
    hideIfUnavailable: true
    comment: "Puyallup Gang / Rat\'s Nest / Hanger"
  }
  branches {
    responseText: "Wetwork"
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
              string_value: "Run_Gen_ID"
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
          int_value: 8
        }
      }
    }
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
          string_value: "Telestrian RD"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
          string_value: "Assassinate"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
          string_value: "Complete"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
          string_value: "Northside"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
          string_value: "I need to use the stuff stolen from Generax to sabotage the vats in the Bottling Plant."
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
          string_value: "I need to break into Telestrian R&D and kill their head scientist."
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 3000
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 3
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 5
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Resistance"
            }
          }
        }
        args {
          int_value: 2
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Security-TripWires"
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
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current-Run-JobType"
            }
          }
        }
        args {
          string_value: "High Security"
        }
      }
    }
    nextNodeIndex: 50
    hideIfUnavailable: true
    comment: "Telestrian R&D"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 36
  text: "I have a job here involving some {{CC}}Cleaning{{/CC}}. I need someone to teach some gangers a lesson in Puyallup. They run an apartment complex there. Go in, and leave none of the ones you catch alive. That should teach a lesson to the rest of their crew. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 37
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 37
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 38
  text: "I have a job here involving some {{CC}}Cleaning{{/CC}}. My client has heard that some thugs have taken up residence in the hanger he uses. He wants the cleared out with extreme prejudice. The hanger is just outside the city, so you will need a driver. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 39
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 39
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 40
  text: "I have a job here involving some {{CC}}Cleaning{{/CC}}. My client heard there is some sort of deal going down on a Private Hanger just outside the city. Your job is to make sure no one survives the meeting. You\'re going to need a driver to get out there in a timely manner. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 41
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 41
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 42
  text: "I\'m in need of a specialist for some {{CC}}Wetwork{{/CC}}. There\'s a new leader among the gangers in Puyallup. He\'s taking the gang in a direction Mr. Boone does not agree with. Go in, and remove this punk from the picture. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 43
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 43
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 44
  text: "I\'m in need of a specialist for some {{CC}}Wetwork{{/CC}}. My client wants a certain rival dead before he can leave the city. Right now he\'s holed up in a Private Hanger outside of the city, waiting for his helicopter to arrive. You\'re going to need a driver to get out there in a timely manner. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 45
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 45
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 46
  text: "I have a job here involving some {{CC}}Cleaning{{/CC}}. My client is having an issue with some thugs that have taken up residence in the Rat\'s Nest, and are bothering the locals. He wants the cleared out with extreme prejudice. The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 47
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 47
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 48
  text: "I have a job here involving the {{CC}}Recovery{{/CC}} of a hostage. Not sure who or where the target is, but we know he is being held for ransom by some gangers. Our client would like him recovered, and delivered safely to the Private Hanger outside of the city, where a helicopter will be waiting to extract him. If I were you I would poke around the gang ran apartment is Puyallup for some intel. And you\'re going to need a driver to get you and the package to the hanger.  The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 49
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 49
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "5442d4af363735e00e003fe2"
  }
  index: 50
  text: "I\'m in need of a specialist for some {{CC}}Wetwork{{/CC}}. Break into Telestrian R&D in Northside, and take out their lead scientist. This will cause their stock value to take a dive, and our client will capitalize on the situation The job pays \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "{{GM}}Negotiate{{/GM}}\nI think you can afford a little extra."
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
              string_value: "Custom_Skill-Negotiation"
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
              int_value: 2
            }
          }
        }
        args {
          int_value: 0
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
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Pay"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Story Variable (int)"
                        args {
                          string_value: "51f15c62336331d02c00440e"
                        }
                        args {
                          string_value: "Pay"
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 3
                        }
                      }
                    }
                    args {
                      int_value: 10
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
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
                      string_value: "Custom_Skill-Negotiation"
                    }
                  }
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 51
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
  comment: "A quick write up summarizing the run variables"
}
nodes {
  idRef {
    id: "5442e6d9363735140a006a6e"
  }
  index: 51
  text: "I can go as high as \302\245$(story.Pay).00."
  branches {
    responseText: "Yeah, that sounds good."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
      }
      ops {
        functionName: "Remove Screen Label"
        args {
          string_value: "Journal"
        }
      }
      ops {
        functionName: "Set Variable (bool)"
        args {
          call_value {
            functionName: "Get Story Variable (bool)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Employed"
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
        functionName: "Set Screen Label"
        args {
          string_value: "Journal"
        }
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Information"
            }
          }
        }
      }
    }
    nextNodeIndex: -1
  }
  branches {
    responseText: "No, I don\'t think so."
    actions {
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Location"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Objective"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Objective_Location_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_B"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_C"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Info_D"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (string)"
        args {
          call_value {
            functionName: "Get Story Variable (string)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run_Description"
            }
          }
        }
        args {
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "Current_Run-Step"
            }
          }
        }
        args {
          int_value: 1
        }
      }
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
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "RunDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "537249303032660016001cfa"
            }
            args {
              string_value: "Run_Type"
            }
          }
        }
        args {
          int_value: 0
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty"
            }
          }
        }
        args {
          int_value: 1
        }
      }
      ops {
        functionName: "Set Variable (int)"
        args {
          call_value {
            functionName: "Get Story Variable (int)"
            args {
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "TestDifficulty_Matrix"
            }
          }
        }
        args {
          int_value: 1
        }
      }
    }
    nextNodeIndex: -1
    hideIfUnavailable: true
    comment: "Resets All variables"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "541e09a23864610810004e80"
  }
  index: 52
  text: ""
  branches {
    responseText: ""
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
              string_value: "Run_Gen_ID"
            }
          }
        }
        args {
          call_value {
            functionName: "Random (int)"
            args {
              int_value: 1
            }
            args {
              int_value: 8
            }
          }
        }
      }
    }
    nextNodeIndex: 53
    comment: "Sets the random run variable"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "541e088c3864610810004e5e"
  }
  index: 53
  text: "I have three jobs available."
  branches {
    responseText: ""
    conditions {
      ops {
        functionName: "No Condition"
      }
    }
    nextNodeIndex: 54
    hideIfUnavailable: true
    comment: "group 0"
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "537d0d88303266d80e00279e"
  }
  index: 54
  text: "I\'ve got an elf who needs a package picked up, some thugs disrupting local commerce, a drug dealer that needs to be put down, a complaint from Lucy, a suit that wants an escort home, a sadist that needs to draw the ace and a digital smash and grab"
  branches {
    responseText: "Tell me about the elf."
    nextNodeIndex: 55
  }
  branches {
    responseText: "Tell me about the thugs."
    nextNodeIndex: 70
  }
  branches {
    responseText: "Tell me about the drug dealer."
    nextNodeIndex: 90
  }
  branches {
    responseText: "Tell me about Lucy\'s complaint."
    nextNodeIndex: 112
  }
  branches {
    responseText: "Tell me about the suit."
    nextNodeIndex: 143
  }
  branches {
    responseText: "Tell me about the sadist."
    nextNodeIndex: 153
  }
  branches {
    responseText: "Tell me about the smash-and-grab. {{GM}}Deckers only.{{/GM}}"
    nextNodeIndex: 171
  }
  branches {
    responseText: "Never mind. Let\'s talk about something else."
    nextNodeIndex: 53
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d768d303266d80e004c81"
  }
  index: 55
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 56
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d768d303266d80e004c84"
  }
  index: 56
  text: "$(story.Eric_Job_Description_1)"
  branches {
    responseText: "Deal. I\'ll pick up the elf\'s package at the Docks and bring it back to the Wyvern\'s Tooth."
    nextNodeIndex: 57
  }
  branches {
    responseText: "Fine. I\'ll go get the damn thing from the Docks and bring it back to his lazy ass at the Wyvern\'s Tooth."
    nextNodeIndex: 59
  }
  branches {
    responseText: "Mm, those pointy ears! Deal. I\'ll pick up his package at the Docks and bring it back to the Wyvern\'s Tooth."
    conditions {
      ops {
        functionName: "Compare Actor Race"
        args {
          call_value {
            functionName: "Get Map Item (Player)"
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
              int_value: 0
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "Race"
            }
            args {
              int_value: 2
            }
          }
        }
      }
    }
    nextNodeIndex: 60
    hideIfUnavailable: true
  }
  branches {
    responseText: "Damn lazy elf. Fine. I\'ll go get the thing from the Docks and bring it back to his lazy ass at the Wyvern\'s Tooth."
    conditions {
      ops {
        functionName: "Compare Actor Race"
        args {
          call_value {
            functionName: "Get Map Item (Player)"
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
              int_value: 0
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "Race"
            }
            args {
              int_value: 2
            }
          }
        }
      }
      ops {
        functionName: "AND"
        args {
          call_value {
            functionName: "Comparison (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "537249303032660016001cfa"
                }
                args {
                  string_value: "Street_Cred"
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
                  int_value: 4
                }
              }
            }
            args {
              int_value: 5
            }
          }
        }
        args {
          call_value {
            functionName: "Compare Actor Skill"
            args {
              call_value {
                functionName: "Get Map Item (Player)"
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "BaseOrCurrent"
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
                  string_value: "ActorSkills"
                }
                args {
                  int_value: 17
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
              int_value: 0
            }
          }
        }
      }
    }
    nextNodeIndex: 61
    hideIfUnavailable: true
  }
  branches {
    responseText: "Lazy fraggin\' Keebs. Fine. I\'ll go get the damn thing from the Docks and bring it back to the lazy-ass dandelion-eater at the Wyvern\'s Tooth."
    conditions {
      ops {
        functionName: "Compare Actor Race"
        args {
          call_value {
            functionName: "Get Map Item (Player)"
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
              int_value: 0
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "Race"
            }
            args {
              int_value: 2
            }
          }
        }
      }
      ops {
        functionName: "OR"
        args {
          call_value {
            functionName: "Comparison (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "537249303032660016001cfa"
                }
                args {
                  string_value: "Street_Cred"
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
                  int_value: 3
                }
              }
            }
            args {
              int_value: 5
            }
          }
        }
        args {
          call_value {
            functionName: "Compare Actor Skill"
            args {
              call_value {
                functionName: "Get Map Item (Player)"
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "BaseOrCurrent"
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
                  string_value: "ActorSkills"
                }
                args {
                  int_value: 17
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
              int_value: 1
            }
          }
        }
      }
    }
    nextNodeIndex: 62
    hideIfUnavailable: true
  }
  branches {
    responseText: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
    conditions {
      ops {
        functionName: "Compare Actor Attribute"
        args {
          call_value {
            functionName: "Get Map Item (Player)"
            args {
              int_value: 0
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "BaseOrCurrent"
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
              string_value: "ActorAttributes"
            }
            args {
              int_value: 3
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
              int_value: 2
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
              string_value: "Custom_Skill-Negotiation"
            }
          }
        }
      }
    }
    nextNodeIndex: 63
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: 54
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
        int_value: 400
      }
    }
  }
}
nodes {
  idRef {
    id: "537d768d303266d80e004c87"
  }
  index: 57
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to pick up the package from a contact at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 1
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f1d3303266d80e015ef1"
  }
  index: 58
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
  actions {
    ops {
      functionName: "Send Event"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "populate-runs"
          }
        }
      }
    }
  }
  comment: "populate runs"
}
nodes {
  idRef {
    id: "537d7bad303266d80e004d65"
  }
  index: 59
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to pick up the package from a contact at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 1
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537d7baf303266d80e004d67"
  }
  index: 60
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to pick up the package from a contact at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 1
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537fe3f7303266d80e00ea0a"
  }
  index: 61
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537fe53b303266d80e00ea10"
  }
  index: 62
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d768d303266d80e004c8a"
  }
  index: 63
  text: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
  branches {
    responseText: ""
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
          call_value {
            functionName: "Arithmetic (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "51f15c62336331d02c00440e"
                }
                args {
                  string_value: "Pay"
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Actor Attribute"
                        args {
                          call_value {
                            functionName: "Get Map Item (Player)"
                            args {
                              int_value: 0
                            }
                          }
                        }
                        args {
                          call_value {
                            functionName: "Get Preset Value (int)"
                            args {
                              string_value: "BaseOrCurrent"
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
                              string_value: "ActorAttributes"
                            }
                            args {
                              int_value: 3
                            }
                          }
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 1
                        }
                      }
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  int_value: 20
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 64
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d768d303266d80e004c8d"
  }
  index: 64
  text: "I can go as high as $(story.Pay) nuyen. How does that sound?"
  branches {
    responseText: "Deal. I\'ll pick up the elf\'s package at the Docks and bring it back to the Wyvern\'s Tooth."
    nextNodeIndex: 65
  }
  branches {
    responseText: "Fine."
    nextNodeIndex: 66
  }
  branches {
    responseText: "Mm, those pointy ears! Deal. I\'ll pick up his package at the Docks and bring it back to the Wyvern\'s Tooth."
    conditions {
      ops {
        functionName: "Compare Actor Race"
        args {
          call_value {
            functionName: "Get Map Item (Player)"
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
              int_value: 0
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "Race"
            }
            args {
              int_value: 2
            }
          }
        }
      }
    }
    nextNodeIndex: 67
    hideIfUnavailable: true
  }
  branches {
    responseText: "Damn lazy elf. Fine. I\'ll go get the thing from the Docks and bring it back to his lazy ass at the Wyvern\'s Tooth."
    conditions {
      ops {
        functionName: "Compare Actor Race"
        args {
          call_value {
            functionName: "Get Map Item (Player)"
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
              int_value: 0
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "Race"
            }
            args {
              int_value: 2
            }
          }
        }
      }
      ops {
        functionName: "AND"
        args {
          call_value {
            functionName: "Comparison (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "537249303032660016001cfa"
                }
                args {
                  string_value: "Street_Cred"
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
                  int_value: 4
                }
              }
            }
            args {
              int_value: 5
            }
          }
        }
        args {
          call_value {
            functionName: "Compare Actor Skill"
            args {
              call_value {
                functionName: "Get Map Item (Player)"
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "BaseOrCurrent"
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
                  string_value: "ActorSkills"
                }
                args {
                  int_value: 17
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
              int_value: 0
            }
          }
        }
      }
    }
    nextNodeIndex: 68
    hideIfUnavailable: true
  }
  branches {
    responseText: "Lazy fraggin\' Keebs. Fine. I\'ll go get the damn thing from the Docks and bring it back to the lazy-ass dandelion-eater at the Wyvern\'s Tooth."
    conditions {
      ops {
        functionName: "Compare Actor Race"
        args {
          call_value {
            functionName: "Get Map Item (Player)"
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
              int_value: 0
            }
          }
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "Race"
            }
            args {
              int_value: 2
            }
          }
        }
      }
      ops {
        functionName: "OR"
        args {
          call_value {
            functionName: "Comparison (int)"
            args {
              call_value {
                functionName: "Get Story Variable (int)"
                args {
                  string_value: "537249303032660016001cfa"
                }
                args {
                  string_value: "Street_Cred"
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
                  int_value: 3
                }
              }
            }
            args {
              int_value: 5
            }
          }
        }
        args {
          call_value {
            functionName: "Compare Actor Skill"
            args {
              call_value {
                functionName: "Get Map Item (Player)"
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "BaseOrCurrent"
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
                  string_value: "ActorSkills"
                }
                args {
                  int_value: 17
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
              int_value: 1
            }
          }
        }
      }
    }
    nextNodeIndex: 69
    hideIfUnavailable: true
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537fe61a303266d80e00ea26"
  }
  index: 65
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to pick up the package from a contact at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 1
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537fe61e303266d80e00ea2a"
  }
  index: 66
  text: "Fine. I\'ll go get the damn thing from the Docks and bring it back to his lazy ass at the Wyvern\'s Tooth."
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to pick up the package from a contact at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 1
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537fe5c5303266d80e00ea16"
  }
  index: 67
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to pick up the package from a contact at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 1
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537fe5f2303266d80e00ea1c"
  }
  index: 68
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537fe5f9303266d80e00ea22"
  }
  index: 69
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d768d303266d80e004c97"
  }
  index: 70
  text: "Tell me about the thugs."
  branches {
    responseText: ""
    nextNodeIndex: 71
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d768d303266d80e004c9a"
  }
  index: 71
  text: "$(story.Eric_Job_Description_2)"
  branches {
    responseText: "Deal. I\'ll head down to the Docks and clear out these thugs."
    nextNodeIndex: 72
  }
  branches {
    responseText: "Hell yes! Those thugs down at the Docks are as good as dead."
    nextNodeIndex: 73
  }
  branches {
    responseText: "Those darn kids! I\'ll get right down to the Docks and knock some sense into them. Or some bullets."
    nextNodeIndex: 74
  }
  branches {
    responseText: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
    nextNodeIndex: 75
  }
  branches {
    responseText: "I don\'t want to be a hitman.\n\nI\'m fine with killing thugs and gangers that come after me, and I *will* kill the bastard that killed my brother, but I don\'t want to get paid for hunting anyone down."
    nextNodeIndex: 80
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: 89
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
        int_value: 400
      }
    }
  }
}
nodes {
  idRef {
    id: "537d78eb303266d80e004d2d"
  }
  index: 72
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the gangers causing problems down at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 27
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537d7ea7303266d80e004d7c"
  }
  index: 73
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the gangers causing problems down at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 27
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537d7eb2303266d80e004d7e"
  }
  index: 74
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the gangers causing problems down at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 27
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537d785d303266d80e004d1e"
  }
  index: 75
  text: ""
  branches {
    responseText: ""
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
          call_value {
            functionName: "Arithmetic (int)"
            args {
              int_value: 400
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Actor Attribute"
                        args {
                          call_value {
                            functionName: "Get Map Item (Player)"
                            args {
                              int_value: 0
                            }
                          }
                        }
                        args {
                          call_value {
                            functionName: "Get Preset Value (int)"
                            args {
                              string_value: "BaseOrCurrent"
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
                              string_value: "ActorAttributes"
                            }
                            args {
                              int_value: 3
                            }
                          }
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 1
                        }
                      }
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  int_value: 20
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 76
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d785d303266d80e004d21"
  }
  index: 76
  text: "I can go as high as $(story.Pay) nuyen. How does that sound?"
  branches {
    responseText: "Deal. I\'ll head down to the Docks and clear out these thugs."
    nextNodeIndex: 77
  }
  branches {
    responseText: "Hell yes! Those thugs down at the Docks are as good as dead."
    nextNodeIndex: 78
  }
  branches {
    responseText: "Those darn kids! I\'ll get right down to the Docks and knock some sense into them. Or some bullets."
    nextNodeIndex: 79
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: 54
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537fe6ce303266d80e00ea36"
  }
  index: 77
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the gangers causing problems down at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 27
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537fe6c8303266d80e00ea32"
  }
  index: 78
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the gangers causing problems down at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 27
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537fe6a2303266d80e00ea2e"
  }
  index: 79
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the gangers causing problems down at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 27
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537d7f7c303266d80e004d87"
  }
  index: 80
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 81
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d7fa5303266d80e004d8a"
  }
  index: 81
  text: "You\'re a damn fool. There ain\'t much room for moral high ground in the shadows, but those gangers are attacking innocent workers and legitimate businesses.\n\nIf you want to take a stand, take it standin\' over a ganger\'s corpse."
  branches {
    responseText: "Alright. I\'ll head down to the Docks and clear out these thugs."
    nextNodeIndex: 82
  }
  branches {
    responseText: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
    nextNodeIndex: 83
  }
  branches {
    responseText: "No."
    nextNodeIndex: 87
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537e2ebd303266d80e009448"
  }
  index: 82
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the gangers causing problems down at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 27
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537d8115303266d80e004da3"
  }
  index: 83
  text: ""
  branches {
    responseText: ""
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
          call_value {
            functionName: "Arithmetic (int)"
            args {
              int_value: 400
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Actor Attribute"
                        args {
                          call_value {
                            functionName: "Get Map Item (Player)"
                            args {
                              int_value: 0
                            }
                          }
                        }
                        args {
                          call_value {
                            functionName: "Get Preset Value (int)"
                            args {
                              string_value: "BaseOrCurrent"
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
                              string_value: "ActorAttributes"
                            }
                            args {
                              int_value: 3
                            }
                          }
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 1
                        }
                      }
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  int_value: 20
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 84
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d8115303266d80e004da6"
  }
  index: 84
  text: "I can go as high as $(story.Pay) nuyen. How does that sound?"
  branches {
    responseText: "Alright. I\'ll head down to the Docks and clear out these thugs."
    nextNodeIndex: 85
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: 86
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537e2ed1303266d80e00944c"
  }
  index: 85
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 58
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the gangers causing problems down at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 27
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537e2ef5303266d80e00944e"
  }
  index: 86
  text: "Never mind. What else you got?"
  branches {
    responseText: ""
    nextNodeIndex: 54
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d8154303266d80e004db4"
  }
  index: 87
  text: "No. I\'ll take a different job."
  branches {
    responseText: ""
    nextNodeIndex: 88
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d816e303266d80e004db9"
  }
  index: 88
  text: "Suit yourself."
  branches {
    responseText: ""
    nextNodeIndex: 54
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537e2f19303266d80e009454"
  }
  index: 89
  text: "Never mind. What else you got?"
  branches {
    responseText: ""
    nextNodeIndex: 54
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "537d768d303266d80e004ca0"
  }
  index: 90
  text: "Tell me about the drug dealer."
  branches {
    responseText: ""
    nextNodeIndex: 91
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d798c303266d80e004d49"
  }
  index: 91
  text: "$(story.Eric_Job_Description_3)"
  branches {
    responseText: "Deal. I\'ll head down to the Docks and take care of this drug dealer."
    nextNodeIndex: 92
  }
  branches {
    responseText: "Deal. I\'ll head down to the Docks and take care of this drug dealer."
    nextNodeIndex: 94
  }
  branches {
    responseText: "Free drugs?"
    nextNodeIndex: 96
  }
  branches {
    responseText: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
    nextNodeIndex: 98
  }
  branches {
    responseText: "I don\'t want to be a hitman."
    nextNodeIndex: 100
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: 111
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
        int_value: 540
      }
    }
  }
}
nodes {
  idRef {
    id: "537d798c303266d80e004d4c"
  }
  index: 92
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 93
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the drug dealer at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 14
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f27f303266d80e015f2c"
  }
  index: 93
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d8423303266d80e004e04"
  }
  index: 94
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: 95
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the drug dealer at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 14
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f288303266d80e015f2f"
  }
  index: 95
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d8430303266d80e004e08"
  }
  index: 96
  text: "Free drugs? I\'m pretty sure you just said, \"Free drugs.\" Dead drug dealer means free drugs, right? I\'m in."
  branches {
    responseText: ""
    nextNodeIndex: 97
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the drug dealer at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 14
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f28b303266d80e015f32"
  }
  index: 97
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d798c303266d80e004d4f"
  }
  index: 98
  text: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
  branches {
    responseText: ""
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
          call_value {
            functionName: "Arithmetic (int)"
            args {
              int_value: 540
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Actor Attribute"
                        args {
                          call_value {
                            functionName: "Get Map Item (Player)"
                            args {
                              int_value: 0
                            }
                          }
                        }
                        args {
                          call_value {
                            functionName: "Get Preset Value (int)"
                            args {
                              string_value: "BaseOrCurrent"
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
                              string_value: "ActorAttributes"
                            }
                            args {
                              int_value: 3
                            }
                          }
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 1
                        }
                      }
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  int_value: 30
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 99
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d798c303266d80e004d52"
  }
  index: 99
  text: "I can go as high as $(story.Pay) nuyen. How does that sound?"
  branches {
    responseText: "Deal. I\'ll head down to the Docks and take care of this drug dealer."
    nextNodeIndex: 92
    auxiliaryLink: true
  }
  branches {
    responseText: "Deal. I\'ll head down to the Docks and take care of this drug dealer."
    nextNodeIndex: 94
    auxiliaryLink: true
  }
  branches {
    responseText: "Free drugs?"
    nextNodeIndex: 96
    auxiliaryLink: true
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: 54
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d8234303266d80e004de1"
  }
  index: 100
  text: "I don\'t want to be a hitman.\n\nI\'m fine with killing thugs and gangers that come after me, and I *will* kill the bastard that killed my brother, but I don\'t want to get paid for hunting anyone down."
  branches {
    responseText: ""
    nextNodeIndex: 101
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d8234303266d80e004de4"
  }
  index: 101
  text: "You\'re a damn fool. There ain\'t much room for moral high ground in the shadows, but that drug dealer is hookin\' kids and leavin\' babies without their chiphead mommies and daddies.\n\nIf you want to take a stand, take it standin\' over that dealer\'s corpse."
  branches {
    responseText: "Alright."
    nextNodeIndex: 102
  }
  branches {
    responseText: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
    nextNodeIndex: 104
  }
  branches {
    responseText: "No."
    nextNodeIndex: 109
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537e2f95303266d80e00945a"
  }
  index: 102
  text: "Alright.. I\'ll head down to the Docks and take care of this drug dealer."
  branches {
    responseText: ""
    nextNodeIndex: 103
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the drug dealer at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 14
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f29a303266d80e015f35"
  }
  index: 103
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d8234303266d80e004dea"
  }
  index: 104
  text: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
  branches {
    responseText: ""
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
          call_value {
            functionName: "Arithmetic (int)"
            args {
              int_value: 400
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Actor Attribute"
                        args {
                          call_value {
                            functionName: "Get Map Item (Player)"
                            args {
                              int_value: 0
                            }
                          }
                        }
                        args {
                          call_value {
                            functionName: "Get Preset Value (int)"
                            args {
                              string_value: "BaseOrCurrent"
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
                              string_value: "ActorAttributes"
                            }
                            args {
                              int_value: 3
                            }
                          }
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 1
                        }
                      }
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  int_value: 20
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 105
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d8234303266d80e004ded"
  }
  index: 105
  text: "I can go as high as $(story.Pay) nuyen. How does that sound?"
  branches {
    responseText: "Alright."
    nextNodeIndex: 106
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: 108
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537e2f98303266d80e00945c"
  }
  index: 106
  text: "Alright. I\'ll head down to the Docks and take care of this drug dealer."
  branches {
    responseText: ""
    nextNodeIndex: 107
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the drug dealer at the Docks."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 14
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f2a9303266d80e015f38"
  }
  index: 107
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537e2fb3303266d80e009463"
  }
  index: 108
  text: "Never mind. What else you got?"
  branches {
    responseText: ""
    nextNodeIndex: 54
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "537d8234303266d80e004df6"
  }
  index: 109
  text: "No. I\'ll take a different job."
  branches {
    responseText: ""
    nextNodeIndex: 110
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d8234303266d80e004df9"
  }
  index: 110
  text: "Suit yourself."
  branches {
    responseText: ""
    nextNodeIndex: 54
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537e2fb6303266d80e009468"
  }
  index: 111
  text: "Never mind. What else you got?"
  branches {
    responseText: ""
    nextNodeIndex: 54
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
}
nodes {
  idRef {
    id: "537d849f303266d80e004e57"
  }
  index: 112
  text: "Tell me about Lucy\'s complaint."
  branches {
    responseText: ""
    nextNodeIndex: 113
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d849f303266d80e004e5a"
  }
  index: 113
  text: "$(story.Eric_Job_Description_4)"
  branches {
    responseText: "Deal."
    nextNodeIndex: 114
  }
  branches {
    responseText: "Fine."
    conditions {
      ops {
        functionName: "Compare Actor Gender"
        args {
          call_value {
            functionName: "Get Map Item (Player)"
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
              string_value: "Gender"
            }
            args {
              int_value: 1
            }
          }
        }
      }
    }
    nextNodeIndex: 116
  }
  branches {
    responseText: "These punks hurt Lucy?"
    nextNodeIndex: 118
  }
  branches {
    responseText: "Sounds to me . . ."
    nextNodeIndex: 120
  }
  branches {
    responseText: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
    nextNodeIndex: 122
  }
  branches {
    responseText: "I don\'t want to be a hitman."
    nextNodeIndex: 133
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: 132
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
        int_value: 540
      }
    }
  }
}
nodes {
  idRef {
    id: "537d8581303266d80e004e9c"
  }
  index: 114
  text: "Deal. I\'ll head over to Organ Grinders and take care of these punks."
  branches {
    responseText: ""
    nextNodeIndex: 115
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to take care of the punks harassing Lucy."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 25
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f2b9303266d80e015f3b"
  }
  index: 115
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537fe79b303266d80e00ea39"
  }
  index: 116
  text: "Fine. Dumb skirts, always getting in over their heads . . ."
  branches {
    responseText: ""
    nextNodeIndex: 117
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "5380f2be303266d80e015f3e"
  }
  index: 117
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d85e1303266d80e004ea0"
  }
  index: 118
  text: "These punks hurt Lucy? They\'re dead meat. I\'m headed over to Organ Grinders to show them who really needs protection."
  branches {
    responseText: ""
    nextNodeIndex: 119
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to take care of the punks harassing Lucy."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 25
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f2db303266d80e015f41"
  }
  index: 119
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d85ea303266d80e004ea2"
  }
  index: 120
  text: "Sounds to me like Organ Grinders is due for a donation. I\'ll head over and encourage these punks to pledge generously."
  branches {
    responseText: ""
    nextNodeIndex: 121
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to take care of the punks harassing Lucy."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 25
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f2e0303266d80e015f44"
  }
  index: 121
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d849f303266d80e004e66"
  }
  index: 122
  text: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
  branches {
    responseText: ""
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
          call_value {
            functionName: "Arithmetic (int)"
            args {
              int_value: 540
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Actor Attribute"
                        args {
                          call_value {
                            functionName: "Get Map Item (Player)"
                            args {
                              int_value: 0
                            }
                          }
                        }
                        args {
                          call_value {
                            functionName: "Get Preset Value (int)"
                            args {
                              string_value: "BaseOrCurrent"
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
                              string_value: "ActorAttributes"
                            }
                            args {
                              int_value: 3
                            }
                          }
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 1
                        }
                      }
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  int_value: 30
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 123
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d849f303266d80e004e69"
  }
  index: 123
  text: "I can go as high as $(story.Pay) nuyen. How does that sound?"
  branches {
    responseText: "Deal."
    nextNodeIndex: 124
  }
  branches {
    responseText: "Fine."
    conditions {
      ops {
        functionName: "Compare Actor Gender"
        args {
          call_value {
            functionName: "Get Map Item (Player)"
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
              string_value: "Gender"
            }
            args {
              int_value: 1
            }
          }
        }
      }
    }
    nextNodeIndex: 126
    hideIfUnavailable: true
  }
  branches {
    responseText: "These punks hurt Lucy?"
    nextNodeIndex: 128
  }
  branches {
    responseText: "Sounds to me . . ."
    nextNodeIndex: 130
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: 132
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d951b303266d80e005455"
  }
  index: 124
  text: "Deal. I\'ll head over to Organ Grinders and take care of these punks."
  branches {
    responseText: ""
    nextNodeIndex: 125
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to take care of the punks harassing Lucy."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 25
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f2ec303266d80e015f47"
  }
  index: 125
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537fe8c2303266d80e00ea3f"
  }
  index: 126
  text: "Fine. Dumb skirts, always getting in over their heads . . ."
  branches {
    responseText: ""
    nextNodeIndex: 127
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "5380f2ee303266d80e015f4a"
  }
  index: 127
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d9524303266d80e005459"
  }
  index: 128
  text: "These punks hurt Lucy? They\'re dead meat. I\'m headed over to Organ Grinders to show them who really needs protection."
  branches {
    responseText: ""
    nextNodeIndex: 129
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to take care of the punks harassing Lucy."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 25
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f302303266d80e015f4d"
  }
  index: 129
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d952e303266d80e00545d"
  }
  index: 130
  text: "Sounds to me like Organ Grinders is due for a donation. I\'ll head over and encourage these punks to pledge generously."
  branches {
    responseText: ""
    nextNodeIndex: 131
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to take care of the punks harassing Lucy."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 25
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f304303266d80e015f50"
  }
  index: 131
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537e3051303266d80e00946d"
  }
  index: 132
  text: "Never mind. What else you got?"
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d849f303266d80e004e78"
  }
  index: 133
  text: "I don\'t want to be a hitman.\n\nI\'m fine with killing thugs and gangers that come after me, and I *will* kill the bastard that killed my brother, but I don\'t want to get paid for hunting anyone down."
  branches {
    responseText: ""
    nextNodeIndex: 134
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d849f303266d80e004e7b"
  }
  index: 134
  text: "You\'re a damn fool. There ain\'t much room for moral high ground in the shadows, but those gangers are attackin\' a young woman who\'s just tryin\' to run a business.\n\nIf you want to take a stand, take it standin\' over a ganger\'s corpse."
  branches {
    responseText: "Alright."
    nextNodeIndex: 135
  }
  branches {
    responseText: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
    nextNodeIndex: 137
  }
  branches {
    responseText: "No."
    nextNodeIndex: 141
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d9552303266d80e005463"
  }
  index: 135
  text: "Alright. I\'ll head over to Organ Grinders and deal with these punks."
  branches {
    responseText: ""
    nextNodeIndex: 136
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to take care of the punks harassing Lucy."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 25
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f308303266d80e015f53"
  }
  index: 136
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d849f303266d80e004e81"
  }
  index: 137
  text: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
  branches {
    responseText: ""
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
          call_value {
            functionName: "Arithmetic (int)"
            args {
              int_value: 400
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Actor Attribute"
                        args {
                          call_value {
                            functionName: "Get Map Item (Player)"
                            args {
                              int_value: 0
                            }
                          }
                        }
                        args {
                          call_value {
                            functionName: "Get Preset Value (int)"
                            args {
                              string_value: "BaseOrCurrent"
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
                              string_value: "ActorAttributes"
                            }
                            args {
                              int_value: 3
                            }
                          }
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 1
                        }
                      }
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  int_value: 20
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 138
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d849f303266d80e004e84"
  }
  index: 138
  text: "I can go as high as $(story.Pay) nuyen. How does that sound?"
  branches {
    responseText: "Alright."
    nextNodeIndex: 139
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: 132
    auxiliaryLink: true
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d9547303266d80e005461"
  }
  index: 139
  text: "Alright. I\'ll head over to Organ Grinders and deal with these punks."
  branches {
    responseText: ""
    nextNodeIndex: 140
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to take care of the punks harassing Lucy."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 25
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "5380f316303266d80e015f56"
  }
  index: 140
  text: "Watch your back, chummer."
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d849f303266d80e004e8d"
  }
  index: 141
  text: "No. I\'ll take a different job."
  branches {
    responseText: ""
    nextNodeIndex: 142
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d849f303266d80e004e90"
  }
  index: 142
  text: "Suit yourself."
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d768a303266d80e004c3b"
  }
  index: 143
  text: "Tell me about the suit."
  branches {
    responseText: ""
    nextNodeIndex: 144
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d768a303266d80e004c3e"
  }
  index: 144
  text: "$(story.Eric_Job_Description_6)"
  branches {
    responseText: "Deal. I\'ll head over to the Wyvern\'s Tooth and escort this suit Downtown."
    nextNodeIndex: 145
  }
  branches {
    responseText: "Fine. I\'ll head over to the Wyvern\'s Tooth and walk the damn suit Downtown."
    nextNodeIndex: 146
  }
  branches {
    responseText: "He won\'t take a cab? I guess I don\'t blame him. Who *wouldn\'t* want to take a scenic stroll through the Barrens this time of night. . ."
    nextNodeIndex: 147
  }
  branches {
    responseText: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
    nextNodeIndex: 148
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: -1
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
        int_value: 475
      }
    }
  }
}
nodes {
  idRef {
    id: "537d9666303266d80e00548f"
  }
  index: 145
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to meet the suit at the Wyvern\'s Tooth and escort him to the Downtown district."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 38
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537e325b303266d80e009534"
  }
  index: 146
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to meet the suit at the Wyvern\'s Tooth and escort him to the Downtown district."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 38
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537e3266303266d80e009536"
  }
  index: 147
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to meet the suit at the Wyvern\'s Tooth and escort him to the Downtown district."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 38
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537d9610303266d80e00547c"
  }
  index: 148
  text: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
  branches {
    responseText: ""
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
          call_value {
            functionName: "Arithmetic (int)"
            args {
              int_value: 475
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Actor Attribute"
                        args {
                          call_value {
                            functionName: "Get Map Item (Player)"
                            args {
                              int_value: 0
                            }
                          }
                        }
                        args {
                          call_value {
                            functionName: "Get Preset Value (int)"
                            args {
                              string_value: "BaseOrCurrent"
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
                              string_value: "ActorAttributes"
                            }
                            args {
                              int_value: 3
                            }
                          }
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 1
                        }
                      }
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  int_value: 20
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 149
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d9610303266d80e00547f"
  }
  index: 149
  text: "I can go as high as $(story.Pay) nuyen. How does that sound?"
  branches {
    responseText: "Deal. I\'ll head over to the Wyvern\'s Tooth and escort this suit Downtown."
    nextNodeIndex: 150
  }
  branches {
    responseText: "Fine. I\'ll head over to the Wyvern\'s Tooth and walk the damn suit Downtown."
    nextNodeIndex: 151
  }
  branches {
    responseText: "He won\'t take a cab? I guess I don\'t blame him. Who *wouldn\'t* want to take a scenic stroll through the Barrens this time of night. . ."
    nextNodeIndex: 152
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537e3271303266d80e009538"
  }
  index: 150
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to meet the suit at the Wyvern\'s Tooth and escort him to the Downtown district."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 38
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537e327d303266d80e00953c"
  }
  index: 151
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to meet the suit at the Wyvern\'s Tooth and escort him to the Downtown district."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 38
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537e3275303266d80e00953a"
  }
  index: 152
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to meet the suit at the Wyvern\'s Tooth and escort him to the Downtown district."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 38
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537d98d0303266d80e005563"
  }
  index: 153
  text: "Tell me about the sadist."
  branches {
    responseText: ""
    nextNodeIndex: 154
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d98d0303266d80e005566"
  }
  index: 154
  text: "$(story.Eric_Job_Description_5)"
  branches {
    responseText: "Deal. I\'ll head over to the Rundown Tenements and deal with this psycho."
    nextNodeIndex: 155
  }
  branches {
    responseText: "Sounds like my kind of guy. I\'ll head over to the Rundown Tenements, maybe have a beer with this drekhead before I ice him."
    nextNodeIndex: 156
  }
  branches {
    responseText: "Gotta love rowdy neighbors. Loud music, bloodstains, wanton murder--some people just can\'t get along.\n\nI\'ll head over to the Rundown Tenements and convince this psycho to play nice or play dead."
    nextNodeIndex: 157
  }
  branches {
    responseText: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
    nextNodeIndex: 158
  }
  branches {
    responseText: "I don\'t want to be a hitman."
    nextNodeIndex: 163
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: -1
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
        int_value: 475
      }
    }
  }
}
nodes {
  idRef {
    id: "537d98d0303266d80e005569"
  }
  index: 155
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the sadist that lives in the Rundown Tenements."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 15
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537e3363303266d80e009542"
  }
  index: 156
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the sadist that lives in the Rundown Tenements."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 15
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537e336e303266d80e009544"
  }
  index: 157
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the sadist that lives in the Rundown Tenements."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 15
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537d98d0303266d80e005572"
  }
  index: 158
  text: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
  branches {
    responseText: ""
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
          call_value {
            functionName: "Arithmetic (int)"
            args {
              int_value: 475
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Actor Attribute"
                        args {
                          call_value {
                            functionName: "Get Map Item (Player)"
                            args {
                              int_value: 0
                            }
                          }
                        }
                        args {
                          call_value {
                            functionName: "Get Preset Value (int)"
                            args {
                              string_value: "BaseOrCurrent"
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
                              string_value: "ActorAttributes"
                            }
                            args {
                              int_value: 3
                            }
                          }
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 1
                        }
                      }
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  int_value: 20
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 159
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d98d0303266d80e005575"
  }
  index: 159
  text: "I can go as high as $(story.Pay) nuyen. How does that sound?"
  branches {
    responseText: "Deal. I\'ll head over to the Rundown Tenements and deal with this psycho."
    nextNodeIndex: 160
  }
  branches {
    responseText: "Sounds like my kind of guy. I\'ll head over to the Rundown Tenements, maybe have a beer with this drekhead before I ice him."
    nextNodeIndex: 161
  }
  branches {
    responseText: "Gotta love rowdy neighbors. Loud music, bloodstains, wanton murder--some people just can\'t get along.\n\nI\'ll head over to the Rundown Tenements and convince this psycho to play nice or play dead."
    nextNodeIndex: 162
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537e338d303266d80e00954a"
  }
  index: 160
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the sadist that lives in the Rundown Tenements."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 15
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537e3385303266d80e009548"
  }
  index: 161
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the sadist that lives in the Rundown Tenements."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 15
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537e3377303266d80e009546"
  }
  index: 162
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the sadist that lives in the Rundown Tenements."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 15
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537d98d0303266d80e005584"
  }
  index: 163
  text: "I don\'t want to be a hitman.\n\nI\'m fine with killing thugs and gangers that come after me, and I *will* kill the bastard that killed my brother, but I don\'t want to get paid for hunting anyone down."
  branches {
    responseText: ""
    nextNodeIndex: 164
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d98d0303266d80e005587"
  }
  index: 164
  text: "You\'re a damn fool. There ain\'t much room for moral high ground in the shadows, but this psycho is usin\' fear and violence to control innocent people.\n\nIf you want to take a stand, take it standin\' over this bastard\'s corpse."
  branches {
    responseText: "Alright. I\'ll head over to the Rundown Tenements and deal with this psycho."
    nextNodeIndex: 165
  }
  branches {
    responseText: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
    nextNodeIndex: 166
  }
  branches {
    responseText: "No."
    nextNodeIndex: 169
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537e3448303266d80e009553"
  }
  index: 165
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the sadist that lives in the Rundown Tenements."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 15
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537d98d0303266d80e00558d"
  }
  index: 166
  text: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
  branches {
    responseText: ""
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
          call_value {
            functionName: "Arithmetic (int)"
            args {
              int_value: 475
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Actor Attribute"
                        args {
                          call_value {
                            functionName: "Get Map Item (Player)"
                            args {
                              int_value: 0
                            }
                          }
                        }
                        args {
                          call_value {
                            functionName: "Get Preset Value (int)"
                            args {
                              string_value: "BaseOrCurrent"
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
                              string_value: "ActorAttributes"
                            }
                            args {
                              int_value: 3
                            }
                          }
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 1
                        }
                      }
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  int_value: 20
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 167
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d98d0303266d80e005590"
  }
  index: 167
  text: "I can go as high as $(story.Pay) nuyen. How does that sound?"
  branches {
    responseText: "Alright. I\'ll head over to the Rundown Tenements and deal with this psycho."
    nextNodeIndex: 168
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537e344a303266d80e009555"
  }
  index: 168
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Type"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to get rid of the sadist that lives in the Rundown Tenements."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Run_Identifier"
          }
        }
      }
      args {
        int_value: 15
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
  }
}
nodes {
  idRef {
    id: "537d98d0303266d80e005599"
  }
  index: 169
  text: "No. I\'ll take a different job."
  branches {
    responseText: ""
    nextNodeIndex: 170
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d98d0303266d80e00559c"
  }
  index: 170
  text: "Suit yourself."
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d7687303266d80e004bfc"
  }
  index: 171
  text: "Tell me about the smash-and-grab."
  branches {
    responseText: ""
    nextNodeIndex: 172
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537d7687303266d80e004bff"
  }
  index: 172
  text: "$(story.Eric_Job_Description_9)"
  branches {
    responseText: "Sure. I\'ll jack in, get the data, and send it to your way."
    nextNodeIndex: 173
  }
  branches {
    responseText: "I was born ready. Well, not literally. The hole in my head so I can talk to computers is definitely a postpartum development. I\'ll be going now . . ."
    nextNodeIndex: 174
  }
  branches {
    responseText: "I think the pay could be better. Can you go any higher than $(story.Pay) nuyen?"
    nextNodeIndex: 175
  }
  branches {
    responseText: "Never mind."
    nextNodeIndex: -1
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
        int_value: 400
      }
    }
  }
}
nodes {
  idRef {
    id: "537d9c80303266d80e005914"
  }
  index: 173
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to hack into Organ Grinder\'s database and download data."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "MatrixRunComplete"
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
            int_value: 0
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Current_Run-Objective"
          }
        }
      }
      args {
        string_value: "Download"
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "DynamicSceneDescription"
          }
        }
      }
      args {
        string_value: "This system appears to be associated with a small-time business in the Redmond Barrens."
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Current_Run-Location"
          }
        }
      }
      args {
        string_value: "Organ Grinders System"
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Current-Run-JobType"
          }
        }
      }
      args {
        string_value: "Matrix"
      }
    }
  }
}
nodes {
  idRef {
    id: "537d9c80303266d80e005914"
  }
  index: 174
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to hack into Organ Grinder\'s database and download data."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "MatrixRunComplete"
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
            int_value: 0
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Current_Run-Objective"
          }
        }
      }
      args {
        string_value: "Download"
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "DynamicSceneDescription"
          }
        }
      }
      args {
        string_value: "This system appears to be associated with a small-time business in the Redmond Barrens."
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Current_Run-Location"
          }
        }
      }
      args {
        string_value: "Organ Grinders System"
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Current-Run-JobType"
          }
        }
      }
      args {
        string_value: "Matrix"
      }
    }
  }
}
nodes {
  idRef {
    id: "537da01a303266d80e005f4b"
  }
  index: 175
  text: ""
  branches {
    responseText: ""
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
          call_value {
            functionName: "Arithmetic (int)"
            args {
              int_value: 400
            }
            args {
              call_value {
                functionName: "Get Preset Value (int)"
                args {
                  string_value: "Arithmetic Ops"
                }
                args {
                  int_value: 0
                }
              }
            }
            args {
              call_value {
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      call_value {
                        functionName: "Get Actor Attribute"
                        args {
                          call_value {
                            functionName: "Get Map Item (Player)"
                            args {
                              int_value: 0
                            }
                          }
                        }
                        args {
                          call_value {
                            functionName: "Get Preset Value (int)"
                            args {
                              string_value: "BaseOrCurrent"
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
                              string_value: "ActorAttributes"
                            }
                            args {
                              int_value: 3
                            }
                          }
                        }
                      }
                    }
                    args {
                      call_value {
                        functionName: "Get Preset Value (int)"
                        args {
                          string_value: "Arithmetic Ops"
                        }
                        args {
                          int_value: 1
                        }
                      }
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  call_value {
                    functionName: "Get Preset Value (int)"
                    args {
                      string_value: "Arithmetic Ops"
                    }
                    args {
                      int_value: 2
                    }
                  }
                }
                args {
                  int_value: 20
                }
              }
            }
          }
        }
      }
    }
    nextNodeIndex: 176
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
}
nodes {
  idRef {
    id: "537da01a303266d80e005f4e"
  }
  index: 176
  text: "I can go as high as $(story.Pay) nuyen. How does that sound?"
  branches {
    responseText: "Sure. I\'ll jack in, get the data, and send it to your way."
    nextNodeIndex: 177
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isEric"
}
nodes {
  idRef {
    id: "537d9c80303266d80e005914"
  }
  index: 177
  text: ""
  branches {
    responseText: ""
    nextNodeIndex: -1
  }
  nodeType: ConversationNodeType_Simple
  sourceWithTagInScene: "isPlayer"
  actions {
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Fixers_Name"
          }
        }
      }
      args {
        string_value: "Eric"
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Information"
          }
        }
      }
      args {
        string_value: "I need to hack into Organ Grinder\'s database and download data."
      }
    }
    ops {
      functionName: "Set Screen Label"
      args {
        string_value: "Journal"
      }
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "text"
          }
          args {
            string_value: "Information"
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "Employed"
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
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "RunDifficulty"
          }
        }
      }
      args {
        call_value {
          functionName: "Random (int)"
          args {
            int_value: 1
          }
          args {
            int_value: 1
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "MatrixRunComplete"
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
            int_value: 0
          }
        }
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Current_Run-Objective"
          }
        }
      }
      args {
        string_value: "Download"
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "537249303032660016001cfa"
          }
          args {
            string_value: "DynamicSceneDescription"
          }
        }
      }
      args {
        string_value: "This system appears to be associated with a small-time business in the Redmond Barrens."
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Current_Run-Location"
          }
        }
      }
      args {
        string_value: "Organ Grinders System"
      }
    }
    ops {
      functionName: "Set Variable (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Current-Run-JobType"
          }
        }
      }
      args {
        string_value: "Matrix"
      }
    }
  }
}
roots {
  responseText: ""
  conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Employed"
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
            int_value: 0
          }
        }
      }
    }
    ops {
      functionName: "Comparison (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
          }
          args {
            string_value: "Current_Fixer"
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
        string_value: "Frosty"
      }
    }
  }
  nextNodeIndex: 0
  comment: "Checks to see which fixer is being talked to"
}
roots {
  responseText: ""
  conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Employed"
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
            int_value: 0
          }
        }
      }
    }
    ops {
      functionName: "Comparison (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
          }
          args {
            string_value: "Current_Fixer"
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
        string_value: "Vigor"
      }
    }
  }
  nextNodeIndex: 34
  comment: "Checks to see which fixer is being talked to"
}
roots {
  responseText: ""
  conditions {
    ops {
      functionName: "Comparison (bool)"
      args {
        call_value {
          functionName: "Get Story Variable (bool)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Employed"
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
            int_value: 0
          }
        }
      }
    }
    ops {
      functionName: "Comparison (string)"
      args {
        call_value {
          functionName: "Get Story Variable (string)"
          args {
          }
          args {
            string_value: "Current_Fixer"
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
        string_value: "Eric"
      }
    }
  }
  nextNodeIndex: 52
  comment: "Eric Gunderson"
}
