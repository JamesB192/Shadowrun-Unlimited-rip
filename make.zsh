CBASE="/home/jamesb/.local/share/Steam/SteamApps/common/Shadowrun Dragonfall Director's Cut"
CPAX="${CBASE}/Dragonfall_Data/StreamingAssets/ContentPacks/"
COMPILE="${CBASE}/ShadowrunEditor"

BASE=`pwd`
#cd $BASE
mkdir {rip,SrURP}/data 90120262336331d02c516479-SrURP 51f15c62336331d02c00440e-Shadowrun-Unlimited-rip -pv

rsync -vcr art SrURP/
rsync -vcr data/{abilities,chars,items,modes,props} SrURP/data/
rsync -vcr data/{convos,maps,scenes,stories} rip/data/

cp -v preview.png SrURP/
cp -v preview.png rip/

php srurp.php > SrURP/project.cpack.txt
php rip.php > rip/project.cpack.txt

"${COMPILE}" --packPaths "${CPAX}" --cp-build --srcdir "${BASE}/SrURP" --outdir "${BASE}/90120262336331d02c516479-SrURP" 
"${COMPILE}" --packPaths "${CPAX}" --cp-build --srcdir "${BASE}/rip" --outdir "${BASE}/51f15c62336331d02c00440e-Shadowrun-Unlimited-rip"

zip -X9vr 51f15c62336331d02c00440e-Shadowrun-Unlimited-rip 51f15c62336331d02c00440e-Shadowrun-Unlimited-rip
zip -X9vr 90120262336331d02c516479-SrURP 90120262336331d02c516479-SrURP

rename -v zip cpz [59]*.zip

###	51f15c62336331d02c00440e
###	90120262336331d02c516479
