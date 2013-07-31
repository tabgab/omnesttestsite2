for i in $*; do
   echo "Converting $i to 8 bit interlaced PNG"
   pngquant --speed 1 --force $i --ext .png
   pngtopnm -alpha $i > tmp-alpha.pnm
   pngtopnm $i > tmp-content.pnm
   pnmtopng -interlace -alpha tmp-alpha.pnm tmp-content.pnm > $i
   rm tmp-content.pnm
   rm tmp-alpha.pnm
done