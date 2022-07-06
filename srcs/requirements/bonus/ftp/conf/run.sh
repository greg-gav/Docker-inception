#!/bin/bash

set -e

vsftpd_stop() {
  echo "Received SIGINT or SIGTERM. Shutting down vsftpd"
  # Set TERM
  kill -TERM "${pid}"
  # Wait for exit
  wait "${pid}"
  # All done.
  echo "Done"
}

if [[ "${1}" == "vsftpd" ]]; then
  trap vsftpd_stop SIGINT SIGTERM
  echo "Running ${*}"
  "${@}" &
  pid="${!}"
  wait "${pid}" && exit ${?}
else
  exec "${@}"
fi