find . -name "*.jpg" -delete

find . -name "install" -type d -exec rm -r "{}" \;

find . -type d -empty -delete

tar -xf archive.tar
