#!/usr/bin/env bash
set -euo pipefail

mkdir -p /opt/codedeploy/workdir
mkdir -p /var/www/html

timestamp=$(date +%Y%m%d-%H%M%S)
tar -czf /var/www/backup-html-${timestamp}.tgz \
  --exclude='wp-content/uploads' \
  --exclude='wp-config.php' \
  -C /var/www html || true

systemctl stop apache2 || true
