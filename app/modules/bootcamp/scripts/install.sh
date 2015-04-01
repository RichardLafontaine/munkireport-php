#!/bin/bash

# Boot Camp controller
CTL="${BASEURL}index.php?/module/bootcamp/"

# Get the scripts in the proper directories
${CURL} "${CTL}get_script/bootcamp.sh" -o "${MUNKIPATH}preflight.d/bootcamp.sh"

# Check exit status of curl
if [ $? = 0 ]; then
	# Make executable
	chmod a+x "${MUNKIPATH}preflight.d/bootcamp.sh"

	# Set preference to include this file in the preflight check
	defaults write "${PREFPATH}" ReportItems -dict-add bootcamp "${CACHEPATH}bootcamp_status.txt"

else
	echo "Failed to download all required components!"
	rm -f "${MUNKIPATH}preflight.d/bootcamp.sh"

	# Signal that we had an error
	ERR=1
fi


