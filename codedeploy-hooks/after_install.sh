#!/usr/bin/env bash
set -euo pipefail

WORK=/opt/codedeploy/workdir
SRC="${WORK}/site"
DEST="/var/www/html"

rsync -a --delete \
  --exclude 'wp-content/uploads/' \
  --exclude 'wp-config.php' \
  "${SRC}/" "${DEST}/"

find "${DEST}" -type d -exec chmod 755 {} \;
find "${DEST}" -type f -exec chmod 644 {} \;
chown -R www-data:www-data "${DEST}"
