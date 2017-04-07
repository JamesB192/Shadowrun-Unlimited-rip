  branches {
    responseText: "{{GM}}New File 1{{/GM}}"
    conditions {
      ops {
        functionName: "Comparison (int)"
        args {
          int_value: 0
        }
        args {
          call_value {
            functionName: "Get Preset Value (int)"
            args {
              string_value: "Comparison Ops"
            }
            args {
              int_value: 1
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
              string_value: "run-paydata_%02u"
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
              string_value: "scratch"
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
              string_value: "run-paydata_%02u"
            }
          }
        }
      }
      ops {
        functionName: "Add Nuyen"
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              int_value: 5000
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
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Get Variable (int)"
                    args {
                      string_value: "scratch"
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
                  int_value: 100
                }
              }
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
              string_value: "Deck_Storage_Used"
            }
          }
        }
        args {
          call_value {
            functionName: "Arithmetic (int)"
            args {
              int_value: -5
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
                functionName: "Arithmetic (int)"
                args {
                  call_value {
                    functionName: "Get Variable (int)"
                    args {
                      string_value: "scratch"
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
                  call_value {
                    functionName: "Arithmetic (int)"
                    args {
                      int_value: 100
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
                        functionName: "Arithmetic (int)"
                        args {
                          call_value {
                            functionName: "Get Variable (int)"
                            args {
                              string_value: "scratch"
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
                          int_value: 100
                        }
                      }
                    }
                  }
                }
              }
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
              string_value: "51f15c62336331d02c00440e"
            }
            args {
              string_value: "run-paydata_%02u"
            }
          }
        }
        args {
          int_value: 0
        }
      }
    }
    nextNodeIndex: 5
    auxiliaryLink: true
  }
