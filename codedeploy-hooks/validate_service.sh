#!/usr/bin/env bash
set -euo pipefail

curl -fsS http://127.0.0.1/ > /dev/null || {
  echo "Health check failed"
  exit 1
}

echo "Health check OK"
