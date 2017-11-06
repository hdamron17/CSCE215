GPP = g++ -O2 -Wall
#GPP = g++ -Wall
#GPP = g++ -O2
#GPP = g++

A = pgm1.o

MyProg: $A
	$(GPP) -o MyProg.out $A

pgm1.o: pgm1.cpp
	$(GPP) -c pgm1.cpp
clean:
	rm *.o MyProg.out
