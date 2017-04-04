  branches {
    responseText: "%u"
    conditions {
      ops {
        functionName: "Comparison (string)"
        args {
          call_value {
            functionName: "Get Variable (string)"
            args {
              string_value: "MacCabe-number"
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
          string_value: "%u"
        }
      }
    }
    actions {
      ops {
        functionName: "Remove Nuyen"
        args {
          int_value: 10
        }
      }
      ops {
        functionName: "Add Nuyen"
        args {
          int_value: 360
        }
      }
    }
    nextNodeIndex: 3
    auxiliaryLink: true
    comment: "%u"
  }
  branches {
    responseText: "%u"
    conditions {
      ops {
        functionName: "Comparison (string)"
        args {
          call_value {
            functionName: "Get Variable (string)"
            args {
              string_value: "MacCabe-number"
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
          string_value: "%u"
        }
      }
    }
    actions {
      ops {
        functionName: "Remove Nuyen"
        args {
          int_value: 10
        }
      }
    }
    nextNodeIndex: 4
    auxiliaryLink: true
    comment: "! %u"
  }
