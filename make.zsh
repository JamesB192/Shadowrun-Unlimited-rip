CBASE="/home/jamesb/.local/share/Steam/SteamApps/common/Shadowrun Dragonfall Director's Cut"
CPAX="${CBASE}/Dragonfall_Data/StreamingAssets/ContentPacks/"
CPAX2="/home/jamesb/.config/Harebrained\ Schemes/Shadowrun Dragonfall/ContentPacks"
COMPILE="${CBASE}/ShadowrunEditor"

BASE=`pwd`
#cd $BASE
mkdir {rip,SrURP}/data 90120262336331d02c516479-SrURP 51f15c62336331d02c00440e-Shadowrun-Unlimited-rip -pv

rm {90120262336331d02c516479-SrURP,51f15c62336331d02c00440e-Shadowrun-Unlimited-rip}.{zip,cpz} -fv
rsync -vcr src/art SrURP/
rsync -vcr src/data/{abilities,chars,items,modes,props} SrURP/data/
rsync -vcr src/data/{convos,maps,scenes,stories} rip/data/

cp -v src/preview.png SrURP/
php srurp.php > SrURP/project.cpack.txt
(cd "${CBASE}"&&"${COMPILE}" --cp-build --srcdir "${BASE}/SrURP" \
	--packPaths "${CPAX}" \
	--packPaths "${CPAX2}" \
	--outdir "${BASE}/90120262336331d02c516479-SrURP" \
	2>&1 |sed "/compiling: /d;/copying: /d")
zip -X9vr 51f15c62336331d02c00440e-Shadowrun-Unlimited-rip 51f15c62336331d02c00440e-Shadowrun-Unlimited-rip|sed "/adding: /d"

cp -v src/preview.png rip/
php rip.php > rip/project.cpack.txt
(cd "${CBASE}"&&"${COMPILE}" --cp-build --srcdir "${BASE}/rip" \
	--packPaths "${CPAX}" \
	--packPaths "${CPAX2}" \
	--outdir "${BASE}/51f15c62336331d02c00440e-Shadowrun-Unlimited-rip" \
	2>&1 |sed "/compiling: /d;/copying: /d")
zip -X9vr 90120262336331d02c516479-SrURP 90120262336331d02c516479-SrURP|sed "/adding: /d"

rename -v zip cpz [59]*.zip

###	51f15c62336331d02c00440e
###	90120262336331d02c516479
