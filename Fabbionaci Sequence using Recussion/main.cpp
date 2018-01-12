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
int recursive(int n,int index,int b[]){
    if(n==b[index] || index==0) {
        if(n==b[index] )return  index; 
        if(index==0) return 33;
        
    }   
    else{
        //cout<<'lol';
       return recursive(n,index-1,b);
    }
    
}
int fabonaci(int n){
    
    if(n==0) return 0;
    if(n==1) return 1;
    return fabonaci(n-1)+fabonaci(n-2);
}
int add(int n){
    if(n==0 || n==1) {
        if(n==0) return 0;
        if(n==1) return 1;
    }else{
        cout<<n<<" ";
        return add(n-2)+add(n-1); 
       
    }
}
int main(int argc, char** argv) {
    int a[]={1,4,5,6,7,6};
    cout<<fabonaci(4);
    return 0;
    }

