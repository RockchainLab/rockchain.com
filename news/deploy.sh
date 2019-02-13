#!/usr/bin/env bash

php="/usr/bin/php"

for entry in *.php
do
	htmlname="$(basename "$entry" .php).html"
  "$php" "$entry" > "$htmlname"
done