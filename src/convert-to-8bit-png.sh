for i in $*; do
   echo "Converting $i to 8 bit PNG"
   pngquant --speed 1 --force $i --ext .png
done