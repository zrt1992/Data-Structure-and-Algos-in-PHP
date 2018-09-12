/* 
 * File:   main.cpp
 * Author: zrt1992
 *
 * Created on July 29, 2017, 11:08 PM
 */
#include <cstdlib>
#include <iostream>

using namespace std;
struct Node {
    Node *next = NULL;
    int data;
};
/*
 * 
 */
int main(int argc, char** argv) {
    
//    Node *temp = new Node();
//    
//    temp->data=9;
//    
//    cout<<temp->data;
    int i=0,j=0;
    int n=10;
    for(i=0;i<=n;i++){
        for(j=0;j<=n;j++){
            if(i==j) cout<<"*";
            else cout<<" ";
            if((n-i)==(j)) cout<<"*";
        }
        cout<<"\n";
    }
    
    
    return 0;
}

