/* 
 * File:   main.cpp
 * Author: zrt1992
 *
 * Created on January 17, 2018, 1:33 PM
 */

#include <cstdlib>
#include <iostream>
using namespace std;

/*
 * 
 */
int main(int argc, char** argv) {
    char a[]{1,2,3,4};
    int n=sizeof(a);
    for(int i=0;i<n-1;i++){
        int sum=0;
        for(int j=i;j<=n-1;j++){
            sum=0;            
            for(int t=i;t<=j;t++){
                
                sum=sum+a[t];
              
            }
             cout<<sum<<" ";
            cout<<'\n';
        }
    }
    
    
        
    return 0;
}

