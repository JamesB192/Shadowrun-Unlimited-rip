#/bin/bash


CBASE="/C/Program Files (x86)/Steam/SteamApps/common/Shadowrun Dragonfall Director's Cut"
CPAX="${CBASE}/Dragonfall_Data/StreamingAssets/ContentPacks"
COMPILE="${CBASE}/ShadowrunEditor.exe"

BASE=`pwd`
#
cd $BASE
"${COMPILE}" --cp-build --srcdir "${BASE}/SrURP" \
	--outdir "${BASE}/90120262336331d02c516479-SrURP" \
	2>&1 |sed "/compiling: /d;/copying: /d"
zip -X9vr 51f15c62336331d02c00440e-Shadowrun-Unlimited-rip 51f15c62336331d02c00440e-Shadowrun-Unlimited-rip|sed "/adding: /d"

"${COMPILE}" --cp-build --srcdir "${BASE}/rip" \
	--outdir "${BASE}/51f15c62336331d02c00440e-Shadowrun-Unlimited-rip" \
	2>&1 |sed "/compiling: /d;/copying: /d"
zip -X9vr 90120262336331d02c516479-SrURP 90120262336331d02c516479-SrURP|sed "/adding: /d"

exit
rm -rvf {rip,SrURP}/data
mkdir {rip,SrURP}/data 90120262336331d02c516479-SrURP 51f15c62336331d02c00440e-Shadowrun-Unlimited-rip -pv

rm {90120262336331d02c516479-SrURP,51f15c62336331d02c00440e-Shadowrun-Unlimited-rip}.{zip,cpz} -fv

cp -vr src/art SrURP/
cp -vr src/data/{abilities,chars,items,modes,props} SrURP/data/
cp -vr src/data/{convos,maps,scenes,stories} rip/data/

cp -v src/preview.png SrURP/
#php srurp.php > SrURP/project.cpack.txt


cp -v src/preview.png rip/
#php rip.php > rip/project.cpack.txt
exit


###	51f15c62336331d02c00440e
###	90120262336331d02c516479

#rename -v zip cpz [59]*.zip
