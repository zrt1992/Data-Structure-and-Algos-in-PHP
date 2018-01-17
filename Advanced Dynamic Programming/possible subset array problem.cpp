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
    int a[4]={1,2,3,4};
    int n=4;
    for(int i=0;i<n-1;i++){
        
        for(int j=i;j<=n-1;j++){
                cout<<"{";    
            for(int t=i;t<=j;t++){
                
               cout<<a[t];
                       if(t!=j){
                      cout<< ",";
                       }
              
            }
            
            cout<<"}"<<'\n';
        }
    }
    
    
        
    return 0;
}

