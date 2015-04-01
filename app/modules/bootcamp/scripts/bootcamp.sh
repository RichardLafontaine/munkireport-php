#!/bin/sh

# Boot Camp detection check	
# Based on munkireport-php / app / modules / filevault_escrow / script / Sample FileVault2 Kickoff Script.sh 


# Skip manual check
if [ "$1" = 'manualcheck' ]; then
	echo 'Manual check: skipping'
	exit 0
fi

# Create cache dir if it does not exist
DIR=$(dirname $0)
mkdir -p "$DIR/cache"


# Location of our output
bootcamp_file="$DIR/cache/bootcamp_status.txt"

BOOTCAMP_DETECT=$( /usr/sbin/diskutil list | grep -c "Microsoft Basic Data" )

#
# If Microsoft Basic Data partition is
# reported by diskutil, script reports
# "Status = Installed". If no Microsoft Basic Data partition
# is reported by diskutil, script reports "Status = Not Installed".
# 

if [[ "${BOOTCAMP_DETECT}" == "1" ]]; then
      echo "Status = Installed" > "$bootcamp_file"

   else
      echo "Status = Not Installed" > "$bootcamp_file"

fi

exit 0


