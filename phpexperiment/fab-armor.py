#!/usr/bin/env python3
"""Fabricate armor of SR:u Hong Kong or something."""
# import sys
import hk_pb2 as pb
import google.protobuf.text_format as tf

levels = [
    [
        "arm 8 SRU",
        "+8 Armor, -1 Damage From Attacks",
        150000,
        "SRU Outfits/8",
        [
            [pb.Attribute_Armor, 8],
            [pb.Attribute_Damage_Reduction_Mod, 1],
            # [pb.Skill_DrainResistance, 11],
        ],
    ],
    [
        "arm 6 SRU",
        "+6 Armor",
        12000,
        "SRU Outfits/6",
        [
            [pb.Attribute_Armor, 6],
        ],
    ],
    [
        "arm 3 SRU",
        "+3 Armor",
        7500,
        "SRU Outfits/3",
        [
            [pb.Attribute_Armor, 3],
        ],
    ],
    [
        "arm 1 SRU",
        "+1 Armor",
        600,
        "SRU Outfits/1",
        [
            [pb.Attribute_Armor, 1],
        ],
    ],
]
skins = [
    # ID name bundle texture covers
    ["b-adept", "Adept",
     'Berlin:OutfitBerlinAdept', 'outfit_adept',
     ['hair']],
    ["b-mage", "Mage",
     'Berlin:OutfitBerlinMage', 'outfit_mage',
     ['arms', 'hair']],
    ["b-rigger", "Rigger",
     'Berlin:OutfitBerlinRigger', 'outfit_rigger',
     []],
    ["b-samurai", "Samurai",
     'Berlin:OutfitBerlinSamurai', 'outfit_samurai',
     []],
    ["b-shaman", "Shaman",
     'Berlin:OutfitBerlinShaman', 'outfit_shaman',
     []],
    ["d-cult", "cultist",
     'DisguiseBrotherhood', 'disguise_ubmember',
     []],
    ["d-gang", "ganger",
     'DisguiseGanger', 'disguise_ganger',
     []],
    ["d-janitor", "janitorial",
     'DisguiseJanitor', 'disguise_janitor',
     []],
    ["d-lonestar", "Lonestar",
     'DisguiseLonestar', 'disguise_lonestar',
     []],
    ["d-corp", "wageslave",
     'DisguiseSalaryman', 'disguise_salaryman',
     []],
    ["d-lab", "scientist",
     'DisguiseScientist', 'disguise_scientist',
     []],
    ["h-amonk", "adept Monk",
     'HongKong:OutfitAdeptMonk', 'adept_monk',
     []],
    ["h-amonk-a", "adept Monk a",
     'HongKong:OutfitAdeptMonkAlt', 'adept_monk',
     []],
    ["h-bagdeck-a", "baggy decker a",
     'HongKong:OutfitDeckerBaggyAlt', 'decker_baggy',
     []],
    ["h-bagdeck", "baggy decker",
     'HongKong:OutfitDeckerBaggy', 'decker_baggy',
     []],
    ["h-wiredeck", "wired Decker",
     'HongKong:OutfitDeckerWired', 'decker_wired',
     []],
    ["h-arcanemage-a", "arcane Mage a",
     'HongKong:OutfitMageArcaneAlt', 'mage_arcane',
     ['face']],
    ["h-arcanemage", "arcane Mage",
     'HongKong:OutfitMageArcane', 'mage_arcane',
     ['arms']],
    ["h-jumpsuitrigger-a", "rigger jumpsuit a",
     'HongKong:OutfitRiggerJumpsuitAlt', 'rigger_jumpsuit',
     []],
    ["h-jumpsuitrigger", "rigger jumpsuit",
     'HongKong:OutfitRiggerJumpsuit', 'rigger_jumpsuit',
     []],
    ["h-heavysamurai-a", "heavy samurai a",
     'HongKong:OutfitSamuraiHeavyAlt', 'samurai_heavy',
     []],
    ["h-heavysamurai", "heavy samurai",
     'HongKong:OutfitSamuraiHeavy', 'samurai_heavy',
     []],
    ["h-shadessamurai-a", "shades samurai a",
     'HongKong:OutfitSamuraiShadesAlt', 'samurai_shades',
     []],
    ["h-shadessamurai", "shades samurai",
     'HongKong:OutfitSamuraiShades', 'samurai_shades',
     []],
    ["h-ancientshaman-a", "ancient shaman a",
     'HongKong:OutfitShamanAncientAlt', 'shaman_ancient',
     []],
    ["h-ancient-shaman", "ancient shaman",
     'HongKong:OutfitShamanAncient', 'shaman_ancient',
     []],
    ["h-shamanicpriest-a", "shamanic priest a",
     'HongKong:OutfitShamanPriestAlt', 'shaman_priest',
     []],
    ["h-shamanicpriest", "shamanic priest",
     'HongKong:OutfitShamanPriest', 'shaman_priest',
     ['hair']],
    ["o-combattadept", "combat adept",
     'outfitadeptcombatvest', 'adept_combatvest',
     []],
    ["o-combattadept-a", "combat adept a",
     'outfitadeptcombatvestalt', 'adept_combatvest_alt',
     []],
    ["o-kunaiadept", "kunai adept",
     'outfitadeptkunai', 'adept_kunai',
     ['face']],
    # ["o-kunaiadept", "kunai adept",
    #  'outfitadeptkunai', 'adept_kunai',
    #  []],
    ["o-kunaiadept-a", "kunai adept a",
     'outfitadeptkunaialt', 'adept_kunai_alt',
     []],
    ["o-ninjaadept", "ninja adept",
     'outfitadeptninja', 'adept_ninja',
     ['face', 'hair']],
    ["o-starteradept", "starter adept",
     'outfitadeptstarter', 'adept_starter',
     []],
    ["o-stealthadept", "stealth adept",
     'outfitadeptstealth', 'adept_stealth',
     ['arms', 'face']],
    ["o-streetmonkadept", "street monk adept",
     'outfitadeptstreetmonk', 'adept_streetmonk',
     []],
    ["o-streetmonkadept-a", "street monk adept a",
     'outfitadeptstreetmonkalt', 'adept_streetmonk_alt',
     []],
    ["o-generic", "generic outfit",
     'outfitclasslessstarter', 'gear_classless_starter',
     []],
    ["o-fabulousdecker", "fabulous decker",
     'outfitdeckerfab', 'decker_fab',
     []],
    ["o-fedoradecker", "fedora decker",
     'outfitdeckerfedora', 'decker_fedora',
     ['hair']],
    ["o-jacketdecker", "jacketed decker",
     'outfitdeckerjacket', 'decker_jacket',
     []],
    ["o-startterdecker", "starter decker",
     'outfitdeckerstarter', 'decker_starter',
     []],
    ["o-streetdecker", "street decker",
     'outfitdeckerstreet', 'decker_street',
     []],
    # ["o-casualmage", "casual mage",
    # 'outfitmagecasual', 'mage_casual',
    #  []],
    ["o-casualmage", "casual mage",
     'outfitmagecasual', 'mage_casual',
     ['arms', 'hair']],
    ["o-darkmage", "dark mage",
     'outfitmageDark', 'mage_dark',
     ['arms', 'hair']],
    ["o-redmage", "red mage",
     'outfitmageredridinghood', 'mage_redridinghood',
     ['hair']],
    ["o-slickmage-a", "slick mage a",
     'outfitmageslickalt', 'mage_slick_alt',
     ['arms', 'hair']],
    ["o-slickmage", "slick mage a",
     'outfitmageslick', 'mage_slick',
     ['arms', 'hair']],
    ["o-startermage", "starter mage",
     'outfitmagestarter', 'mage_starter',
     ['hair']],
    ["o-tarditionalmage-a", "traditional mage a",
     'outfitmagetraditionalalt', 'mage_traditional_alt',
     []],
    ["o-traditionalmage", "traditional mage",
     'outfitmagetraditional', 'mage_traditional',
     []],
    ["o-flightsuitrigger", "flight suit rigger",
     'outfitriggerflightsuit', 'rigger_flightsuit',
     ['arms', 'hair']],
    ["o-goldenrigger-a", "golden rigger a",
     'outfitriggergoldenalt', 'rigger_golden_alt',
     []],
    ["o-goldenrigger", "golden rigger",
     'outfitriggergolden', 'rigger_golden',
     []],
    ["o-hawaiianrigger", "Hawaiian shirt rigger",
     'outfitriggerhawaiianshirt', 'rigger_hawaiian',
     []],
    ["o-starterrigger", "starter rigger",
     'outfitriggerstarter', 'rigger_starter',
     []],
    ["o-toolbeltrigger-a", "tool-belt rigger a",
     'outfitriggertoolbeltalt', 'rigger_toolbelt_alt',
     []],
    ["o-toolbeltrigger", "tool-belt rigger",
     'outfitriggertoolbelt', 'rigger_toolbelt',
     ['arms', 'hair']],
    ["o-trenchcoatrigger-a", "trenchcoat rigger a",
     'outfitriggertrenchcoatalt', 'rigger_trench_alt',
     []],
    ["o-trenchcoatrigger-a", "trenchcoat rigger",
     'outfitriggertrenchcoat', 'rigger_trench',
     []],
    ["o-bunnysamurai-a", "bunny samurai a",
     'outfitsamuraibunnyalt', 'samurai_bunny_alt',
     []],
    ["o-bunnysamurai", "bunny samurai",
     'outfitsamuraibunny', 'samurai_bunny',
     ['face']],
    ["o-militarysamurai", "military samurai a",
     'outfitsamuraimilitaryalt', 'samurai_military_alt',
     []],
    ["o-militarysamurai", "military samurai",
     'outfitsamuraimilitary', 'samurai_military',
     []],
    ["o-punksamurai", "punk samurai",
     'outfitsamuraipunk', 'samurai_punk',
     ['face']],
    ["o-startersamurai", "starter samurai",
     'outfitsamuraistarter', 'samurai_starter',
     []],
    ["o-trenchcoatsamurai-a", "trenchcoat samurai a",
     'outfitsamuraitrenchcoatalt', 'samurai_trench_alt',
     []],
    ["o-trenchcoatsamurai", "trenchcoat samurai",
     'outfitsamuraitrenchcoat', 'samurai_trench',
     []],
    ["o-pendantsamurai", "pendant samurai",
     'outfitshamanpendant', 'shaman_pendant',
     []],
    ["o-skirtedsamurai", "skirted samurai",
     'outfitshamanskirted', 'shaman_skirted',
     []],
    ["o-totemcoatsamurai", "totem-coat samurai",
     'outfitshamantotemcoat', 'shaman_totemcoat',
     []],
    ["o-urbansamurai", "urban samurai",
     'outfitshamanurban', 'shaman_urban',
     []],
    ["s-shaman", "starter shaman",
     'Seattle:Outfitshamanstarter', 'shaman_starter',
     []],
]


