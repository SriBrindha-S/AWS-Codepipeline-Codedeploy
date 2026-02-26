#!/usr/bin/env bash
set -euo pipefail

systemctl start apache2 || true
systemctl reload apache2 || true
