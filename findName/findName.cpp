#include <iostream>
#include <string>
#include <cstdlib>
using namespace std;

int main (int argc, char* argv[]) {
  string cmd = "./findName.sh";
  for (size_t i = 1; i < argc; i++) {
    cmd += " ";
    cmd += argv[i];
  }
  cmd += "\0";
  system(cmd.c_str());
  return 0;
}
