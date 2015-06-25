CBASE="/home/jamesb/.local/share/Steam/SteamApps/common/Shadowrun Dragonfall Director's Cut"
CPAX="${CBASE}/Dragonfall_Data/StreamingAssets/ContentPacks"
COMPILE="${CBASE}/ShadowrunEditor"

BASE=`pwd`
#cd $BASE
mkdir {rip,SrURP}/data 90120262336331d02c516479-SrURP 51f15c62336331d02c00440e-Shadowrun-Unlimited-rip -pv

rm {90120262336331d02c516479-SrURP,51f15c62336331d02c00440e-Shadowrun-Unlimited-rip}.{zip,cpz} -fv
rsync -vcr src/art SrURP/
rsync -vcr src/data/{abilities,chars,items,modes,props} SrURP/data/
rsync -vcr src/data/{convos,maps,scenes,stories} rip/data/

ls -la "${CPAX}"/*
cp -v src/preview.png SrURP/
php srurp.php > SrURP/project.cpack.txt
"${COMPILE}" --cp-build --srcdir "${BASE}/SrURP" \
	--packPaths "${CPAX}"/shadowrun_core/project.cpack.bytes \
	--packPaths "${CPAX}"/seattle/project.cpack.bytes \
	--packPaths "${CPAX}"/dead_man_switch/project.cpack.bytes \
	--packPaths "${CPAX}"/berlin/project.cpack.bytes \
	--packPaths "${CPAX}"/DragonfallExtended/project.cpack.bytes \
	--outdir "${BASE}/90120262336331d02c516479-SrURP" \
	2>&1 |sed "/compiling: /d;/copying: /d"
zip -X9vr 51f15c62336331d02c00440e-Shadowrun-Unlimited-rip 51f15c62336331d02c00440e-Shadowrun-Unlimited-rip|sed "/adding: /d"

cp -v src/preview.png rip/
php rip.php > rip/project.cpack.txt
"${COMPILE}" --cp-build --srcdir "${BASE}/rip" \
	--packPaths "${CPAX}"/shadowrun_core \
	--packPaths "${CPAX}"/seattle \
	--packPaths "${CPAX}"/dead_man_switch \
	--packPaths "${CPAX}"/berlin \
	--packPaths "${CPAX}"/DragonfallExtended \
	--outdir "${BASE}/51f15c62336331d02c00440e-Shadowrun-Unlimited-rip" \
	2>&1 |sed "/compiling: /d;/copying: /d"
zip -X9vr 90120262336331d02c516479-SrURP 90120262336331d02c516479-SrURP|sed "/adding: /d"

rename -v zip cpz [59]*.zip

###	51f15c62336331d02c00440e
###	90120262336331d02c516479
