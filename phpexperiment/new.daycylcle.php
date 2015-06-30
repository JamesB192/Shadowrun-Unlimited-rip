triggers {
  name: "on(ready) daycycle"
  events {
    ops {
      functionName: "On Map Start"
    }
  }
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
            string_value: "RisingOrSetting"
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
  actions {
    ops {
      functionName: "Set Ambient Light Color"
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        float_value: 0
      }
      args {
        call_value {
          functionName: "Get Map Item (CameraRegion)"
          args {
            string_value: "5592a7673333306e2e37c744"
          }
        }
      }
    }
    ops {
      functionName: "Send Event After Delay"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "NightFall"
          }
        }
      }
      args {
        float_value: 5
      }
    }
  }
  isActive: true
  idRef {
    id: "5592a8913333306e2e37c745"
  }
  elseActions {
    ops {
      functionName: "Set Ambient Light Color"
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        float_value: 0
      }
      args {
        call_value {
          functionName: "Get Map Item (CameraRegion)"
          args {
            string_value: "5592a7673333306e2e37c744"
          }
        }
      }
    }
    ops {
      functionName: "Send Event After Delay"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "SunRising"
          }
        }
      }
      args {
        float_value: 5
      }
    }
  }
  is_oneshot: true
}
triggers {
  name: "Sunny Days"
  events {
    ops {
      functionName: "Get Map Item (Event)"
      args {
        string_value: "SunRising"
      }
    }
  }
  conditions {
    ops {
      functionName: "Comparison (float)"
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
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
        float_value: 2
      }
    }
  }
  actions {
    ops {
      functionName: "Add To Variable (float)"
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        float_value: 1
      }
    }
    ops {
      functionName: "Set Ambient Light Color"
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        float_value: 0
      }
      args {
        call_value {
          functionName: "Get Map Item (CameraRegion)"
          args {
            string_value: "5592a7673333306e2e37c744"
          }
        }
      }
    }
    ops {
      functionName: "Send Event After Delay"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "SunRising"
          }
        }
      }
      args {
        float_value: 5
      }
    }
  }
  isActive: true
  idRef {
    id: "5592aa053333306e2e37c746"
  }
  elseActions {
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "RisingOrSetting"
          }
        }
      }
      args {
        int_value: 1
      }
    }
    ops {
      functionName: "Send Event After Delay"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "NightFall"
          }
        }
      }
      args {
        float_value: 5
      }
    }
  }
  is_oneshot: true
}
triggers {
  name: "Dark Nights"
  events {
    ops {
      functionName: "Get Map Item (Event)"
      args {
        string_value: "NightFall"
      }
    }
  }
  conditions {
    ops {
      functionName: "Comparison (float)"
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
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
        float_value: -1
      }
    }
  }
  actions {
    ops {
      functionName: "Add To Variable (float)"
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        float_value: -1
      }
    }
    ops {
      functionName: "Set Ambient Light Color"
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        call_value {
          functionName: "Get Story Variable (float)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "Daylight"
          }
        }
      }
      args {
        float_value: 0
      }
      args {
        call_value {
          functionName: "Get Map Item (CameraRegion)"
          args {
            string_value: "5592a7673333306e2e37c744"
          }
        }
      }
    }
    ops {
      functionName: "Send Event After Delay"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "NightFall"
          }
        }
      }
      args {
        float_value: 120
      }
    }
  }
  isActive: true
  idRef {
    id: "5592ae8b3333306e2e37c748"
  }
  elseActions {
    ops {
      functionName: "Set Variable (int)"
      args {
        call_value {
          functionName: "Get Story Variable (int)"
          args {
            string_value: "51f15c62336331d02c00440e"
          }
          args {
            string_value: "RisingOrSetting"
          }
        }
      }
      args {
        int_value: 0
      }
    }
    ops {
      functionName: "Send Event After Delay"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "SunRising"
          }
        }
      }
      args {
        float_value: 0
      }
    }
  }
  is_oneshot: true
}
regions {
  name: "CameraBind"
  position {
    x: 62
    y: 187
    width: 3
    height: 9
  }
  enabledAtStart: true
  is_camera_region: true
  idRef {
    id: "5592a7673333306e2e37c744"
  }
  highlight_color {
    r: 0
    g: 0
    b: 0
    a: 1
  }
  visible_at_start: false
  is_closet: false
  is_teleporter_region: false
  directional_light_dir {
    x: -0.5
    y: -1
    z: -0.75
  }
  directional_light_color {
    r: 0.50196081
    g: 0.50196081
    b: 0.50196081
    a: 1
  }
  ambient_light_color {
    r: 0.50196081
    g: 0.50196081
    b: 0.50196081
    a: 1
  }
  ambience_template: ""
  combat_music: ""
  default_music: ""
  loop_combat_music: true
  loop_default_music: false
  no_fow_in_region: false
}
mapEvents: "SunRising"
mapEvents: "NightFall"
