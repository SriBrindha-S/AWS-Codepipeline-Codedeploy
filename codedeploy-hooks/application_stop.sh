#!/usr/bin/env bash
set -euo pipefail
# Gracefully stop web service if running; ignore errors
systemctl stop apache2 || true
