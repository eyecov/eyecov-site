#!/usr/bin/env bash
set -euo pipefail

# Usage: DEPLOY_HOST=user@host DEPLOY_PATH=/var/www/eyecov ./deploy.sh
: "${DEPLOY_HOST:?DEPLOY_HOST is required (e.g. user@yourhost.com)}"
: "${DEPLOY_PATH:?DEPLOY_PATH is required (e.g. /var/www/eyecov)}"

echo "Building assets..."
npm run build

echo "Syncing to ${DEPLOY_HOST}:${DEPLOY_PATH}..."
rsync -avz --delete \
    --exclude='.git' \
    --exclude='node_modules' \
    --exclude='.env' \
    --exclude='storage/logs/*' \
    --exclude='storage/framework/cache/*' \
    --exclude='storage/framework/sessions/*' \
    --exclude='storage/framework/views/*' \
    ./ "${DEPLOY_HOST}:${DEPLOY_PATH}/"

echo "Running post-deploy commands..."
ssh "${DEPLOY_HOST}" "cd ${DEPLOY_PATH} && php artisan config:cache && php artisan route:cache && php artisan view:cache"

echo "Deploy complete."
