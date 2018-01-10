/* 
 * File:   main.cpp
 * Author: zrt1992
 *
 * Created on January 10, 2018, 10:34 AM
 */

#include <cstdlib>
#include <iostream>

using namespace std;

/*
 * 
 */
int add(int n){
    if(n==0 || n==1) {
        if(n==0) return 0;
        if(n==1) return 1;
    }else{
        return add(n-2)+add(n-1);
    }
}
int main(int argc, char** argv) {
    for(int i=0;i<10;i++){
    cout<<add(i)<<" "; //0+1+1+2+3+5
    }
    return 0;
}