class IoProtoBuf:
    _typed = None
    stored = None

    def __init__(self, typical):
        if not callable(typical):
            return
        self._typed = typical
        self.reset()

    def write_text(self, outfile):
        with open(outfile, mode="w", encoding="latin-1") as fwp:
            tf.PrintMessage(out=fwp, message=self.stored)

    def reset(self):
        self.stored = self._typed()


if "__main__" == __name__:
    armor = IoProtoBuf(pb.ItemDef)
    eq_sht = IoProtoBuf(pb.EquipmentSheet)
    # print(len(skins))
    # for skin in skins:
    #     print(repr(skin[3:]))
    # sys.exit()
    for level in levels:
        eq_sht.reset()
        eq_sht.stored.unique_id = level[0]
        for skid, skin in enumerate(skins):
            try:
                eq = eq_sht.stored.equipment.add()
                eq.prefab_name = "%s %s" % (level[0], skin[0])
                armor.reset()
                st = armor.stored
                st.id = eq.prefab_name
                st.type = pb.ItemType_Outfit
                st.intended_user = pb.IntendedUser_Player
                st.gear_bundle = skin[2]
                st.outfit_texture = skin[3]
                st.store_cost = level[2]
                st.sorting_group = level[3]
                # st.prereqStrings = "Player.RACE != RACE.CREATURE"
                ui = st.uirep
                ui.name = skin[1]
                ui.description = level[1]
                for cover in skin[4]:
                    if cover in ["arms", "face", "hair"]:
                        setattr(st, "gear_covers_" + cover, True)
                    elif cover in ["-arms", "-face", "-hair"]:
                        setattr(st, "gear_covers_" + cover[1:], False)
                for effect in level[4]:
                    ef = st.equippedStatusEffects.statMods.add()
                    ef.attribute = effect[0]
                    ef.intModValue = effect[1]
                armor.write_text("%s-%s.item.txt" % (level[0], skin[0]))
                # tf.PrintMessage(out=sys.stdout, message=armor.stored)
                # print(" .")
            except Exception as e:
                print(skid)
                print(e)
                print("")
                continue
        # print(":")
        eq_sht.write_text(level[0] + '.eq_sht.txt')
    pass
