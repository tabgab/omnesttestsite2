#!/bin/sh
# round-image input output
r=4
for i in $* ; do
  rm -f $i.bak
  cp $i $i.bak || exit 1
  convert $i \
     \( +clone  -alpha extract \
        -draw "fill black polygon 0,0 0,$r $r,0 fill white circle $r,$r $r,0" \
        \( +clone -flip \) -compose Multiply -composite \
        \( +clone -flop \) -compose Multiply -composite \
     \) -alpha off -compose CopyOpacity -composite  $i || exit 1
done