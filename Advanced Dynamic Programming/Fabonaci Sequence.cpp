/* 
 * File:   main.cpp
 * Author: zrt1992
 *
 * Created on January 10, 2018, 10:34 AM
 */

#include <cstdlib>
#include <iostream>

using namespace std;

int fabonaci(int n){
    
    if(n==0) return 0;
    if(n==1) return 1;
    return fabonaci(n-1)+fabonaci(n-2);
}
int fabonaciUsingDynamicProgramming(int a){
    int subArray[a+1];
    subArray[0]=0; //fab of 1 is 0
    subArray[1]=1; //fab of 2 is 1
    for(int i=2;i<=a;i++){
        subArray[i]=subArray[i-1]+subArray[i-2];
      }
    return subArray[a];
}
int main(int argc, char** argv) {
   
   // cout<<fabonaci(10);//This is not a good approach beacuse this is 0(2^n)
    cout <<fabonaciUsingDynamicProgramming(3);
    
    return 0;
    }

