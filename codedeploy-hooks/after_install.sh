#!/usr/bin/env bash
set -euo pipefail

WORK=/opt/codedeploy/workdir
DEST="/var/www/html"

# Prefer /site if it exists, otherwise sync from bundle root
if [ -d "${WORK}/site" ]; then
  SRC="${WORK}/site"
else
  SRC="${WORK}"
fi

# Ensure destination exists
mkdir -p "${DEST}"

# Rsync updated code but DO NOT overwrite uploads or wp-config.php.
# Also exclude deployment files if syncing from bundle root.
rsync -a --delete \
  --exclude 'wp-content/uploads/' \
  --exclude 'wp-config.php' \
  --exclude 'codedeploy-hooks/' \
  --exclude 'appspec.yml' \
  "${SRC}/" "${DEST}/"

# Permissions
find "${DEST}" -type d -exec chmod 755 {} \;
find "${DEST}" -type f -exec chmod 644 {} \;
chown -R www-data:www-data "${DEST}"
