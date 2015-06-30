triggers {
  name: "SunRise(1)"
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
            string_value: "51f834a23363316838000c06"
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "520d24ac336331443a004c1c"
  }
  elseActions {
  }
  is_oneshot: true
}
triggers {
  name: "SunRise(2)"
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
        float_value: 120
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
        float_value: 120
      }
      args {
        call_value {
          functionName: "Get Map Item (CameraRegion)"
          args {
            string_value: "51f834a23363316838000c06"
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "520d24f9336331443a004c1d"
  }
  elseActions {
  }
  is_oneshot: false
}
triggers {
  name: "SunRise(3)"
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
            int_value: 3
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
      functionName: "Send Event"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "NightFall"
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "520d23d2336331443a004c25"
  }
  elseActions {
  }
  is_oneshot: false
}
triggers {
  name: "Nightfall(1)"
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
        int_value: 1
      }
    }
  }
  actions {
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
            string_value: "51f3f32b336331b439001904"
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "520d2542336331443a004c27"
  }
  elseActions {
  }
  is_oneshot: true
}
triggers {
  name: "NightFall(2)"
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
        float_value: 120
      }
      args {
        call_value {
          functionName: "Get Map Item (CameraRegion)"
          args {
            string_value: "51f834a23363316838000c06"
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "520d1c90336331443a004c22"
  }
  elseActions {
  }
  is_oneshot: false
}
triggers {
  name: "NightFall(3)"
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
            int_value: 5
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
      functionName: "Send Event"
      args {
        call_value {
          functionName: "Get Map Item (Event)"
          args {
            string_value: "SunRising"
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "520d24f7336331443a004c26"
  }
  elseActions {
  }
  is_oneshot: false
}
triggers {
  name: "Brightest Day"
  events {
    ops {
      functionName: "On Map Start"
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
        float_value: 2
      }
    }
  }
  actions {
    ops {
      functionName: "Set Variable (float)"
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
        float_value: 2
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
            string_value: "51f834a23363316838000c06"
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "399993903363314015002e41"
  }
  elseActions {
  }
  is_oneshot: true
}
triggers {
  name: "Darkest Night"
  events {
    ops {
      functionName: "On Map Start"
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
        float_value: 0
      }
    }
  }
  actions {
    ops {
      functionName: "Set Variable (float)"
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
            string_value: "51f834a23363316838000c06"
          }
        }
      }
    }
  }
  isActive: true
  idRef {
    id: "399993913363314015002e42"
  }
  elseActions {
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
