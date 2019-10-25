#!/bin/bash

set -eo pipefail

if [[ "$CIRCLE_BRANCH" == "master" ]] ; then
  # Use dev as the environment.
	TERMINUS_ENV="dev"
elif [[ "$CIRCLE_BRANCH" == "develop" ]] ; then
  # Use develop as the environment.
	TERMINUS_ENV="develop"
fi

# https://github.com/pantheon-systems/docker-build-tools-ci/blob/6.x/scripts/set-environment
. /build-tools-ci/scripts/set-environment
