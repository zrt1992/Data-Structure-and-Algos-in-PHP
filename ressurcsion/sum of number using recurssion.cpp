/* 
 * File:   main.cpp
 * Author: zrt1992
 *
 * Created on July 29, 2017, 12:36 PM
 */

#include <cstdlib>
#include <iostream>

using namespace std;

/*
 * 
 */
int  sum(int,int);
int  addNumbers(int);
int main(int argc, char** argv) {
    int i=0;
    int total=addNumbers(3);
   cout <<total;
    

    return 0;
}
int addNumbers(int n)
{
    //good efficient way
    if(n != 0)
        return n + addNumbers(n-1);
    else
        return n;
}
int sum (int i,int n){
    // more space complexity it has
    int total=0;
    if(i<=n) {
        total=i+sum(i+1,n);
        
    }
    return total;
     
}


