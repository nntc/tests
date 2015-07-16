#!/bin/sh
[[ -z $1 ]] && { echo "Первым параметром скрипту должно быть передано исходное изображение"; exit 1; } 
echo "Сколько копий изображения хотите?"
read copies
_dir_=$1"_copies"
mkdir $_dir_ 

for i in $(seq 1 $copies)
do
	cp $1 $_dir_"/$i-$1"
	/usr/bin/mogrify -pointsize 120 -fill red -gravity SouthWest -draw "text 20,20 \"$i-$1\"" $_dir_"/$i-$1"
done
