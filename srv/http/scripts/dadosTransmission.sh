#!/bin/bash

echo "<tr style=\"text-align: left;\"><th>ID</th> <th>Done</th> <th>Have</th> <th>ETA</th> <th>Up</th> <th>Down</th> <th>Ratio</th> <th>Status</th> <th>Name</th></tr>"

transmission-remote -l | grep -v "ID\|Sum" | sed 's/ M/M/g' | sed 's/ k/k/g' | sed 's/ G/G/g' | sed 's/ \& /\&/g' | awk '{print "<tr><td>"$1"</td><td>"$2"</td><td>"$3"</td><td>"$4"</td><td>"$5"</td><td>"$6"</td><td>"$7"</td><td>"$8"</td><td>"$9, $10, $11, $12, $13, $14"</td></tr>"}'
