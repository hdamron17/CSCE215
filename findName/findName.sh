#! /bin/sh

STU_FILE=/acct/common/CSCE215-Fall17
STU=$1

if ! [ "$#" = 1 ]; then
  echo "Incorrect number of arguments.";
  exit 1;
fi

for line in $(cat $STU_FILE | grep $STU); do
  id=$(echo "$line" | cut -d',' -f4);

  if [ "$id" = "$STU" ]; then
    found="t";
    fname=$(echo "$line" | cut -d',' -f1 | tr [a-z] [A-Z]);
    minit=$(echo "$line" | cut -d',' -f2 | cut -c1 | tr [a-z] [A-Z]);
    lname=$(echo "$line" | cut -d',' -f3 | tr [a-z] [A-Z]);
    echo "$fname $minit $lname";
  fi
done

if [ -z "$found" ]; then
  echo "Sorry that person is not in CSCE215 this semester";
fi
