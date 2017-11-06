
# makefile to build a program

hello:	hello.o
	g++ hello.o -o hello.out

# main 
hello.o:	hello.cpp
	g++ -c hello.cpp

clean:
	/bin/rm -f hello.out *.o

backup:
	tar cvf archive/hello.`date +%j`.tar *.cpp *.h Makefile readme hello.out
	gzip *.tar
